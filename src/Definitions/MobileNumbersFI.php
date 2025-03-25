<?php
namespace Juanparati\MobileNumbers\Definitions;

use Juanparati\MobileNumbers\Definitions\Concerns\HasTrunkCode;
use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;

class MobileNumbersFI extends MobileNumbers implements MobileNumbersContract
{
    use HasTrunkCode;

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $country_alpha_code = 'FI';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $country_code = '358';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $country_flag = "🇫🇮";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes.
     *
     * @var array
     */
    protected $valid_prefix_codes = [
        '04'     => ['min' => 8, 'max' => 8],
        '050'    => ['min' => 7, 'max' => 7],
    ];

}
