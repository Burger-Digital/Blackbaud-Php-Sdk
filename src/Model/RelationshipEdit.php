<?php
/**
 * RelationshipEdit
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
 * RelationshipEdit Class Doc Comment
 *
 * @category Class
 * @description Relationships describe connections between constituents and other individuals and organizations such as family, friends, and employers. Tracking constituent relationships can enhance fundraising efforts and interactions.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RelationshipEdit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RelationshipEdit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'end' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'is_organization_contact' => 'bool',
        'is_primary_business' => 'bool',
        'is_spouse' => 'bool',
        'is_spouse_head_of_household' => 'bool',
        'is_constituent_head_of_household' => 'bool',
        'organization_contact_type' => 'string',
        'position' => 'string',
        'reciprocal_type' => 'string',
        'start' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'end' => null,
        'is_organization_contact' => null,
        'is_primary_business' => null,
        'is_spouse' => null,
        'is_spouse_head_of_household' => null,
        'is_constituent_head_of_household' => null,
        'organization_contact_type' => null,
        'position' => null,
        'reciprocal_type' => null,
        'start' => null,
        'type' => null
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
        'comment' => 'comment',
        'end' => 'end',
        'is_organization_contact' => 'is_organization_contact',
        'is_primary_business' => 'is_primary_business',
        'is_spouse' => 'is_spouse',
        'is_spouse_head_of_household' => 'is_spouse_head_of_household',
        'is_constituent_head_of_household' => 'is_constituent_head_of_household',
        'organization_contact_type' => 'organization_contact_type',
        'position' => 'position',
        'reciprocal_type' => 'reciprocal_type',
        'start' => 'start',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'end' => 'setEnd',
        'is_organization_contact' => 'setIsOrganizationContact',
        'is_primary_business' => 'setIsPrimaryBusiness',
        'is_spouse' => 'setIsSpouse',
        'is_spouse_head_of_household' => 'setIsSpouseHeadOfHousehold',
        'is_constituent_head_of_household' => 'setIsConstituentHeadOfHousehold',
        'organization_contact_type' => 'setOrganizationContactType',
        'position' => 'setPosition',
        'reciprocal_type' => 'setReciprocalType',
        'start' => 'setStart',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'end' => 'getEnd',
        'is_organization_contact' => 'getIsOrganizationContact',
        'is_primary_business' => 'getIsPrimaryBusiness',
        'is_spouse' => 'getIsSpouse',
        'is_spouse_head_of_household' => 'getIsSpouseHeadOfHousehold',
        'is_constituent_head_of_household' => 'getIsConstituentHeadOfHousehold',
        'organization_contact_type' => 'getOrganizationContactType',
        'position' => 'getPosition',
        'reciprocal_type' => 'getReciprocalType',
        'start' => 'getStart',
        'type' => 'getType'
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
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['is_organization_contact'] = $data['is_organization_contact'] ?? null;
        $this->container['is_primary_business'] = $data['is_primary_business'] ?? null;
        $this->container['is_spouse'] = $data['is_spouse'] ?? null;
        $this->container['is_spouse_head_of_household'] = $data['is_spouse_head_of_household'] ?? null;
        $this->container['is_constituent_head_of_household'] = $data['is_constituent_head_of_household'] ?? null;
        $this->container['organization_contact_type'] = $data['organization_contact_type'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['reciprocal_type'] = $data['reciprocal_type'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) > 50)) {
            $invalidProperties[] = "invalid value for 'position', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) < 0)) {
            $invalidProperties[] = "invalid value for 'position', the character length must be bigger than or equal to 0.";
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment The comment on the relationship.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets is_organization_contact
     *
     * @return bool|null
     */
    public function getIsOrganizationContact()
    {
        return $this->container['is_organization_contact'];
    }

    /**
     * Sets is_organization_contact
     *
     * @param bool|null $is_organization_contact Indicates whether the related individual represents the organization as a contact. Only applies to relationships between organizations and individuals.
     *
     * @return self
     */
    public function setIsOrganizationContact($is_organization_contact)
    {
        $this->container['is_organization_contact'] = $is_organization_contact;

        return $this;
    }

    /**
     * Gets is_primary_business
     *
     * @return bool|null
     */
    public function getIsPrimaryBusiness()
    {
        return $this->container['is_primary_business'];
    }

    /**
     * Sets is_primary_business
     *
     * @param bool|null $is_primary_business Indicates whether the related organization is the individual's primary business. Only applies to relationships between organizations and individuals.
     *
     * @return self
     */
    public function setIsPrimaryBusiness($is_primary_business)
    {
        $this->container['is_primary_business'] = $is_primary_business;

        return $this;
    }

    /**
     * Gets is_spouse
     *
     * @return bool|null
     */
    public function getIsSpouse()
    {
        return $this->container['is_spouse'];
    }

    /**
     * Sets is_spouse
     *
     * @param bool|null $is_spouse Indicates whether the related constituent is the constituent's spouse. Only applies to relationships between individuals.
     *
     * @return self
     */
    public function setIsSpouse($is_spouse)
    {
        $this->container['is_spouse'] = $is_spouse;

        return $this;
    }

    /**
     * Gets is_spouse_head_of_household
     *
     * @return bool|null
     */
    public function getIsSpouseHeadOfHousehold()
    {
        return $this->container['is_spouse_head_of_household'];
    }

    /**
     * Sets is_spouse_head_of_household
     *
     * @param bool|null $is_spouse_head_of_household Indicates whether the spouse constituent is the head household. Only applies to spousal relationships between individuals.
     *
     * @return self
     */
    public function setIsSpouseHeadOfHousehold($is_spouse_head_of_household)
    {
        $this->container['is_spouse_head_of_household'] = $is_spouse_head_of_household;

        return $this;
    }

    /**
     * Gets is_constituent_head_of_household
     *
     * @return bool|null
     */
    public function getIsConstituentHeadOfHousehold()
    {
        return $this->container['is_constituent_head_of_household'];
    }

    /**
     * Sets is_constituent_head_of_household
     *
     * @param bool|null $is_constituent_head_of_household Indicates whether the constituent is the head of household. Only applies to spousal relationships between individuals.
     *
     * @return self
     */
    public function setIsConstituentHeadOfHousehold($is_constituent_head_of_household)
    {
        $this->container['is_constituent_head_of_household'] = $is_constituent_head_of_household;

        return $this;
    }

    /**
     * Gets organization_contact_type
     *
     * @return string|null
     */
    public function getOrganizationContactType()
    {
        return $this->container['organization_contact_type'];
    }

    /**
     * Sets organization_contact_type
     *
     * @param string|null $organization_contact_type Provides context for interactions with the related individual who represents the organization as a contact. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListOrganizationContactTypes\"><b>Contact Types</b></a> table. Only applies to relationships between organizations and individuals.
     *
     * @return self
     */
    public function setOrganizationContactType($organization_contact_type)
    {
        $this->container['organization_contact_type'] = $organization_contact_type;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position The individual's position in the organization. Only applies to relationships between organizations and individuals. Character limit: 50.
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (!is_null($position) && (mb_strlen($position) > 50)) {
            throw new \InvalidArgumentException('invalid length for $position when calling RelationshipEdit., must be smaller than or equal to 50.');
        }
        if (!is_null($position) && (mb_strlen($position) < 0)) {
            throw new \InvalidArgumentException('invalid length for $position when calling RelationshipEdit., must be bigger than or equal to 0.');
        }

        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets reciprocal_type
     *
     * @return string|null
     */
    public function getReciprocalType()
    {
        return $this->container['reciprocal_type'];
    }

    /**
     * Sets reciprocal_type
     *
     * @param string|null $reciprocal_type Describes the constituent's relationship to the related constituent. For example, in a relationship between a male constituent and a female sibling, the reciprocal relationship type would be brother. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\"><b>Relationships</b></a> table.
     *
     * @return self
     */
    public function setReciprocalType($reciprocal_type)
    {
        $this->container['reciprocal_type'] = $reciprocal_type;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of relation that the relationship represents. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\"><b>Relationships</b></a> table.
     *
     * @return self
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


