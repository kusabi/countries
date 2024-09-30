<?php

namespace Kusabi\Countries;

use JsonSerializable;

class Country implements JsonSerializable
{
    /**
     * The countries iban alpha2 code
     *
     * @var string
     */
    protected $alpha2;

    /**
     * The countries iban alpha3 code
     *
     * @var string
     */
    protected $alpha3;

    /**
     * The countries alternate names
     *
     * @var array
     */
    protected $alternate_names = [];

    /**
     * The countries capital
     *
     * @var string
     */
    protected $capital;

    /**
     * The countries continent
     *
     * @var string
     */
    protected $continent;

    /**
     * The countries name
     *
     * @var string
     */
    protected $name;

    /**
     * The countries iban numeric code
     *
     * @var string
     */
    protected $numeric;

    /**
     * The countries phone
     *
     * @var string
     */
    protected $phone;

    /**
     * The countries timezone
     *
     * @var string
     */
    protected $timezone;

    /**
     * @param string $name
     * @param string $alpha2
     * @param string $alpha3
     * @param string $numeric
     * @param string $continent
     * @param string $capital
     * @param string $timezone
     * @param string $phone
     * @param array $alternate_names
     */
    public function __construct(
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
        $this->name = $name;
        $this->alpha2 = $alpha2;
        $this->alpha3 = $alpha3;
        $this->numeric = $numeric;
        $this->continent = $continent;
        $this->capital = $capital;
        $this->timezone = $timezone;
        $this->phone = $phone;
        $this->alternate_names = $alternate_names;
    }

    /**
     * Create an instance from the toArray output
     *
     * @param array $data
     *
     * @return Country
     */
    public static function fromArray(array $data): Country
    {
        return new Country(
            $data['name'],
            $data['alpha2'],
            $data['alpha3'],
            $data['numeric'],
            $data['continent'],
            $data['capital'],
            $data['timezone'],
            $data['phone'],
            $data['alternate_names']
        );
    }

    /**
     * Get the iban alpha2 code
     *
     * @return string
     */
    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    /**
     * Get the iban alpha3 code
     *
     * @return string
     */
    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    /**
     * Get the alternative names
     *
     * @return array
     */
    public function getAlternativeNames(): array
    {
        return $this->alternate_names;
    }

    /**
     * Get the capital
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * Get the continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }

    /**
     * Get the name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the iban numeric code
     *
     * @return string
     */
    public function getNumeric(): string
    {
        return $this->numeric;
    }

    /**
     * Get the phone
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Get the timezone
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * {@inheritDoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Convert to an array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'alpha2' => $this->alpha2,
            'alpha3' => $this->alpha3,
            'numeric' => $this->numeric,
            'continent' => $this->continent,
            'capital' => $this->capital,
            'timezone' => $this->timezone,
            'phone' => $this->phone,
            'alternate_names' => array_map(function (string $value) {
                return mb_convert_encoding($value, 'UTF-8', 'UTF-8');
            }, $this->alternate_names),
        ];
    }

    /**
     * Does this country use this name
     *
     * @param string $name
     *
     * @return bool
     */
    public function usesName(string $name): bool
    {
        foreach ($this->alternate_names as $alternate_name) {
            if (strcasecmp($name, $alternate_name) === 0) {
                return true;
            }
        }
        return false;
    }
}
