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
    protected string $countryAlphaCode;


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @see https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164C-2011-PDF-E.pdf
     * @var string
     */
    protected string $countryCode;


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected string $countryFlag;


    /**
     * Valid prefix codes (Do not mistake with International prefix codes).
     *
     * @var array
     */
    protected array $validPrefixCodes = [];


    /**
     * Invalid prefix codes (Do not mistake with International prefix codes).
     *
     * This must be populated when there are some exceptions inside the valid prefix codes,
     * like, for example, special prefix codes used only in TV and Drama series, Emergency services,
     * Paid services, etc.
     *
     * @var array
     */
    protected array $invalidPrefixCodes = [];


    /**
     * Validates a mobile phone number.
     *
     * @param string $number
     * @return bool
     */
    public function isValid(string $number): bool
    {
        return $this->validate($number);
    }


    /**
     * Strip the international prefix code.
     *
     * @param string $number
     * @return string
     */
    public function stripCountryCode(string $number): string
    {
        $prefix = '+' . $this->countryCode;

        if (str_starts_with($number, $prefix))
            return substr($number, strlen($prefix));

        $prefix = '00' . $this->countryCode;

        if (str_starts_with($number, $prefix))
            return substr($number, strlen($prefix));

        return $number;
    }


    /**
     * Check if number has a valid international prefix.
     *
     * @param string $number
     * @return bool
     */
    public function hasValidCountryCode(string $number): bool
    {
        return $this->stripCountryCode($number) !== $number;
    }


    /**
     * Add the country code prefix to the mobile phone number.
     *
     * @param string $number
     * @param string $prefix (Default '+')
     * @return string
     */
    public function addCountryCode(string $number, string $prefix): string
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
            'country_alpha_code'   => $this->countryAlphaCode,
            'country_code'         => '+' . $this->countryCode,
            'country_flag'         => $this->countryFlag,
            'valid_prefix_codes'   => $this->validPrefixCodes,
            'invalid_prefix_codes' => $this->invalidPrefixCodes,
        ];
    }


    /**
     * Validate phone number.
     *
     * @param string $number
     * @return bool
     */
    protected function validate(string $number): bool
    {
        // Remove international prefix code.
        $number = $this->stripCountryCode($number);

        if (static::hasMatchedPrefix($this->invalidPrefixCodes, $number)) {
            return false;
        }

        if (static::hasMatchedPrefix($this->validPrefixCodes, $number)) {
            return true;
        }

        return false;
    }


    /**
     * Find if the number has a matched prefix code.
     *
     * @param array $prefixCodes
     * @param string $number
     * @return bool
     */
    protected static function hasMatchedPrefix(array $prefixCodes, string $number) : bool
    {
        foreach ($prefixCodes as $prefixCode => $lengths) {
            if (str_starts_with($number, (string)$prefixCode)) {
                $numberLength = strlen($number) - strlen($prefixCode);

                if ($numberLength >= $lengths['min'] && $numberLength <= $lengths['max'])
                    return true;
            }
        }

        return false;
    }

}
