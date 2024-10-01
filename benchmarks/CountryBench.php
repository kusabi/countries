<?php

namespace Kusabi\Countries\Benchmarks;

use Kusabi\Countries\Country;

/**
 * @Revs(10000)
 * @Iterations(30)
 */
class CountryBench
{
    protected $country;

    public function __construct()
    {
        $this->country = new Country('Test', 'ts', 'tst', '001', 'Test Continent', 'Test Capital', 'timezone', '44', [
            'Test Country',
            'The country of greater Testing'
        ]);
    }

    public function benchGetAlpha2()
    {
        $this->country->getAlpha2();
    }

    public function benchGetAlpha3()
    {
        $this->country->getAlpha3();
    }

    public function benchGetAlternativeNames()
    {
        $this->country->getAlternativeNames();
    }

    public function benchGetCapital()
    {
        $this->country->getCapital();
    }

    public function benchGetContinent()
    {
        $this->country->getContinent();
    }

    public function benchGetName()
    {
        $this->country->getName();
    }

    public function benchGetNumeric()
    {
        $this->country->getNumeric();
    }

    public function benchGetPhone()
    {
        $this->country->getPhone();
    }

    public function benchGetTimezone()
    {
        $this->country->getTimezone();
    }

    public function benchJsonSerialize()
    {
        $this->country->jsonSerialize();
    }

    public function benchToArray()
    {
        $this->country->toArray();
    }

    public function benchUsesName()
    {
        $this->country->usesName('test');
    }
}