<?php

namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

/**
 * Class MobileNumbersIE.
 *
 * Definition for Ireland mobile numbers.
 *
 * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_the_Republic_of_Ireland
 * @see https://www.sent.dm/en/resources/phone-number-standards/ie
 * @package Juanparati\MobileNumbers\Definitions
 */
class MobileNumbersIE extends MobileNumbers implements MobileNumbersContract
{

    use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @var string
     */
    protected string $countryAlphaCode = 'IE';

    /**
     * International prefix code.
     *
     * @var string
     */
    protected string $countryCode = '353';

    /**
     * Country flag.
     *
     * @var string
     */
    protected string $countryFlag = "🇮🇪";

    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected array $validPrefixCodes = [
        '083' => ['min' => 7, 'max' => 7],
        '085' => ['min' => 7, 'max' => 7],
        '086' => ['min' => 7, 'max' => 7],
        '087' => ['min' => 7, 'max' => 7],
        '089' => ['min' => 7, 'max' => 7],
    ];


    /**
     * Invalid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * This must be populated when there are some exceptions inside the valid prefix codes,
     * like, for example, special prefix codes used only in TV and Drama series, Emergency services,
     * Paid services, etc.
     *
     * @var array
     */
    protected array $invalidPrefixCodes = [
        '0890110' => ['min' => 3, 'max' => 3],  // Used only in TV and Drama series
    ];

}
