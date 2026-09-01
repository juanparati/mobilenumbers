<?php

namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;


/**
 * Class MobileNumbersGB.
 *
 * Definition for United Kingdom mobile numbers.
 *
 * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_the_United_Kingdom
 * @package Juanparati\MobileNumbers\Definitions
 */
class MobileNumbersGB extends MobileNumbers implements MobileNumbersContract
{

    use HasTrunkCode;


    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @var string
     */
    protected $countryAlphaCode = 'GB';


    /**
     * International prefix code.
     *
     * @var string
     */
    protected $countryCode = '44';


    /**
     * Country flag.
     *
     * @var string
     */
    protected $countryFlag = "🇬🇧";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected $validPrefixCodes = [
        '071' => ['min' => 8, 'max' => 8],
        '073' => ['min' => 8, 'max' => 8],
        '074' => ['min' => 8, 'max' => 8],
        '075' => ['min' => 8, 'max' => 8],
        '076' => ['min' => 8, 'max' => 8],
        '077' => ['min' => 8, 'max' => 8],
        '078' => ['min' => 8, 'max' => 8],
        '079' => ['min' => 8, 'max' => 8],
    ];

}
