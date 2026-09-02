<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

class MobileNumbersDE extends MobileNumbers implements MobileNumbersContract
{
    use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected string $countryAlphaCode = 'DE';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected string $countryCode = '49';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected string $countryFlag = "🇩🇪";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected array $validPrefixCodes = [
        '0151'  => ['min' => 8, 'max' => 8],
        '0152'  => ['min' => 8, 'max' => 8],
        '0155'  => ['min' => 8, 'max' => 8],
        '0156'  => ['min' => 8, 'max' => 8],
        '0157'  => ['min' => 8, 'max' => 8],
        '0159'  => ['min' => 8, 'max' => 8],
        '0160'  => ['min' => 7, 'max' => 8],
        '0162'  => ['min' => 7, 'max' => 7],
        '0163'  => ['min' => 7, 'max' => 7],
        '017'   => ['min' => 8, 'max' => 8],
        '0176'  => ['min' => 8, 'max' => 8],  // 0176 uses 8-digit subscriber numbers
    ];
}
