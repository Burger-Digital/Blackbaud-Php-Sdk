<?php
/**
 * ErrorCode
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Constituent
 *
 * This API manages constituent information and related entities such as addresses, phones, emails, and notes.
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BurgerDigital\BlackbaudPhpSdk\Model;
use \BurgerDigital\BlackbaudPhpSdk\ObjectSerializer;

/**
 * ErrorCode Class Doc Comment
 *
 * @category Class
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const ADDRESS_TYPE_NOT_FOUND = 'AddressTypeNotFound';
    const EMAIL_ADDRESS_TYPE_NOT_FOUND = 'EmailAddressTypeNotFound';
    const PHONE_TYPE_NOT_FOUND = 'PhoneTypeNotFound';
    const WEB_ADDRESS_TYPE_NOT_FOUND = 'WebAddressTypeNotFound';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ADDRESS_TYPE_NOT_FOUND,
            self::EMAIL_ADDRESS_TYPE_NOT_FOUND,
            self::PHONE_TYPE_NOT_FOUND,
            self::WEB_ADDRESS_TYPE_NOT_FOUND,
        ];
    }
}


