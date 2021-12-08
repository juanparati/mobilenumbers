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
        '+49015121234567',
        '+4901611234567',
        '01611234567',
        '0049015121234567',
        '01712345678',
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
        ['with' => '+4915121234567' , 'without' => '15121234567'],
        ['with' => '004901712345678', 'without' => '01712345678'],
    ];

}