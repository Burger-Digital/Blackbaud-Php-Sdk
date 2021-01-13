<?php
/**
 * ConstituentListItem
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
 * ConstituentListItem Class Doc Comment
 *
 * @category Class
 * @description Constituents are the individuals and organizations who support your organization by contributing time, money, and resources. The constituent entity stores information about donors, prospects, volunteers, general supporters, and more.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConstituentListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConstituentListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'address' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\AddressRead',
'age' => 'int',
'birthdate' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate',
'date_added' => '\DateTime',
'date_modified' => '\DateTime',
'deceased' => 'bool',
'deceased_date' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate',
'email' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\EmailAddressRead',
'first' => 'string',
'former_name' => 'string',
'fundraiser_status' => 'string',
'gender' => 'string',
'gives_anonymously' => 'bool',
'inactive' => 'bool',
'last' => 'string',
'lookup_id' => 'string',
'marital_status' => 'string',
'middle' => 'string',
'name' => 'string',
'online_presence' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\OnlinePresenceRead',
'phone' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\PhoneRead',
'preferred_name' => 'string',
'spouse' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\SpouseRead',
'suffix' => 'string',
'suffix_2' => 'string',
'title' => 'string',
'title_2' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'address' => null,
'age' => 'int32',
'birthdate' => null,
'date_added' => 'date-time',
'date_modified' => 'date-time',
'deceased' => null,
'deceased_date' => null,
'email' => null,
'first' => null,
'former_name' => null,
'fundraiser_status' => null,
'gender' => null,
'gives_anonymously' => null,
'inactive' => null,
'last' => null,
'lookup_id' => null,
'marital_status' => null,
'middle' => null,
'name' => null,
'online_presence' => null,
'phone' => null,
'preferred_name' => null,
'spouse' => null,
'suffix' => null,
'suffix_2' => null,
'title' => null,
'title_2' => null,
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
        'id' => 'id',
'address' => 'address',
'age' => 'age',
'birthdate' => 'birthdate',
'date_added' => 'date_added',
'date_modified' => 'date_modified',
'deceased' => 'deceased',
'deceased_date' => 'deceased_date',
'email' => 'email',
'first' => 'first',
'former_name' => 'former_name',
'fundraiser_status' => 'fundraiser_status',
'gender' => 'gender',
'gives_anonymously' => 'gives_anonymously',
'inactive' => 'inactive',
'last' => 'last',
'lookup_id' => 'lookup_id',
'marital_status' => 'marital_status',
'middle' => 'middle',
'name' => 'name',
'online_presence' => 'online_presence',
'phone' => 'phone',
'preferred_name' => 'preferred_name',
'spouse' => 'spouse',
'suffix' => 'suffix',
'suffix_2' => 'suffix_2',
'title' => 'title',
'title_2' => 'title_2',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'address' => 'setAddress',
'age' => 'setAge',
'birthdate' => 'setBirthdate',
'date_added' => 'setDateAdded',
'date_modified' => 'setDateModified',
'deceased' => 'setDeceased',
'deceased_date' => 'setDeceasedDate',
'email' => 'setEmail',
'first' => 'setFirst',
'former_name' => 'setFormerName',
'fundraiser_status' => 'setFundraiserStatus',
'gender' => 'setGender',
'gives_anonymously' => 'setGivesAnonymously',
'inactive' => 'setInactive',
'last' => 'setLast',
'lookup_id' => 'setLookupId',
'marital_status' => 'setMaritalStatus',
'middle' => 'setMiddle',
'name' => 'setName',
'online_presence' => 'setOnlinePresence',
'phone' => 'setPhone',
'preferred_name' => 'setPreferredName',
'spouse' => 'setSpouse',
'suffix' => 'setSuffix',
'suffix_2' => 'setSuffix2',
'title' => 'setTitle',
'title_2' => 'setTitle2',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'address' => 'getAddress',
'age' => 'getAge',
'birthdate' => 'getBirthdate',
'date_added' => 'getDateAdded',
'date_modified' => 'getDateModified',
'deceased' => 'getDeceased',
'deceased_date' => 'getDeceasedDate',
'email' => 'getEmail',
'first' => 'getFirst',
'former_name' => 'getFormerName',
'fundraiser_status' => 'getFundraiserStatus',
'gender' => 'getGender',
'gives_anonymously' => 'getGivesAnonymously',
'inactive' => 'getInactive',
'last' => 'getLast',
'lookup_id' => 'getLookupId',
'marital_status' => 'getMaritalStatus',
'middle' => 'getMiddle',
'name' => 'getName',
'online_presence' => 'getOnlinePresence',
'phone' => 'getPhone',
'preferred_name' => 'getPreferredName',
'spouse' => 'getSpouse',
'suffix' => 'getSuffix',
'suffix_2' => 'getSuffix2',
'title' => 'getTitle',
'title_2' => 'getTitle2',
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

    const FUNDRAISER_STATUS_ACTIVE = 'Active';
const FUNDRAISER_STATUS_INACTIVE = 'Inactive';
const FUNDRAISER_STATUS_NONE = 'None';
const TYPE_INDIVIDUAL = 'Individual';
const TYPE_ORGANIZATION = 'Organization';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundraiserStatusAllowableValues()
    {
        return [
            self::FUNDRAISER_STATUS_ACTIVE,
self::FUNDRAISER_STATUS_INACTIVE,
self::FUNDRAISER_STATUS_NONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
self::TYPE_ORGANIZATION,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['birthdate'] = isset($data['birthdate']) ? $data['birthdate'] : null;
        $this->container['date_added'] = isset($data['date_added']) ? $data['date_added'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
        $this->container['deceased'] = isset($data['deceased']) ? $data['deceased'] : null;
        $this->container['deceased_date'] = isset($data['deceased_date']) ? $data['deceased_date'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['former_name'] = isset($data['former_name']) ? $data['former_name'] : null;
        $this->container['fundraiser_status'] = isset($data['fundraiser_status']) ? $data['fundraiser_status'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['gives_anonymously'] = isset($data['gives_anonymously']) ? $data['gives_anonymously'] : null;
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['lookup_id'] = isset($data['lookup_id']) ? $data['lookup_id'] : null;
        $this->container['marital_status'] = isset($data['marital_status']) ? $data['marital_status'] : null;
        $this->container['middle'] = isset($data['middle']) ? $data['middle'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['online_presence'] = isset($data['online_presence']) ? $data['online_presence'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['preferred_name'] = isset($data['preferred_name']) ? $data['preferred_name'] : null;
        $this->container['spouse'] = isset($data['spouse']) ? $data['spouse'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['suffix_2'] = isset($data['suffix_2']) ? $data['suffix_2'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['title_2'] = isset($data['title_2']) ? $data['title_2'] : null;
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

        $allowedValues = $this->getFundraiserStatusAllowableValues();
        if (!is_null($this->container['fundraiser_status']) && !in_array($this->container['fundraiser_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fundraiser_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The immutable system record ID for the constituent. This is not the same as the user-definable constituent identifier, which is stored in the <code>lookup_id</code>.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\AddressRead
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\AddressRead $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age This computed field calculates the constituent's age based on the <code>birthdate</code> property. For individuals only.
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate $birthdate birthdate
     *
     * @return $this
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets date_added
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->container['date_added'];
    }

    /**
     * Sets date_added
     *
     * @param \DateTime $date_added The date when the constituent was created. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return $this
     */
    public function setDateAdded($date_added)
    {
        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime $date_modified The date when the constituent was last modified. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets deceased
     *
     * @return bool
     */
    public function getDeceased()
    {
        return $this->container['deceased'];
    }

    /**
     * Sets deceased
     *
     * @param bool $deceased Indicates whether the constituent is deceased. For individuals only.
     *
     * @return $this
     */
    public function setDeceased($deceased)
    {
        $this->container['deceased'] = $deceased;

        return $this;
    }

    /**
     * Gets deceased_date
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate
     */
    public function getDeceasedDate()
    {
        return $this->container['deceased_date'];
    }

    /**
     * Sets deceased_date
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate $deceased_date deceased_date
     *
     * @return $this
     */
    public function setDeceasedDate($deceased_date)
    {
        $this->container['deceased_date'] = $deceased_date;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\EmailAddressRead
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\EmailAddressRead $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param string $first The constituent's first name. For individuals only.
     *
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets former_name
     *
     * @return string
     */
    public function getFormerName()
    {
        return $this->container['former_name'];
    }

    /**
     * Sets former_name
     *
     * @param string $former_name The constituent's former name. For individuals only.
     *
     * @return $this
     */
    public function setFormerName($former_name)
    {
        $this->container['former_name'] = $former_name;

        return $this;
    }

    /**
     * Gets fundraiser_status
     *
     * @return string
     */
    public function getFundraiserStatus()
    {
        return $this->container['fundraiser_status'];
    }

    /**
     * Sets fundraiser_status
     *
     * @param string $fundraiser_status Indicates whether the constituent is a fundraiser. For individuals only.
     *
     * @return $this
     */
    public function setFundraiserStatus($fundraiser_status)
    {
        $allowedValues = $this->getFundraiserStatusAllowableValues();
        if (!is_null($fundraiser_status) && !in_array($fundraiser_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fundraiser_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fundraiser_status'] = $fundraiser_status;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender The constituent's gender. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListGenders\"><b>Gender</b></a> table. This property defaults to <i>unknown</i> if no value is provided. For individuals only.
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets gives_anonymously
     *
     * @return bool
     */
    public function getGivesAnonymously()
    {
        return $this->container['gives_anonymously'];
    }

    /**
     * Sets gives_anonymously
     *
     * @param bool $gives_anonymously Indicates whether the constituent gives anonymously.
     *
     * @return $this
     */
    public function setGivesAnonymously($gives_anonymously)
    {
        $this->container['gives_anonymously'] = $gives_anonymously;

        return $this;
    }

    /**
     * Gets inactive
     *
     * @return bool
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param bool $inactive Indicates whether the constituent is inactive.
     *
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string $last The constituent's last name. For individuals only.
     *
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets lookup_id
     *
     * @return string
     */
    public function getLookupId()
    {
        return $this->container['lookup_id'];
    }

    /**
     * Sets lookup_id
     *
     * @param string $lookup_id The user-defined identifier for the constituent.
     *
     * @return $this
     */
    public function setLookupId($lookup_id)
    {
        $this->container['lookup_id'] = $lookup_id;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param string $marital_status The constituent's marital status. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListMaritalStatuses\"><b>Marital Status</b></a> table.  For individuals only.
     *
     * @return $this
     */
    public function setMaritalStatus($marital_status)
    {
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets middle
     *
     * @return string
     */
    public function getMiddle()
    {
        return $this->container['middle'];
    }

    /**
     * Sets middle
     *
     * @param string $middle The constituent's middle name. For individuals only.
     *
     * @return $this
     */
    public function setMiddle($middle)
    {
        $this->container['middle'] = $middle;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name If the constituent's <code>type</code> is <i>Individual</i>, this computed field indicates the full name of the constituent based on the target organization’s display name settings. If the <code>type</code> is <i>Organization</i>, this is the organization's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets online_presence
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\OnlinePresenceRead
     */
    public function getOnlinePresence()
    {
        return $this->container['online_presence'];
    }

    /**
     * Sets online_presence
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\OnlinePresenceRead $online_presence online_presence
     *
     * @return $this
     */
    public function setOnlinePresence($online_presence)
    {
        $this->container['online_presence'] = $online_presence;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\PhoneRead
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\PhoneRead $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets preferred_name
     *
     * @return string
     */
    public function getPreferredName()
    {
        return $this->container['preferred_name'];
    }

    /**
     * Sets preferred_name
     *
     * @param string $preferred_name The constituent's preferred name. For individuals only.
     *
     * @return $this
     */
    public function setPreferredName($preferred_name)
    {
        $this->container['preferred_name'] = $preferred_name;

        return $this;
    }

    /**
     * Gets spouse
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\SpouseRead
     */
    public function getSpouse()
    {
        return $this->container['spouse'];
    }

    /**
     * Sets spouse
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\SpouseRead $spouse spouse
     *
     * @return $this
     */
    public function setSpouse($spouse)
    {
        $this->container['spouse'] = $spouse;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix The constituent's primary suffix. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\"><b>Suffixes</b></a> table. For individuals only.
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets suffix_2
     *
     * @return string
     */
    public function getSuffix2()
    {
        return $this->container['suffix_2'];
    }

    /**
     * Sets suffix_2
     *
     * @param string $suffix_2 The constituent's secondary suffix. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\"><b>Suffixes</b></a> table. For individuals only.
     *
     * @return $this
     */
    public function setSuffix2($suffix_2)
    {
        $this->container['suffix_2'] = $suffix_2;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The constituent's primary title. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\"><b>Titles</b></a> table. For individuals only.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_2
     *
     * @return string
     */
    public function getTitle2()
    {
        return $this->container['title_2'];
    }

    /**
     * Sets title_2
     *
     * @param string $title_2 The constituent's secondary title. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\"><b>Titles</b></a> table. For individuals only.
     *
     * @return $this
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
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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