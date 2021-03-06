<?php
/**
 * AddressReadExtended
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
 * AddressReadExtended Class Doc Comment
 *
 * @category Class
 * @description Addresses store information about constituent residences and other addresses along with information about where, how, and whether to send mail.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AddressReadExtended implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressReadExtended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'address_lines' => 'string',
        'city' => 'string',
        'constituent_id' => 'string',
        'country' => 'string',
        'county' => 'string',
        'date_added' => '\DateTime',
        'date_modified' => '\DateTime',
        'do_not_mail' => 'bool',
        'end' => '\DateTime',
        'formatted_address' => 'string',
        'inactive' => 'bool',
        'postal_code' => 'string',
        'preferred' => 'bool',
        'seasonal_end' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'seasonal_start' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'start' => '\DateTime',
        'state' => 'string',
        'suburb' => 'string',
        'type' => 'string',
        'region' => 'string',
        'information_source' => 'string',
        'lot' => 'string',
        'cart' => 'string',
        'dpc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'address_lines' => null,
        'city' => null,
        'constituent_id' => null,
        'country' => null,
        'county' => null,
        'date_added' => 'date-time',
        'date_modified' => 'date-time',
        'do_not_mail' => null,
        'end' => 'date-time',
        'formatted_address' => null,
        'inactive' => null,
        'postal_code' => null,
        'preferred' => null,
        'seasonal_end' => null,
        'seasonal_start' => null,
        'start' => 'date-time',
        'state' => null,
        'suburb' => null,
        'type' => null,
        'region' => null,
        'information_source' => null,
        'lot' => null,
        'cart' => null,
        'dpc' => null
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
        'id' => 'id',
        'address_lines' => 'address_lines',
        'city' => 'city',
        'constituent_id' => 'constituent_id',
        'country' => 'country',
        'county' => 'county',
        'date_added' => 'date_added',
        'date_modified' => 'date_modified',
        'do_not_mail' => 'do_not_mail',
        'end' => 'end',
        'formatted_address' => 'formatted_address',
        'inactive' => 'inactive',
        'postal_code' => 'postal_code',
        'preferred' => 'preferred',
        'seasonal_end' => 'seasonal_end',
        'seasonal_start' => 'seasonal_start',
        'start' => 'start',
        'state' => 'state',
        'suburb' => 'suburb',
        'type' => 'type',
        'region' => 'region',
        'information_source' => 'information_source',
        'lot' => 'lot',
        'cart' => 'cart',
        'dpc' => 'dpc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'address_lines' => 'setAddressLines',
        'city' => 'setCity',
        'constituent_id' => 'setConstituentId',
        'country' => 'setCountry',
        'county' => 'setCounty',
        'date_added' => 'setDateAdded',
        'date_modified' => 'setDateModified',
        'do_not_mail' => 'setDoNotMail',
        'end' => 'setEnd',
        'formatted_address' => 'setFormattedAddress',
        'inactive' => 'setInactive',
        'postal_code' => 'setPostalCode',
        'preferred' => 'setPreferred',
        'seasonal_end' => 'setSeasonalEnd',
        'seasonal_start' => 'setSeasonalStart',
        'start' => 'setStart',
        'state' => 'setState',
        'suburb' => 'setSuburb',
        'type' => 'setType',
        'region' => 'setRegion',
        'information_source' => 'setInformationSource',
        'lot' => 'setLot',
        'cart' => 'setCart',
        'dpc' => 'setDpc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'address_lines' => 'getAddressLines',
        'city' => 'getCity',
        'constituent_id' => 'getConstituentId',
        'country' => 'getCountry',
        'county' => 'getCounty',
        'date_added' => 'getDateAdded',
        'date_modified' => 'getDateModified',
        'do_not_mail' => 'getDoNotMail',
        'end' => 'getEnd',
        'formatted_address' => 'getFormattedAddress',
        'inactive' => 'getInactive',
        'postal_code' => 'getPostalCode',
        'preferred' => 'getPreferred',
        'seasonal_end' => 'getSeasonalEnd',
        'seasonal_start' => 'getSeasonalStart',
        'start' => 'getStart',
        'state' => 'getState',
        'suburb' => 'getSuburb',
        'type' => 'getType',
        'region' => 'getRegion',
        'information_source' => 'getInformationSource',
        'lot' => 'getLot',
        'cart' => 'getCart',
        'dpc' => 'getDpc'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['address_lines'] = $data['address_lines'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['constituent_id'] = $data['constituent_id'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['date_added'] = $data['date_added'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['do_not_mail'] = $data['do_not_mail'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['formatted_address'] = $data['formatted_address'] ?? null;
        $this->container['inactive'] = $data['inactive'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['preferred'] = $data['preferred'] ?? null;
        $this->container['seasonal_end'] = $data['seasonal_end'] ?? null;
        $this->container['seasonal_start'] = $data['seasonal_start'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['suburb'] = $data['suburb'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['information_source'] = $data['information_source'] ?? null;
        $this->container['lot'] = $data['lot'] ?? null;
        $this->container['cart'] = $data['cart'] ?? null;
        $this->container['dpc'] = $data['dpc'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The immutable system record ID of the address.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets address_lines
     *
     * @return string|null
     */
    public function getAddressLines()
    {
        return $this->container['address_lines'];
    }

    /**
     * Sets address_lines
     *
     * @param string|null $address_lines The address lines.
     *
     * @return self
     */
    public function setAddressLines($address_lines)
    {
        $this->container['address_lines'] = $address_lines;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the address.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets constituent_id
     *
     * @return string|null
     */
    public function getConstituentId()
    {
        return $this->container['constituent_id'];
    }

    /**
     * Sets constituent_id
     *
     * @param string|null $constituent_id The immutable system record ID of the constituent associated with the address.
     *
     * @return self
     */
    public function setConstituentId($constituent_id)
    {
        $this->container['constituent_id'] = $constituent_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The country of the address.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county of the address.
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets date_added
     *
     * @return \DateTime|null
     */
    public function getDateAdded()
    {
        return $this->container['date_added'];
    }

    /**
     * Sets date_added
     *
     * @param \DateTime|null $date_added The date when the address was created. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return self
     */
    public function setDateAdded($date_added)
    {
        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime|null $date_modified The date when the address was last modified. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets do_not_mail
     *
     * @return bool|null
     */
    public function getDoNotMail()
    {
        return $this->container['do_not_mail'];
    }

    /**
     * Sets do_not_mail
     *
     * @param bool|null $do_not_mail Indicates whether the constituent requests not to be contacted at this address.
     *
     * @return self
     */
    public function setDoNotMail($do_not_mail)
    {
        $this->container['do_not_mail'] = $do_not_mail;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end The date when the constituent ceased to reside at this address. Uses <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43</i>.
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets formatted_address
     *
     * @return string|null
     */
    public function getFormattedAddress()
    {
        return $this->container['formatted_address'];
    }

    /**
     * Sets formatted_address
     *
     * @param string|null $formatted_address This computed field retrieves the formatted address in the configured format of the country.
     *
     * @return self
     */
    public function setFormattedAddress($formatted_address)
    {
        $this->container['formatted_address'] = $formatted_address;

        return $this;
    }

    /**
     * Gets inactive
     *
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param bool|null $inactive This computed field indicates that the address is active if the current date is before any <code>end</code> date.
     *
     * @return self
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code of the address.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets preferred
     *
     * @return bool|null
     */
    public function getPreferred()
    {
        return $this->container['preferred'];
    }

    /**
     * Sets preferred
     *
     * @param bool|null $preferred Indicates whether this is the constituent's preferred address.
     *
     * @return self
     */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;

        return $this;
    }

    /**
     * Gets seasonal_end
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getSeasonalEnd()
    {
        return $this->container['seasonal_end'];
    }

    /**
     * Sets seasonal_end
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $seasonal_end seasonal_end
     *
     * @return self
     */
    public function setSeasonalEnd($seasonal_end)
    {
        $this->container['seasonal_end'] = $seasonal_end;

        return $this;
    }

    /**
     * Gets seasonal_start
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getSeasonalStart()
    {
        return $this->container['seasonal_start'];
    }

    /**
     * Sets seasonal_start
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $seasonal_start seasonal_start
     *
     * @return self
     */
    public function setSeasonalStart($seasonal_start)
    {
        $this->container['seasonal_start'] = $seasonal_start;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start The date when the constituent began residing at this address. Uses <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43</i>.
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state of the address.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string|null
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string|null $suburb The suburb of the address.
     *
     * @return self
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

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
     * @param string|null $type The address type. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListAddressTypes\"><b>Address Types</b></a> table.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The region of the address.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets information_source
     *
     * @return string|null
     */
    public function getInformationSource()
    {
        return $this->container['information_source'];
    }

    /**
     * Sets information_source
     *
     * @param string|null $information_source The information source for the address.
     *
     * @return self
     */
    public function setInformationSource($information_source)
    {
        $this->container['information_source'] = $information_source;

        return $this;
    }

    /**
     * Gets lot
     *
     * @return string|null
     */
    public function getLot()
    {
        return $this->container['lot'];
    }

    /**
     * Sets lot
     *
     * @param string|null $lot The Line of Travel (LOT) for the address.
     *
     * @return self
     */
    public function setLot($lot)
    {
        $this->container['lot'] = $lot;

        return $this;
    }

    /**
     * Gets cart
     *
     * @return string|null
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param string|null $cart The Carrier Route (CART) for the address.
     *
     * @return self
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets dpc
     *
     * @return string|null
     */
    public function getDpc()
    {
        return $this->container['dpc'];
    }

    /**
     * Sets dpc
     *
     * @param string|null $dpc The Delivery Point Code (DPC) for the address.
     *
     * @return self
     */
    public function setDpc($dpc)
    {
        $this->container['dpc'] = $dpc;

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


