<?php

namespace Kusabi\Countries;

use ArrayAccess;
use ArrayIterator;
use IteratorAggregate;
use RuntimeException;

class Countries implements ArrayAccess, IteratorAggregate
{
    /**
     * A map of country codes.
     *
     * @var array<string, array{name: string, alpha2: string, alpha3: string, numeric: string, continent: string, capital: string, timezone: string, phone: string, alternate_names: array<string>}>
     *
     * @see https://www.iban.com/country-codes
     * @see https://countrycode.org/countryCode/downloadCountryCodes
     * @see https://developers.google.com/hotels/hotel-prices/dev-guide/country-codes
     * @see https://www.gov.uk/government/publications/geographical-names-and-information
     */
    protected static $map = [
        'GS' => [
            'name' => 'South Georgia',
            'alpha2' => 'GS',
            'alpha3' => 'SGS',
            'numeric' => '239',
            'continent' => 'Antarctica',
            'capital' => 'King Edward Point',
            'timezone' => 'Atlantic/South_Georgia',
            'phone' => '500',
            'alternate_names' => [
                'GS',
                'South Georgia',
                'South Georgia & South Sandwich Islands',
                'South Georgia and the South Sandwich Islands'
            ]
        ],
        'GD' => [
            'name' => 'Grenada',
            'alpha2' => 'GD',
            'alpha3' => 'GRD',
            'numeric' => '308',
            'continent' => 'North America',
            'capital' => "St. George's",
            'timezone' => 'America/Grenada',
            'phone' => '1473',
            'alternate_names' => [
                'GD',
                'Grenada'
            ]
        ],
        'CH' => [
            'name' => 'Switzerland',
            'alpha2' => 'CH',
            'alpha3' => 'CHE',
            'numeric' => '756',
            'continent' => 'Europe',
            'capital' => 'Bern',
            'timezone' => 'Europe/Zurich',
            'phone' => '41',
            'alternate_names' => [
                'CH',
                'Confederazione Svizzera',
                'Confederaziun svizra',
                'Confédération suisse',
                'Schweiz',
                'Schweizerische Eidgenossenschaft',
                'Suisse',
                'Svizra',
                'Svizzera',
                'Swiss Confederation',
                'Switzerland',
                'The Swiss Confederation'
            ]
        ],
        'SL' => [
            'name' => 'Sierra Leone',
            'alpha2' => 'SL',
            'alpha3' => 'SLE',
            'numeric' => '694',
            'continent' => 'Africa',
            'capital' => 'Freetown',
            'timezone' => 'Africa/Freetown',
            'phone' => '232',
            'alternate_names' => [
                'Republic of Sierra Leone',
                'SL',
                'Sierra Leone',
                'The Republic of Sierra Leone'
            ]
        ],
        'HU' => [
            'name' => 'Hungary',
            'alpha2' => 'HU',
            'alpha3' => 'HUN',
            'numeric' => '348',
            'continent' => 'Europe',
            'capital' => 'Budapest',
            'timezone' => 'Europe/Budapest',
            'phone' => '36',
            'alternate_names' => [
                'HU',
                'Hungary',
                'Magyarország'
            ]
        ],
        'TW' => [
            'name' => 'Taiwan',
            'alpha2' => 'TW',
            'alpha3' => 'TWN',
            'numeric' => '158',
            'continent' => 'Asia',
            'capital' => 'Taipei',
            'timezone' => 'Asia/Taipei',
            'phone' => '886',
            'alternate_names' => [
                'Chinese Taipei',
                'Republic of China',
                'Republic of China (Taiwan)',
                'TW',
                'Taiwan',
                'Taiwan (Province of China)',
                'Táiwān',
                'Zhōnghuá Mínguó',
                '中華民國',
                '台灣'
            ]
        ],
        'WF' => [
            'name' => 'Wallis and Futuna',
            'alpha2' => 'WF',
            'alpha3' => 'WLF',
            'numeric' => '876',
            'continent' => 'Oceania',
            'capital' => 'Mata-Utu',
            'timezone' => 'Pacific/Wallis',
            'phone' => '681',
            'alternate_names' => [
                'Territoire des îles Wallis et Futuna',
                'Territory of the Wallis and Futuna Islands',
                'WF',
                'Wallis & Futuna',
                'Wallis and Futuna',
                'Wallis et Futuna'
            ]
        ],
        'BB' => [
            'name' => 'Barbados',
            'alpha2' => 'BB',
            'alpha3' => 'BRB',
            'numeric' => '052',
            'continent' => 'North America',
            'capital' => 'Bridgetown',
            'timezone' => 'America/Barbados',
            'phone' => '1246',
            'alternate_names' => [
                'BB',
                'Barbados'
            ]
        ],
        'PN' => [
            'name' => 'Pitcairn Islands',
            'alpha2' => 'PN',
            'alpha3' => 'PCN',
            'numeric' => '612',
            'continent' => 'Oceania',
            'capital' => 'Adamstown',
            'timezone' => 'Pacific/Pitcairn',
            'phone' => '64',
            'alternate_names' => [
                'PN',
                'Pitcairn',
                'Pitcairn Group of Islands',
                'Pitcairn Henderson Ducie and Oeno Islands',
                'Pitcairn Islands'
            ]
        ],
        'CI' => [
            'name' => 'Ivory Coast',
            'alpha2' => 'CI',
            'alpha3' => 'CIV',
            'numeric' => '384',
            'continent' => 'Africa',
            'capital' => 'Yamoussoukro',
            'timezone' => 'Africa/Abidjan',
            'phone' => '225',
            'alternate_names' => [
                'CI',
                "Côte d'Ivoire",
                'Ivory Coast',
                "Republic of Côte d'Ivoire",
                "République de Côte d'Ivoire",
                'The Republic of C?te D?Ivoire'
            ]
        ],
        'TN' => [
            'name' => 'Tunisia',
            'alpha2' => 'TN',
            'alpha3' => 'TUN',
            'numeric' => '788',
            'continent' => 'Africa',
            'capital' => 'Tunis',
            'timezone' => 'Africa/Tunis',
            'phone' => '216',
            'alternate_names' => [
                'Republic of Tunisia',
                'TN',
                'Tunisia',
                'Tunisian Republic',
                'al-Jumhūriyyah at-Tūnisiyyah',
                'الجمهورية التونسية',
                'تونس'
            ]
        ],
        'IT' => [
            'name' => 'Italy',
            'alpha2' => 'IT',
            'alpha3' => 'ITA',
            'numeric' => '380',
            'continent' => 'Europe',
            'capital' => 'Rome',
            'timezone' => 'Europe/Rome',
            'phone' => '39',
            'alternate_names' => [
                'IT',
                'Italia',
                'Italian Republic',
                'Italy',
                'Repubblica italiana',
                'The Italian Republic'
            ]
        ],
        'BJ' => [
            'name' => 'Benin',
            'alpha2' => 'BJ',
            'alpha3' => 'BEN',
            'numeric' => '204',
            'continent' => 'Africa',
            'capital' => 'Porto-Novo',
            'timezone' => 'Africa/Porto-Novo',
            'phone' => '229',
            'alternate_names' => [
                'BJ',
                'Benin',
                'Bénin',
                'Republic of Benin',
                'République du Bénin',
                'The Republic of Benin'
            ]
        ],
        'ID' => [
            'name' => 'Indonesia',
            'alpha2' => 'ID',
            'alpha3' => 'IDN',
            'numeric' => '360',
            'continent' => 'Asia',
            'capital' => 'Jakarta',
            'timezone' => 'Asia/Jakarta',
            'phone' => '62',
            'alternate_names' => [
                'ID',
                'Indonesia',
                'Republic of Indonesia',
                'Republik Indonesia',
                'The Republic of Indonesia'
            ]
        ],
        'CV' => [
            'name' => 'Cape Verde',
            'alpha2' => 'CV',
            'alpha3' => 'CPV',
            'numeric' => '132',
            'continent' => 'Africa',
            'capital' => 'Praia',
            'timezone' => 'Atlantic/Cape_Verde',
            'phone' => '238',
            'alternate_names' => [
                'CV',
                'Cabo Verde',
                'Cape Verde',
                'Republic of Cabo Verde',
                'República de Cabo Verde',
                'The Republic of Cabo Verde'
            ]
        ],
        'KN' => [
            'name' => 'Saint Kitts and Nevis',
            'alpha2' => 'KN',
            'alpha3' => 'KNA',
            'numeric' => '659',
            'continent' => 'North America',
            'capital' => 'Basseterre',
            'timezone' => 'America/St_Kitts',
            'phone' => '1869',
            'alternate_names' => [
                'Federation of Saint Christopher and Nevis',
                'KN',
                'Saint Kitts and Nevis',
                'St Kitts and Nevis',
                'St. Kitts & Nevis',
                'The Federation of Saint Christopher and Nevis'
            ]
        ],
        'LA' => [
            'name' => 'Laos',
            'alpha2' => 'LA',
            'alpha3' => 'LAO',
            'numeric' => '418',
            'continent' => 'Asia',
            'capital' => 'Vientiane',
            'timezone' => 'Asia/Vientiane',
            'phone' => '856',
            'alternate_names' => [
                'LA',
                'Lao',
                "Lao People's Democratic Republic",
                "Lao People's Democratic Republic (the)",
                'Laos',
                'Sathalanalat Paxathipatai Paxaxon Lao',
                "The Lao People's Democratic Republic",
                'ສປປລາວ',
                'ສາທາລະນະ ຊາທິປະໄຕ ຄົນລາວ ຂອງ'
            ]
        ],
        'BQ' => [
            'name' => 'Caribbean Netherlands',
            'alpha2' => 'BQ',
            'alpha3' => 'BES',
            'numeric' => '535',
            'continent' => 'North America',
            'capital' => 'Kralendijk',
            'timezone' => 'America/Kralendijk',
            'phone' => '599',
            'alternate_names' => [
                'BES islands',
                'Bonaire, Sint Eustatius and Saba',
                'Bonaire, Sint Eustatius en Saba',
                'Boneiru, Sint Eustatius y Saba',
                'Caribbean Netherlands',
                'Caribisch Nederland'
            ]
        ],
        'UG' => [
            'name' => 'Uganda',
            'alpha2' => 'UG',
            'alpha3' => 'UGA',
            'numeric' => '800',
            'continent' => 'Africa',
            'capital' => 'Kampala',
            'timezone' => 'Africa/Kampala',
            'phone' => '256',
            'alternate_names' => [
                'Jamhuri ya Uganda',
                'Republic of Uganda',
                'The Republic of Uganda',
                'UG',
                'Uganda'
            ]
        ],
        'AD' => [
            'name' => 'Andorra',
            'alpha2' => 'AD',
            'alpha3' => 'AND',
            'numeric' => '020',
            'continent' => 'Europe',
            'capital' => 'Andorra la Vella',
            'timezone' => 'Europe/Andorra',
            'phone' => '376',
            'alternate_names' => [
                'AD',
                'Andorra',
                'Principality of Andorra',
                "Principat d'Andorra",
                'The Principality of Andorra'
            ]
        ],
        'BI' => [
            'name' => 'Burundi',
            'alpha2' => 'BI',
            'alpha3' => 'BDI',
            'numeric' => '108',
            'continent' => 'Africa',
            'capital' => 'Gitega',
            'timezone' => 'Africa/Bujumbura',
            'phone' => '257',
            'alternate_names' => [
                'BI',
                'Burundi',
                'Republic of Burundi',
                "Republika y'Uburundi",
                "Republika y'Uburundi ",
                'République du Burundi',
                'The Republic of Burundi',
                'Uburundi'
            ]
        ],
        'ZA' => [
            'name' => 'South Africa',
            'alpha2' => 'ZA',
            'alpha3' => 'ZAF',
            'numeric' => '710',
            'continent' => 'Africa',
            'capital' => 'Pretoria',
            'timezone' => 'Africa/Johannesburg',
            'phone' => '27',
            'alternate_names' => [
                'Aforika Borwa',
                'Afrika Borwa',
                'Afrika Dzonga',
                'Afrika-Borwa',
                'Afurika Tshipembe',
                'IRiphabhulikhi yeNingizimu Afrika',
                'IRiphabliki yaseMzantsi Afrika',
                'IRiphabliki yaseNingizimu Afrika',
                'IRiphabliki yeSewula Afrika',
                'Mzantsi Afrika',
                'Ningizimu Afrika',
                'RSA',
                'Rephaboliki ya Aforika Borwa',
                'Rephaboliki ya Afrika Borwa',
                'Rephaboliki ya Afrika-Borwa ',
                'Republic of South Africa',
                'Republiek van Suid-Afrika',
                'Riphabliki ra Afrika Dzonga',
                'Riphabuḽiki ya Afurika Tshipembe',
                'Sewula Afrika',
                'South Africa',
                'Suid-Afrika',
                'The Republic of South Africa',
                'ZA'
            ]
        ],
        'FR' => [
            'name' => 'France',
            'alpha2' => 'FR',
            'alpha3' => 'FRA',
            'numeric' => '250',
            'continent' => 'Europe',
            'capital' => 'Paris',
            'timezone' => 'Europe/Paris',
            'phone' => '33',
            'alternate_names' => [
                'FR',
                'France',
                'French Republic',
                'République française',
                'The French Republic'
            ]
        ],
        'LY' => [
            'name' => 'Libya',
            'alpha2' => 'LY',
            'alpha3' => 'LBY',
            'numeric' => '434',
            'continent' => 'Africa',
            'capital' => 'Tripoli',
            'timezone' => 'Africa/Tripoli',
            'phone' => '218',
            'alternate_names' => [
                'Dawlat Libya',
                'LY',
                'Libya',
                'State of Libya',
                'الدولة ليبيا',
                '‏ليبيا'
            ]
        ],
        'MX' => [
            'name' => 'Mexico',
            'alpha2' => 'MX',
            'alpha3' => 'MEX',
            'numeric' => '484',
            'continent' => 'North America',
            'capital' => 'Mexico City',
            'timezone' => 'America/Bahia_Banderas',
            'phone' => '52',
            'alternate_names' => [
                'Estados Unidos Mexicanos',
                'MX',
                'Mexicanos',
                'Mexico',
                'México',
                'The United Mexican States',
                'United Mexican States'
            ]
        ],
        'GA' => [
            'name' => 'Gabon',
            'alpha2' => 'GA',
            'alpha3' => 'GAB',
            'numeric' => '266',
            'continent' => 'Africa',
            'capital' => 'Libreville',
            'timezone' => 'Africa/Libreville',
            'phone' => '241',
            'alternate_names' => [
                'GA',
                'Gabon',
                'Gabonese Republic',
                'République Gabonaise',
                'République gabonaise',
                'The Gabonese Republic'
            ]
        ],
        'MP' => [
            'name' => 'Northern Mariana Islands',
            'alpha2' => 'MP',
            'alpha3' => 'MNP',
            'numeric' => '580',
            'continent' => 'Oceania',
            'capital' => 'Saipan',
            'timezone' => 'Pacific/Saipan',
            'phone' => '1670',
            'alternate_names' => [
                'Commonwealth of the Northern Mariana Islands',
                'MP',
                'Na Islas Mariånas',
                'Northern Mariana Islands',
                'Northern Mariana Islands (the)',
                'Sankattan Siha Na Islas Mariånas'
            ]
        ],
        'MK' => [
            'name' => 'North Macedonia',
            'alpha2' => 'MK',
            'alpha3' => 'MKD',
            'numeric' => '807',
            'continent' => 'Europe',
            'capital' => 'Skopje',
            'timezone' => 'Europe/Skopje',
            'phone' => '389',
            'alternate_names' => [
                'MK',
                'Macedonia, The Former Yugoslav Republic of',
                'North Macedonia',
                'Republic of North Macedonia',
                'The former Yugoslav Republic of Macedonia',
                'Македонија',
                'Република Северна Македонија'
            ]
        ],
        'CN' => [
            'name' => 'China',
            'alpha2' => 'CN',
            'alpha3' => 'CHN',
            'numeric' => '156',
            'continent' => 'Asia',
            'capital' => 'Beijing',
            'timezone' => 'Asia/Shanghai',
            'phone' => '86',
            'alternate_names' => [
                'CN',
                'China',
                "People's Republic of China",
                "The People's Republic of China",
                'Zhongguo',
                'Zhonghua',
                'Zhōngguó',
                'Zhōnghuá Rénmín Gònghéguó',
                '中华人民共和国',
                '中国'
            ]
        ],
        'YE' => [
            'name' => 'Yemen',
            'alpha2' => 'YE',
            'alpha3' => 'YEM',
            'numeric' => '887',
            'continent' => 'Asia',
            'capital' => "Sana'a",
            'timezone' => 'Asia/Aden',
            'phone' => '967',
            'alternate_names' => [
                'Republic of Yemen',
                'The Republic of Yemen',
                'YE',
                'Yemen',
                'Yemeni Republic',
                'al-Jumhūriyyah al-Yamaniyyah',
                'الجمهورية اليمنية',
                'اليَمَن'
            ]
        ],
        'BL' => [
            'name' => 'Saint Barthélemy',
            'alpha2' => 'BL',
            'alpha3' => 'BLM',
            'numeric' => '652',
            'continent' => 'North America',
            'capital' => 'Gustavia',
            'timezone' => 'America/St_Barthelemy',
            'phone' => '590',
            'alternate_names' => [
                'BL',
                'Collectivity of Saint Barthélemy',
                'Collectivité de Saint-Barthélemy',
                'Saint Barthélemy',
                'Saint-Barthélemy',
                'St. Barthelemy',
                'St. Barthélemy'
            ]
        ],
        'GG' => [
            'name' => 'Guernsey',
            'alpha2' => 'GG',
            'alpha3' => 'GGY',
            'numeric' => '831',
            'continent' => 'Europe',
            'capital' => 'St. Peter Port',
            'timezone' => 'Europe/Guernsey',
            'phone' => '44',
            'alternate_names' => [
                'Bailiwick of Guernsey',
                'Bailliage de Guernesey',
                'Dgèrnésiais',
                'GG',
                'Guernesey',
                'Guernsey'
            ]
        ],
        'SB' => [
            'name' => 'Solomon Islands',
            'alpha2' => 'SB',
            'alpha3' => 'SLB',
            'numeric' => '090',
            'continent' => 'Oceania',
            'capital' => 'Honiara',
            'timezone' => 'Pacific/Guadalcanal',
            'phone' => '677',
            'alternate_names' => [
                'SB',
                'Solomon Islands'
            ]
        ],
        'SJ' => [
            'name' => 'Svalbard and Jan Mayen',
            'alpha2' => 'SJ',
            'alpha3' => 'SJM',
            'numeric' => '744',
            'continent' => 'Europe',
            'capital' => 'Longyearbyen',
            'timezone' => 'Arctic/Longyearbyen',
            'phone' => '4779',
            'alternate_names' => [
                'SJ',
                'Svalbard & Jan Mayen',
                'Svalbard and Jan Mayen',
                'Svalbard and Jan Mayen Islands',
                'Svalbard og Jan Mayen'
            ]
        ],
        'FO' => [
            'name' => 'Faroe Islands',
            'alpha2' => 'FO',
            'alpha3' => 'FRO',
            'numeric' => '234',
            'continent' => 'Europe',
            'capital' => 'Tórshavn',
            'timezone' => 'Atlantic/Faroe',
            'phone' => '298',
            'alternate_names' => [
                'FO',
                'Faroe Islands',
                'Faroe Islands (the)',
                'Færøerne',
                'Føroyar'
            ]
        ],
        'UZ' => [
            'name' => 'Uzbekistan',
            'alpha2' => 'UZ',
            'alpha3' => 'UZB',
            'numeric' => '860',
            'continent' => 'Asia',
            'capital' => 'Tashkent',
            'timezone' => 'Asia/Samarkand',
            'phone' => '998',
            'alternate_names' => [
                "O'zbekiston Respublikasi",
                'O‘zbekiston',
                'O‘zbekiston Respublikasi',
                'Republic of Uzbekistan',
                'The Republic of Uzbekistan',
                'UZ',
                'Uzbekistan',
                'Ўзбекистон Республикаси',
                'Республика Узбекистан',
                'Узбекистан'
            ]
        ],
        'EG' => [
            'name' => 'Egypt',
            'alpha2' => 'EG',
            'alpha3' => 'EGY',
            'numeric' => '818',
            'continent' => 'Africa',
            'capital' => 'Cairo',
            'timezone' => 'Africa/Cairo',
            'phone' => '20',
            'alternate_names' => [
                'Arab Republic of Egypt',
                'EG',
                'Egypt',
                'The Arab Republic of Egypt',
                'جمهورية مصر العربية',
                'مصر'
            ]
        ],
        'SN' => [
            'name' => 'Senegal',
            'alpha2' => 'SN',
            'alpha3' => 'SEN',
            'numeric' => '686',
            'continent' => 'Africa',
            'capital' => 'Dakar',
            'timezone' => 'Africa/Dakar',
            'phone' => '221',
            'alternate_names' => [
                'Republic of Senegal',
                'République du Sénégal',
                'SN',
                'Senegal',
                'Sénégal',
                'The Republic of Senegal'
            ]
        ],
        'LK' => [
            'name' => 'Sri Lanka',
            'alpha2' => 'LK',
            'alpha3' => 'LKA',
            'numeric' => '144',
            'continent' => 'Asia',
            'capital' => 'Sri Jayawardenepura Kotte',
            'timezone' => 'Asia/Colombo',
            'phone' => '94',
            'alternate_names' => [
                'Democratic Socialist Republic of Sri Lanka',
                'LK',
                'Sri Lanka',
                'The Democratic Socialist Republic of Sri Lanka',
                'ilaṅkai',
                'இலங்கை',
                'இலங்கை சனநாயக சோசலிசக் குடியரசு',
                'ශ්‍රී ලංකා ප්‍රජාතාන්ත්‍රික සමාජවාදී ජනරජය',
                'ශ්‍රී ලංකාව'
            ]
        ],
        'PS' => [
            'name' => 'Palestine',
            'alpha2' => 'PS',
            'alpha3' => 'PSE',
            'numeric' => '275',
            'continent' => 'Asia',
            'capital' => 'Ramallah',
            'timezone' => 'Asia/Gaza',
            'phone' => '970',
            'alternate_names' => [
                'Dawlat Filasṭin',
                'PS',
                'Palestine',
                'Palestine, State of',
                'State of Palestine',
                'دولة فلسطين',
                'فلسطين'
            ]
        ],
        'BD' => [
            'name' => 'Bangladesh',
            'alpha2' => 'BD',
            'alpha3' => 'BGD',
            'numeric' => '050',
            'continent' => 'Asia',
            'capital' => 'Dhaka',
            'timezone' => 'Asia/Dhaka',
            'phone' => '880',
            'alternate_names' => [
                'BD',
                'Bangladesh',
                'Gônôprôjatôntri Bangladesh',
                "People's Republic of Bangladesh",
                "The People's Republic of Bangladesh",
                'বাংলাদেশ',
                'বাংলাদেশ গণপ্রজাতন্ত্রী'
            ]
        ],
        'PE' => [
            'name' => 'Peru',
            'alpha2' => 'PE',
            'alpha3' => 'PER',
            'numeric' => '604',
            'continent' => 'South America',
            'capital' => 'Lima',
            'timezone' => 'America/Lima',
            'phone' => '51',
            'alternate_names' => [
                'PE',
                'Peru',
                'Perú',
                'Piruw',
                'Piruw Ripuwlika',
                'Piruw Suyu',
                'Republic of Peru',
                'República del Perú',
                'The Republic of Peru'
            ]
        ],
        'SG' => [
            'name' => 'Singapore',
            'alpha2' => 'SG',
            'alpha3' => 'SGP',
            'numeric' => '702',
            'continent' => 'Asia',
            'capital' => 'Singapore',
            'timezone' => 'Asia/Singapore',
            'phone' => '65',
            'alternate_names' => [
                'Republic of Singapore',
                'Republik Singapura',
                'SG',
                'Singapore',
                'Singapura',
                'The Republic of Singapore',
                'சிங்கப்பூர்',
                'சிங்கப்பூர் குடியரசு',
                '新加坡',
                '新加坡共和国'
            ]
        ],
        'TR' => [
            'name' => 'Turkey',
            'alpha2' => 'TR',
            'alpha3' => 'TUR',
            'numeric' => '792',
            'continent' => 'Europe',
            'capital' => 'Ankara',
            'timezone' => 'Europe/Istanbul',
            'phone' => '90',
            'alternate_names' => [
                'Republic of T?rkiye',
                'Republic of Turkey',
                'TR',
                'Turkey',
                'Turkiye',
                'Türkiye',
                'Türkiye Cumhuriyeti'
            ]
        ],
        'AF' => [
            'name' => 'Afghanistan',
            'alpha2' => 'AF',
            'alpha3' => 'AFG',
            'numeric' => '004',
            'continent' => 'Asia',
            'capital' => 'Kabul',
            'timezone' => 'Asia/Kabul',
            'phone' => '93',
            'alternate_names' => [
                'AF',
                'Afghanistan',
                'Afġānistān',
                'Islamic Republic of Afghanistan',
                'Owganystan',
                'Owganystan Yslam Respublikasy',
                'The Islamic Republic of Afghanistan',
                'افغانستان',
                'جمهوری اسلامی افغانستان',
                'د افغانستان اسلامي جمهوریت'
            ]
        ],
        'AW' => [
            'name' => 'Aruba',
            'alpha2' => 'AW',
            'alpha3' => 'ABW',
            'numeric' => '533',
            'continent' => 'North America',
            'capital' => 'Oranjestad',
            'timezone' => 'America/Aruba',
            'phone' => '297',
            'alternate_names' => [
                'AW',
                'Aruba'
            ]
        ],
        'CK' => [
            'name' => 'Cook Islands',
            'alpha2' => 'CK',
            'alpha3' => 'COK',
            'numeric' => '184',
            'continent' => 'Oceania',
            'capital' => 'Avarua',
            'timezone' => 'Pacific/Rarotonga',
            'phone' => '682',
            'alternate_names' => [
                'CK',
                'Cook Islands',
                'Cook Islands (the)',
                "Kūki 'Āirani"
            ]
        ],
        'GB' => [
            'name' => 'United Kingdom',
            'alpha2' => 'GB',
            'alpha3' => 'GBR',
            'numeric' => '826',
            'continent' => 'Europe',
            'capital' => 'London',
            'timezone' => 'Europe/London',
            'phone' => '44',
            'alternate_names' => [
                'GB',
                'Great Britain',
                'The United Kingdom of Great Britain and Northern Ireland',
                'UK',
                'United Kingdom',
                'United Kingdom of Great Britain and Northern Ireland',
                'United Kingdom of Great Britain and Northern Ireland (the)'
            ]
        ],
        'ZM' => [
            'name' => 'Zambia',
            'alpha2' => 'ZM',
            'alpha3' => 'ZMB',
            'numeric' => '894',
            'continent' => 'Africa',
            'capital' => 'Lusaka',
            'timezone' => 'Africa/Lusaka',
            'phone' => '260',
            'alternate_names' => [
                'Republic of Zambia',
                'The Republic of Zambia',
                'ZM',
                'Zambia'
            ]
        ],
        'FI' => [
            'name' => 'Finland',
            'alpha2' => 'FI',
            'alpha3' => 'FIN',
            'numeric' => '246',
            'continent' => 'Europe',
            'capital' => 'Helsinki',
            'timezone' => 'Europe/Helsinki',
            'phone' => '358',
            'alternate_names' => [
                'FI',
                'Finland',
                'Republic of Finland',
                'Republiken Finland',
                'Suomen tasavalta',
                'Suomi',
                'The Republic of Finland'
            ]
        ],
        'NE' => [
            'name' => 'Niger',
            'alpha2' => 'NE',
            'alpha3' => 'NER',
            'numeric' => '562',
            'continent' => 'Africa',
            'capital' => 'Niamey',
            'timezone' => 'Africa/Niamey',
            'phone' => '227',
            'alternate_names' => [
                'NE',
                'Niger',
                'Niger (the)',
                'Nijar',
                'Republic of Niger',
                'République du Niger',
                'The Republic of Niger'
            ]
        ],
        'CX' => [
            'name' => 'Christmas Island',
            'alpha2' => 'CX',
            'alpha3' => 'CXR',
            'numeric' => '162',
            'continent' => 'Asia',
            'capital' => 'Flying Fish Cove',
            'timezone' => 'Indian/Christmas',
            'phone' => '61',
            'alternate_names' => [
                'CX',
                'Christmas Island',
                'Territory of Christmas Island'
            ]
        ],
        'TK' => [
            'name' => 'Tokelau',
            'alpha2' => 'TK',
            'alpha3' => 'TKL',
            'numeric' => '772',
            'continent' => 'Oceania',
            'capital' => 'Fakaofo',
            'timezone' => 'Pacific/Fakaofo',
            'phone' => '690',
            'alternate_names' => [
                'TK',
                'Tokelau'
            ]
        ],
        'GW' => [
            'name' => 'Guinea-Bissau',
            'alpha2' => 'GW',
            'alpha3' => 'GNB',
            'numeric' => '624',
            'continent' => 'Africa',
            'capital' => 'Bissau',
            'timezone' => 'Africa/Bissau',
            'phone' => '245',
            'alternate_names' => [
                'GW',
                'Guinea-Bissau',
                'Guiné-Bissau',
                'Republic of Guinea-Bissau',
                'República da Guiné-Bissau',
                'The Republic of Guinea-Bissau'
            ]
        ],
        'AZ' => [
            'name' => 'Azerbaijan',
            'alpha2' => 'AZ',
            'alpha3' => 'AZE',
            'numeric' => '031',
            'continent' => 'Europe',
            'capital' => 'Baku',
            'timezone' => 'Asia/Baku',
            'phone' => '994',
            'alternate_names' => [
                'AZ',
                'Azerbaijan',
                'Azərbaycan',
                'Azərbaycan Respublikası',
                'Republic of Azerbaijan',
                'The Republic of Azerbaijan'
            ]
        ],
        'RE' => [
            'name' => 'Réunion',
            'alpha2' => 'RE',
            'alpha3' => 'REU',
            'numeric' => '638',
            'continent' => 'Africa',
            'capital' => 'Saint-Denis',
            'timezone' => 'Indian/Reunion',
            'phone' => '262',
            'alternate_names' => [
                'Ile de la Réunion',
                'La Réunion',
                'RE',
                'Reunion',
                'Réunion',
                'Réunion Island'
            ]
        ],
        'DJ' => [
            'name' => 'Djibouti',
            'alpha2' => 'DJ',
            'alpha3' => 'DJI',
            'numeric' => '262',
            'continent' => 'Africa',
            'capital' => 'Djibouti',
            'timezone' => 'Africa/Djibouti',
            'phone' => '253',
            'alternate_names' => [
                'DJ',
                'Djibouti',
                'Gabuuti',
                'Gabuutih Ummuuno',
                'Jabuuti',
                'Jamhuuriyadda Jabuuti',
                'Republic of Djibouti',
                'République de Djibouti',
                'The Republic of Djibouti',
                'جمهورية جيبوتي',
                'جيبوتي‎'
            ]
        ],
        'KP' => [
            'name' => 'North Korea',
            'alpha2' => 'KP',
            'alpha3' => 'PRK',
            'numeric' => '408',
            'continent' => 'Asia',
            'capital' => 'Pyongyang',
            'timezone' => 'Asia/Pyongyang',
            'phone' => '850',
            'alternate_names' => [
                'Chosŏn Minjujuŭi Inmin Konghwaguk',
                'DPRK',
                "Democratic People's Republic of Korea",
                'KP',
                "Korea (the Democratic People's Republic of)",
                "Korea, Democratic People's Republic of",
                'North Korea',
                "The Democratic People's Republic of Korea",
                '북조선',
                '북한',
                '조선',
                '조선민주주의인민공화국'
            ]
        ],
        'MU' => [
            'name' => 'Mauritius',
            'alpha2' => 'MU',
            'alpha3' => 'MUS',
            'numeric' => '480',
            'continent' => 'Africa',
            'capital' => 'Port Louis',
            'timezone' => 'Indian/Mauritius',
            'phone' => '230',
            'alternate_names' => [
                'MU',
                'Maurice',
                'Mauritius',
                'Moris',
                'Republic of Mauritius',
                'Republik Moris',
                'République de Maurice',
                'The Republic of Mauritius'
            ]
        ],
        'MS' => [
            'name' => 'Montserrat',
            'alpha2' => 'MS',
            'alpha3' => 'MSR',
            'numeric' => '500',
            'continent' => 'North America',
            'capital' => 'Plymouth',
            'timezone' => 'America/Montserrat',
            'phone' => '1664',
            'alternate_names' => [
                'MS',
                'Montserrat'
            ]
        ],
        'VI' => [
            'name' => 'United States Virgin Islands',
            'alpha2' => 'VI',
            'alpha3' => 'VIR',
            'numeric' => '850',
            'continent' => 'North America',
            'capital' => 'Charlotte Amalie',
            'timezone' => 'America/St_Thomas',
            'phone' => '1340',
            'alternate_names' => [
                'U.S. Virgin Islands',
                'United States Virgin Islands',
                'VI',
                'Virgin Islands (U.S.)',
                'Virgin Islands of the United States',
                'Virgin Islands, U.S.'
            ]
        ],
        'CO' => [
            'name' => 'Colombia',
            'alpha2' => 'CO',
            'alpha3' => 'COL',
            'numeric' => '170',
            'continent' => 'South America',
            'capital' => 'Bogotá',
            'timezone' => 'America/Bogota',
            'phone' => '57',
            'alternate_names' => [
                'CO',
                'Colombia',
                'Republic of Colombia',
                'República de Colombia',
                'The Republic of Colombia'
            ]
        ],
        'GR' => [
            'name' => 'Greece',
            'alpha2' => 'GR',
            'alpha3' => 'GRC',
            'numeric' => '300',
            'continent' => 'Europe',
            'capital' => 'Athens',
            'timezone' => 'Europe/Athens',
            'phone' => '30',
            'alternate_names' => [
                'Elláda',
                'GR',
                'Greece',
                'Hellenic Republic',
                'The Hellenic Republic',
                'Ελλάδα',
                'Ελληνική Δημοκρατία'
            ]
        ],
        'HR' => [
            'name' => 'Croatia',
            'alpha2' => 'HR',
            'alpha3' => 'HRV',
            'numeric' => '191',
            'continent' => 'Europe',
            'capital' => 'Zagreb',
            'timezone' => 'Europe/Zagreb',
            'phone' => '385',
            'alternate_names' => [
                'Croatia',
                'HR',
                'Hrvatska',
                'Republic of Croatia',
                'Republika Hrvatska',
                'The Republic of Croatia'
            ]
        ],
        'MA' => [
            'name' => 'Morocco',
            'alpha2' => 'MA',
            'alpha3' => 'MAR',
            'numeric' => '504',
            'continent' => 'Africa',
            'capital' => 'Rabat',
            'timezone' => 'Africa/Casablanca',
            'phone' => '212',
            'alternate_names' => [
                'Al-Mamlakah al-Maġribiyah',
                'Kingdom of Morocco',
                'MA',
                'Morocco',
                'The Kingdom of Morocco',
                'المغرب',
                'المملكة المغربية',
                'ⵍⵎⴰⵖⵔⵉⴱ',
                'ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ'
            ]
        ],
        'DZ' => [
            'name' => 'Algeria',
            'alpha2' => 'DZ',
            'alpha3' => 'DZA',
            'numeric' => '012',
            'continent' => 'Africa',
            'capital' => 'Algiers',
            'timezone' => 'Africa/Algiers',
            'phone' => '213',
            'alternate_names' => [
                'Algeria',
                'Algérie',
                'DZ',
                'Dzayer',
                "People's Democratic Republic of Algeria",
                "The People's Democratic Republic of Algeria",
                'الجزائر',
                'الجمهورية الديمقراطية الشعبية الجزائرية'
            ]
        ],
        'AQ' => [
            'name' => 'Antarctica',
            'alpha2' => 'AQ',
            'alpha3' => 'ATA',
            'numeric' => '010',
            'continent' => 'Antarctica',
            'capital' => 'Unknown',
            'timezone' => 'Antarctica/Casey',
            'phone' => 'Unknown',
            'alternate_names' => [
                'AQ',
                'Antarctica'
            ]
        ],
        'NL' => [
            'name' => 'Netherlands',
            'alpha2' => 'NL',
            'alpha3' => 'NLD',
            'numeric' => '528',
            'continent' => 'Europe',
            'capital' => 'Amsterdam',
            'timezone' => 'Europe/Amsterdam',
            'phone' => '31',
            'alternate_names' => [
                'Holland',
                'Kingdom of the Netherlands',
                'Koninkrijk der Nederlanden',
                'NL',
                'Nederland',
                'Netherlands',
                'Netherlands (the)',
                'The Kingdom of the Netherlands',
                'The Netherlands'
            ]
        ],
        'SD' => [
            'name' => 'Sudan',
            'alpha2' => 'SD',
            'alpha3' => 'SDN',
            'numeric' => '729',
            'continent' => 'Africa',
            'capital' => 'Khartoum',
            'timezone' => 'Africa/Khartoum',
            'phone' => '249',
            'alternate_names' => [
                'Jumhūrīyat as-Sūdān',
                'Republic of the Sudan',
                'SD',
                'Sudan',
                'Sudan (the)',
                'The Republic of the Sudan',
                'السودان',
                'جمهورية السودان'
            ]
        ],
        'FJ' => [
            'name' => 'Fiji',
            'alpha2' => 'FJ',
            'alpha3' => 'FJI',
            'numeric' => '242',
            'continent' => 'Oceania',
            'capital' => 'Suva',
            'timezone' => 'Pacific/Fiji',
            'phone' => '679',
            'alternate_names' => [
                'FJ',
                'Fiji',
                'Fijī Gaṇarājya',
                'Matanitu Tugalala o Viti',
                'Matanitu ko Viti',
                'Republic of Fiji',
                'The Republic of Fiji',
                'Viti',
                'फिजी',
                'रिपब्लिक ऑफ फीजी'
            ]
        ],
        'LI' => [
            'name' => 'Liechtenstein',
            'alpha2' => 'LI',
            'alpha3' => 'LIE',
            'numeric' => '438',
            'continent' => 'Europe',
            'capital' => 'Vaduz',
            'timezone' => 'Europe/Vaduz',
            'phone' => '423',
            'alternate_names' => [
                'Fürstentum Liechtenstein',
                'LI',
                'Liechtenstein',
                'Principality of Liechtenstein',
                'The Principality of Liechtenstein'
            ]
        ],
        'NP' => [
            'name' => 'Nepal',
            'alpha2' => 'NP',
            'alpha3' => 'NPL',
            'numeric' => '524',
            'continent' => 'Asia',
            'capital' => 'Kathmandu',
            'timezone' => 'Asia/Kathmandu',
            'phone' => '977',
            'alternate_names' => [
                'Federal Democratic Republic of Nepal',
                'Loktāntrik Ganatantra Nepāl',
                'NP',
                'Nepal',
                'नेपाल',
                'नेपाल संघीय लोकतान्त्रिक गणतन्त्र'
            ]
        ],
        'PR' => [
            'name' => 'Puerto Rico',
            'alpha2' => 'PR',
            'alpha3' => 'PRI',
            'numeric' => '630',
            'continent' => 'North America',
            'capital' => 'San Juan',
            'timezone' => 'America/Puerto_Rico',
            'phone' => '1787939',
            'alternate_names' => [
                'Commonwealth of Puerto Rico',
                'Estado Libre Asociado de Puerto Rico',
                'PR',
                'Puerto Rico'
            ]
        ],
        'GE' => [
            'name' => 'Georgia',
            'alpha2' => 'GE',
            'alpha3' => 'GEO',
            'numeric' => '268',
            'continent' => 'Asia',
            'capital' => 'Tbilisi',
            'timezone' => 'Asia/Tbilisi',
            'phone' => '995',
            'alternate_names' => [
                'GE',
                'Georgia',
                'Sakartvelo',
                'საქართველო'
            ]
        ],
        'PK' => [
            'name' => 'Pakistan',
            'alpha2' => 'PK',
            'alpha3' => 'PAK',
            'numeric' => '586',
            'continent' => 'Asia',
            'capital' => 'Islamabad',
            'timezone' => 'Asia/Karachi',
            'phone' => '92',
            'alternate_names' => [
                'Islamic Republic of Pakistan',
                "Islāmī Jumhūriya'eh Pākistān",
                'PK',
                'Pakistan',
                'Pākistān',
                'The Islamic Republic of Pakistan',
                'اسلامی جمہوریۂ پاكستان',
                'پاكستان'
            ]
        ],
        'MC' => [
            'name' => 'Monaco',
            'alpha2' => 'MC',
            'alpha3' => 'MCO',
            'numeric' => '492',
            'continent' => 'Europe',
            'capital' => 'Monaco',
            'timezone' => 'Europe/Monaco',
            'phone' => '377',
            'alternate_names' => [
                'MC',
                'Monaco',
                'Principality of Monaco',
                'Principauté de Monaco',
                'The Principality of Monaco'
            ]
        ],
        'BW' => [
            'name' => 'Botswana',
            'alpha2' => 'BW',
            'alpha3' => 'BWA',
            'numeric' => '072',
            'continent' => 'Africa',
            'capital' => 'Gaborone',
            'timezone' => 'Africa/Gaborone',
            'phone' => '267',
            'alternate_names' => [
                'BW',
                'Botswana',
                'Lefatshe la Botswana',
                'Republic of Botswana',
                'The Republic of Botswana'
            ]
        ],
        'LB' => [
            'name' => 'Lebanon',
            'alpha2' => 'LB',
            'alpha3' => 'LBN',
            'numeric' => '422',
            'continent' => 'Asia',
            'capital' => 'Beirut',
            'timezone' => 'Asia/Beirut',
            'phone' => '961',
            'alternate_names' => [
                'Al-Jumhūrīyah Al-Libnānīyah',
                'LB',
                'Lebanese Republic',
                'Lebanon',
                'Liban',
                'République libanaise',
                'The Lebanese Republic',
                'الجمهورية اللبنانية',
                'لبنان'
            ]
        ],
        'PG' => [
            'name' => 'Papua New Guinea',
            'alpha2' => 'PG',
            'alpha3' => 'PNG',
            'numeric' => '598',
            'continent' => 'Oceania',
            'capital' => 'Port Moresby',
            'timezone' => 'Pacific/Bougainville',
            'phone' => '675',
            'alternate_names' => [
                'Independen Stet bilong Papua Niugini',
                'Independent State of Papua New Guinea',
                'PG',
                'Papua New Guinea',
                'Papua Niu Gini',
                'Papua Niugini',
                'The Independent State of Papua New Guinea'
            ]
        ],
        'YT' => [
            'name' => 'Mayotte',
            'alpha2' => 'YT',
            'alpha3' => 'MYT',
            'numeric' => '175',
            'continent' => 'Africa',
            'capital' => 'Mamoudzou',
            'timezone' => 'Indian/Mayotte',
            'phone' => '262',
            'alternate_names' => [
                'Department of Mayotte',
                'Département de Mayotte',
                'Mayotte',
                'YT'
            ]
        ],
        'DO' => [
            'name' => 'Dominican Republic',
            'alpha2' => 'DO',
            'alpha3' => 'DOM',
            'numeric' => '214',
            'continent' => 'North America',
            'capital' => 'Santo Domingo',
            'timezone' => 'America/Santo_Domingo',
            'phone' => '1809829849',
            'alternate_names' => [
                'DO',
                'Dominican Republic',
                'Dominican Republic (the)',
                'República Dominicana',
                'The Dominican Republic'
            ]
        ],
        'NF' => [
            'name' => 'Norfolk Island',
            'alpha2' => 'NF',
            'alpha3' => 'NFK',
            'numeric' => '574',
            'continent' => 'Oceania',
            'capital' => 'Kingston',
            'timezone' => 'Pacific/Norfolk',
            'phone' => '672',
            'alternate_names' => [
                'NF',
                "Norf'k Ailen",
                'Norfolk Island',
                "Teratri of Norf'k Ailen",
                'Territory of Norfolk Island'
            ]
        ],
        'BV' => [
            'name' => 'Bouvet Island',
            'alpha2' => 'BV',
            'alpha3' => 'BVT',
            'numeric' => '074',
            'continent' => 'Antarctica',
            'capital' => 'Unknown',
            'timezone' => 'Africa/Algiers',
            'phone' => '47',
            'alternate_names' => [
                'BV',
                'Bouvet Island',
                'Bouvet-øya',
                'Bouvetøya'
            ]
        ],
        'QA' => [
            'name' => 'Qatar',
            'alpha2' => 'QA',
            'alpha3' => 'QAT',
            'numeric' => '634',
            'continent' => 'Asia',
            'capital' => 'Doha',
            'timezone' => 'Asia/Qatar',
            'phone' => '974',
            'alternate_names' => [
                'Dawlat Qaṭar',
                'QA',
                'Qatar',
                'State of Qatar',
                'The State of Qatar',
                'دولة قطر',
                'قطر'
            ]
        ],
        'MG' => [
            'name' => 'Madagascar',
            'alpha2' => 'MG',
            'alpha3' => 'MDG',
            'numeric' => '450',
            'continent' => 'Africa',
            'capital' => 'Antananarivo',
            'timezone' => 'Indian/Antananarivo',
            'phone' => '261',
            'alternate_names' => [
                'MG',
                'Madagascar',
                'Madagasikara',
                "Repoblikan'i Madagasikara",
                'Republic of Madagascar',
                'République de Madagascar',
                'The Republic of Madagascar'
            ]
        ],
        'IN' => [
            'name' => 'India',
            'alpha2' => 'IN',
            'alpha3' => 'IND',
            'numeric' => '356',
            'continent' => 'Asia',
            'capital' => 'New Delhi',
            'timezone' => 'Asia/Kolkata',
            'phone' => '91',
            'alternate_names' => [
                'Bharat Ganrajya',
                'Bhārat',
                'IN',
                'India',
                'Republic of India',
                'The Republic of India',
                'भारत',
                'भारत गणराज्य',
                'இந்தியக் குடியரசு',
                'இந்தியா'
            ]
        ],
        'SY' => [
            'name' => 'Syria',
            'alpha2' => 'SY',
            'alpha3' => 'SYR',
            'numeric' => '760',
            'continent' => 'Asia',
            'capital' => 'Damascus',
            'timezone' => 'Asia/Damascus',
            'phone' => '963',
            'alternate_names' => [
                'Al-Jumhūrīyah Al-ʻArabīyah As-Sūrīyah',
                'SY',
                'Syria',
                'Syrian Arab Republic',
                'The Syrian Arab Republic',
                'الجمهورية العربية السورية',
                'سوريا'
            ]
        ],
        'ME' => [
            'name' => 'Montenegro',
            'alpha2' => 'ME',
            'alpha3' => 'MNE',
            'numeric' => '499',
            'continent' => 'Europe',
            'capital' => 'Podgorica',
            'timezone' => 'Europe/Podgorica',
            'phone' => '382',
            'alternate_names' => [
                'Crna Gora',
                'ME',
                'Montenegro',
                'Црна Гора'
            ]
        ],
        'SZ' => [
            'name' => 'Eswatini',
            'alpha2' => 'SZ',
            'alpha3' => 'SWZ',
            'numeric' => '748',
            'continent' => 'Africa',
            'capital' => 'Mbabane',
            'timezone' => 'Africa/Mbabane',
            'phone' => '268',
            'alternate_names' => [
                'Eswatini',
                'Kingdom of Eswatini',
                'Ngwane',
                'SZ',
                'Swatini',
                'Swaziland',
                'Umbuso weSwatini',
                'eSwatini',
                'weSwatini'
            ]
        ],
        'PY' => [
            'name' => 'Paraguay',
            'alpha2' => 'PY',
            'alpha3' => 'PRY',
            'numeric' => '600',
            'continent' => 'South America',
            'capital' => 'Asunción',
            'timezone' => 'America/Asuncion',
            'phone' => '595',
            'alternate_names' => [
                'PY',
                'Paraguay',
                'Paraguái',
                'Republic of Paraguay',
                'República de Paraguay',
                'República del Paraguay',
                'Tetã Paraguái',
                'The Republic of Paraguay'
            ]
        ],
        'SV' => [
            'name' => 'El Salvador',
            'alpha2' => 'SV',
            'alpha3' => 'SLV',
            'numeric' => '222',
            'continent' => 'North America',
            'capital' => 'San Salvador',
            'timezone' => 'America/El_Salvador',
            'phone' => '503',
            'alternate_names' => [
                'El Salvador',
                'Republic of El Salvador',
                'República de El Salvador',
                'SV',
                'The Republic of El Salvador'
            ]
        ],
        'UA' => [
            'name' => 'Ukraine',
            'alpha2' => 'UA',
            'alpha3' => 'UKR',
            'numeric' => '804',
            'continent' => 'Europe',
            'capital' => 'Kyiv',
            'timezone' => 'Europe/Kyiv',
            'phone' => '380',
            'alternate_names' => [
                'UA',
                'Ukraine',
                'Ukrayina',
                'Україна'
            ]
        ],
        'IM' => [
            'name' => 'Isle of Man',
            'alpha2' => 'IM',
            'alpha3' => 'IMN',
            'numeric' => '833',
            'continent' => 'Europe',
            'capital' => 'Douglas',
            'timezone' => 'Europe/Isle_of_Man',
            'phone' => '44',
            'alternate_names' => [
                'Ellan Vannin',
                'Ellan Vannin or Mannin',
                'IM',
                'Isle of Man',
                'Mann',
                'Mannin'
            ]
        ],
        'NA' => [
            'name' => 'Namibia',
            'alpha2' => 'NA',
            'alpha3' => 'NAM',
            'numeric' => '516',
            'continent' => 'Africa',
            'capital' => 'Windhoek',
            'timezone' => 'Africa/Windhoek',
            'phone' => '264',
            'alternate_names' => [
                'Lefatshe la Namibia',
                'NA',
                'Namibia',
                'Namibië',
                'Republic of Namibia',
                'Republiek van Namibië',
                'Republik Namibia',
                'The Republic of Namibia'
            ]
        ],
        'AE' => [
            'name' => 'United Arab Emirates',
            'alpha2' => 'AE',
            'alpha3' => 'ARE',
            'numeric' => '784',
            'continent' => 'Asia',
            'capital' => 'Abu Dhabi',
            'timezone' => 'Asia/Dubai',
            'phone' => '971',
            'alternate_names' => [
                'AE',
                'Emirates',
                'The United Arab Emirates',
                'UAE',
                'United Arab Emirates',
                'United Arab Emirates (the)',
                'الإمارات العربية المتحدة',
                'دولة الإمارات العربية المتحدة'
            ]
        ],
        'BG' => [
            'name' => 'Bulgaria',
            'alpha2' => 'BG',
            'alpha3' => 'BGR',
            'numeric' => '100',
            'continent' => 'Europe',
            'capital' => 'Sofia',
            'timezone' => 'Europe/Sofia',
            'phone' => '359',
            'alternate_names' => [
                'BG',
                'Bulgaria',
                'Republic of Bulgaria',
                'The Republic of Bulgaria',
                'България',
                'Република България'
            ]
        ],
        'GL' => [
            'name' => 'Greenland',
            'alpha2' => 'GL',
            'alpha3' => 'GRL',
            'numeric' => '304',
            'continent' => 'North America',
            'capital' => 'Nuuk',
            'timezone' => 'America/Danmarkshavn',
            'phone' => '299',
            'alternate_names' => [
                'GL',
                'Greenland',
                'Grønland',
                'Kalaallit Nunaat'
            ]
        ],
        'DE' => [
            'name' => 'Germany',
            'alpha2' => 'DE',
            'alpha3' => 'DEU',
            'numeric' => '276',
            'continent' => 'Europe',
            'capital' => 'Berlin',
            'timezone' => 'Europe/Berlin',
            'phone' => '49',
            'alternate_names' => [
                'Bundesrepublik Deutschland',
                'DE',
                'Deutschland',
                'Federal Republic of Germany',
                'Germany',
                'The Federal Republic of Germany'
            ]
        ],
        'KH' => [
            'name' => 'Cambodia',
            'alpha2' => 'KH',
            'alpha3' => 'KHM',
            'numeric' => '116',
            'continent' => 'Asia',
            'capital' => 'Phnom Penh',
            'timezone' => 'Asia/Phnom_Penh',
            'phone' => '855',
            'alternate_names' => [
                'Cambodia',
                'KH',
                'Kingdom of Cambodia',
                'Kâmpŭchéa',
                'The Kingdom of Cambodia',
                'ព្រះរាជាណាចក្រកម្ពុជា'
            ]
        ],
        'IQ' => [
            'name' => 'Iraq',
            'alpha2' => 'IQ',
            'alpha3' => 'IRQ',
            'numeric' => '368',
            'continent' => 'Asia',
            'capital' => 'Baghdad',
            'timezone' => 'Asia/Baghdad',
            'phone' => '964',
            'alternate_names' => [
                'IQ',
                'Iraq',
                'Jumhūriyyat al-‘Irāq',
                'Republic of Iraq',
                'The Republic of Iraq',
                'العراق',
                'جمهورية العراق',
                'کۆماری',
                'کۆماری عێراق',
                'ܩܘܼܛܢܵܐ',
                'ܩܘܼܛܢܵܐ ܐܝܼܪܲܩ'
            ]
        ],
        'TF' => [
            'name' => 'French Southern and Antarctic Lands',
            'alpha2' => 'TF',
            'alpha3' => 'ATF',
            'numeric' => '260',
            'continent' => 'Antarctica',
            'capital' => 'Port-aux-Français',
            'timezone' => 'Indian/Kerguelen',
            'phone' => '262',
            'alternate_names' => [
                'French Southern Territories',
                'French Southern Territories (the)',
                'French Southern and Antarctic Lands',
                'TF',
                'Terres australes et antarctiques françaises',
                'Territoire des Terres australes et antarctiques françaises',
                'Territory of the French Southern and Antarctic Lands'
            ]
        ],
        'SE' => [
            'name' => 'Sweden',
            'alpha2' => 'SE',
            'alpha3' => 'SWE',
            'numeric' => '752',
            'continent' => 'Europe',
            'capital' => 'Stockholm',
            'timezone' => 'Europe/Stockholm',
            'phone' => '46',
            'alternate_names' => [
                'Kingdom of Sweden',
                'Konungariket Sverige',
                'SE',
                'Sverige',
                'Sweden',
                'The Kingdom of Sweden'
            ]
        ],
        'CU' => [
            'name' => 'Cuba',
            'alpha2' => 'CU',
            'alpha3' => 'CUB',
            'numeric' => '192',
            'continent' => 'North America',
            'capital' => 'Havana',
            'timezone' => 'America/Havana',
            'phone' => '53',
            'alternate_names' => [
                'CU',
                'Cuba',
                'Republic of Cuba',
                'República de Cuba',
                'The Republic of Cuba'
            ]
        ],
        'KG' => [
            'name' => 'Kyrgyzstan',
            'alpha2' => 'KG',
            'alpha3' => 'KGZ',
            'numeric' => '417',
            'continent' => 'Asia',
            'capital' => 'Bishkek',
            'timezone' => 'Asia/Bishkek',
            'phone' => '996',
            'alternate_names' => [
                'KG',
                'Kyrgyz Republic',
                'Kyrgyz Respublikasy',
                'Kyrgyzstan',
                'The Kyrgyz Republic',
                'Киргизия',
                'Кыргыз Республикасы',
                'Кыргызская Республика',
                'Кыргызстан'
            ]
        ],
        'RU' => [
            'name' => 'Russia',
            'alpha2' => 'RU',
            'alpha3' => 'RUS',
            'numeric' => '643',
            'continent' => 'Europe',
            'capital' => 'Moscow',
            'timezone' => 'Asia/Anadyr',
            'phone' => '734589',
            'alternate_names' => [
                'RU',
                'Russia',
                'Russian Federation',
                'Russian Federation (the)',
                'The Russian Federation',
                'Российская Федерация',
                'Россия'
            ]
        ],
        'MY' => [
            'name' => 'Malaysia',
            'alpha2' => 'MY',
            'alpha3' => 'MYS',
            'numeric' => '458',
            'continent' => 'Asia',
            'capital' => 'Kuala Lumpur',
            'timezone' => 'Asia/Kuala_Lumpur',
            'phone' => '60',
            'alternate_names' => [
                'MY',
                'Malaysia',
                'مليسيا'
            ]
        ],
        'ST' => [
            'name' => 'São Tomé and Príncipe',
            'alpha2' => 'ST',
            'alpha3' => 'STP',
            'numeric' => '678',
            'continent' => 'Africa',
            'capital' => 'São Tomé',
            'timezone' => 'Africa/Sao_Tome',
            'phone' => '239',
            'alternate_names' => [
                'Democratic Republic of São Tomé and Príncipe',
                'República Democrática de São Tomé e Príncipe',
                'República Democrática do São Tomé e Príncipe',
                'ST',
                'Sao Tome and Principe',
                'São Tomé & Príncipe',
                'São Tomé and Príncipe',
                'São Tomé e Príncipe',
                'The Democratic Republic of Sao Tome and Principe'
            ]
        ],
        'CY' => [
            'name' => 'Cyprus',
            'alpha2' => 'CY',
            'alpha3' => 'CYP',
            'numeric' => '196',
            'continent' => 'Europe',
            'capital' => 'Nicosia',
            'timezone' => 'Asia/Famagusta',
            'phone' => '357',
            'alternate_names' => [
                'CY',
                'Cyprus',
                'Kýpros',
                'Kıbrıs',
                'Kıbrıs Cumhuriyeti',
                'Republic of Cyprus',
                'The Republic of Cyprus',
                'Δημοκρατία της Κύπρος',
                'Κυπριακή Δημοκρατία',
                'Κύπρος'
            ]
        ],
        'CA' => [
            'name' => 'Canada',
            'alpha2' => 'CA',
            'alpha3' => 'CAN',
            'numeric' => '124',
            'continent' => 'North America',
            'capital' => 'Ottawa',
            'timezone' => 'America/Atikokan',
            'phone' => '1',
            'alternate_names' => [
                'CA',
                'Canada'
            ]
        ],
        'MW' => [
            'name' => 'Malawi',
            'alpha2' => 'MW',
            'alpha3' => 'MWI',
            'numeric' => '454',
            'continent' => 'Africa',
            'capital' => 'Lilongwe',
            'timezone' => 'Africa/Blantyre',
            'phone' => '265',
            'alternate_names' => [
                'Chalo cha Malawi, Dziko la Malaŵi',
                'MW',
                'Malawi',
                'Malaŵi',
                'Republic of Malawi',
                'The Republic of Malawi'
            ]
        ],
        'SA' => [
            'name' => 'Saudi Arabia',
            'alpha2' => 'SA',
            'alpha3' => 'SAU',
            'numeric' => '682',
            'continent' => 'Asia',
            'capital' => 'Riyadh',
            'timezone' => 'Asia/Riyadh',
            'phone' => '966',
            'alternate_names' => [
                'Al-Mamlakah al-‘Arabiyyah as-Su‘ūdiyyah',
                'Kingdom of Saudi Arabia',
                'SA',
                'Saudi',
                'Saudi Arabia',
                'The Kingdom of Saudi Arabia',
                'العربية السعودية',
                'المملكة العربية السعودية'
            ]
        ],
        'BA' => [
            'name' => 'Bosnia and Herzegovina',
            'alpha2' => 'BA',
            'alpha3' => 'BIH',
            'numeric' => '070',
            'continent' => 'Europe',
            'capital' => 'Sarajevo',
            'timezone' => 'Europe/Sarajevo',
            'phone' => '387',
            'alternate_names' => [
                'BA',
                'Bosna i Hercegovina',
                'Bosnia',
                'Bosnia and Herzegovina',
                'Bosnia-Herzegovina',
                'Босна и Херцеговина'
            ]
        ],
        'ET' => [
            'name' => 'Ethiopia',
            'alpha2' => 'ET',
            'alpha3' => 'ETH',
            'numeric' => '231',
            'continent' => 'Africa',
            'capital' => 'Addis Ababa',
            'timezone' => 'Africa/Addis_Ababa',
            'phone' => '251',
            'alternate_names' => [
                'ET',
                'Ethiopia',
                'Federal Democratic Republic of Ethiopia',
                'The Federal Democratic Republic of Ethiopia',
                'ʾĪtyōṗṗyā',
                'ኢትዮጵያ',
                'የኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ'
            ]
        ],
        'ES' => [
            'name' => 'Spain',
            'alpha2' => 'ES',
            'alpha3' => 'ESP',
            'numeric' => '724',
            'continent' => 'Europe',
            'capital' => 'Madrid',
            'timezone' => 'Africa/Ceuta',
            'phone' => '34',
            'alternate_names' => [
                'ES',
                'España',
                'Kingdom of Spain',
                'Reino de España',
                'Spain',
                'The Kingdom of Spain'
            ]
        ],
        'SI' => [
            'name' => 'Slovenia',
            'alpha2' => 'SI',
            'alpha3' => 'SVN',
            'numeric' => '705',
            'continent' => 'Europe',
            'capital' => 'Ljubljana',
            'timezone' => 'Europe/Ljubljana',
            'phone' => '386',
            'alternate_names' => [
                'Republic of Slovenia',
                'Republika Slovenija',
                'SI',
                'Slovenia',
                'Slovenija',
                'The Republic of Slovenia'
            ]
        ],
        'OM' => [
            'name' => 'Oman',
            'alpha2' => 'OM',
            'alpha3' => 'OMN',
            'numeric' => '512',
            'continent' => 'Asia',
            'capital' => 'Muscat',
            'timezone' => 'Asia/Muscat',
            'phone' => '968',
            'alternate_names' => [
                'OM',
                'Oman',
                'Salṭanat ʻUmān',
                'Sultanate of Oman',
                'The Sultanate of Oman',
                'سلطنة عمان',
                'عمان'
            ]
        ],
        'PM' => [
            'name' => 'Saint Pierre and Miquelon',
            'alpha2' => 'PM',
            'alpha3' => 'SPM',
            'numeric' => '666',
            'continent' => 'North America',
            'capital' => 'Saint-Pierre',
            'timezone' => 'America/Miquelon',
            'phone' => '508',
            'alternate_names' => [
                'Collectivité territoriale de Saint-Pierre-et-Miquelon',
                'PM',
                'Saint Pierre and Miquelon',
                'Saint-Pierre-et-Miquelon',
                'St. Pierre & Miquelon'
            ]
        ],
        'MO' => [
            'name' => 'Macau',
            'alpha2' => 'MO',
            'alpha3' => 'MAC',
            'numeric' => '446',
            'continent' => 'Asia',
            'capital' => 'Unknown',
            'timezone' => 'Asia/Macau',
            'phone' => '853',
            'alternate_names' => [
                'MO',
                'Macao',
                "Macao Special Administrative Region of the People's Republic of China",
                'Macau',
                'Região Administrativa Especial de Macau da República Popular da China',
                '中华人民共和国澳门特别行政区',
                '中華人民共和國澳門特別行政區',
                '澳门'
            ]
        ],
        'SM' => [
            'name' => 'San Marino',
            'alpha2' => 'SM',
            'alpha3' => 'SMR',
            'numeric' => '674',
            'continent' => 'Europe',
            'capital' => 'City of San Marino',
            'timezone' => 'Europe/San_Marino',
            'phone' => '378',
            'alternate_names' => [
                'Repubblica di San Marino',
                'Republic of San Marino',
                'SM',
                'San Marino',
                'The Republic of San Marino'
            ]
        ],
        'LS' => [
            'name' => 'Lesotho',
            'alpha2' => 'LS',
            'alpha3' => 'LSO',
            'numeric' => '426',
            'continent' => 'Africa',
            'capital' => 'Maseru',
            'timezone' => 'Africa/Maseru',
            'phone' => '266',
            'alternate_names' => [
                'Kingdom of Lesotho',
                'LS',
                'Lesotho',
                'Muso oa Lesotho',
                'The Kingdom of Lesotho'
            ]
        ],
        'MH' => [
            'name' => 'Marshall Islands',
            'alpha2' => 'MH',
            'alpha3' => 'MHL',
            'numeric' => '584',
            'continent' => 'Oceania',
            'capital' => 'Majuro',
            'timezone' => 'Pacific/Kwajalein',
            'phone' => '692',
            'alternate_names' => [
                'Aolepān Aorōkin M̧ajeļ',
                'MH',
                'Marshall Islands',
                'Marshall Islands (the)',
                'M̧ajeļ',
                'Republic of the Marshall Islands',
                'The Republic of the Marshall Islands'
            ]
        ],
        'SX' => [
            'name' => 'Sint Maarten',
            'alpha2' => 'SX',
            'alpha3' => 'SXM',
            'numeric' => '534',
            'continent' => 'North America',
            'capital' => 'Philipsburg',
            'timezone' => 'America/Lower_Princes',
            'phone' => '1721',
            'alternate_names' => [
                'SX',
                'Saint-Martin',
                'Sint Maarten',
                'Sint Maarten (Dutch part)'
            ]
        ],
        'IS' => [
            'name' => 'Iceland',
            'alpha2' => 'IS',
            'alpha3' => 'ISL',
            'numeric' => '352',
            'continent' => 'Europe',
            'capital' => 'Reykjavik',
            'timezone' => 'Atlantic/Reykjavik',
            'phone' => '354',
            'alternate_names' => [
                'IS',
                'Iceland',
                'Island',
                'Lýðveldið Ísland',
                'Republic of Iceland',
                'Ísland'
            ]
        ],
        'LU' => [
            'name' => 'Luxembourg',
            'alpha2' => 'LU',
            'alpha3' => 'LUX',
            'numeric' => '442',
            'continent' => 'Europe',
            'capital' => 'Luxembourg',
            'timezone' => 'Europe/Luxembourg',
            'phone' => '352',
            'alternate_names' => [
                'Grand Duchy of Luxembourg',
                'Grand-Duché de Luxembourg',
                'Groussherzogtum Lëtzebuerg',
                'Großherzogtum Luxemburg',
                'LU',
                'Luxembourg',
                'Luxemburg',
                'Lëtzebuerg',
                'The Grand Duchy of Luxembourg'
            ]
        ],
        'AR' => [
            'name' => 'Argentina',
            'alpha2' => 'AR',
            'alpha3' => 'ARG',
            'numeric' => '032',
            'continent' => 'South America',
            'capital' => 'Buenos Aires',
            'timezone' => 'America/Argentina/Buenos_Aires',
            'phone' => '54',
            'alternate_names' => [
                'AR',
                'Argentina',
                'Argentine Republic',
                'República Argentina',
                'The Argentine Republic'
            ]
        ],
        'TC' => [
            'name' => 'Turks and Caicos Islands',
            'alpha2' => 'TC',
            'alpha3' => 'TCA',
            'numeric' => '796',
            'continent' => 'North America',
            'capital' => 'Cockburn Town',
            'timezone' => 'America/Grand_Turk',
            'phone' => '1649',
            'alternate_names' => [
                'TC',
                'Turks & Caicos Islands',
                'Turks and Caicos Islands',
                'Turks and Caicos Islands (the)'
            ]
        ],
        'NR' => [
            'name' => 'Nauru',
            'alpha2' => 'NR',
            'alpha3' => 'NRU',
            'numeric' => '520',
            'continent' => 'Oceania',
            'capital' => 'Yaren',
            'timezone' => 'Pacific/Nauru',
            'phone' => '674',
            'alternate_names' => [
                'NR',
                'Naoero',
                'Nauru',
                'Pleasant Island',
                'Republic of Nauru',
                'Ripublik Naoero',
                'The Republic of Nauru'
            ]
        ],
        'CC' => [
            'name' => 'Cocos (Keeling) Islands',
            'alpha2' => 'CC',
            'alpha3' => 'CCK',
            'numeric' => '166',
            'continent' => 'Asia',
            'capital' => 'West Island',
            'timezone' => 'Indian/Cocos',
            'phone' => '61',
            'alternate_names' => [
                'CC',
                'Cocos (Keeling) Islands',
                'Cocos (Keeling) Islands (the)',
                'Cocos Islands',
                'Keeling Islands',
                'Territory of the Cocos (Keeling) Islands'
            ]
        ],
        'EH' => [
            'name' => 'Western Sahara',
            'alpha2' => 'EH',
            'alpha3' => 'ESH',
            'numeric' => '732',
            'continent' => 'Africa',
            'capital' => 'El Aaiún',
            'timezone' => 'Africa/El_Aaiun',
            'phone' => '2125288125289',
            'alternate_names' => [
                'EH',
                'República Árabe Saharaui Democrática',
                'Sahara Occidental',
                'Sahrawi Arab Democratic Republic',
                'Taneẓroft Tutrimt',
                'Western Sahara',
                'الجمهورية العربية الصحراوية الديمقراطية',
                'الصحراء الغربية'
            ]
        ],
        'DM' => [
            'name' => 'Dominica',
            'alpha2' => 'DM',
            'alpha3' => 'DMA',
            'numeric' => '212',
            'continent' => 'North America',
            'capital' => 'Roseau',
            'timezone' => 'America/Dominica',
            'phone' => '1767',
            'alternate_names' => [
                'Commonwealth of Dominica',
                'DM',
                'Dominica',
                'Dominique',
                'The Commonwealth of Dominica',
                'Wai‘tu kubuli'
            ]
        ],
        'CR' => [
            'name' => 'Costa Rica',
            'alpha2' => 'CR',
            'alpha3' => 'CRI',
            'numeric' => '188',
            'continent' => 'North America',
            'capital' => 'San José',
            'timezone' => 'America/Costa_Rica',
            'phone' => '506',
            'alternate_names' => [
                'CR',
                'Costa Rica',
                'Republic of Costa Rica',
                'República de Costa Rica',
                'The Republic of Costa Rica'
            ]
        ],
        'AU' => [
            'name' => 'Australia',
            'alpha2' => 'AU',
            'alpha3' => 'AUS',
            'numeric' => '036',
            'continent' => 'Oceania',
            'capital' => 'Canberra',
            'timezone' => 'Antarctica/Macquarie',
            'phone' => '61',
            'alternate_names' => [
                'AU',
                'Australia',
                'Commonwealth of Australia',
                'The Commonwealth of Australia'
            ]
        ],
        'TH' => [
            'name' => 'Thailand',
            'alpha2' => 'TH',
            'alpha3' => 'THA',
            'numeric' => '764',
            'continent' => 'Asia',
            'capital' => 'Bangkok',
            'timezone' => 'Asia/Bangkok',
            'phone' => '66',
            'alternate_names' => [
                'Kingdom of Thailand',
                'Prathet',
                'Ratcha Anachak Thai',
                'TH',
                'Thai',
                'Thailand',
                'The Kingdom of Thailand',
                'ประเทศไทย',
                'ราชอาณาจักรไทย'
            ]
        ],
        'HT' => [
            'name' => 'Haiti',
            'alpha2' => 'HT',
            'alpha3' => 'HTI',
            'numeric' => '332',
            'continent' => 'North America',
            'capital' => 'Port-au-Prince',
            'timezone' => 'America/Port-au-Prince',
            'phone' => '509',
            'alternate_names' => [
                'Ayiti',
                'HT',
                'Haiti',
                'Haïti',
                'Repiblik Ayiti',
                'Republic of Haiti',
                "République d'Haïti",
                'The Republic of Haiti'
            ]
        ],
        'TV' => [
            'name' => 'Tuvalu',
            'alpha2' => 'TV',
            'alpha3' => 'TUV',
            'numeric' => '798',
            'continent' => 'Oceania',
            'capital' => 'Funafuti',
            'timezone' => 'Pacific/Funafuti',
            'phone' => '688',
            'alternate_names' => [
                'TV',
                'Tuvalu'
            ]
        ],
        'HN' => [
            'name' => 'Honduras',
            'alpha2' => 'HN',
            'alpha3' => 'HND',
            'numeric' => '340',
            'continent' => 'North America',
            'capital' => 'Tegucigalpa',
            'timezone' => 'America/Tegucigalpa',
            'phone' => '504',
            'alternate_names' => [
                'HN',
                'Honduras',
                'Republic of Honduras',
                'República de Honduras',
                'The Republic of Honduras'
            ]
        ],
        'GQ' => [
            'name' => 'Equatorial Guinea',
            'alpha2' => 'GQ',
            'alpha3' => 'GNQ',
            'numeric' => '226',
            'continent' => 'Africa',
            'capital' => 'Malabo',
            'timezone' => 'Africa/Malabo',
            'phone' => '240',
            'alternate_names' => [
                'Equatorial Guinea',
                'GQ',
                'Guinea Ecuatorial',
                'Guiné Equatorial',
                'Guinée équatoriale',
                'Republic of Equatorial Guinea',
                'República da Guiné Equatorial',
                'República de Guinea Ecuatorial',
                'République de Guinée équatoriale',
                'République de la Guinée Équatoriale',
                'The Republic of Equatorial Guinea'
            ]
        ],
        'LC' => [
            'name' => 'Saint Lucia',
            'alpha2' => 'LC',
            'alpha3' => 'LCA',
            'numeric' => '662',
            'continent' => 'North America',
            'capital' => 'Castries',
            'timezone' => 'America/St_Lucia',
            'phone' => '1758',
            'alternate_names' => [
                'LC',
                'Saint Lucia',
                'St Lucia',
                'St. Lucia'
            ]
        ],
        'PF' => [
            'name' => 'French Polynesia',
            'alpha2' => 'PF',
            'alpha3' => 'PYF',
            'numeric' => '258',
            'continent' => 'Oceania',
            'capital' => 'Papeetē',
            'timezone' => 'Pacific/Gambier',
            'phone' => '689',
            'alternate_names' => [
                'French Polynesia',
                'PF',
                'Polynésie française',
                'Pōrīnetia Farāni'
            ]
        ],
        'BY' => [
            'name' => 'Belarus',
            'alpha2' => 'BY',
            'alpha3' => 'BLR',
            'numeric' => '112',
            'continent' => 'Europe',
            'capital' => 'Minsk',
            'timezone' => 'Europe/Minsk',
            'phone' => '375',
            'alternate_names' => [
                'BY',
                'Belarus',
                'Bielaruś',
                'Republic of Belarus',
                'The Republic of Belarus',
                'Белару́сь',
                'Беларусь',
                'Белоруссия',
                'Республика Беларусь',
                'Республика Белоруссия',
                'Рэспубліка Беларусь'
            ]
        ],
        'LV' => [
            'name' => 'Latvia',
            'alpha2' => 'LV',
            'alpha3' => 'LVA',
            'numeric' => '428',
            'continent' => 'Europe',
            'capital' => 'Riga',
            'timezone' => 'Europe/Riga',
            'phone' => '371',
            'alternate_names' => [
                'LV',
                'Latvia',
                'Latvija',
                'Latvijas Republika',
                'Latvijas Republikas',
                'Republic of Latvia',
                'The Republic of Latvia'
            ]
        ],
        'PW' => [
            'name' => 'Palau',
            'alpha2' => 'PW',
            'alpha3' => 'PLW',
            'numeric' => '585',
            'continent' => 'Oceania',
            'capital' => 'Ngerulmud',
            'timezone' => 'Pacific/Palau',
            'phone' => '680',
            'alternate_names' => [
                'Belau',
                'Beluu er a Belau',
                'PW',
                'Palau',
                'Republic of Palau',
                'The Republic of Palau'
            ]
        ],
        'GP' => [
            'name' => 'Guadeloupe',
            'alpha2' => 'GP',
            'alpha3' => 'GLP',
            'numeric' => '312',
            'continent' => 'North America',
            'capital' => 'Basse-Terre',
            'timezone' => 'America/Guadeloupe',
            'phone' => '590',
            'alternate_names' => [
                'GP',
                'Guadeloupe',
                'Gwadloup'
            ]
        ],
        'PH' => [
            'name' => 'Philippines',
            'alpha2' => 'PH',
            'alpha3' => 'PHL',
            'numeric' => '608',
            'continent' => 'Asia',
            'capital' => 'Manila',
            'timezone' => 'Asia/Manila',
            'phone' => '63',
            'alternate_names' => [
                'PH',
                'Philippines',
                'Philippines (the)',
                'Pilipinas',
                'Republic of the Philippines',
                'Repúblika ng Pilipinas',
                'The Republic of the Philippines'
            ]
        ],
        'GI' => [
            'name' => 'Gibraltar',
            'alpha2' => 'GI',
            'alpha3' => 'GIB',
            'numeric' => '292',
            'continent' => 'Europe',
            'capital' => 'Gibraltar',
            'timezone' => 'Europe/Gibraltar',
            'phone' => '350',
            'alternate_names' => [
                'GI',
                'Gibraltar'
            ]
        ],
        'DK' => [
            'name' => 'Denmark',
            'alpha2' => 'DK',
            'alpha3' => 'DNK',
            'numeric' => '208',
            'continent' => 'Europe',
            'capital' => 'Copenhagen',
            'timezone' => 'Europe/Copenhagen',
            'phone' => '45',
            'alternate_names' => [
                'DK',
                'Danmark',
                'Denmark',
                'Kingdom of Denmark',
                'Kongeriget Danmark',
                'The Kingdom of Denmark'
            ]
        ],
        'CM' => [
            'name' => 'Cameroon',
            'alpha2' => 'CM',
            'alpha3' => 'CMR',
            'numeric' => '120',
            'continent' => 'Africa',
            'capital' => 'Yaoundé',
            'timezone' => 'Africa/Douala',
            'phone' => '237',
            'alternate_names' => [
                'CM',
                'Cameroon',
                'Cameroun',
                'Republic of Cameroon',
                'République du Cameroun',
                'The Republic of Cameroon'
            ]
        ],
        'GN' => [
            'name' => 'Guinea',
            'alpha2' => 'GN',
            'alpha3' => 'GIN',
            'numeric' => '324',
            'continent' => 'Africa',
            'capital' => 'Conakry',
            'timezone' => 'Africa/Conakry',
            'phone' => '224',
            'alternate_names' => [
                'GN',
                'Guinea',
                'Guinée',
                'Republic of Guinea',
                'République de Guinée',
                'The Republic of Guinea'
            ]
        ],
        'BH' => [
            'name' => 'Bahrain',
            'alpha2' => 'BH',
            'alpha3' => 'BHR',
            'numeric' => '048',
            'continent' => 'Asia',
            'capital' => 'Manama',
            'timezone' => 'Asia/Bahrain',
            'phone' => '973',
            'alternate_names' => [
                'BH',
                'Bahrain',
                'Kingdom of Bahrain',
                'Mamlakat al-Baḥrayn',
                'The Kingdom of Bahrain',
                'مملكة البحرين',
                '‏البحرين'
            ]
        ],
        'SR' => [
            'name' => 'Suriname',
            'alpha2' => 'SR',
            'alpha3' => 'SUR',
            'numeric' => '740',
            'continent' => 'South America',
            'capital' => 'Paramaribo',
            'timezone' => 'America/Paramaribo',
            'phone' => '597',
            'alternate_names' => [
                'Republic of Suriname',
                'Republiek Suriname',
                'SR',
                'Sarnam',
                'Sranangron',
                'Suriname',
                'The Republic of Suriname'
            ]
        ],
        'CD' => [
            'name' => 'DR Congo',
            'alpha2' => 'CD',
            'alpha3' => 'COD',
            'numeric' => '180',
            'continent' => 'Africa',
            'capital' => 'Kinshasa',
            'timezone' => 'Africa/Kinshasa',
            'phone' => '243',
            'alternate_names' => [
                'CD',
                'Congo (DRC)',
                'Congo (Democratic Republic)',
                'Congo (the Democratic Republic of the)',
                'Congo, the Democratic Republic of the',
                'Congo-Kinshasa',
                'DR Congo',
                'DRC',
                'Democratic Republic of the Congo',
                'Ditunga dia Kongu wa Mungalaata',
                'Jamhuri ya Kidemokrasia ya Kongo',
                'RD Congo',
                'Repubilika ya Kongo Demokratiki',
                'Republiki ya Kongó Demokratiki',
                'République démocratique du Congo',
                'The Democratic Republic of the Congo'
            ]
        ],
        'SO' => [
            'name' => 'Somalia',
            'alpha2' => 'SO',
            'alpha3' => 'SOM',
            'numeric' => '706',
            'continent' => 'Africa',
            'capital' => 'Mogadishu',
            'timezone' => 'Africa/Mogadishu',
            'phone' => '252',
            'alternate_names' => [
                'Federal Republic of Somalia',
                'Jamhuuriyadda Federaalka Soomaaliya',
                'Jumhūriyyat aṣ-Ṣūmāl al-Fiderāliyya',
                'SO',
                'Somalia',
                'Soomaaliya',
                'aṣ-Ṣūmāl',
                'الصومال‎‎',
                'جمهورية الصومال‎‎'
            ]
        ],
        'CZ' => [
            'name' => 'Czechia',
            'alpha2' => 'CZ',
            'alpha3' => 'CZE',
            'numeric' => '203',
            'continent' => 'Europe',
            'capital' => 'Prague',
            'timezone' => 'Europe/Prague',
            'phone' => '420',
            'alternate_names' => [
                'CZ',
                'Czech Republic',
                'Czechia',
                'The Czech Republic',
                'Česko',
                'Česká republika'
            ]
        ],
        'NC' => [
            'name' => 'New Caledonia',
            'alpha2' => 'NC',
            'alpha3' => 'NCL',
            'numeric' => '540',
            'continent' => 'Oceania',
            'capital' => 'Nouméa',
            'timezone' => 'Pacific/Noumea',
            'phone' => '687',
            'alternate_names' => [
                'NC',
                'New Caledonia',
                'Nouvelle-Calédonie'
            ]
        ],
        'VU' => [
            'name' => 'Vanuatu',
            'alpha2' => 'VU',
            'alpha3' => 'VUT',
            'numeric' => '548',
            'continent' => 'Oceania',
            'capital' => 'Port Vila',
            'timezone' => 'Pacific/Efate',
            'phone' => '678',
            'alternate_names' => [
                'Republic of Vanuatu',
                'Ripablik blong Vanuatu',
                'République de Vanuatu',
                'The Republic of Vanuatu',
                'VU',
                'Vanuatu'
            ]
        ],
        'SH' => [
            'name' => 'Saint Helena, Ascension and Tristan da Cunha',
            'alpha2' => 'SH',
            'alpha3' => 'SHN',
            'numeric' => '654',
            'continent' => 'Africa',
            'capital' => 'Jamestown',
            'timezone' => 'Atlantic/St_Helena',
            'phone' => '29047',
            'alternate_names' => [
                'Saint Helena',
                'Saint Helena, Ascension and Tristan da Cunha',
                'St. Helena',
                'St. Helena, Ascension and Tristan da Cunha'
            ]
        ],
        'TG' => [
            'name' => 'Togo',
            'alpha2' => 'TG',
            'alpha3' => 'TGO',
            'numeric' => '768',
            'continent' => 'Africa',
            'capital' => 'Lomé',
            'timezone' => 'Africa/Lome',
            'phone' => '228',
            'alternate_names' => [
                'République Togolaise',
                'République togolaise',
                'TG',
                'The Togolese Republic',
                'Togo',
                'Togolese',
                'Togolese Republic'
            ]
        ],
        'VG' => [
            'name' => 'British Virgin Islands',
            'alpha2' => 'VG',
            'alpha3' => 'VGB',
            'numeric' => '092',
            'continent' => 'North America',
            'capital' => 'Road Town',
            'timezone' => 'America/Tortola',
            'phone' => '1284',
            'alternate_names' => [
                'British Virgin Islands',
                'VG',
                'Virgin Islands',
                'Virgin Islands (British)',
                'Virgin Islands, British'
            ]
        ],
        'KE' => [
            'name' => 'Kenya',
            'alpha2' => 'KE',
            'alpha3' => 'KEN',
            'numeric' => '404',
            'continent' => 'Africa',
            'capital' => 'Nairobi',
            'timezone' => 'Africa/Nairobi',
            'phone' => '254',
            'alternate_names' => [
                'Jamhuri ya Kenya',
                'KE',
                'Kenya',
                'Republic of Kenya',
                'The Republic of Kenya'
            ]
        ],
        'NU' => [
            'name' => 'Niue',
            'alpha2' => 'NU',
            'alpha3' => 'NIU',
            'numeric' => '570',
            'continent' => 'Oceania',
            'capital' => 'Alofi',
            'timezone' => 'Pacific/Niue',
            'phone' => '683',
            'alternate_names' => [
                'NU',
                'Niue',
                'Niuē'
            ]
        ],
        'HM' => [
            'name' => 'Heard Island and McDonald Islands',
            'alpha2' => 'HM',
            'alpha3' => 'HMD',
            'numeric' => '334',
            'continent' => 'Antarctica',
            'capital' => 'Unknown',
            'timezone' => 'Antarctica/Mawson',
            'phone' => 'Unknown',
            'alternate_names' => [
                'HM',
                'Heard Island and McDonald Islands'
            ]
        ],
        'RW' => [
            'name' => 'Rwanda',
            'alpha2' => 'RW',
            'alpha3' => 'RWA',
            'numeric' => '646',
            'continent' => 'Africa',
            'capital' => 'Kigali',
            'timezone' => 'Africa/Kigali',
            'phone' => '250',
            'alternate_names' => [
                'RW',
                'Republic of Rwanda',
                "Repubulika y'u Rwanda",
                'Rwanda',
                'République du Rwanda',
                'République rwandaise',
                'The Republic of Rwanda'
            ]
        ],
        'EE' => [
            'name' => 'Estonia',
            'alpha2' => 'EE',
            'alpha3' => 'EST',
            'numeric' => '233',
            'continent' => 'Europe',
            'capital' => 'Tallinn',
            'timezone' => 'Europe/Tallinn',
            'phone' => '372',
            'alternate_names' => [
                'EE',
                'Eesti',
                'Eesti Vabariik',
                'Estonia',
                'Republic of Estonia',
                'The Republic of Estonia'
            ]
        ],
        'RO' => [
            'name' => 'Romania',
            'alpha2' => 'RO',
            'alpha3' => 'ROU',
            'numeric' => '642',
            'continent' => 'Europe',
            'capital' => 'Bucharest',
            'timezone' => 'Europe/Bucharest',
            'phone' => '40',
            'alternate_names' => [
                'RO',
                'Romania',
                'România',
                'Roumania',
                'Rumania'
            ]
        ],
        'TT' => [
            'name' => 'Trinidad and Tobago',
            'alpha2' => 'TT',
            'alpha3' => 'TTO',
            'numeric' => '780',
            'continent' => 'North America',
            'capital' => 'Port of Spain',
            'timezone' => 'America/Port_of_Spain',
            'phone' => '1868',
            'alternate_names' => [
                'Republic of Trinidad and Tobago',
                'TT',
                'The Republic of Trinidad and Tobago',
                'Trinidad & Tobago',
                'Trinidad and Tobago'
            ]
        ],
        'GY' => [
            'name' => 'Guyana',
            'alpha2' => 'GY',
            'alpha3' => 'GUY',
            'numeric' => '328',
            'continent' => 'South America',
            'capital' => 'Georgetown',
            'timezone' => 'America/Guyana',
            'phone' => '592',
            'alternate_names' => [
                'Co-operative Republic of Guyana',
                'GY',
                'Guyana',
                'The Co-operative Republic of Guyana'
            ]
        ],
        'TL' => [
            'name' => 'Timor-Leste',
            'alpha2' => 'TL',
            'alpha3' => 'TLS',
            'numeric' => '626',
            'continent' => 'Oceania',
            'capital' => 'Dili',
            'timezone' => 'Asia/Dili',
            'phone' => '670',
            'alternate_names' => [
                'Democratic Republic of Timor-Leste',
                'East Timor',
                'República Democrática de Timor-Leste',
                'Repúblika Demokrátika Timór-Leste',
                'TL',
                'The Democratic Republic of Timor-Leste',
                'Timor Lorosae',
                'Timor-Leste',
                "Timór Lorosa'e",
                'Timór-Leste'
            ]
        ],
        'VN' => [
            'name' => 'Vietnam',
            'alpha2' => 'VN',
            'alpha3' => 'VNM',
            'numeric' => '704',
            'continent' => 'Asia',
            'capital' => 'Hanoi',
            'timezone' => 'Asia/Ho_Chi_Minh',
            'phone' => '84',
            'alternate_names' => [
                'Cộng hòa Xã hội chủ nghĩa Việt Nam',
                'Cộng hòa xã hội chủ nghĩa Việt Nam',
                'Socialist Republic of Vietnam',
                'The Socialist Republic of Viet Nam',
                'VN',
                'Viet Nam',
                'Vietnam',
                'Việt Nam'
            ]
        ],
        'UY' => [
            'name' => 'Uruguay',
            'alpha2' => 'UY',
            'alpha3' => 'URY',
            'numeric' => '858',
            'continent' => 'South America',
            'capital' => 'Montevideo',
            'timezone' => 'America/Montevideo',
            'phone' => '598',
            'alternate_names' => [
                'Oriental Republic of Uruguay',
                'República Oriental del Uruguay',
                'The Oriental Republic of Uruguay',
                'UY',
                'Uruguay'
            ]
        ],
        'VA' => [
            'name' => 'Vatican City',
            'alpha2' => 'VA',
            'alpha3' => 'VAT',
            'numeric' => '336',
            'continent' => 'Europe',
            'capital' => 'Vatican City',
            'timezone' => 'Europe/Vatican',
            'phone' => '390669879',
            'alternate_names' => [
                'Holy See (Vatican City State)',
                'Holy See (the)',
                'Stato della Città del Vaticano',
                'Status Civitatis Vaticanæ',
                'VA',
                'Vatican City',
                'Vatican City State',
                'Vaticano',
                'Vaticanæ'
            ]
        ],
        'HK' => [
            'name' => 'Hong Kong',
            'alpha2' => 'HK',
            'alpha3' => 'HKG',
            'numeric' => '344',
            'continent' => 'Asia',
            'capital' => 'City of Victoria',
            'timezone' => 'Asia/Hong_Kong',
            'phone' => '852',
            'alternate_names' => [
                'HK',
                'Hong Kong',
                "Hong Kong Special Administrative Region of the People's Republic of China",
                '中华人民共和国香港特别行政区',
                '香港'
            ]
        ],
        'AT' => [
            'name' => 'Austria',
            'alpha2' => 'AT',
            'alpha3' => 'AUT',
            'numeric' => '040',
            'continent' => 'Europe',
            'capital' => 'Vienna',
            'timezone' => 'Europe/Vienna',
            'phone' => '43',
            'alternate_names' => [
                'AT',
                'Austria',
                'Oesterreich',
                'Osterreich',
                'Republic of Austria',
                'Republik Österreich',
                'The Republic of Austria',
                'Österreich'
            ]
        ],
        'AG' => [
            'name' => 'Antigua and Barbuda',
            'alpha2' => 'AG',
            'alpha3' => 'ATG',
            'numeric' => '028',
            'continent' => 'North America',
            'capital' => "Saint John's",
            'timezone' => 'America/Antigua',
            'phone' => '1268',
            'alternate_names' => [
                'AG',
                'Antigua & Barbuda',
                'Antigua and Barbuda'
            ]
        ],
        'TM' => [
            'name' => 'Turkmenistan',
            'alpha2' => 'TM',
            'alpha3' => 'TKM',
            'numeric' => '795',
            'continent' => 'Asia',
            'capital' => 'Ashgabat',
            'timezone' => 'Asia/Ashgabat',
            'phone' => '993',
            'alternate_names' => [
                'TM',
                'Turkmenistan',
                'Türkmenistan',
                'Туркменистан',
                'Туркмения'
            ]
        ],
        'MZ' => [
            'name' => 'Mozambique',
            'alpha2' => 'MZ',
            'alpha3' => 'MOZ',
            'numeric' => '508',
            'continent' => 'Africa',
            'capital' => 'Maputo',
            'timezone' => 'Africa/Maputo',
            'phone' => '258',
            'alternate_names' => [
                'MZ',
                'Mozambique',
                'Moçambique',
                'Republic of Mozambique',
                'República de Moçambique',
                'The Republic of Mozambique'
            ]
        ],
        'PA' => [
            'name' => 'Panama',
            'alpha2' => 'PA',
            'alpha3' => 'PAN',
            'numeric' => '591',
            'continent' => 'North America',
            'capital' => 'Panama City',
            'timezone' => 'America/Panama',
            'phone' => '507',
            'alternate_names' => [
                'PA',
                'Panama',
                'Panamá',
                'Republic of Panama',
                'República de Panamá',
                'The Republic of Panama'
            ]
        ],
        'FM' => [
            'name' => 'Micronesia',
            'alpha2' => 'FM',
            'alpha3' => 'FSM',
            'numeric' => '583',
            'continent' => 'Oceania',
            'capital' => 'Palikir',
            'timezone' => 'Pacific/Chuuk',
            'phone' => '691',
            'alternate_names' => [
                'FM',
                'Federated States of Micronesia',
                'Micronesia',
                'Micronesia (Federated States of)',
                'Micronesia, Federated States of'
            ]
        ],
        'IE' => [
            'name' => 'Ireland',
            'alpha2' => 'IE',
            'alpha3' => 'IRL',
            'numeric' => '372',
            'continent' => 'Europe',
            'capital' => 'Dublin',
            'timezone' => 'Europe/Dublin',
            'phone' => '353',
            'alternate_names' => [
                'IE',
                'Ireland',
                'Poblacht na hÉireann',
                'Republic of Ireland',
                'Éire'
            ]
        ],
        'CW' => [
            'name' => 'Curaçao',
            'alpha2' => 'CW',
            'alpha3' => 'CUW',
            'numeric' => '531',
            'continent' => 'North America',
            'capital' => 'Willemstad',
            'timezone' => 'America/Curacao',
            'phone' => '599',
            'alternate_names' => [
                'CW',
                'Country of Curaçao',
                'Curacao',
                'Curaçao',
                'Kòrsou',
                'Land Curaçao',
                'Pais Kòrsou'
            ]
        ],
        'GF' => [
            'name' => 'French Guiana',
            'alpha2' => 'GF',
            'alpha3' => 'GUF',
            'numeric' => '254',
            'continent' => 'South America',
            'capital' => 'Cayenne',
            'timezone' => 'America/Cayenne',
            'phone' => '594',
            'alternate_names' => [
                'French Guiana',
                'GF',
                'Guiana',
                'Guyane',
                'Guyane française'
            ]
        ],
        'NO' => [
            'name' => 'Norway',
            'alpha2' => 'NO',
            'alpha3' => 'NOR',
            'numeric' => '578',
            'continent' => 'Europe',
            'capital' => 'Oslo',
            'timezone' => 'Europe/Oslo',
            'phone' => '47',
            'alternate_names' => [
                'Kingdom of Norway',
                'Kongeriket Noreg',
                'Kongeriket Norge',
                'NO',
                'Noreg',
                'Norge',
                'Norgga',
                'Norgga gonagasriika',
                'Norway',
                'The Kingdom of Norway'
            ]
        ],
        'AX' => [
            'name' => 'Åland Islands',
            'alpha2' => 'AX',
            'alpha3' => 'ALA',
            'numeric' => '248',
            'continent' => 'Europe',
            'capital' => 'Mariehamn',
            'timezone' => 'Europe/Mariehamn',
            'phone' => '35818',
            'alternate_names' => [
                'AX',
                'Aaland',
                'Ahvenanmaa',
                'Aland',
                'Landskapet Åland',
                'Åland',
                'Åland Islands'
            ]
        ],
        'CF' => [
            'name' => 'Central African Republic',
            'alpha2' => 'CF',
            'alpha3' => 'CAF',
            'numeric' => '140',
            'continent' => 'Africa',
            'capital' => 'Bangui',
            'timezone' => 'Africa/Bangui',
            'phone' => '236',
            'alternate_names' => [
                'Bêafrîka',
                'CF',
                'Central African Republic',
                'Central African Republic (the)',
                'Ködörösêse tî Bêafrîka',
                'République centrafricaine',
                'The Central African Republic'
            ]
        ],
        'BF' => [
            'name' => 'Burkina Faso',
            'alpha2' => 'BF',
            'alpha3' => 'BFA',
            'numeric' => '854',
            'continent' => 'Africa',
            'capital' => 'Ouagadougou',
            'timezone' => 'Africa/Ouagadougou',
            'phone' => '226',
            'alternate_names' => [
                'BF',
                'Burkina Faso',
                'République du Burkina'
            ]
        ],
        'ER' => [
            'name' => 'Eritrea',
            'alpha2' => 'ER',
            'alpha3' => 'ERI',
            'numeric' => '232',
            'continent' => 'Africa',
            'capital' => 'Asmara',
            'timezone' => 'Africa/Asmara',
            'phone' => '291',
            'alternate_names' => [
                'Dawlat Iritriyá',
                'ER',
                'Eritrea',
                'Iritriyā',
                'State of Eritrea',
                'The State of Eritrea',
                'ʾErtrā',
                'إرتريا‎',
                'دولة إرتريا',
                'ሃገረ ኤርትራ',
                'ኤርትራ'
            ]
        ],
        'TZ' => [
            'name' => 'Tanzania',
            'alpha2' => 'TZ',
            'alpha3' => 'TZA',
            'numeric' => '834',
            'continent' => 'Africa',
            'capital' => 'Dodoma',
            'timezone' => 'Africa/Dar_es_Salaam',
            'phone' => '255',
            'alternate_names' => [
                'Jamhuri ya Muungano wa Tanzania',
                'TZ',
                'Tanzania',
                'Tanzania, United Republic of',
                'The United Republic of Tanzania',
                'United Republic of Tanzania'
            ]
        ],
        'KR' => [
            'name' => 'South Korea',
            'alpha2' => 'KR',
            'alpha3' => 'KOR',
            'numeric' => '410',
            'continent' => 'Asia',
            'capital' => 'Seoul',
            'timezone' => 'Asia/Seoul',
            'phone' => '82',
            'alternate_names' => [
                'KR',
                'Korea (the Republic of)',
                'Korea, Republic of',
                'Republic of Korea',
                'South Korea',
                'The Republic of Korea',
                '남조선',
                '남한',
                '대한민국',
                '한국'
            ]
        ],
        'JO' => [
            'name' => 'Jordan',
            'alpha2' => 'JO',
            'alpha3' => 'JOR',
            'numeric' => '400',
            'continent' => 'Asia',
            'capital' => 'Amman',
            'timezone' => 'Asia/Amman',
            'phone' => '962',
            'alternate_names' => [
                'Hashemite Kingdom of Jordan',
                'JO',
                'Jordan',
                'The Hashemite Kingdom of Jordan',
                'al-Mamlakah al-Urdunīyah al-Hāshimīyah',
                'الأردن',
                'المملكة الأردنية الهاشمية'
            ]
        ],
        'MR' => [
            'name' => 'Mauritania',
            'alpha2' => 'MR',
            'alpha3' => 'MRT',
            'numeric' => '478',
            'continent' => 'Africa',
            'capital' => 'Nouakchott',
            'timezone' => 'Africa/Nouakchott',
            'phone' => '222',
            'alternate_names' => [
                'Islamic Republic of Mauritania',
                'MR',
                'Mauritania',
                'The Islamic Republic of Mauritania',
                'al-Jumhūriyyah al-ʾIslāmiyyah al-Mūrītāniyyah',
                'الجمهورية الإسلامية الموريتانية',
                'موريتانيا'
            ]
        ],
        'LT' => [
            'name' => 'Lithuania',
            'alpha2' => 'LT',
            'alpha3' => 'LTU',
            'numeric' => '440',
            'continent' => 'Europe',
            'capital' => 'Vilnius',
            'timezone' => 'Europe/Vilnius',
            'phone' => '370',
            'alternate_names' => [
                'LT',
                'Lietuva',
                'Lietuvos Respublika',
                'Lietuvos Respublikos',
                'Lithuania',
                'Republic of Lithuania',
                'The Republic of Lithuania'
            ]
        ],
        'UM' => [
            'name' => 'United States Minor Outlying Islands',
            'alpha2' => 'UM',
            'alpha3' => 'UMI',
            'numeric' => '581',
            'continent' => 'Oceania',
            'capital' => 'Washington DC',
            'timezone' => 'Pacific/Midway',
            'phone' => '268',
            'alternate_names' => [
                'U.S. Outlying Islands',
                'UM',
                'United States Minor Outlying Islands',
                'United States Minor Outlying Islands (the)'
            ]
        ],
        'SK' => [
            'name' => 'Slovakia',
            'alpha2' => 'SK',
            'alpha3' => 'SVK',
            'numeric' => '703',
            'continent' => 'Europe',
            'capital' => 'Bratislava',
            'timezone' => 'Europe/Bratislava',
            'phone' => '421',
            'alternate_names' => [
                'SK',
                'Slovak Republic',
                'Slovakia',
                'Slovensko',
                'Slovenská republika',
                'The Slovak Republic'
            ]
        ],
        'AO' => [
            'name' => 'Angola',
            'alpha2' => 'AO',
            'alpha3' => 'AGO',
            'numeric' => '024',
            'continent' => 'Africa',
            'capital' => 'Luanda',
            'timezone' => 'Africa/Luanda',
            'phone' => '244',
            'alternate_names' => [
                'AO',
                'Angola',
                'Republic of Angola',
                'República de Angola',
                'The Republic of Angola',
                "ʁɛpublika de an'ɡɔla"
            ]
        ],
        'KZ' => [
            'name' => 'Kazakhstan',
            'alpha2' => 'KZ',
            'alpha3' => 'KAZ',
            'numeric' => '398',
            'continent' => 'Asia',
            'capital' => 'Nur-Sultan',
            'timezone' => 'Asia/Almaty',
            'phone' => '767',
            'alternate_names' => [
                'KZ',
                'Kazakhstan',
                'Qazaqstan',
                'Qazaqstan Respublïkası',
                'Republic of Kazakhstan',
                'Respublika Kazakhstan',
                'The Republic of Kazakhstan',
                'Казахстан',
                'Республика Казахстан',
                'Қазақстан',
                'Қазақстан Республикасы'
            ]
        ],
        'MD' => [
            'name' => 'Moldova',
            'alpha2' => 'MD',
            'alpha3' => 'MDA',
            'numeric' => '498',
            'continent' => 'Europe',
            'capital' => 'Chișinău',
            'timezone' => 'Europe/Chisinau',
            'phone' => '373',
            'alternate_names' => [
                'MD',
                'Moldova',
                'Moldova (the Republic of)',
                'Moldova, Republic of',
                'Republic of Moldova',
                'Republica Moldova',
                'The Republic of Moldova'
            ]
        ],
        'ML' => [
            'name' => 'Mali',
            'alpha2' => 'ML',
            'alpha3' => 'MLI',
            'numeric' => '466',
            'continent' => 'Africa',
            'capital' => 'Bamako',
            'timezone' => 'Africa/Bamako',
            'phone' => '223',
            'alternate_names' => [
                'ML',
                'Mali',
                'Republic of Mali',
                'République du Mali',
                'The Republic of Mali'
            ]
        ],
        'FK' => [
            'name' => 'Falkland Islands',
            'alpha2' => 'FK',
            'alpha3' => 'FLK',
            'numeric' => '238',
            'continent' => 'South America',
            'capital' => 'Stanley',
            'timezone' => 'Atlantic/Stanley',
            'phone' => '500',
            'alternate_names' => [
                'FK',
                'Falkland Islands',
                'Falkland Islands (Islas Malvinas)',
                'Falkland Islands (Malvinas)',
                'Falkland Islands (the) [Malvinas]',
                'Islas Malvinas'
            ]
        ],
        'AM' => [
            'name' => 'Armenia',
            'alpha2' => 'AM',
            'alpha3' => 'ARM',
            'numeric' => '051',
            'continent' => 'Asia',
            'capital' => 'Yerevan',
            'timezone' => 'Asia/Yerevan',
            'phone' => '374',
            'alternate_names' => [
                'AM',
                'Armenia',
                'Hayastan',
                'Republic of Armenia',
                'The Republic of Armenia',
                'Հայաստան',
                'Հայաստանի Հանրապետություն'
            ]
        ],
        'WS' => [
            'name' => 'Samoa',
            'alpha2' => 'WS',
            'alpha3' => 'WSM',
            'numeric' => '882',
            'continent' => 'Oceania',
            'capital' => 'Apia',
            'timezone' => 'Pacific/Apia',
            'phone' => '685',
            'alternate_names' => [
                'Independent State of Samoa',
                'Malo Saʻoloto Tutoʻatasi o Sāmoa',
                'Samoa',
                'Sāmoa',
                'The Independent State of Samoa',
                'WS'
            ]
        ],
        'JE' => [
            'name' => 'Jersey',
            'alpha2' => 'JE',
            'alpha3' => 'JEY',
            'numeric' => '832',
            'continent' => 'Europe',
            'capital' => 'Saint Helier',
            'timezone' => 'Europe/Jersey',
            'phone' => '44',
            'alternate_names' => [
                'Bailiwick of Jersey',
                'Bailliage de Jersey',
                'Bailliage dé Jèrri',
                'JE',
                'Jersey',
                'Jèrri'
            ]
        ],
        'JP' => [
            'name' => 'Japan',
            'alpha2' => 'JP',
            'alpha3' => 'JPN',
            'numeric' => '392',
            'continent' => 'Asia',
            'capital' => 'Tokyo',
            'timezone' => 'Asia/Tokyo',
            'phone' => '81',
            'alternate_names' => [
                'JP',
                'Japan',
                'Nihon',
                'Nippon',
                '日本'
            ]
        ],
        'BO' => [
            'name' => 'Bolivia',
            'alpha2' => 'BO',
            'alpha3' => 'BOL',
            'numeric' => '068',
            'continent' => 'South America',
            'capital' => 'Sucre',
            'timezone' => 'America/La_Paz',
            'phone' => '591',
            'alternate_names' => [
                'BO',
                'Bolivia',
                'Bolivia (Plurinational State of)',
                'Bolivia, Plurinational State of',
                'Buliwya',
                'Buliwya Mamallaqta',
                'Estado Plurinacional de Bolivia',
                'Plurinational State of Bolivia',
                'Tetã Volívia',
                'The Plurinational State of Bolivia',
                'Volívia',
                'Wuliwya',
                'Wuliwya Suyu'
            ]
        ],
        'CL' => [
            'name' => 'Chile',
            'alpha2' => 'CL',
            'alpha3' => 'CHL',
            'numeric' => '152',
            'continent' => 'South America',
            'capital' => 'Santiago',
            'timezone' => 'America/Punta_Arenas',
            'phone' => '56',
            'alternate_names' => [
                'CL',
                'Chile',
                'Republic of Chile',
                'República de Chile',
                'The Republic of Chile'
            ]
        ],
        'US' => [
            'name' => 'United States',
            'alpha2' => 'US',
            'alpha3' => 'USA',
            'numeric' => '840',
            'continent' => 'North America',
            'capital' => 'Washington, D.C.',
            'timezone' => 'America/Adak',
            'phone' => '1201202203205206207208209210212213214215216217218219220224225227228229231234239240248251252253254256260262267269270272274276281283301302303304305307308309310312313314315316317318319320321323325327330331334336337339346347351352360361364380385386401402404405406407408409410412413414415417419423424425430432434435440442443447458463464469470475478479480484501502503504505507508509510512513515516517518520530531534539540541551559561562563564567570571573574575580585586601602603605606607608609610612614615616617618619620623626628629630631636641646650651657660661662667669678681682701702703704706707708712713714715716717718719720724725727730731732734737740743747754757760762763765769770772773774775779781785786801802803804805806808810812813814815816817818828830831832843845847848850854856857858859860862863864865870872878901903904906907908909910912913914915916917918919920925928929930931934936937938940941947949951952954956959970971972973975978979980984985989',
            'alternate_names' => [
                'The United States of America',
                'US',
                'USA',
                'United States',
                'United States of America',
                'United States of America (the)'
            ]
        ],
        'VC' => [
            'name' => 'Saint Vincent and the Grenadines',
            'alpha2' => 'VC',
            'alpha3' => 'VCT',
            'numeric' => '670',
            'continent' => 'North America',
            'capital' => 'Kingstown',
            'timezone' => 'America/St_Vincent',
            'phone' => '1784',
            'alternate_names' => [
                'Saint Vincent and the Grenadines',
                'St Vincent',
                'St. Vincent & Grenadines',
                'VC'
            ]
        ],
        'BM' => [
            'name' => 'Bermuda',
            'alpha2' => 'BM',
            'alpha3' => 'BMU',
            'numeric' => '060',
            'continent' => 'North America',
            'capital' => 'Hamilton',
            'timezone' => 'Atlantic/Bermuda',
            'phone' => '1441',
            'alternate_names' => [
                'BM',
                'Bermuda',
                'Somers Isles',
                'The Bermudas',
                'The Islands of Bermuda'
            ]
        ],
        'SC' => [
            'name' => 'Seychelles',
            'alpha2' => 'SC',
            'alpha3' => 'SYC',
            'numeric' => '690',
            'continent' => 'Africa',
            'capital' => 'Victoria',
            'timezone' => 'Indian/Mahe',
            'phone' => '248',
            'alternate_names' => [
                'Repiblik Sesel',
                'Republic of Seychelles',
                'République des Seychelles',
                'SC',
                'Sesel',
                'Seychelles',
                'The Republic of Seychelles'
            ]
        ],
        'IO' => [
            'name' => 'British Indian Ocean Territory',
            'alpha2' => 'IO',
            'alpha3' => 'IOT',
            'numeric' => '086',
            'continent' => 'Asia',
            'capital' => 'Diego Garcia',
            'timezone' => 'Indian/Chagos',
            'phone' => '246',
            'alternate_names' => [
                'British Indian Ocean Territory',
                'British Indian Ocean Territory (the)',
                'IO'
            ]
        ],
        'GT' => [
            'name' => 'Guatemala',
            'alpha2' => 'GT',
            'alpha3' => 'GTM',
            'numeric' => '320',
            'continent' => 'North America',
            'capital' => 'Guatemala City',
            'timezone' => 'America/Guatemala',
            'phone' => '502',
            'alternate_names' => [
                'GT',
                'Guatemala',
                'Republic of Guatemala',
                'República de Guatemala',
                'The Republic of Guatemala'
            ]
        ],
        'EC' => [
            'name' => 'Ecuador',
            'alpha2' => 'EC',
            'alpha3' => 'ECU',
            'numeric' => '218',
            'continent' => 'South America',
            'capital' => 'Quito',
            'timezone' => 'America/Guayaquil',
            'phone' => '593',
            'alternate_names' => [
                'EC',
                'Ecuador',
                'Republic of Ecuador',
                'República del Ecuador',
                'The Republic of Ecuador'
            ]
        ],
        'MQ' => [
            'name' => 'Martinique',
            'alpha2' => 'MQ',
            'alpha3' => 'MTQ',
            'numeric' => '474',
            'continent' => 'North America',
            'capital' => 'Fort-de-France',
            'timezone' => 'America/Martinique',
            'phone' => '596',
            'alternate_names' => [
                'MQ',
                'Martinique'
            ]
        ],
        'TJ' => [
            'name' => 'Tajikistan',
            'alpha2' => 'TJ',
            'alpha3' => 'TJK',
            'numeric' => '762',
            'continent' => 'Asia',
            'capital' => 'Dushanbe',
            'timezone' => 'Asia/Dushanbe',
            'phone' => '992',
            'alternate_names' => [
                'Republic of Tajikistan',
                'TJ',
                'Tajikistan',
                'The Republic of Tajikistan',
                'Toçikiston',
                'Çumhuriyi Toçikiston',
                'Республика Таджикистан',
                'Таджикистан',
                'Тоҷикистон',
                'Ҷумҳурии Тоҷикистон'
            ]
        ],
        'MT' => [
            'name' => 'Malta',
            'alpha2' => 'MT',
            'alpha3' => 'MLT',
            'numeric' => '470',
            'continent' => 'Europe',
            'capital' => 'Valletta',
            'timezone' => 'Europe/Malta',
            'phone' => '356',
            'alternate_names' => [
                'MT',
                'Malta',
                "Repubblika ta ' Malta",
                "Repubblika ta' Malta",
                'Republic of Malta',
                'The Republic of Malta'
            ]
        ],
        'GM' => [
            'name' => 'Gambia',
            'alpha2' => 'GM',
            'alpha3' => 'GMB',
            'numeric' => '270',
            'continent' => 'Africa',
            'capital' => 'Banjul',
            'timezone' => 'Africa/Banjul',
            'phone' => '220',
            'alternate_names' => [
                'GM',
                'Gambia',
                'Gambia (the)',
                'Republic of the Gambia',
                'The Gambia',
                'The Republic of The Gambia'
            ]
        ],
        'NG' => [
            'name' => 'Nigeria',
            'alpha2' => 'NG',
            'alpha3' => 'NGA',
            'numeric' => '566',
            'continent' => 'Africa',
            'capital' => 'Abuja',
            'timezone' => 'Africa/Lagos',
            'phone' => '234',
            'alternate_names' => [
                'Federal Republic of Nigeria',
                'NG',
                'Naíjíríà',
                'Nigeria',
                'Nijeriya',
                'The Federal Republic of Nigeria'
            ]
        ],
        'BS' => [
            'name' => 'Bahamas',
            'alpha2' => 'BS',
            'alpha3' => 'BHS',
            'numeric' => '044',
            'continent' => 'North America',
            'capital' => 'Nassau',
            'timezone' => 'America/Nassau',
            'phone' => '1242',
            'alternate_names' => [
                'BS',
                'Bahamas',
                'Bahamas (the)',
                'Commonwealth of the Bahamas',
                'The Bahamas',
                'The Commonwealth of The Bahamas'
            ]
        ],
        'XK' => [
            'name' => 'Kosovo',
            'alpha2' => 'XK',
            'alpha3' => 'UNK',
            'numeric' => 'Unknown',
            'continent' => 'Europe',
            'capital' => 'Pristina',
            'timezone' => 'Africa/Algiers',
            'phone' => '383',
            'alternate_names' => [
                'Kosova',
                'Kosovo',
                'Republic of Kosovo',
                'Republika e Kosovës',
                'The Republic of Kosovo',
                'XK',
                'Косово',
                'Република Косово'
            ]
        ],
        'KW' => [
            'name' => 'Kuwait',
            'alpha2' => 'KW',
            'alpha3' => 'KWT',
            'numeric' => '414',
            'continent' => 'Asia',
            'capital' => 'Kuwait City',
            'timezone' => 'Asia/Kuwait',
            'phone' => '965',
            'alternate_names' => [
                'Dawlat al-Kuwait',
                'KW',
                'Kuwait',
                'State of Kuwait',
                'The State of Kuwait',
                'الكويت',
                'دولة الكويت'
            ]
        ],
        'MV' => [
            'name' => 'Maldives',
            'alpha2' => 'MV',
            'alpha3' => 'MDV',
            'numeric' => '462',
            'continent' => 'Asia',
            'capital' => 'Malé',
            'timezone' => 'Indian/Maldives',
            'phone' => '960',
            'alternate_names' => [
                'Dhivehi Raajjeyge Jumhooriyya',
                'MV',
                'Maldive Islands',
                'Maldives',
                'Republic of the Maldives',
                'The Republic of Maldives',
                'ދިވެހިރާއްޖޭގެ',
                'ދިވެހިރާއްޖޭގެ ޖުމްހޫރިއްޔާ'
            ]
        ],
        'SS' => [
            'name' => 'South Sudan',
            'alpha2' => 'SS',
            'alpha3' => 'SSD',
            'numeric' => '728',
            'continent' => 'Africa',
            'capital' => 'Juba',
            'timezone' => 'Africa/Juba',
            'phone' => '211',
            'alternate_names' => [
                'Republic of South Sudan',
                'SS',
                'South Sudan',
                'The Republic of South Sudan'
            ]
        ],
        'IR' => [
            'name' => 'Iran',
            'alpha2' => 'IR',
            'alpha3' => 'IRN',
            'numeric' => '364',
            'continent' => 'Asia',
            'capital' => 'Tehran',
            'timezone' => 'Asia/Tehran',
            'phone' => '98',
            'alternate_names' => [
                'IR',
                'Iran',
                'Iran (Islamic Republic of)',
                'Iran, Islamic Republic of',
                'Islamic Republic of Iran',
                'Jomhuri-ye Eslāmi-ye Irān',
                'The Islamic Republic of Iran',
                'ایران',
                'جمهوری اسلامی ایران'
            ]
        ],
        'AL' => [
            'name' => 'Albania',
            'alpha2' => 'AL',
            'alpha3' => 'ALB',
            'numeric' => '008',
            'continent' => 'Europe',
            'capital' => 'Tirana',
            'timezone' => 'Europe/Tirane',
            'phone' => '355',
            'alternate_names' => [
                'AL',
                'Albania',
                'Republic of Albania',
                'Republika e Shqipërisë',
                'Shqipnia',
                'Shqipëri',
                'Shqipëria',
                'The Republic of Albania'
            ]
        ],
        'BR' => [
            'name' => 'Brazil',
            'alpha2' => 'BR',
            'alpha3' => 'BRA',
            'numeric' => '076',
            'continent' => 'South America',
            'capital' => 'Brasília',
            'timezone' => 'America/Araguaina',
            'phone' => '55',
            'alternate_names' => [
                'BR',
                'Brasil',
                'Brazil',
                'Federative Republic of Brazil',
                'República Federativa do Brasil',
                'The Federative Republic of Brazil'
            ]
        ],
        'RS' => [
            'name' => 'Serbia',
            'alpha2' => 'RS',
            'alpha3' => 'SRB',
            'numeric' => '688',
            'continent' => 'Europe',
            'capital' => 'Belgrade',
            'timezone' => 'Europe/Belgrade',
            'phone' => '381',
            'alternate_names' => [
                'RS',
                'Republic of Serbia',
                'Republika Srbija',
                'Serbia',
                'Srbija',
                'The Republic of Serbia',
                'Република Србија',
                'Србија'
            ]
        ],
        'BZ' => [
            'name' => 'Belize',
            'alpha2' => 'BZ',
            'alpha3' => 'BLZ',
            'numeric' => '084',
            'continent' => 'North America',
            'capital' => 'Belmopan',
            'timezone' => 'America/Belize',
            'phone' => '501',
            'alternate_names' => [
                'BZ',
                'Belice',
                'Belize'
            ]
        ],
        'MM' => [
            'name' => 'Myanmar',
            'alpha2' => 'MM',
            'alpha3' => 'MMR',
            'numeric' => '104',
            'continent' => 'Asia',
            'capital' => 'Naypyidaw',
            'timezone' => 'Asia/Yangon',
            'phone' => '95',
            'alternate_names' => [
                'Burma',
                'MM',
                'Myanmar',
                'Myanmar (Burma)',
                'Pyidaunzu Thanmăda Myăma Nainngandaw',
                'Republic of the Union of Myanmar',
                'The Republic of the Union of Myanmar',
                'ပြည်ထောင်စု သမ္မတ မြန်မာနိုင်ငံတော်',
                'မြန်မာ'
            ]
        ],
        'BT' => [
            'name' => 'Bhutan',
            'alpha2' => 'BT',
            'alpha3' => 'BTN',
            'numeric' => '064',
            'continent' => 'Asia',
            'capital' => 'Thimphu',
            'timezone' => 'Asia/Thimphu',
            'phone' => '975',
            'alternate_names' => [
                'BT',
                'Bhutan',
                'Kingdom of Bhutan',
                'The Kingdom of Bhutan',
                'འབྲུག་ཡུལ་',
                'འབྲུག་རྒྱལ་ཁབ་'
            ]
        ],
        'VE' => [
            'name' => 'Venezuela',
            'alpha2' => 'VE',
            'alpha3' => 'VEN',
            'numeric' => '862',
            'continent' => 'South America',
            'capital' => 'Caracas',
            'timezone' => 'America/Caracas',
            'phone' => '58',
            'alternate_names' => [
                'Bolivarian Republic of Venezuela',
                'República Bolivariana de Venezuela',
                'The Bolivarian Republic of Venezuela',
                'VE',
                'Venezuela',
                'Venezuela (Bolivarian Republic of)',
                'Venezuela, Bolivarian Republic of'
            ]
        ],
        'LR' => [
            'name' => 'Liberia',
            'alpha2' => 'LR',
            'alpha3' => 'LBR',
            'numeric' => '430',
            'continent' => 'Africa',
            'capital' => 'Monrovia',
            'timezone' => 'Africa/Monrovia',
            'phone' => '231',
            'alternate_names' => [
                'LR',
                'Liberia',
                'Republic of Liberia',
                'The Republic of Liberia'
            ]
        ],
        'JM' => [
            'name' => 'Jamaica',
            'alpha2' => 'JM',
            'alpha3' => 'JAM',
            'numeric' => '388',
            'continent' => 'North America',
            'capital' => 'Kingston',
            'timezone' => 'America/Jamaica',
            'phone' => '1876',
            'alternate_names' => [
                'JM',
                'Jamaica'
            ]
        ],
        'PL' => [
            'name' => 'Poland',
            'alpha2' => 'PL',
            'alpha3' => 'POL',
            'numeric' => '616',
            'continent' => 'Europe',
            'capital' => 'Warsaw',
            'timezone' => 'Europe/Warsaw',
            'phone' => '48',
            'alternate_names' => [
                'PL',
                'Poland',
                'Polska',
                'Republic of Poland',
                'Rzeczpospolita Polska',
                'The Republic of Poland'
            ]
        ],
        'KY' => [
            'name' => 'Cayman Islands',
            'alpha2' => 'KY',
            'alpha3' => 'CYM',
            'numeric' => '136',
            'continent' => 'North America',
            'capital' => 'George Town',
            'timezone' => 'America/Cayman',
            'phone' => '1345',
            'alternate_names' => [
                'Cayman Islands',
                'Cayman Islands (the)',
                'KY'
            ]
        ],
        'BN' => [
            'name' => 'Brunei',
            'alpha2' => 'BN',
            'alpha3' => 'BRN',
            'numeric' => '096',
            'continent' => 'Asia',
            'capital' => 'Bandar Seri Begawan',
            'timezone' => 'Asia/Brunei',
            'phone' => '673',
            'alternate_names' => [
                'BN',
                'Brunei',
                'Brunei Darussalam',
                'Nation of Brunei',
                'Nation of Brunei, Abode Damai',
                'Nation of Brunei, Abode of Peace',
                'Negara Brunei Darussalam',
                'the Abode of Peace'
            ]
        ],
        'KM' => [
            'name' => 'Comoros',
            'alpha2' => 'KM',
            'alpha3' => 'COM',
            'numeric' => '174',
            'continent' => 'Africa',
            'capital' => 'Moroni',
            'timezone' => 'Indian/Comoro',
            'phone' => '269',
            'alternate_names' => [
                'Comores',
                'Comoros',
                'Comoros (the)',
                'KM',
                'Komori',
                'The Union of the Comoros',
                'Udzima wa Komori',
                'Union des Comores',
                'Union of the Comoros',
                'al-Ittiḥād al-Qumurī',
                'الاتحاد القمري',
                'القمر‎'
            ]
        ],
        'GU' => [
            'name' => 'Guam',
            'alpha2' => 'GU',
            'alpha3' => 'GUM',
            'numeric' => '316',
            'continent' => 'Oceania',
            'capital' => 'Hagåtña',
            'timezone' => 'Pacific/Guam',
            'phone' => '1671',
            'alternate_names' => [
                'GU',
                'Guam',
                'Guåhån'
            ]
        ],
        'TO' => [
            'name' => 'Tonga',
            'alpha2' => 'TO',
            'alpha3' => 'TON',
            'numeric' => '776',
            'continent' => 'Oceania',
            'capital' => "Nuku'alofa",
            'timezone' => 'Pacific/Tongatapu',
            'phone' => '676',
            'alternate_names' => [
                'Kingdom of Tonga',
                'TO',
                'The Kingdom of Tonga',
                'Tonga'
            ]
        ],
        'KI' => [
            'name' => 'Kiribati',
            'alpha2' => 'KI',
            'alpha3' => 'KIR',
            'numeric' => '296',
            'continent' => 'Oceania',
            'capital' => 'South Tarawa',
            'timezone' => 'Pacific/Kanton',
            'phone' => '686',
            'alternate_names' => [
                'Independent and Sovereign Republic of Kiribati',
                'KI',
                'Kiribati',
                'Republic of Kiribati',
                'Ribaberiki Kiribati',
                'The Republic of Kiribati'
            ]
        ],
        'GH' => [
            'name' => 'Ghana',
            'alpha2' => 'GH',
            'alpha3' => 'GHA',
            'numeric' => '288',
            'continent' => 'Africa',
            'capital' => 'Accra',
            'timezone' => 'Africa/Accra',
            'phone' => '233',
            'alternate_names' => [
                'GH',
                'Ghana',
                'Republic of Ghana',
                'The Republic of Ghana'
            ]
        ],
        'TD' => [
            'name' => 'Chad',
            'alpha2' => 'TD',
            'alpha3' => 'TCD',
            'numeric' => '148',
            'continent' => 'Africa',
            'capital' => "N'Djamena",
            'timezone' => 'Africa/Ndjamena',
            'phone' => '235',
            'alternate_names' => [
                'Chad',
                'Republic of Chad',
                'République du Tchad',
                'TD',
                'Tchad',
                'The Republic of Chad',
                'تشاد‎',
                'جمهورية تشاد'
            ]
        ],
        'ZW' => [
            'name' => 'Zimbabwe',
            'alpha2' => 'ZW',
            'alpha3' => 'ZWE',
            'numeric' => '716',
            'continent' => 'Africa',
            'capital' => 'Harare',
            'timezone' => 'Africa/Harare',
            'phone' => '263',
            'alternate_names' => [
                'Republic of Zimbabwe',
                'The Republic of Zimbabwe',
                'ZW',
                'Zimbabwe'
            ]
        ],
        'MF' => [
            'name' => 'Saint Martin',
            'alpha2' => 'MF',
            'alpha3' => 'MAF',
            'numeric' => '663',
            'continent' => 'North America',
            'capital' => 'Marigot',
            'timezone' => 'America/Marigot',
            'phone' => '590',
            'alternate_names' => [
                'Collectivity of Saint Martin',
                'Collectivité de Saint-Martin',
                'MF',
                'Saint Martin',
                'Saint Martin (French part)',
                'Saint-Martin',
                'St. Martin'
            ]
        ],
        'MN' => [
            'name' => 'Mongolia',
            'alpha2' => 'MN',
            'alpha3' => 'MNG',
            'numeric' => '496',
            'continent' => 'Asia',
            'capital' => 'Ulan Bator',
            'timezone' => 'Asia/Choibalsan',
            'phone' => '976',
            'alternate_names' => [
                'MN',
                'Mongolia',
                'Монгол улс'
            ]
        ],
        'PT' => [
            'name' => 'Portugal',
            'alpha2' => 'PT',
            'alpha3' => 'PRT',
            'numeric' => '620',
            'continent' => 'Europe',
            'capital' => 'Lisbon',
            'timezone' => 'Atlantic/Azores',
            'phone' => '351',
            'alternate_names' => [
                'PT',
                'Portugal',
                'Portuguesa',
                'Portuguese Republic',
                'República Portuguesa',
                'República português',
                'The Portuguese Republic'
            ]
        ],
        'AS' => [
            'name' => 'American Samoa',
            'alpha2' => 'AS',
            'alpha3' => 'ASM',
            'numeric' => '016',
            'continent' => 'Oceania',
            'capital' => 'Pago Pago',
            'timezone' => 'Pacific/Pago_Pago',
            'phone' => '1684',
            'alternate_names' => [
                'AS',
                'Amelika Sāmoa',
                'American Samoa',
                'Amerika Sāmoa',
                'Sāmoa Amelika'
            ]
        ],
        'CG' => [
            'name' => 'Republic of the Congo',
            'alpha2' => 'CG',
            'alpha3' => 'COG',
            'numeric' => '178',
            'continent' => 'Africa',
            'capital' => 'Brazzaville',
            'timezone' => 'Africa/Brazzaville',
            'phone' => '242',
            'alternate_names' => [
                'CG',
                'Congo',
                'Congo (Republic)',
                'Congo (the)',
                'Congo-Brazzaville',
                'Repubilika ya Kongo',
                'Republic of the Congo',
                'Republíki ya Kongó',
                'République du Congo',
                'The Republic of the Congo'
            ]
        ],
        'BE' => [
            'name' => 'Belgium',
            'alpha2' => 'BE',
            'alpha3' => 'BEL',
            'numeric' => '056',
            'continent' => 'Europe',
            'capital' => 'Brussels',
            'timezone' => 'Europe/Brussels',
            'phone' => '32',
            'alternate_names' => [
                'BE',
                'Belgie',
                'Belgien',
                'Belgique',
                'Belgium',
                'België',
                'Kingdom of Belgium',
                'Koninkrijk België',
                'Königreich Belgien',
                'Royaume de Belgique',
                'The Kingdom of Belgium'
            ]
        ],
        'IL' => [
            'name' => 'Israel',
            'alpha2' => 'IL',
            'alpha3' => 'ISR',
            'numeric' => '376',
            'continent' => 'Asia',
            'capital' => 'Jerusalem',
            'timezone' => 'Asia/Jerusalem',
            'phone' => '972',
            'alternate_names' => [
                'IL',
                'Israel',
                "Medīnat Yisrā'el",
                'State of Israel',
                'The State of Israel',
                'ישראל',
                'מדינת ישראל',
                'إسرائيل',
                'دولة إسرائيل'
            ]
        ],
        'NZ' => [
            'name' => 'New Zealand',
            'alpha2' => 'NZ',
            'alpha3' => 'NZL',
            'numeric' => '554',
            'continent' => 'Oceania',
            'capital' => 'Wellington',
            'timezone' => 'Pacific/Auckland',
            'phone' => '64',
            'alternate_names' => [
                'Aotearoa',
                'Aotearoa New Zealand',
                'NZ',
                'New Zealand'
            ]
        ],
        'NI' => [
            'name' => 'Nicaragua',
            'alpha2' => 'NI',
            'alpha3' => 'NIC',
            'numeric' => '558',
            'continent' => 'North America',
            'capital' => 'Managua',
            'timezone' => 'America/Managua',
            'phone' => '505',
            'alternate_names' => [
                'NI',
                'Nicaragua',
                'Republic of Nicaragua',
                'República de Nicaragua',
                'The Republic of Nicaragua'
            ]
        ],
        'AI' => [
            'name' => 'Anguilla',
            'alpha2' => 'AI',
            'alpha3' => 'AIA',
            'numeric' => '660',
            'continent' => 'North America',
            'capital' => 'The Valley',
            'timezone' => 'America/Anguilla',
            'phone' => '1264',
            'alternate_names' => [
                'AI',
                'Anguilla'
            ]
        ]
    ];

