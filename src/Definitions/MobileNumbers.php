<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

abstract class MobileNumbers implements MobileNumbersContract
{

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $countryAlphaCode;


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @see https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164C-2011-PDF-E.pdf
     * @var string
     */
    protected $countryCode;


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $countryFlag;


    /**
     * Valid prefix codes (Do not mistake with International prefix codes).
     *
     * @var array
     */
    protected $validPrefixCodes = [];


    /**
     * Validates a mobile phone number.
     *
     * @param string $number
     * @return bool
     */
    public function isValid($number) : bool
    {
        return $this->validate($number);
    }


    /**
     * Strip the international prefix code.
     *
     * @param $number
     * @return string
     */
    public function stripCountryCode($number) : string
    {
        $prefix = '+' . $this->countryCode;

        if (strpos($number, $prefix) === 0)
            return substr($number, strlen($prefix));

        $prefix = '00' . $this->countryCode;

        if (strpos($number, $prefix) === 0)
            return substr($number, strlen($prefix));

        return $number;
    }


    /**
     * Check if number has a valid international prefix.
     *
     * @param $number
     * @return bool
     */
    public function hasValidCountryCode($number) : bool
    {
        return $this->stripCountryCode($number) !== $number;
    }


    /**
     * Add the country code prefix to the mobile phone number.
     *
     * @param $number
     * @param string $prefix (Default '+')
     * @return string
     */
    public function addCountryCode($number, $prefix) : string
    {
        if ($this->hasValidCountryCode($number))
            return $number;

        return $prefix . $this->countryCode . $number;
    }


    /**
     * Return definition info.
     *
     * @return array
     */
    public function getDefinition(): array
    {
        return [
            'country_alpha_code' => $this->countryAlphaCode,
            'country_code'       => '+' . $this->countryCode,
            'country_flag'       => $this->countryFlag,
            'valid_prefix_codes' => $this->validPrefixCodes
        ];
    }


    /**
     * Validate phone number.
     *
     * @param $number
     * @return bool
     */
    protected function validate($number) : bool
    {
        // Remove international prefix code.
        $number = $this->stripCountryCode($number);

        foreach ($this->validPrefixCodes as $prefixCode => $lengths)
        {
            if (strpos($number, (string) $prefixCode) === 0)
            {
                $numberLength = strlen($number) - strlen($prefixCode);

                if ($numberLength >= $lengths['min'] && $numberLength <= $lengths['max'])
                    return true;
            }
        }

        return false;
    }

}
