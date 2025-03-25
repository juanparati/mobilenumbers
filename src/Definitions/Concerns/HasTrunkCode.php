<?php

namespace Juanparati\MobileNumbers\Definitions\Concerns;

/**
 * Trait used for definitions that use trunk code.
 */
trait HasTrunkCode
{

    /**
     * Strip the international prefix code.
     *
     * @param $number
     * @return string
     */
    public function stripCountryCode($number): string
    {
        $number_stripped = parent::stripCountryCode($number);

        return $number === $number_stripped ? $number : '0' . $number_stripped;
    }


    /**
     * Add the country code prefix to the mobile phone number.
     *
     * @param $number
     * @param string $prefix
     * @return string
     */
    public function addCountryCode($number, $prefix): string
    {
        if ($this->hasValidCountryCode($number))
            return $number;

        // Remove the initial 0
        // @see: https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164C-2011-PDF-E.pdf
        //
        // The '0' is used on all domestic calls, including in the same city, but is omitted when dialling
        // from other countries.

        return $prefix . $this->country_code . substr($number, 1);
    }

}
