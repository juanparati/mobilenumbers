<?php


namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;


class ITTest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'IT';


    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '3201234567',
        '3301234567',
        '3481234567',
        '+393911234567',
        '003932012345674',
        '33012345601',
        '+393331234567',
        '00393345678901',
        '3456789012',
        '+393887654321',
        '3390123456',
        '00393459876543',
        '3661234567',
        '+3932012345678',
        '3288765432',
        '00393321234567',
    ];


    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '0201234567',
        '330123456012',
        '6513644850',
        '+226513644850',
        '00343911234567',
        '7371631502',
        '+3906976372812',
        '300123456012'
    ];


    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+393911234567' , 'without' => '3911234567'],
        ['with' => '00393201234567', 'without' => '3201234567'],
        ['with' => '+3939112345671' , 'without' => '39112345671']
    ];

}
