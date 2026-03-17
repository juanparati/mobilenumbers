<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

class MobileNumbersIT extends MobileNumbers implements MobileNumbersContract
{
    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $countryAlphaCode = 'IT';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $countryCode = '39';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $countryFlag = "🇮🇹";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected $validPrefixCodes = [
        '3'      => ['min' => 9, 'max' => 10],
    ];

}
