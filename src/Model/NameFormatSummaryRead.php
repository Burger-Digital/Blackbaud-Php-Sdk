<?php
/**
 * NameFormatSummaryRead
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

use \ArrayAccess;
use \BurgerDigital\BlackbaudPhpSdk\ObjectSerializer;

/**
 * NameFormatSummaryRead Class Doc Comment
 *
 * @category Class
 * @description All name formats associated with the constituent. This includes both primary addressee and salutation, as well as a list of additional standard name formats.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NameFormatSummaryRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NameFormatSummaryRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_name_formats' => '\BurgerDigital\BlackbaudPhpSdk\Model\NameFormatRead[]',
        'primary_addressee' => '\BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead',
        'primary_salutation' => '\BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_name_formats' => null,
        'primary_addressee' => null,
        'primary_salutation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_name_formats' => 'additional_name_formats',
        'primary_addressee' => 'primary_addressee',
        'primary_salutation' => 'primary_salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_name_formats' => 'setAdditionalNameFormats',
        'primary_addressee' => 'setPrimaryAddressee',
        'primary_salutation' => 'setPrimarySalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_name_formats' => 'getAdditionalNameFormats',
        'primary_addressee' => 'getPrimaryAddressee',
        'primary_salutation' => 'getPrimarySalutation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_name_formats'] = $data['additional_name_formats'] ?? null;
        $this->container['primary_addressee'] = $data['primary_addressee'] ?? null;
        $this->container['primary_salutation'] = $data['primary_salutation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets additional_name_formats
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\NameFormatRead[]|null
     */
    public function getAdditionalNameFormats()
    {
        return $this->container['additional_name_formats'];
    }

    /**
     * Sets additional_name_formats
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\NameFormatRead[]|null $additional_name_formats The additional name formats of the constituent.
     *
     * @return self
     */
    public function setAdditionalNameFormats($additional_name_formats)
    {
        $this->container['additional_name_formats'] = $additional_name_formats;

        return $this;
    }

    /**
     * Gets primary_addressee
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead|null
     */
    public function getPrimaryAddressee()
    {
        return $this->container['primary_addressee'];
    }

    /**
     * Sets primary_addressee
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead|null $primary_addressee primary_addressee
     *
     * @return self
     */
    public function setPrimaryAddressee($primary_addressee)
    {
        $this->container['primary_addressee'] = $primary_addressee;

        return $this;
    }

    /**
     * Gets primary_salutation
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead|null
     */
    public function getPrimarySalutation()
    {
        return $this->container['primary_salutation'];
    }

    /**
     * Sets primary_salutation
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatRead|null $primary_salutation primary_salutation
     *
     * @return self
     */
    public function setPrimarySalutation($primary_salutation)
    {
        $this->container['primary_salutation'] = $primary_salutation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

