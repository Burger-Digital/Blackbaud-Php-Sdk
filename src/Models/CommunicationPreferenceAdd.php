<?php
/**
 * CommunicationPreferenceAdd
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
 * CommunicationPreferenceAdd Class Doc Comment
 *
 * @category Class
 * @description Communication preferences provide guidance on how to contact constituents. These rules describe instructions and restrictions about when to reach out to constituents and how to tailor communications to honor their requests.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationPreferenceAdd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationPreferenceAdd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'constituent_id' => 'string',
'end' => '\DateTime',
'solicit_code' => 'string',
'start' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'constituent_id' => null,
'end' => 'date-time',
'solicit_code' => null,
'start' => 'date-time'    ];

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
        'constituent_id' => 'constituent_id',
'end' => 'end',
'solicit_code' => 'solicit_code',
'start' => 'start'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constituent_id' => 'setConstituentId',
'end' => 'setEnd',
'solicit_code' => 'setSolicitCode',
'start' => 'setStart'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constituent_id' => 'getConstituentId',
'end' => 'getEnd',
'solicit_code' => 'getSolicitCode',
'start' => 'getStart'    ];

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
        $this->container['constituent_id'] = isset($data['constituent_id']) ? $data['constituent_id'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['solicit_code'] = isset($data['solicit_code']) ? $data['solicit_code'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
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
        if ($this->container['solicit_code'] === null) {
            $invalidProperties[] = "'solicit_code' can't be null";
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
     * @param string $constituent_id The immutable system record ID of the constituent associated with the communication preference.
     *
     * @return $this
     */
    public function setConstituentId($constituent_id)
    {
        $this->container['constituent_id'] = $constituent_id;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end The end date of the communication preference. Uses <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43</i>.
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets solicit_code
     *
     * @return string
     */
    public function getSolicitCode()
    {
        return $this->container['solicit_code'];
    }

    /**
     * Sets solicit_code
     *
     * @param string $solicit_code Communication instructions and/or restrictions for a constituent. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListCommunicationPreferences\"><b>Solicit Code</b></a> table.
     *
     * @return $this
     */
    public function setSolicitCode($solicit_code)
    {
        $this->container['solicit_code'] = $solicit_code;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start The start date of the communication preference. Uses <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43</i>.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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
