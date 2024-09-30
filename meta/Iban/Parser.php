<?php

namespace Kusabi\Countries\Meta\Iban;

use Exception;
use Kusabi\Countries\Country;

/**
 * Parses country data from https://www.iban.com/country-codes
 *
 * @see https://www.iban.com/country-codes
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
        $document = new \DOMDocument();
        @$document->loadHTML($response);

        $results = [];

        $table = $document->getElementById('myTable');
        $rows = $table->getElementsByTagName('tr');
        foreach ($rows as $index => $row) {
            if ($index === 0) {
                continue;
            }

            $cells = $row->getElementsByTagName('td');
            $name = $cells[0]->textContent;
            $alpha2 = $cells[1]->textContent;
            $alpha3 = $cells[2]->textContent;
            $numeric = $cells[3]->textContent;

            $results[] = new Country($name, $alpha2, $alpha3, $numeric, '', '', '', '', [$name]);
        }
        return $results;
    }
}
