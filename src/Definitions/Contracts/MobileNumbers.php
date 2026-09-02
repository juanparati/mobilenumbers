<?php

namespace Juanparati\MobileNumbers\Definitions\Contracts;


interface MobileNumbers
{

    /**
     * Validate phone number.
     *
     * @param string $number string
     * @return bool
     */
    public function isValid(string $number) : bool;


    /**
     * Validate if phone number has a valid international prefix.
     *
     * @param string $number
     * @return bool
     */
    public function hasValidCountryCode(string $number) : bool;


    /**
     * Stripe the phone number.
     *
     * @param string $number
     * @return string
     */
    public function stripCountryCode(string $number) : string;


    /**
     * Add the country code to a number.
     *
     * @param string $number
     * @param string $prefix
     * @return string
     */
    public function addCountryCode(string $number, string $prefix) : string;


    /**
     * Get definition info.
     *
     * @return array
     */
    public function getDefinition() : array;


}
