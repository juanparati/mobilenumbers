<?php


namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;


class ZATest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'ZA';


    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '+27721234567',
        '+27732345678',
        '0764567890',
        '0838901234',
        '+27850123456',
        '0787012345',
        '0612345678',
        '0027787012345',
        '+27694345684',
    ];


    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '12345678',
        '0964567890',
        '0264567890',
        '+23732345678',
        '0034737322066',
        '0364567890',
        '+460737322066',
        '0180130213',
        '00270364567890',
        '0027870123456',
    ];


    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+27838901234' , 'without' => '0838901234'],
        ['with' => '+27603124123', 'without'  => '0603124123'],
    ];

}
