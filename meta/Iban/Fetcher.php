<?php

namespace Kusabi\Countries\Meta\Iban;

use Exception;
use Kusabi\Countries\Country;

/**
 * Fetches country data from https://www.iban.com/country-codes
 *
 * @see https://www.iban.com/country-codes
 */
class Fetcher
{
    /**
     * Get a list of all countries from source
     *
     * @throws Exception
     *
     * @return array<int, Country>
     *
     */
    public function all(): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://www.iban.com/country-codes');
        $result = curl_exec($ch);
        curl_close($ch);

        $parser = new Parser();
        return $parser->parse($result);
    }
}
