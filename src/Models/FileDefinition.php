<?php
/**
 * FileDefinition
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
 * FileDefinition Class Doc Comment
 *
 * @category Class
 * @description Contains metadata for uploading a document and unique document identifier for physical attachments.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_id' => 'string',
'file_upload_request' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData',
'thumbnail_id' => 'string',
'thumbnail_upload_request' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_id' => null,
'file_upload_request' => null,
'thumbnail_id' => null,
'thumbnail_upload_request' => null    ];

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
        'file_id' => 'file_id',
'file_upload_request' => 'file_upload_request',
'thumbnail_id' => 'thumbnail_id',
'thumbnail_upload_request' => 'thumbnail_upload_request'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_id' => 'setFileId',
'file_upload_request' => 'setFileUploadRequest',
'thumbnail_id' => 'setThumbnailId',
'thumbnail_upload_request' => 'setThumbnailUploadRequest'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_id' => 'getFileId',
'file_upload_request' => 'getFileUploadRequest',
'thumbnail_id' => 'getThumbnailId',
'thumbnail_upload_request' => 'getThumbnailUploadRequest'    ];

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
        $this->container['file_id'] = isset($data['file_id']) ? $data['file_id'] : null;
        $this->container['file_upload_request'] = isset($data['file_upload_request']) ? $data['file_upload_request'] : null;
        $this->container['thumbnail_id'] = isset($data['thumbnail_id']) ? $data['thumbnail_id'] : null;
        $this->container['thumbnail_upload_request'] = isset($data['thumbnail_upload_request']) ? $data['thumbnail_upload_request'] : null;
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
     * Gets file_id
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param string $file_id The identifier of the file.
     *
     * @return $this
     */
    public function setFileId($file_id)
    {
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets file_upload_request
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData
     */
    public function getFileUploadRequest()
    {
        return $this->container['file_upload_request'];
    }

    /**
     * Sets file_upload_request
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData $file_upload_request file_upload_request
     *
     * @return $this
     */
    public function setFileUploadRequest($file_upload_request)
    {
        $this->container['file_upload_request'] = $file_upload_request;

        return $this;
    }

    /**
     * Gets thumbnail_id
     *
     * @return string
     */
    public function getThumbnailId()
    {
        return $this->container['thumbnail_id'];
    }

    /**
     * Sets thumbnail_id
     *
     * @param string $thumbnail_id The identifier of the thumbnail.
     *
     * @return $this
     */
    public function setThumbnailId($thumbnail_id)
    {
        $this->container['thumbnail_id'] = $thumbnail_id;

        return $this;
    }

    /**
     * Gets thumbnail_upload_request
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData
     */
    public function getThumbnailUploadRequest()
    {
        return $this->container['thumbnail_upload_request'];
    }

    /**
     * Sets thumbnail_upload_request
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\RequestMetaData $thumbnail_upload_request thumbnail_upload_request
     *
     * @return $this
     */
    public function setThumbnailUploadRequest($thumbnail_upload_request)
    {
        $this->container['thumbnail_upload_request'] = $thumbnail_upload_request;

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
