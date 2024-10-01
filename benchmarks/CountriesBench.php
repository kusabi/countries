<?php

namespace Kusabi\Countries\Benchmarks;

use Kusabi\Countries\Countries;

/**
 * @Revs(10000)
 * @Iterations(30)
 */
class CountriesBench
{
    protected $countries;

    public function __construct()
    {
        $this->countries = new Countries();
    }

    public function benchGetFirstName()
    {
        $this->countries->get('South Georgia');
    }

    public function benchGetFirstNumeric()
    {
        $this->countries->get('239');
    }

    public function benchGetLastName()
    {
        $this->countries->get('Anguilla');
    }

    public function benchGetLastNumeric()
    {
        $this->countries->get('660');
    }

}