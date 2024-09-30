<?php

namespace Kusabi\Countries\Tests;

use Kusabi\Countries\Countries;
use Kusabi\Countries\Country;
use PHPUnit\Framework\TestCase;

class CountriesTest extends TestCase
{
    /**
     * Data provider data from compiled
     *
     * @return array
     */
    public static function provideCompiled(): array
    {
        return static::loadSourceArray(__DIR__.'/../meta/data/compiled.json');
    }

    /**
     * Data provider data from countrycode.org
     *
     * @return array
     *
     * @see https://countrycode.org/countryCode/downloadCountryCodes
     */
    public static function provideCountryCodeOrg(): array
    {
        return static::loadSourceArray(__DIR__.'/../meta/data/rest-countries.json');
    }

    /**
     * Data provider for a map of country codes to countries according to google
     *
     * @return array
     *
     * @see https://developers.google.com/hotels/hotel-prices/dev-guide/country-codes
     */
    public static function provideGoogleCodes(): array
    {
        return static::loadSourceArray(__DIR__.'/../meta/data/google.json');
    }

    /**
     * Data provider for a map of alpha-2, alpha-3 and numeric country codes from IBAN
     *
     * @return array
     *
     * @see https://www.iban.com/country-codes
     */
    public static function provideIbanCodes(): array
    {
        return static::loadSourceArray(__DIR__.'/../meta/data/iban.json');
    }

    /**
     * Load an array from a source filename
     *
     * @param string $filename
     *
     * @return array
     */
    protected static function loadSourceArray(string $filename): array
    {
        return json_decode(file_get_contents($filename), true);
    }

    /**
     * @dataProvider provideCountryCodeOrg
     */
    public function testCountryCodeOrgCodes(
        string $name,
        string $alpha2,
        string $alpha3,
        string $numeric,
        string $continent,
        string $capital,
        string $timezone,
        string $phone,
        array $alternate_names
    ) {
        $countries = new Countries();

        foreach (['short', 'full'] as $fetchType) {
            $fromName = $fetchType === 'full' ? $countries->getFromName($name) : $countries->get($name);
            $this->assertSame($name, $fromName->getName());
            $this->assertTrue($fromName->usesName($name));
            $this->assertSame($alpha2, $fromName->getAlpha2());
            $this->assertSame($alpha3, $fromName->getAlpha3());
            $this->assertSame($numeric, $fromName->getNumeric());
            $this->assertSame($phone, $fromName->getPhone());
            $this->assertSame($continent, $fromName->getContinent());
            $this->assertSame($capital, $fromName->getCapital());
            $this->assertSame($timezone, $fromName->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromName->getAlternativeNames()));

            $fromAlpha2 = $fetchType === 'full' ? $countries->getFromAlpha2($alpha2) : $countries->get($alpha2);
            $this->assertSame($name, $fromAlpha2->getName());
            $this->assertTrue($fromAlpha2->usesName($name));
            $this->assertSame($alpha2, $fromAlpha2->getAlpha2());
            $this->assertSame($alpha3, $fromAlpha2->getAlpha3());
            $this->assertSame($numeric, $fromAlpha2->getNumeric());
            $this->assertSame($phone, $fromAlpha2->getPhone());
            $this->assertSame($continent, $fromAlpha2->getContinent());
            $this->assertSame($capital, $fromAlpha2->getCapital());
            $this->assertSame($timezone, $fromAlpha2->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromAlpha2->getAlternativeNames()));

