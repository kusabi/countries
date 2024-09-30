<?php

namespace Kusabi\Countries\Meta\RestCountries;

use Exception;

/**
 * Fetches country data from https://restcountries.com
 *
 * @see https://restcountries.com
 * @see https://restcountries.com/v3.1/all
 */
class Fetcher
{
    /**
     * Get a list of all countries from source
     *
     * @throws Exception
     *
     * @return array
     *
     */
    public function all(): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://restcountries.com/v3.1/all');
        $result = curl_exec($ch);
        curl_close($ch);

        $parser = new Parser();
        return $parser->parse($result);
    }
}
