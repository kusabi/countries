<?php

namespace Kusabi\Countries\Meta\RestCountries;

use DateTime;
use DateTimeZone;
use Exception;
use Kusabi\Countries\Country;

/**
 * Parses country data from https://restcountries.com
 *
 * @see https://restcountries.com
 * @see https://restcountries.com/v3.1/all
 */
class Parser
{
    /**
     * Parse the raw curl response
     *
     * @param string $response
     *
     * @throws Exception
     *
     * @return array<int, Country>
     *
     */
    public function parse(string $response): array
    {
        $json = json_decode($response, true);

        return array_map(function (array $entry) {
            return $this->parseEntry($entry);
        }, $json);
    }

    /**
     * Parse a single countries json data
     *
     * @param array $json
     *
     * @throws Exception
     *
     * @return Country
     */
    protected function parseEntry(array $json): Country
    {
        $commonName = $json['name']['common'];
        $officialName = $json['name']['official'];
        $alpha2 = $json['cca2'];
        $alpha3 = $json['cca3'];
        $numeric = $json['ccn3'] ?? 'Unknown';
        $continent = reset($json['continents']);
        $capital = isset($json['capital']) ? reset($json['capital']) : 'Unknown';
        $phone = isset($json['idd']['root']) ? str_replace('+', '', $json['idd']['root'].implode('', $json['idd']['suffixes'])) : 'Unknown';

        $alternativeNames = [
            $commonName,
            $officialName,
        ];
        foreach ($json['name']['nativeName'] ?? [] as $values) {
            foreach ($values as $value) {
                $alternativeNames[] = $value;
            }
        }
        foreach ($json['altSpellings'] ?? [] as $value) {
            $alternativeNames[] = $value;
        }
        $alternativeNames = array_unique($alternativeNames);

        // Get the timezone name
        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $alpha2)[0] ?? false;
        if ($timezone === false) {
            $timezone = 'Unknown';
            foreach ($json['timezones'] ?? [] as $tz) {
                if ($converted = $this->timezoneFromOffset($tz)) {
                    $timezone = $converted;
                    break;
                }
            }
        }

        return new Country($commonName, $alpha2, $alpha3, $numeric, $continent, $capital, $timezone, $phone, $alternativeNames);
    }

    /**
     * Generate a timezone name from a timezone offset
     *
     * @param string $offsetString
     *
     * @throws Exception
     *
     * @return string|null
     */
    protected function timezoneFromOffset(string $offsetString): ?string
    {
        if ($offsetString === 'UTC') {
            $offsetString = 'UTC+00:00';
        }
        // Parse the offset string to extract hours and minutes
        preg_match('/UTC([+-]\d{2}):(\d{2})/', $offsetString, $matches);

        if (count($matches) !== 3) {
            throw new Exception('Invalid UTC offset format. '.$offsetString);
        }

        $hours = (int) $matches[1];
        $minutes = (int) $matches[2];

        // Calculate the total offset in seconds
        $offsetInSeconds = $hours * 3600 + $minutes * 60;

        // Get current time
        $currentTime = new DateTime('now', new DateTimeZone('UTC'));

        // Loop through all timezones
        foreach (DateTimeZone::listIdentifiers() as $timezone) {
            $tz = new DateTimeZone($timezone);
            $timezoneOffset = $tz->getOffset($currentTime);
            if ($timezoneOffset === $offsetInSeconds) {
                return $timezone;
            }
        }

        return null; // No matching timezone found
    }
}
