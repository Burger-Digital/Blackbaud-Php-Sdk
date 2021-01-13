<?php
/**
 * NameFormatAdd
 *
 * PHP version 5
 *
 * @category Class
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Constituent
 *
 * This API manages constituent information and related entities such as addresses, phones, emails, and notes.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models;

use \ArrayAccess;
use \BurgerDigital\BlackbaudPhpSdk\ObjectSerializer;

/**
 * NameFormatAdd Class Doc Comment
 *
 * @category Class
 * @description Name formats define how to address constituents in communications. How you refer to individuals sets the tone of your communications with them and how well they receive your interactions.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NameFormatAdd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NameFormatAdd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configuration_id' => 'string',
'constituent_id' => 'string',
'custom_format' => 'bool',
'formatted_name' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configuration_id' => null,
'constituent_id' => null,
'custom_format' => null,
'formatted_name' => null,
'type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'configuration_id' => 'configuration_id',
'constituent_id' => 'constituent_id',
'custom_format' => 'custom_format',
'formatted_name' => 'formatted_name',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration_id' => 'setConfigurationId',
'constituent_id' => 'setConstituentId',
'custom_format' => 'setCustomFormat',
'formatted_name' => 'setFormattedName',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration_id' => 'getConfigurationId',
'constituent_id' => 'getConstituentId',
'custom_format' => 'getCustomFormat',
'formatted_name' => 'getFormattedName',
'type' => 'getType'    ];

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
        return self::$swaggerModelName;
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
        $this->container['configuration_id'] = isset($data['configuration_id']) ? $data['configuration_id'] : null;
        $this->container['constituent_id'] = isset($data['constituent_id']) ? $data['constituent_id'] : null;
        $this->container['custom_format'] = isset($data['custom_format']) ? $data['custom_format'] : null;
        $this->container['formatted_name'] = isset($data['formatted_name']) ? $data['formatted_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['constituent_id'] === null) {
            $invalidProperties[] = "'constituent_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
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
     * Gets configuration_id
     *
     * @return string
     */
    public function getConfigurationId()
    {
        return $this->container['configuration_id'];
    }

    /**
     * Sets configuration_id
     *
     * @param string $configuration_id The name format configuration identifier. Required when custom_format is false.
     *
     * @return $this
     */
    public function setConfigurationId($configuration_id)
    {
        $this->container['configuration_id'] = $configuration_id;

        return $this;
    }

    /**
     * Gets constituent_id
     *
     * @return string
     */
    public function getConstituentId()
    {
        return $this->container['constituent_id'];
    }

    /**
     * Sets constituent_id
     *
     * @param string $constituent_id The immutable system record ID of the constituent associated with the name format.
     *
     * @return $this
     */
    public function setConstituentId($constituent_id)
    {
        $this->container['constituent_id'] = $constituent_id;

        return $this;
    }

    /**
     * Gets custom_format
     *
     * @return bool
     */
    public function getCustomFormat()
    {
        return $this->container['custom_format'];
    }

    /**
     * Sets custom_format
     *
     * @param bool $custom_format Whether the name format uses a custom format. Defaults to false.
     *
     * @return $this
     */
    public function setCustomFormat($custom_format)
    {
        $this->container['custom_format'] = $custom_format;

        return $this;
    }

    /**
     * Gets formatted_name
     *
     * @return string
     */
    public function getFormattedName()
    {
        return $this->container['formatted_name'];
    }

    /**
     * Sets formatted_name
     *
     * @param string $formatted_name The name format formatted name. Required when custom_format is true. Character limit: 255.
     *
     * @return $this
     */
    public function setFormattedName($formatted_name)
    {
        $this->container['formatted_name'] = $formatted_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The name format type. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListNameFormatTypes\"><b>Addr/Sal Types</b></a> table.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