    /**
     * The country entries
     *
     * @var array<string, Country>
     */
    protected $entries;

    /**
     * Indexes to help with lookups
     *
     * @var array
     */
    protected $indexes = [];

    /**
     * The constructor
     */
    public function __construct()
    {
        $this->entries = [];
        foreach (Countries::$map as $key => $data) {
            foreach ($data['alternate_names'] as $name) {
                $this->index($name, $key);
            }
            $this->index($data['alpha2'], $key);
            $this->index($data['alpha3'], $key);
            $this->index($data['numeric'], $key);
            $this->entries[$key] = new Country($data['name'], $data['alpha2'], $data['alpha3'], $data['numeric'], $data['continent'], $data['capital'], $data['timezone'], $data['phone'], $data['alternate_names']);
        }
    }

    /**
     * Get a country using any of the name or codes
     *
     * @param string $input
     *
     * @return Country|null
     */
    public function get(string $input): ?Country
    {
        return $this->entries[$this->index($input) ?? ''] ?? null;
    }

    /**
     * Get a country using a callback method
     *
     * @param callable $callback
     *
     * @return Country|null
     */
    public function getFromCallback(callable $callback): ?Country
    {
        foreach ($this as $country) {
            if ($callback($country) === true) {
                return $country;
            }
        }
        return null;
    }

    /**
     * {@inheritDoc}
     *
     * @see IteratorAggregate::getIterator
     *
     * @return ArrayIterator<string, Country>
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->entries);
    }

    /**
     * {@inheritDoc}
     *
     * @see ArrayAccess::offsetExists()
     */
    public function offsetExists($offset): bool
    {
        return $this->get($offset) !== null;
    }

    /**
     * {@inheritDoc}
     *
     * @see ArrayAccess::offsetGet()
     *
     * @return Country|null
     */
    public function offsetGet($offset): ?Country
    {
        return $this->get($offset);
    }

    /**
     * {@inheritDoc}
     *
     * @see ArrayAccess::offsetSet()
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        throw new RuntimeException('Countries iterator is read-only');
    }

    /**
     * {@inheritDoc}
     *
     * @see ArrayAccess::offsetUnset()
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        throw new RuntimeException('Countries iterator is read-only');
    }

    /**
     * Set or get an index key
     *
     * @param string $search
     * @param string|null $key
     *
     * @return string|null
     */
    protected function index(string $search, ?string $key = null): ?string
    {
        $search = strtolower(trim($search));
        if ($key !== null) {
            $this->indexes[$search] = $key;
            return $key;
        }
        return $this->indexes[$search] ?? null;
    }
}
