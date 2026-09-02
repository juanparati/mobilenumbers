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
    protected string $countryAlphaCode = 'GB';


    /**
     * International prefix code.
     *
     * @var string
     */
    protected string $countryCode = '44';


    /**
     * Country flag.
     *
     * @var string
     */
    protected string $countryFlag = "🇬🇧";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected array $validPrefixCodes = [
        '071'   => ['min' => 8, 'max' => 8],
        '072'   => ['min' => 8, 'max' => 8],
        '073'   => ['min' => 8, 'max' => 8],
        '074'   => ['min' => 8, 'max' => 8],
        '075'   => ['min' => 8, 'max' => 8],
        '07624' => ['min' => 6, 'max' => 6],  // Isle of Man
        '077'   => ['min' => 8, 'max' => 8],
        '078'   => ['min' => 8, 'max' => 8],
        '079'   => ['min' => 8, 'max' => 8],
    ];

}
