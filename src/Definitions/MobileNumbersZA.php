<?php


namespace Juanparati\MobileNumbers\Definitions;


class MobileNumbersZA extends MobileNumbersSE
{

    /**
     * Country code according to ISO 3166-1 alpha-2.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     * @var string
     */
    protected $country_alpha_code = 'ZA';


    /**
     * International prefix code (Without the "+" and "00" characters).
     *
     * @var string
     */
    protected $country_code = '27';


    /**
     * Country flag.
     *
     * @see https://unicode.org/emoji/charts/full-emoji-list.html#country-flag
     * @var string
     */
    protected $country_flag = "🇿🇦";


    /**
     * Valid prefix codes (Do not mistake with country codes).
     * It includes the minimum and maximum lengths excluding the prefix codes.
     *
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     * @var array
     */
    protected $valid_prefix_codes = [
        '06'  => ['min' => 8, 'max' => 8],
        '07'  => ['min' => 8, 'max' => 8],
        '081' => ['min' => 7, 'max' => 7],
        '082' => ['min' => 7, 'max' => 7],
        '083' => ['min' => 7, 'max' => 7],
        '084' => ['min' => 7, 'max' => 7],
        '085' => ['min' => 7, 'max' => 7],
    ];

}
