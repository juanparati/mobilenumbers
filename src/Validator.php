<?php

namespace Juanparati\MobileNumbers;



use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;
use Juanparati\MobileNumbers\Exceptions\ValidatorException;

/**
 * Validator helper class.
 *
 * @package Juanparati\MobileNumbers
 */
class Validator
{

    /**
     * @var MobileNumbersContract
     */
    protected MobileNumbersContract $definition;


    /**
     * Helper instance.
     *
     * @var Helper
     */
    public Helper $helper;


    /**
     * Validator constructor.
     *
     * @param string $countryCode
     * @throws ValidatorException
     */
    public function __construct(string $countryCode)
    {
        $definitionClass = Register::get($countryCode);

        if (!$definitionClass)
            throw new ValidatorException("Class definition for $countryCode not found", 0);

        $this->definition = new $definitionClass();

        $this->helper = new Helper();
    }


    /**
     * Factory method.
     *
     * @param string $countryCode
     * @return static
     * @throws ValidatorException
     */
    public static function country(string $countryCode) : Validator
    {
        return new static($countryCode);
    }


    /**
     * Check if mobile phone number is valid.
     *
     * @param string $number
     * @return bool
     */
    public function isValid(string $number) : bool
    {
        return $this->definition->isValid($number);
    }


    /**
     * Strip the international prefix code.
     *
     * @param $number
     * @return string
     */
    public function stripCountryCode(string $number) : string
    {
        return $this->definition->stripCountryCode($number);
    }


    /**
     * Check if number has a valid international prefix.
     *
     * @param string $number
     * @return bool
     */
    public function hasValidCountryCode(string $number) : bool
    {
        return $this->definition->hasValidCountryCode($number);
    }


    /**
     * Add the country code prefix to the mobile phone number.
     *
     * @param string $number
     * @param string $prefix
     * @return string
     */
    public function addCountryCode(string $number, string $prefix = '+') : string
    {
        return $this->definition->addCountryCode($number, $prefix);
    }


    /**
     * Return definition info.
     *
     * @return array
     */
    public function getDefinition() : array
    {
        return $this->definition->getDefinition();
    }

}
