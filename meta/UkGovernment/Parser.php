<?php

namespace Kusabi\Countries\Meta\UkGovernment;

use Exception;
use Kusabi\Countries\Country;

/**
 * Parses country data from https://www.gov.uk/government/publications/geographical-names-and-information
 *
 * @see https://www.gov.uk/government/publications/geographical-names-and-information
 * @see https://assets.publishing.service.gov.uk/media/65fd8475f1d3a0001132adf4/FCDO_Geographical_Names_Index_March_2024.csv
 */
class Parser
{
    /**
     * Parse the curl response
     *
     * @param string $response
     *
     * @throws Exception
     *
     * @return array<int, Country>
     */
    public function parse(string $response): array
    {
        $results = [];

        $lines = explode("\n", $response);
        $header = array_map('trim', str_getcsv(array_shift($lines)));

        foreach ($lines as $line) {
            $parts = array_map('trim', str_getcsv($line));

            if (count($header) !== count($parts)) {
                continue;
            }

            $csv = array_combine($header, $parts);

            $results[] = new Country($csv['Name'], $csv['Country code'], '', '', '', '', '', '', [
                $csv['Name'],
                $csv['Official name'],
            ]);
        }

        return $results;
    }
}
