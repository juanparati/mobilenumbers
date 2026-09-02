<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

/**
 * Class MobileNumbersSE
 *
 * Definition for Swedish mobile phone numbers.
 *
 * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Sweden
 * @see https://hurbra.se/078-nummer/
 * @package Juanparati\MobileNumbers\Definitions
 */
class MobileNumbersSE extends MobileNumbers implements MobileNumbersContract
{
    Use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected string $countryAlphaCode = 'SE';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected string $countryCode = '46';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected string $countryFlag = "🇸🇪";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes.
     *
     * @var array
     */
    protected array $validPrefixCodes = [
        '070'      => ['min' => 7, 'max' => 7],
        '072'      => ['min' => 7, 'max' => 7],
        '073'      => ['min' => 7, 'max' => 7],
        '076'      => ['min' => 7, 'max' => 7],
        '0780'     => ['min' => 6, 'max' => 6],
        '0781'     => ['min' => 6, 'max' => 6],
        '0784'     => ['min' => 6, 'max' => 6],
        '0785'     => ['min' => 6, 'max' => 6],
        '0786'     => ['min' => 6, 'max' => 6],
        '0787'     => ['min' => 6, 'max' => 6],
        '0788'     => ['min' => 6, 'max' => 6],
        '0789'     => ['min' => 6, 'max' => 6],
        '079'      => ['min' => 7, 'max' => 7],
    ];
}
