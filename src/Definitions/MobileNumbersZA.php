<?php

namespace Juanparati\MobileNumbers\Definitions;
use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;


class MobileNumbersZA extends MobileNumbers implements MobileNumbersContract
{
    use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $countryAlphaCode = 'ZA';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $countryCode = '27';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $countryFlag = "🇿🇦";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes.
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     * @var array
     */
    protected $validPrefixCodes = [
        '06'  => ['min' => 8, 'max' => 8],
        '07'  => ['min' => 8, 'max' => 8],
        '081' => ['min' => 7, 'max' => 7],
        '082' => ['min' => 7, 'max' => 7],
        '083' => ['min' => 7, 'max' => 7],
        '084' => ['min' => 7, 'max' => 7],
        '085' => ['min' => 7, 'max' => 7],
    ];

}
