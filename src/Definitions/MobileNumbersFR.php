<?php


namespace Juanparati\MobileNumbers\Definitions;


class MobileNumbersFR extends MobileNumbersSE
{

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $country_alpha_code = 'FR';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $country_code = '33';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $country_flag = "🇫🇷";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes).
     *
     * @var array
     */
    protected $valid_prefix_codes = [
        '06'      => ['min' => 8, 'max' => 8],
        '07'      => ['min' => 8, 'max' => 8],
    ];
}