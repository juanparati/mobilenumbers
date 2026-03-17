<?php


namespace Juanparati\MobileNumbers;


use Juanparati\MobileNumbers\Definitions\Contracts\MobileNumbers as MobileNumbersContract;


/**
 * Class Register.
 *
 * @package Juanparati\MobileNumbers
 */
class Register
{

    /**
     * Default MobileNumber classes.
     *
     * @var array
     */
    protected static $defaults =
    [
        'DE' => \Juanparati\MobileNumbers\Definitions\MobileNumbersDE::class,
        'DK' => \Juanparati\MobileNumbers\Definitions\MobileNumbersDK::class,
        'ES' => \Juanparati\MobileNumbers\Definitions\MobileNumbersES::class,
        'FI' => \Juanparati\MobileNumbers\Definitions\MobileNumbersFI::class,
        'FR' => \Juanparati\MobileNumbers\Definitions\MobileNumbersFR::class,
        'IT' => \Juanparati\MobileNumbers\Definitions\MobileNumbersIT::class,
        'NO' => \Juanparati\MobileNumbers\Definitions\MobileNumbersNO::class,
        'PL' => \Juanparati\MobileNumbers\Definitions\MobileNumbersPL::class,
        'SE' => \Juanparati\MobileNumbers\Definitions\MobileNumbersSE::class,
        'ZA' => \Juanparati\MobileNumbers\Definitions\MobileNumbersZA::class,
    ];


    /**
     * Register a new MobileNumber class.
     *
     * @param string $countryCode
     * @param string $definition Class name implementing MobileNumbersContract
     */
    public static function register(string $countryCode, string $definition) : void
    {
        static::$defaults[strtoupper($countryCode)] = $definition;
    }


    /**
     * Unregister a MobileNumber class.
     *
     * @param string $countryCode
     */
    public static function unregister(string $countryCode) : void
    {
        unset(static::$defaults[strtoupper($countryCode)]);
    }


    /**
     * Check if MobileNumber class was registered.
     *
     * @param string $countryCode
     * @return bool
     */
    public static function isDefined(string $countryCode) : bool
    {
        return isset(static::$defaults[strtoupper($countryCode)]);
    }


    /**
     * Obtain the MobileNumber class.
     *
     * @param string $countryCode
     * @return string|null
     */
    public static function get(string $countryCode) : ?string
    {
        return static::isDefined($countryCode) ? static::$defaults[strtoupper($countryCode)] : null;
    }


    /**
     * Obtain all the registered MobileNumber classes.
     *
     * @return MobileNumbersContract[]
     */
    public static function getAll() : array
    {
        return static::$defaults;
    }

}
