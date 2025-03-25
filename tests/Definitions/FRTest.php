<?php


namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;


class FRTest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'FR';


    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '+33755539373',
        '0755539373',
        '+33655539511',
        '0655395842',
        '0033655539511',
    ];


    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '12345678',
        '702332233',
        '755539373',
        '+23737322066',
        '+35755539373'
    ];


    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+33737322066' , 'without' => '0737322066'],
        ['with' => '0033737322066', 'without' => '0737322066'],
    ];

}
