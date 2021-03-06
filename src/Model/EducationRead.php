<?php
/**
 * EducationRead
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
 * EducationRead Class Doc Comment
 *
 * @category Class
 * @description A constituent’s education history provides important insight into who they are and often helps determine which causes the constituent will invest time and money into.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EducationRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EducationRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'campus' => 'string',
        'class_of' => 'string',
        'class_of_degree' => 'string',
        'constituent_id' => 'string',
        'date_added' => '\DateTime',
        'date_entered' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'date_graduated' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'date_left' => '\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate',
        'date_modified' => '\DateTime',
        'degree' => 'string',
        'department' => 'string',
        'faculty' => 'string',
        'gpa' => 'double',
        'known_name' => 'string',
        'majors' => 'string[]',
        'minors' => 'string[]',
        'primary' => 'bool',
        'registration_number' => 'string',
        'school' => 'string',
        'social_organization' => 'string',
        'status' => 'string',
        'subject_of_study' => 'string',
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
        'id' => null,
        'campus' => null,
        'class_of' => null,
        'class_of_degree' => null,
        'constituent_id' => null,
        'date_added' => 'date-time',
        'date_entered' => null,
        'date_graduated' => null,
        'date_left' => null,
        'date_modified' => 'date-time',
        'degree' => null,
        'department' => null,
        'faculty' => null,
        'gpa' => 'double',
        'known_name' => null,
        'majors' => null,
        'minors' => null,
        'primary' => null,
        'registration_number' => null,
        'school' => null,
        'social_organization' => null,
        'status' => null,
        'subject_of_study' => null,
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
        'id' => 'id',
        'campus' => 'campus',
        'class_of' => 'class_of',
        'class_of_degree' => 'class_of_degree',
        'constituent_id' => 'constituent_id',
        'date_added' => 'date_added',
        'date_entered' => 'date_entered',
        'date_graduated' => 'date_graduated',
        'date_left' => 'date_left',
        'date_modified' => 'date_modified',
        'degree' => 'degree',
        'department' => 'department',
        'faculty' => 'faculty',
        'gpa' => 'gpa',
        'known_name' => 'known_name',
        'majors' => 'majors',
        'minors' => 'minors',
        'primary' => 'primary',
        'registration_number' => 'registration_number',
        'school' => 'school',
        'social_organization' => 'social_organization',
        'status' => 'status',
        'subject_of_study' => 'subject_of_study',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'campus' => 'setCampus',
        'class_of' => 'setClassOf',
        'class_of_degree' => 'setClassOfDegree',
        'constituent_id' => 'setConstituentId',
        'date_added' => 'setDateAdded',
        'date_entered' => 'setDateEntered',
        'date_graduated' => 'setDateGraduated',
        'date_left' => 'setDateLeft',
        'date_modified' => 'setDateModified',
        'degree' => 'setDegree',
        'department' => 'setDepartment',
        'faculty' => 'setFaculty',
        'gpa' => 'setGpa',
        'known_name' => 'setKnownName',
        'majors' => 'setMajors',
        'minors' => 'setMinors',
        'primary' => 'setPrimary',
        'registration_number' => 'setRegistrationNumber',
        'school' => 'setSchool',
        'social_organization' => 'setSocialOrganization',
        'status' => 'setStatus',
        'subject_of_study' => 'setSubjectOfStudy',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'campus' => 'getCampus',
        'class_of' => 'getClassOf',
        'class_of_degree' => 'getClassOfDegree',
        'constituent_id' => 'getConstituentId',
        'date_added' => 'getDateAdded',
        'date_entered' => 'getDateEntered',
        'date_graduated' => 'getDateGraduated',
        'date_left' => 'getDateLeft',
        'date_modified' => 'getDateModified',
        'degree' => 'getDegree',
        'department' => 'getDepartment',
        'faculty' => 'getFaculty',
        'gpa' => 'getGpa',
        'known_name' => 'getKnownName',
        'majors' => 'getMajors',
        'minors' => 'getMinors',
        'primary' => 'getPrimary',
        'registration_number' => 'getRegistrationNumber',
        'school' => 'getSchool',
        'social_organization' => 'getSocialOrganization',
        'status' => 'getStatus',
        'subject_of_study' => 'getSubjectOfStudy',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['campus'] = $data['campus'] ?? null;
        $this->container['class_of'] = $data['class_of'] ?? null;
        $this->container['class_of_degree'] = $data['class_of_degree'] ?? null;
        $this->container['constituent_id'] = $data['constituent_id'] ?? null;
        $this->container['date_added'] = $data['date_added'] ?? null;
        $this->container['date_entered'] = $data['date_entered'] ?? null;
        $this->container['date_graduated'] = $data['date_graduated'] ?? null;
        $this->container['date_left'] = $data['date_left'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['degree'] = $data['degree'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['faculty'] = $data['faculty'] ?? null;
        $this->container['gpa'] = $data['gpa'] ?? null;
        $this->container['known_name'] = $data['known_name'] ?? null;
        $this->container['majors'] = $data['majors'] ?? null;
        $this->container['minors'] = $data['minors'] ?? null;
        $this->container['primary'] = $data['primary'] ?? null;
        $this->container['registration_number'] = $data['registration_number'] ?? null;
        $this->container['school'] = $data['school'] ?? null;
        $this->container['social_organization'] = $data['social_organization'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subject_of_study'] = $data['subject_of_study'] ?? null;
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
     * @param string|null $id The immutable system record ID of the education.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets campus
     *
     * @return string|null
     */
    public function getCampus()
    {
        return $this->container['campus'];
    }

    /**
     * Sets campus
     *
     * @param string|null $campus The campus.
     *
     * @return self
     */
    public function setCampus($campus)
    {
        $this->container['campus'] = $campus;

        return $this;
    }

    /**
     * Gets class_of
     *
     * @return string|null
     */
    public function getClassOf()
    {
        return $this->container['class_of'];
    }

    /**
     * Sets class_of
     *
     * @param string|null $class_of The year the constituent graduated.
     *
     * @return self
     */
    public function setClassOf($class_of)
    {
        $this->container['class_of'] = $class_of;

        return $this;
    }

    /**
     * Gets class_of_degree
     *
     * @return string|null
     */
    public function getClassOfDegree()
    {
        return $this->container['class_of_degree'];
    }

    /**
     * Sets class_of_degree
     *
     * @param string|null $class_of_degree The class of degree. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegreeClasses\"><b>Class of Degree</b></a> table. For the UK only.
     *
     * @return self
     */
    public function setClassOfDegree($class_of_degree)
    {
        $this->container['class_of_degree'] = $class_of_degree;

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
     * @param string|null $constituent_id The immutable system record ID of the constituent associated with the education.
     *
     * @return self
     */
    public function setConstituentId($constituent_id)
    {
        $this->container['constituent_id'] = $constituent_id;

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
     * @param \DateTime|null $date_added The date when the education was created. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return self
     */
    public function setDateAdded($date_added)
    {
        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets date_entered
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getDateEntered()
    {
        return $this->container['date_entered'];
    }

    /**
     * Sets date_entered
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $date_entered date_entered
     *
     * @return self
     */
    public function setDateEntered($date_entered)
    {
        $this->container['date_entered'] = $date_entered;

        return $this;
    }

    /**
     * Gets date_graduated
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getDateGraduated()
    {
        return $this->container['date_graduated'];
    }

    /**
     * Sets date_graduated
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $date_graduated date_graduated
     *
     * @return self
     */
    public function setDateGraduated($date_graduated)
    {
        $this->container['date_graduated'] = $date_graduated;

        return $this;
    }

    /**
     * Gets date_left
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null
     */
    public function getDateLeft()
    {
        return $this->container['date_left'];
    }

    /**
     * Sets date_left
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate|null $date_left date_left
     *
     * @return self
     */
    public function setDateLeft($date_left)
    {
        $this->container['date_left'] = $date_left;

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
     * @param \DateTime|null $date_modified The date when the education was last modified. Includes an offset from UTC in <a href=\"https://tools.ietf.org/html/rfc3339\">ISO-8601 format: </a><i>1969-11-21T10:29:43-04:00</i>.
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets degree
     *
     * @return string|null
     */
    public function getDegree()
    {
        return $this->container['degree'];
    }

    /**
     * Sets degree
     *
     * @param string|null $degree The degree received. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegrees\"><b>Degrees</b></a> table.
     *
     * @return self
     */
    public function setDegree($degree)
    {
        $this->container['degree'] = $degree;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department The name of the education department. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDepartments\"><b>Departments</b></a> table. For the UK only.
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets faculty
     *
     * @return string|null
     */
    public function getFaculty()
    {
        return $this->container['faculty'];
    }

    /**
     * Sets faculty
     *
     * @param string|null $faculty The name of the faculty. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationFaculties\"><b>Faculties</b></a> table. For the UK only.
     *
     * @return self
     */
    public function setFaculty($faculty)
    {
        $this->container['faculty'] = $faculty;

        return $this;
    }

    /**
     * Gets gpa
     *
     * @return double|null
     */
    public function getGpa()
    {
        return $this->container['gpa'];
    }

    /**
     * Sets gpa
     *
     * @param double|null $gpa The grade point average.
     *
     * @return self
     */
    public function setGpa($gpa)
    {
        $this->container['gpa'] = $gpa;

        return $this;
    }

    /**
     * Gets known_name
     *
     * @return string|null
     */
    public function getKnownName()
    {
        return $this->container['known_name'];
    }

    /**
     * Sets known_name
     *
     * @param string|null $known_name The known name.
     *
     * @return self
     */
    public function setKnownName($known_name)
    {
        $this->container['known_name'] = $known_name;

        return $this;
    }

    /**
     * Gets majors
     *
     * @return string[]|null
     */
    public function getMajors()
    {
        return $this->container['majors'];
    }

    /**
     * Sets majors
     *
     * @param string[]|null $majors The major courses of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Major/Minor</b></a> table.
     *
     * @return self
     */
    public function setMajors($majors)
    {
        $this->container['majors'] = $majors;

        return $this;
    }

    /**
     * Gets minors
     *
     * @return string[]|null
     */
    public function getMinors()
    {
        return $this->container['minors'];
    }

    /**
     * Sets minors
     *
     * @param string[]|null $minors The minor courses of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Major/Minor</b></a> table.
     *
     * @return self
     */
    public function setMinors($minors)
    {
        $this->container['minors'] = $minors;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary Indicates whether this is the constituent's primary school association.
     *
     * @return self
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string|null $registration_number The registration number. For the UK only.
     *
     * @return self
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets school
     *
     * @return string|null
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param string|null $school The school name. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\"><b>Schools</b></a> table. For the UK, this property is for the establishment name, and available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\"><b>Establishments</b></a> table.
     *
     * @return self
     */
    public function setSchool($school)
    {
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets social_organization
     *
     * @return string|null
     */
    public function getSocialOrganization()
    {
        return $this->container['social_organization'];
    }

    /**
     * Sets social_organization
     *
     * @param string|null $social_organization The social organization.
     *
     * @return self
     */
    public function setSocialOrganization($social_organization)
    {
        $this->container['social_organization'] = $social_organization;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the education. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationStatuses\"><b>Education Status</b></a> table.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject_of_study
     *
     * @return string|null
     */
    public function getSubjectOfStudy()
    {
        return $this->container['subject_of_study'];
    }

    /**
     * Sets subject_of_study
     *
     * @param string|null $subject_of_study The subject of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Subject of Study</b></a> table. For the UK only.
     *
     * @return self
     */
    public function setSubjectOfStudy($subject_of_study)
    {
        $this->container['subject_of_study'] = $subject_of_study;

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
     * @param string|null $type The type of education. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationTypes\"><b>School Types</b></a> table.
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


