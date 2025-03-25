<?php


namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;


class DETest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'DE';


    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '+4915121234567',
        '+491611234567',
        '01611234567',
        '004915121234567',
        '+491752033647',
        '+4915207494122',
        '01712345678',
        '017621770609',
    ];


    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '712345678',
        '000712345678',
        '+5015121234567',
        '05121234567'
    ];


    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+4915121234567' , 'without' => '015121234567'],
        ['with' => '00491712345678', 'without' => '01712345678'],
    ];

}