            $fromAlpha3 = $fetchType === 'full' ? $countries->getFromAlpha3($alpha3) : $countries->get($alpha3);
            $this->assertSame($name, $fromAlpha3->getName());
            $this->assertTrue($fromAlpha3->usesName($name));
            $this->assertSame($alpha2, $fromAlpha3->getAlpha2());
            $this->assertSame($alpha3, $fromAlpha3->getAlpha3());
            $this->assertSame($numeric, $fromAlpha3->getNumeric());
            $this->assertSame($phone, $fromAlpha3->getPhone());
            $this->assertSame($continent, $fromAlpha3->getContinent());
            $this->assertSame($capital, $fromAlpha3->getCapital());
            $this->assertSame($timezone, $fromAlpha3->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromAlpha3->getAlternativeNames()));

            $fromNumeric = $fetchType === 'full' ? $countries->getFromNumeric($numeric) : $countries->get($numeric);
            $this->assertSame($name, $fromNumeric->getName());
            $this->assertTrue($fromNumeric->usesName($name));
            $this->assertSame($alpha2, $fromNumeric->getAlpha2());
            $this->assertSame($alpha3, $fromNumeric->getAlpha3());
            $this->assertSame($numeric, $fromNumeric->getNumeric());
            $this->assertSame($phone, $fromNumeric->getPhone());
            $this->assertSame($continent, $fromNumeric->getContinent());
            $this->assertSame($capital, $fromNumeric->getCapital());
            $this->assertSame($timezone, $fromNumeric->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromNumeric->getAlternativeNames()));
        }
    }

    /**
     * @dataProvider provideCompiled
     */
    public function testCompiled(
        string $name,
        string $alpha2,
        string $alpha3,
        string $numeric,
        string $continent,
        string $capital,
        string $timezone,
        string $phone,
        array $alternate_names
    ) {
        $countries = new Countries();

        $outputArray = [
            'name' => $name,
            'alpha2' => $alpha2,
            'alpha3' => $alpha3,
            'numeric' => $numeric,
            'continent' => $continent,
            'capital' => $capital,
            'timezone' => $timezone,
            'phone' => $phone,
            'alternate_names' => $alternate_names
        ];

        foreach (['short', 'full'] as $fetchType) {
            $fromName = $fetchType === 'full' ? $countries->getFromName($name) : $countries->get($name);
            $this->assertSame($name, $fromName->getName());
            $this->assertTrue($fromName->usesName($name));
            $this->assertSame($alpha2, $fromName->getAlpha2());
            $this->assertSame($alpha3, $fromName->getAlpha3());
            $this->assertSame($numeric, $fromName->getNumeric());
            $this->assertSame($phone, $fromName->getPhone());
            $this->assertSame($continent, $fromName->getContinent());
            $this->assertSame($capital, $fromName->getCapital());
            $this->assertSame($timezone, $fromName->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromName->getAlternativeNames()));
            $this->assertSame($outputArray, $fromName->toArray());
            $this->assertSame($outputArray, $fromName->jsonSerialize());

            $fromAlpha2 = $fetchType === 'full' ? $countries->getFromAlpha2($alpha2) : $countries->get($alpha2);
            $this->assertSame($name, $fromAlpha2->getName());
            $this->assertTrue($fromAlpha2->usesName($name));
            $this->assertSame($alpha2, $fromAlpha2->getAlpha2());
            $this->assertSame($alpha3, $fromAlpha2->getAlpha3());
            $this->assertSame($numeric, $fromAlpha2->getNumeric());
            $this->assertSame($phone, $fromAlpha2->getPhone());
            $this->assertSame($continent, $fromAlpha2->getContinent());
            $this->assertSame($capital, $fromAlpha2->getCapital());
            $this->assertSame($timezone, $fromAlpha2->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromAlpha2->getAlternativeNames()));
            $this->assertSame($outputArray, $fromAlpha2->toArray());
            $this->assertSame($outputArray, $fromAlpha2->jsonSerialize());

            $fromAlpha3 = $fetchType === 'full' ? $countries->getFromAlpha3($alpha3) : $countries->get($alpha3);
            $this->assertSame($name, $fromAlpha3->getName());
            $this->assertTrue($fromAlpha3->usesName($name));
            $this->assertSame($alpha2, $fromAlpha3->getAlpha2());
            $this->assertSame($alpha3, $fromAlpha3->getAlpha3());
            $this->assertSame($numeric, $fromAlpha3->getNumeric());
            $this->assertSame($phone, $fromAlpha3->getPhone());
            $this->assertSame($continent, $fromAlpha3->getContinent());
            $this->assertSame($capital, $fromAlpha3->getCapital());
            $this->assertSame($timezone, $fromAlpha3->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromAlpha3->getAlternativeNames()));
            $this->assertSame($outputArray, $fromAlpha3->toArray());
            $this->assertSame($outputArray, $fromAlpha3->jsonSerialize());

            $fromNumeric = $fetchType === 'full' ? $countries->getFromNumeric($numeric) : $countries->get($numeric);
            $this->assertSame($name, $fromNumeric->getName());
            $this->assertTrue($fromNumeric->usesName($name));
            $this->assertSame($alpha2, $fromNumeric->getAlpha2());
            $this->assertSame($alpha3, $fromNumeric->getAlpha3());
            $this->assertSame($numeric, $fromNumeric->getNumeric());
            $this->assertSame($phone, $fromNumeric->getPhone());
            $this->assertSame($continent, $fromNumeric->getContinent());
            $this->assertSame($capital, $fromNumeric->getCapital());
            $this->assertSame($timezone, $fromNumeric->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $fromNumeric->getAlternativeNames()));
            $this->assertSame($outputArray, $fromNumeric->toArray());
            $this->assertSame($outputArray, $fromNumeric->jsonSerialize());
        }

        $fromArray = Country::fromArray($fromNumeric->toArray());
        $this->assertSame($name, $fromArray->getName());
        $this->assertTrue($fromArray->usesName($name));
        $this->assertSame($alpha2, $fromArray->getAlpha2());
        $this->assertSame($alpha3, $fromArray->getAlpha3());
        $this->assertSame($numeric, $fromArray->getNumeric());
        $this->assertSame($phone, $fromArray->getPhone());
        $this->assertSame($continent, $fromArray->getContinent());
        $this->assertSame($capital, $fromArray->getCapital());
        $this->assertSame($timezone, $fromArray->getTimezone());
        $this->assertSame($alternate_names, array_intersect($alternate_names, $fromArray->getAlternativeNames()));
        $this->assertSame($outputArray, $fromArray->toArray());
        $this->assertSame($outputArray, $fromArray->jsonSerialize());
    }

    public function testGetFromAlpha2Null()
    {
        $countries = new Countries();
        $this->assertSame(null, $countries->getFromAlpha2('not-real'));
    }

    public function testGetFromAlpha3Null()
    {
        $countries = new Countries();
        $this->assertSame(null, $countries->getFromAlpha3('not-real'));
    }

    public function testGetFromNameNull()
    {
        $countries = new Countries();
        $this->assertSame(null, $countries->getFromName('not-real'));
    }

    public function testGetFromNumericNull()
    {
        $countries = new Countries();
        $this->assertSame(null, $countries->getFromNumeric('not-real'));
    }

    /**
     * @dataProvider provideGoogleCodes
     */
    public function testGoogleCodes(
        string $name,
        string $alpha2,
        string $alpha3,
        string $numeric,
        string $continent,
        string $capital,
        string $timezone,
        string $phone,
        array $alternate_names
    ) {
        $countries = new Countries();

        $fromAlpha2 = $countries->getFromAlpha2($alpha2);
        $this->assertSame($alpha2, $fromAlpha2->getAlpha2());
        $this->assertTrue($fromAlpha2->usesName($name));

        $fromName = $countries->getFromName($name);
        $this->assertSame($alpha2, $fromName->getAlpha2());
        $this->assertTrue($fromName->usesName($name));
    }

    /**
     * @dataProvider provideIbanCodes
     */
    public function testIbanCodes(
        string $name,
        string $alpha2,
        string $alpha3,
        string $numeric,
        string $continent,
        string $capital,
        string $timezone,
        string $phone,
        array $alternate_names
    ) {
        $countries = new Countries();

        $numeric = str_pad($numeric, 3, '0', STR_PAD_LEFT);

        $fromName = $countries->getFromName($name);
        $this->assertSame($alpha2, $fromName->getAlpha2());
        $this->assertSame($alpha3, $fromName->getAlpha3());
        $this->assertSame($numeric, $fromName->getNumeric());
        $this->assertTrue($fromName->usesName($name));

        $fromAlpha2 = $countries->getFromAlpha2($alpha2);
        $this->assertSame($alpha2, $fromAlpha2->getAlpha2());
        $this->assertSame($alpha3, $fromAlpha2->getAlpha3());
        $this->assertSame($numeric, $fromAlpha2->getNumeric());
        $this->assertTrue($fromAlpha2->usesName($name));

        $fromAlpha3 = $countries->getFromAlpha3($alpha3);
        $this->assertSame($alpha2, $fromAlpha3->getAlpha2());
        $this->assertSame($alpha3, $fromAlpha3->getAlpha3());
        $this->assertSame($numeric, $fromAlpha3->getNumeric());
        $this->assertTrue($fromAlpha3->usesName($name));

        $fromNumeric = $countries->getFromNumeric($numeric);
        $this->assertSame($alpha2, $fromNumeric->getAlpha2());
        $this->assertSame($alpha3, $fromNumeric->getAlpha3());
        $this->assertSame($numeric, $fromNumeric->getNumeric());
        $this->assertTrue($fromNumeric->usesName($name));
    }

    public function testOffsetExists()
    {
        $countries = new Countries();

        $this->assertTrue(isset($countries['gb']));
        $this->assertTrue(isset($countries['united kingdom']));
        $this->assertTrue(isset($countries['great britain']));
        $this->assertFalse(isset($countries['not-real']));
    }

    public function testOffsetGet()
    {
        $countries = new Countries();

        foreach (['gb', 'United Kingdom', 'united kingdom', 'great britain'] as $key) {
            $uk = $countries[$key];
            $this->assertSame('GB', $uk->getAlpha2());
            $this->assertSame('United Kingdom', $uk->getName());
        }

        $this->assertSame(null, $countries['not-real']);
    }

    public function testOffsetSet()
    {
        $countries = new Countries();

        $this->expectException(\RuntimeException::class);
        $countries['gb'] = 'anything';
    }

    public function testOffsetUnset()
    {
        $countries = new Countries();

        $this->expectException(\RuntimeException::class);
        unset($countries['gb']);
    }
}
