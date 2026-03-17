<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;


class MobileNumbersSE extends MobileNumbers implements MobileNumbersContract
{
    Use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $countryAlphaCode = 'SE';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $countryCode = '46';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $countryFlag = "🇸🇪";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected $validPrefixCodes = [
        '070'      => ['min' => 7, 'max' => 7],
        '071'      => ['min' => 7, 'max' => 7],
        '072'      => ['min' => 7, 'max' => 7],
        '073'      => ['min' => 7, 'max' => 7],
        '076'      => ['min' => 7, 'max' => 7],
        '079'      => ['min' => 7, 'max' => 7],
    ];
}
