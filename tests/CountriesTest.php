<?php

namespace Kusabi\Countries\Tests;

use ArrayIterator;
use Kusabi\Countries\Countries;
use Kusabi\Countries\Country;
use PHPUnit\Framework\TestCase;
use RuntimeException;

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

        $lookups = [
            $countries->get($name),
            $countries->get($alpha2),
            $countries->get($alpha3),
            $countries->get($numeric),
            Country::fromArray($countries->get($name)->toArray()),
            $countries->getFromCallback(function (Country $country) use ($name) {
                return $country->usesName($name);
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha2) {
                return $country->getAlpha2() === $alpha2;
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha3) {
                return $country->getAlpha3() === $alpha3;
            }),
            $countries->getFromCallback(function (Country $country) use ($numeric) {
                return $country->getNumeric() === $numeric;
            })
        ];

        foreach ($lookups as $country) {
            $this->assertSame($name, $country->getName());
            $this->assertTrue($country->usesName($name));
            $this->assertSame($alpha2, $country->getAlpha2());
            $this->assertSame($alpha3, $country->getAlpha3());
            $this->assertSame($numeric, $country->getNumeric());
            $this->assertSame($phone, $country->getPhone());
            $this->assertSame($continent, $country->getContinent());
            $this->assertSame($capital, $country->getCapital());
            $this->assertSame($timezone, $country->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $country->getAlternativeNames()));
            $this->assertSame($outputArray, $country->toArray());
            $this->assertSame($outputArray, $country->jsonSerialize());
        }
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

        $lookups = [
            $countries->get($name),
            $countries->get($alpha2),
            $countries->get($alpha3),
            $countries->get($numeric),
            Country::fromArray($countries->get($name)->toArray()),
            $countries->getFromCallback(function (Country $country) use ($name) {
                return $country->usesName($name);
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha2) {
                return $country->getAlpha2() === $alpha2;
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha3) {
                return $country->getAlpha3() === $alpha3;
            }),
            $countries->getFromCallback(function (Country $country) use ($numeric) {
                return $country->getNumeric() === $numeric;
            })
        ];

        foreach ($lookups as $country) {
            $this->assertSame($name, $country->getName());
            $this->assertTrue($country->usesName($name));
            $this->assertSame($alpha2, $country->getAlpha2());
            $this->assertSame($alpha3, $country->getAlpha3());
            $this->assertSame($numeric, $country->getNumeric());
            $this->assertSame($phone, $country->getPhone());
            $this->assertSame($continent, $country->getContinent());
            $this->assertSame($capital, $country->getCapital());
            $this->assertSame($timezone, $country->getTimezone());
            $this->assertSame($alternate_names, array_intersect($alternate_names, $country->getAlternativeNames()));
        }
    }

    public function testGetFromCallbackNull()
    {
        $countries = new Countries();
        $fromCallback = $countries->getFromCallback(function (Country $country) {
            return $country->getNumeric() === 'not-real';
        });
        $this->assertNull($fromCallback);
    }

    public function testGetNull()
    {
        $countries = new Countries();
        $this->assertSame(null, $countries->get('not-real'));
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

        $lookups = [
            $countries->get($name),
            $countries->get($alpha2),
            Country::fromArray($countries->get($name)->toArray()),
            $countries->getFromCallback(function (Country $country) use ($name) {
                return $country->usesName($name);
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha2) {
                return $country->getAlpha2() === $alpha2;
            })
        ];

        foreach ($lookups as $country) {
            $this->assertSame($alpha2, $country->getAlpha2());
            $this->assertTrue($country->usesName($name));
        }
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

        $lookups = [
            $countries->get($name),
            $countries->get($alpha2),
            $countries->get($alpha3),
            $countries->get($numeric),
            Country::fromArray($countries->get($name)->toArray()),
            $countries->getFromCallback(function (Country $country) use ($name) {
                return $country->usesName($name);
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha2) {
                return $country->getAlpha2() === $alpha2;
            }),
            $countries->getFromCallback(function (Country $country) use ($alpha3) {
                return $country->getAlpha3() === $alpha3;
            }),
            $countries->getFromCallback(function (Country $country) use ($numeric) {
                return $country->getNumeric() === $numeric;
            })
        ];

        foreach ($lookups as $country) {
            $this->assertSame($alpha2, $country->getAlpha2());
            $this->assertSame($alpha3, $country->getAlpha3());
            $this->assertSame($numeric, $country->getNumeric());
            $this->assertTrue($country->usesName($name));
        }
    }

    public function testIterable()
    {
        $countries = new Countries();
        $this->assertIsIterable($countries);
        $this->assertInstanceOf(ArrayIterator::class, $countries->getIterator());
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

        $this->expectException(RuntimeException::class);
        $countries['gb'] = 'anything';
    }

    public function testOffsetUnset()
    {
        $countries = new Countries();

        $this->expectException(RuntimeException::class);
        unset($countries['gb']);
    }

    public function testUsesNameFalse()
    {
        $countries = new Countries();
        $country = $countries['gb'];
        $this->assertSame('United Kingdom', $country->getName());
        $this->assertFalse($country->usesName('not-real'));
    }
}
