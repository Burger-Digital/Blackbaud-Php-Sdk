<?php
/**
 * EducationAdd
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
 * EducationAdd Class Doc Comment
 *
 * @category Class
 * @description A constituent’s education history provides important insight into who they are and often helps determine which causes the constituent will invest time and money into.
 * @package  BurgerDigital\BlackbaudPhpSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EducationAdd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EducationAdd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campus' => 'string',
'class_of' => 'string',
'class_of_degree' => 'string',
'constituent_id' => 'string',
'date_entered' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate',
'date_graduated' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate',
'date_left' => '\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate',
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
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campus' => null,
'class_of' => null,
'class_of_degree' => null,
'constituent_id' => null,
'date_entered' => null,
'date_graduated' => null,
'date_left' => null,
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
        'campus' => 'campus',
'class_of' => 'class_of',
'class_of_degree' => 'class_of_degree',
'constituent_id' => 'constituent_id',
'date_entered' => 'date_entered',
'date_graduated' => 'date_graduated',
'date_left' => 'date_left',
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
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campus' => 'setCampus',
'class_of' => 'setClassOf',
'class_of_degree' => 'setClassOfDegree',
'constituent_id' => 'setConstituentId',
'date_entered' => 'setDateEntered',
'date_graduated' => 'setDateGraduated',
'date_left' => 'setDateLeft',
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
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campus' => 'getCampus',
'class_of' => 'getClassOf',
'class_of_degree' => 'getClassOfDegree',
'constituent_id' => 'getConstituentId',
'date_entered' => 'getDateEntered',
'date_graduated' => 'getDateGraduated',
'date_left' => 'getDateLeft',
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
        $this->container['campus'] = isset($data['campus']) ? $data['campus'] : null;
        $this->container['class_of'] = isset($data['class_of']) ? $data['class_of'] : null;
        $this->container['class_of_degree'] = isset($data['class_of_degree']) ? $data['class_of_degree'] : null;
        $this->container['constituent_id'] = isset($data['constituent_id']) ? $data['constituent_id'] : null;
        $this->container['date_entered'] = isset($data['date_entered']) ? $data['date_entered'] : null;
        $this->container['date_graduated'] = isset($data['date_graduated']) ? $data['date_graduated'] : null;
        $this->container['date_left'] = isset($data['date_left']) ? $data['date_left'] : null;
        $this->container['degree'] = isset($data['degree']) ? $data['degree'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['faculty'] = isset($data['faculty']) ? $data['faculty'] : null;
        $this->container['gpa'] = isset($data['gpa']) ? $data['gpa'] : null;
        $this->container['known_name'] = isset($data['known_name']) ? $data['known_name'] : null;
        $this->container['majors'] = isset($data['majors']) ? $data['majors'] : null;
        $this->container['minors'] = isset($data['minors']) ? $data['minors'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['school'] = isset($data['school']) ? $data['school'] : null;
        $this->container['social_organization'] = isset($data['social_organization']) ? $data['social_organization'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject_of_study'] = isset($data['subject_of_study']) ? $data['subject_of_study'] : null;
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
        if ($this->container['school'] === null) {
            $invalidProperties[] = "'school' can't be null";
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
     * Gets campus
     *
     * @return string
     */
    public function getCampus()
    {
        return $this->container['campus'];
    }

    /**
     * Sets campus
     *
     * @param string $campus The campus. Character limit: 50.
     *
     * @return $this
     */
    public function setCampus($campus)
    {
        $this->container['campus'] = $campus;

        return $this;
    }

    /**
     * Gets class_of
     *
     * @return string
     */
    public function getClassOf()
    {
        return $this->container['class_of'];
    }

    /**
     * Sets class_of
     *
     * @param string $class_of The year the constituent graduated.
     *
     * @return $this
     */
    public function setClassOf($class_of)
    {
        $this->container['class_of'] = $class_of;

        return $this;
    }

    /**
     * Gets class_of_degree
     *
     * @return string
     */
    public function getClassOfDegree()
    {
        return $this->container['class_of_degree'];
    }

    /**
     * Sets class_of_degree
     *
     * @param string $class_of_degree The class of degree. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegreeClasses\"><b>Class of Degree</b></a> table. For the UK only.
     *
     * @return $this
     */
    public function setClassOfDegree($class_of_degree)
    {
        $this->container['class_of_degree'] = $class_of_degree;

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
     * @param string $constituent_id The immutable system record ID of the constituent associated with the education.
     *
     * @return $this
     */
    public function setConstituentId($constituent_id)
    {
        $this->container['constituent_id'] = $constituent_id;

        return $this;
    }

    /**
     * Gets date_entered
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate
     */
    public function getDateEntered()
    {
        return $this->container['date_entered'];
    }

    /**
     * Sets date_entered
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate $date_entered date_entered
     *
     * @return $this
     */
    public function setDateEntered($date_entered)
    {
        $this->container['date_entered'] = $date_entered;

        return $this;
    }

    /**
     * Gets date_graduated
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate
     */
    public function getDateGraduated()
    {
        return $this->container['date_graduated'];
    }

    /**
     * Sets date_graduated
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate $date_graduated date_graduated
     *
     * @return $this
     */
    public function setDateGraduated($date_graduated)
    {
        $this->container['date_graduated'] = $date_graduated;

        return $this;
    }

    /**
     * Gets date_left
     *
     * @return \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate
     */
    public function getDateLeft()
    {
        return $this->container['date_left'];
    }

    /**
     * Sets date_left
     *
     * @param \BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate $date_left date_left
     *
     * @return $this
     */
    public function setDateLeft($date_left)
    {
        $this->container['date_left'] = $date_left;

        return $this;
    }

    /**
     * Gets degree
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->container['degree'];
    }

    /**
     * Sets degree
     *
     * @param string $degree The degree received. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegrees\"><b>Degrees</b></a> table.
     *
     * @return $this
     */
    public function setDegree($degree)
    {
        $this->container['degree'] = $degree;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department The name of the education department. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDepartments\"><b>Departments</b></a> table. For the UK only.
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets faculty
     *
     * @return string
     */
    public function getFaculty()
    {
        return $this->container['faculty'];
    }

    /**
     * Sets faculty
     *
     * @param string $faculty The name of the faculty. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationFaculties\"><b>Faculties</b></a> table. For the UK only.
     *
     * @return $this
     */
    public function setFaculty($faculty)
    {
        $this->container['faculty'] = $faculty;

        return $this;
    }

    /**
     * Gets gpa
     *
     * @return double
     */
    public function getGpa()
    {
        return $this->container['gpa'];
    }

    /**
     * Sets gpa
     *
     * @param double $gpa The grade point average.
     *
     * @return $this
     */
    public function setGpa($gpa)
    {
        $this->container['gpa'] = $gpa;

        return $this;
    }

    /**
     * Gets known_name
     *
     * @return string
     */
    public function getKnownName()
    {
        return $this->container['known_name'];
    }

    /**
     * Sets known_name
     *
     * @param string $known_name The known name. Character limit: 50.
     *
     * @return $this
     */
    public function setKnownName($known_name)
    {
        $this->container['known_name'] = $known_name;

        return $this;
    }

    /**
     * Gets majors
     *
     * @return string[]
     */
    public function getMajors()
    {
        return $this->container['majors'];
    }

    /**
     * Sets majors
     *
     * @param string[] $majors The major courses of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Major/Minor</b></a> table.
     *
     * @return $this
     */
    public function setMajors($majors)
    {
        $this->container['majors'] = $majors;

        return $this;
    }

    /**
     * Gets minors
     *
     * @return string[]
     */
    public function getMinors()
    {
        return $this->container['minors'];
    }

    /**
     * Sets minors
     *
     * @param string[] $minors The minor courses of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Major/Minor</b></a> table.
     *
     * @return $this
     */
    public function setMinors($minors)
    {
        $this->container['minors'] = $minors;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool $primary Indicates whether this is the constituent's primary school association.
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number The registration number. For the UK only. Character limit: 50.
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param string $school The school name. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\"><b>Schools</b></a> table. For the UK, this property is for the establishment name, and available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\"><b>Establishments</b></a> table.
     *
     * @return $this
     */
    public function setSchool($school)
    {
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets social_organization
     *
     * @return string
     */
    public function getSocialOrganization()
    {
        return $this->container['social_organization'];
    }

    /**
     * Sets social_organization
     *
     * @param string $social_organization The social organization. Character limit: 50.
     *
     * @return $this
     */
    public function setSocialOrganization($social_organization)
    {
        $this->container['social_organization'] = $social_organization;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the education. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationStatuses\"><b>Education Status</b></a> table.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject_of_study
     *
     * @return string
     */
    public function getSubjectOfStudy()
    {
        return $this->container['subject_of_study'];
    }

    /**
     * Sets subject_of_study
     *
     * @param string $subject_of_study The subject of study. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\"><b>Subject of Study</b></a> table. For the UK only.
     *
     * @return $this
     */
    public function setSubjectOfStudy($subject_of_study)
    {
        $this->container['subject_of_study'] = $subject_of_study;

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
     * @param string $type The type of education. Available values are the entries in the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationTypes\"><b>School Types</b></a> table.
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
