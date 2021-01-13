<?php
/**
 * NonConstituentAdd
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
 * NonConstituentAdd Class Doc Comment
 *
 * @category Class
 * @description Non-constituents are the individuals and organizations related to constituents.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NonConstituentAdd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NonConstituentAdd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'birthdate' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'deceased' => 'bool',
        'deceased_date' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'first' => 'string',
        'former_name' => 'string',
        'gender' => 'string',
        'last' => 'string',
        'middle' => 'string',
        'name' => 'string',
        'preferred_name' => 'string',
        'suffix' => 'string',
        'suffix_2' => 'string',
        'title' => 'string',
        'title_2' => 'string',
        'type' => 'string',
        'primary_addressee' => '\BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit',
        'primary_salutation' => '\BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'birthdate' => null,
        'deceased' => null,
        'deceased_date' => null,
        'first' => null,
        'former_name' => null,
        'gender' => null,
        'last' => null,
        'middle' => null,
        'name' => null,
        'preferred_name' => null,
        'suffix' => null,
        'suffix_2' => null,
        'title' => null,
        'title_2' => null,
        'type' => null,
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
        'birthdate' => 'birthdate',
        'deceased' => 'deceased',
        'deceased_date' => 'deceased_date',
        'first' => 'first',
        'former_name' => 'former_name',
        'gender' => 'gender',
        'last' => 'last',
        'middle' => 'middle',
        'name' => 'name',
        'preferred_name' => 'preferred_name',
        'suffix' => 'suffix',
        'suffix_2' => 'suffix_2',
        'title' => 'title',
        'title_2' => 'title_2',
        'type' => 'type',
        'primary_addressee' => 'primary_addressee',
        'primary_salutation' => 'primary_salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birthdate' => 'setBirthdate',
        'deceased' => 'setDeceased',
        'deceased_date' => 'setDeceasedDate',
        'first' => 'setFirst',
        'former_name' => 'setFormerName',
        'gender' => 'setGender',
        'last' => 'setLast',
        'middle' => 'setMiddle',
        'name' => 'setName',
        'preferred_name' => 'setPreferredName',
        'suffix' => 'setSuffix',
        'suffix_2' => 'setSuffix2',
        'title' => 'setTitle',
        'title_2' => 'setTitle2',
        'type' => 'setType',
        'primary_addressee' => 'setPrimaryAddressee',
        'primary_salutation' => 'setPrimarySalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birthdate' => 'getBirthdate',
        'deceased' => 'getDeceased',
        'deceased_date' => 'getDeceasedDate',
        'first' => 'getFirst',
        'former_name' => 'getFormerName',
        'gender' => 'getGender',
        'last' => 'getLast',
        'middle' => 'getMiddle',
        'name' => 'getName',
        'preferred_name' => 'getPreferredName',
        'suffix' => 'getSuffix',
        'suffix_2' => 'getSuffix2',
        'title' => 'getTitle',
        'title_2' => 'getTitle2',
        'type' => 'getType',
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

    const TYPE_INDIVIDUAL = 'Individual';
    const TYPE_ORGANIZATION = 'Organization';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
            self::TYPE_ORGANIZATION,
        ];
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
        $this->container['birthdate'] = $data['birthdate'] ?? null;
        $this->container['deceased'] = $data['deceased'] ?? null;
        $this->container['deceased_date'] = $data['deceased_date'] ?? null;
        $this->container['first'] = $data['first'] ?? null;
        $this->container['former_name'] = $data['former_name'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['last'] = $data['last'] ?? null;
        $this->container['middle'] = $data['middle'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['preferred_name'] = $data['preferred_name'] ?? null;
        $this->container['suffix'] = $data['suffix'] ?? null;
        $this->container['suffix_2'] = $data['suffix_2'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['title_2'] = $data['title_2'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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

        if (!is_null($this->container['first']) && (mb_strlen($this->container['first']) > 50)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['first']) && (mb_strlen($this->container['first']) < 0)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['former_name']) && (mb_strlen($this->container['former_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'former_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['former_name']) && (mb_strlen($this->container['former_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'former_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['last']) && (mb_strlen($this->container['last']) > 100)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['last']) && (mb_strlen($this->container['last']) < 0)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['middle']) && (mb_strlen($this->container['middle']) > 50)) {
            $invalidProperties[] = "invalid value for 'middle', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['middle']) && (mb_strlen($this->container['middle']) < 0)) {
            $invalidProperties[] = "invalid value for 'middle', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['preferred_name']) && (mb_strlen($this->container['preferred_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'preferred_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['preferred_name']) && (mb_strlen($this->container['preferred_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'preferred_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets birthdate
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $birthdate birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets deceased
     *
     * @return bool|null
     */
    public function getDeceased()
    {
        return $this->container['deceased'];
    }

    /**
     * Sets deceased
     *
     * @param bool|null $deceased Indicates whether the constituent is deceased. For individuals only.
     *
     * @return self
     */
    public function setDeceased($deceased)
    {
        $this->container['deceased'] = $deceased;

        return $this;
    }

    /**
     * Gets deceased_date
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getDeceasedDate()
    {
        return $this->container['deceased_date'];
    }

    /**
     * Sets deceased_date
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $deceased_date deceased_date
     *
     * @return self
     */
    public function setDeceasedDate($deceased_date)
    {
        $this->container['deceased_date'] = $deceased_date;

        return $this;
    }

    /**
     * Gets first
     *
     * @return string|null
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param string|null $first The constituent's first name. For individuals only. Character limit: 50.
     *
     * @return self
     */
    public function setFirst($first)
    {
        if (!is_null($first) && (mb_strlen($first) > 50)) {
            throw new \InvalidArgumentException('invalid length for $first when calling NonConstituentAdd., must be smaller than or equal to 50.');
        }
        if (!is_null($first) && (mb_strlen($first) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first when calling NonConstituentAdd., must be bigger than or equal to 0.');
        }

        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets former_name
     *
     * @return string|null
     */
    public function getFormerName()
    {
        return $this->container['former_name'];
    }

    /**
     * Sets former_name
     *
     * @param string|null $former_name The constituent's former name. For individuals only. Character limit: 100.
     *
     * @return self
     */
    public function setFormerName($former_name)
    {
        if (!is_null($former_name) && (mb_strlen($former_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $former_name when calling NonConstituentAdd., must be smaller than or equal to 100.');
        }
        if (!is_null($former_name) && (mb_strlen($former_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $former_name when calling NonConstituentAdd., must be bigger than or equal to 0.');
        }

        $this->container['former_name'] = $former_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender The constituent's gender. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListGenders\"><b>Gender</b></a> table. This property defaults to <i>Unknown</i> if no value is provided. For individuals only.
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string|null $last The constituent's last name. For individuals only (required). Character limit: 100.
     *
     * @return self
     */
    public function setLast($last)
    {
        if (!is_null($last) && (mb_strlen($last) > 100)) {
            throw new \InvalidArgumentException('invalid length for $last when calling NonConstituentAdd., must be smaller than or equal to 100.');
        }
        if (!is_null($last) && (mb_strlen($last) < 0)) {
            throw new \InvalidArgumentException('invalid length for $last when calling NonConstituentAdd., must be bigger than or equal to 0.');
        }

        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets middle
     *
     * @return string|null
     */
    public function getMiddle()
    {
        return $this->container['middle'];
    }

    /**
     * Sets middle
     *
     * @param string|null $middle The constituent's middle name. For individuals only. Character limit: 50.
     *
     * @return self
     */
    public function setMiddle($middle)
    {
        if (!is_null($middle) && (mb_strlen($middle) > 50)) {
            throw new \InvalidArgumentException('invalid length for $middle when calling NonConstituentAdd., must be smaller than or equal to 50.');
        }
        if (!is_null($middle) && (mb_strlen($middle) < 0)) {
            throw new \InvalidArgumentException('invalid length for $middle when calling NonConstituentAdd., must be bigger than or equal to 0.');
        }

        $this->container['middle'] = $middle;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name If the constituent's <code>type</code> is <i>Individual</i>, this is a computed field that does not apply to add operations. If the <code>type</code> is <i>Organization</i>, this field is required and represents the organization's name. Character limit: 60.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets preferred_name
     *
     * @return string|null
     */
    public function getPreferredName()
    {
        return $this->container['preferred_name'];
    }

    /**
     * Sets preferred_name
     *
     * @param string|null $preferred_name The constituent's preferred name. For individuals only. Character limit: 50.
     *
     * @return self
     */
    public function setPreferredName($preferred_name)
    {
        if (!is_null($preferred_name) && (mb_strlen($preferred_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $preferred_name when calling NonConstituentAdd., must be smaller than or equal to 50.');
        }
        if (!is_null($preferred_name) && (mb_strlen($preferred_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $preferred_name when calling NonConstituentAdd., must be bigger than or equal to 0.');
        }

        $this->container['preferred_name'] = $preferred_name;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix The constituent's primary suffix. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\"><b>Suffixes</b></a> table. For individuals only.
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets suffix_2
     *
     * @return string|null
     */
    public function getSuffix2()
    {
        return $this->container['suffix_2'];
    }

    /**
     * Sets suffix_2
     *
     * @param string|null $suffix_2 The constituent's secondary suffix. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\"><b>Suffixes</b></a> table. For individuals only.
     *
     * @return self
     */
    public function setSuffix2($suffix_2)
    {
        $this->container['suffix_2'] = $suffix_2;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The constituent's primary title. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\"><b>Titles</b></a> table. For individuals only.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_2
     *
     * @return string|null
     */
    public function getTitle2()
    {
        return $this->container['title_2'];
    }

    /**
     * Sets title_2
     *
     * @param string|null $title_2 The constituent's secondary title. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\"><b>Titles</b></a> table. For individuals only.
     *
     * @return self
     */
    public function setTitle2($title_2)
    {
        $this->container['title_2'] = $title_2;

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
     * @param string $type The type of constituent. Available values are <i>Individual</i> and <i>Organization</i>.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets primary_addressee
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit|null
     */
    public function getPrimaryAddressee()
    {
        return $this->container['primary_addressee'];
    }

    /**
     * Sets primary_addressee
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit|null $primary_addressee primary_addressee
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
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit|null
     */
    public function getPrimarySalutation()
    {
        return $this->container['primary_salutation'];
    }

    /**
     * Sets primary_salutation
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\PrimaryNameFormatEdit|null $primary_salutation primary_salutation
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


