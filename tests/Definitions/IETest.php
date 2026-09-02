<?php

namespace Juanparati\MobileNumbers\Definitions\Tests;

use Juanparati\MobileNumbers\Tests\BaseTest;

class IETest extends BaseTest
{

    /**
     * Country code.
     *
     * @var string country
     */
    protected $country = 'IE';

    /**
     * Mobile numbers to test.
     *
     * @var array
     */
    protected $test_valid_numbers = [
        '+353871234567',
        '00353871234567',
        '0871234567',
        '0831234567',
        '0851234567',
        '0861234567',
        '0891234567',
        '+353861234567',
        '00353831234567',
        '0890111234',
        '0890119999',
    ];

    /**
     * Wrong mobile numbers to test.
     *
     * @var array
     */
    protected $test_invalid_numbers = [
        '871234567',
        '0881234567',
        '0821234567',
        '0841234567',
        '087123456',
        '08712345678',
        '+453871234567',
        '0112345678',
        '0890110123',
        '+3530890110123',
        '003530890110999',
    ];

    /**
     * Mobile numbers with and without prefix.
     *
     * @var array
     */
    protected $test_prefix_numbers = [
        ['with' => '+353871234567' , 'without' => '0871234567'],
        ['with' => '00353851234567', 'without' => '0851234567'],
    ];


    /**
     * Test that the definition exposes the invalid prefix codes.
     */
    public function test_definition_contains_invalid_prefix_codes()
    {
        $definition = \Juanparati\MobileNumbers\Validator::country($this->country)->getDefinition();

        $this->assertArrayHasKey('invalid_prefix_codes', $definition);
        $this->assertArrayHasKey('0890110', $definition['invalid_prefix_codes']);
    }

}
