<?php


namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;


class GBTest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'GB';


    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '+447912345678',
        '00447912345678',
        '07912345678',
        '07123456789',
        '+447624123456',
        '07512345678',
        '07212345678',
        '+447712345678',
        '07812345678',
    ];


    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '7912345678',
        '07012345678',
        '0791234567',
        '079123456789',
        '+457912345678',
        '02071234567',
        '07612345678',   // 076 is used by pagers (except 07624)
        '07634123456',
    ];


    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+447912345678' , 'without' => '07912345678'],
        ['with' => '00447512345678', 'without' => '07512345678'],
    ];

}
