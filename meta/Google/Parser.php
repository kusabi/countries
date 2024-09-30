<?php

namespace Kusabi\Countries\Meta\Google;

use DOMDocument;
use DOMElement;
use Exception;
use Kusabi\Countries\Country;

/**
 * Parses country data from https://developers.google.com/hotels/hotel-prices/dev-guide/country-codes
 *
 * @see https://developers.google.com/hotels/hotel-prices/dev-guide/country-codes
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
        $document = new DOMDocument();
        @$document->loadHTML($response);

        $results = [];

        $table = $document->getElementsByTagName('table')->item(0);
        if (!$table instanceof DOMElement) {
            return [];
        }

        $rows = $table->getElementsByTagName('tr');
        foreach ($rows as $index => $row) {
            if ($index === 0) {
                continue;
            }

            $cells = $row->getElementsByTagName('td');

            if (!$cells->length) {
                continue;
            }

            $alpha2 = $cells[0]->textContent;
            $name = $cells[1]->textContent;

            $results[] = new Country($name, $alpha2, '', '', '', '', '', '', [$name]);
        }
        return $results;
    }
}
