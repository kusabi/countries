<?php

namespace Kusabi\Countries\Meta\UkGovernment;

use Exception;
use Kusabi\Countries\Country;

/**
 * Fetches country data from https://www.gov.uk/government/publications/geographical-names-and-information
 *
 * @see https://www.gov.uk/government/publications/geographical-names-and-information
 * @see https://assets.publishing.service.gov.uk/media/65fd8475f1d3a0001132adf4/FCDO_Geographical_Names_Index_March_2024.csv
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
        curl_setopt($ch, CURLOPT_URL, 'https://assets.publishing.service.gov.uk/media/65fd8475f1d3a0001132adf4/FCDO_Geographical_Names_Index_March_2024.csv');
        $result = curl_exec($ch);
        curl_close($ch);

        $parser = new Parser();
        return $parser->parse($result);
    }
}
