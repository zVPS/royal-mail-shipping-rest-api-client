<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail Pro Shipping V2 REST API
 *
 * This API specification details the requirements for integrating with Royal Mail Pro Shipping V2 REST API. It specifically covers how the Royal Mail Pro Shipping API can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail Pro Shipping API exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail Pro Shipping V2 API provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly.  There are no costs to customers for using the Royal Mail Pro Shipping V2 API services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\Client\models;

use \ArrayAccess;
use \RoyalMail\Shipping\Rest\Api\Client\ObjectSerializer;

/**
 * Service Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Service implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format' => 'string',
        'occurrence' => 'string',
        'offering' => 'string',
        'type' => 'string',
        'signature' => 'string',
        'enhancements' => '\RoyalMail\Shipping\Rest\Api\Client\models\ServiceEnhancements'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format' => null,
        'occurrence' => null,
        'offering' => null,
        'type' => null,
        'signature' => null,
        'enhancements' => null
    ];

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
        'format' => 'format',
        'occurrence' => 'occurrence',
        'offering' => 'offering',
        'type' => 'type',
        'signature' => 'signature',
        'enhancements' => 'enhancements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'occurrence' => 'setOccurrence',
        'offering' => 'setOffering',
        'type' => 'setType',
        'signature' => 'setSignature',
        'enhancements' => 'setEnhancements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'occurrence' => 'getOccurrence',
        'offering' => 'getOffering',
        'type' => 'getType',
        'signature' => 'getSignature',
        'enhancements' => 'getEnhancements'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['occurrence'] = isset($data['occurrence']) ? $data['occurrence'] : null;
        $this->container['offering'] = isset($data['offering']) ? $data['offering'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['enhancements'] = isset($data['enhancements']) ? $data['enhancements'] : null;
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

        return true;
    }


    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The Service Format code for the shipment. Note that this field is case sensitive. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to Shipping API Reference Data.
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets occurrence
     *
     * @return string
     */
    public function getOccurrence()
    {
        return $this->container['occurrence'];
    }

    /**
     * Sets occurrence
     *
     * @param string $occurrence Part of the customer’s contract identifier. In conjunction with the Service Offering it identifies an agreement line on the customer’s account. If only one Service Reference exists then this is not required. No leading zero is required.
     *
     * @return $this
     */
    public function setOccurrence($occurrence)
    {
        $this->container['occurrence'] = $occurrence;

        return $this;
    }

    /**
     * Gets offering
     *
     * @return string
     */
    public function getOffering()
    {
        return $this->container['offering'];
    }

    /**
     * Sets offering
     *
     * @param string $offering The Service Offering code for the mail item ordered. Please note that this field is case sensitive. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to Shipping API Reference Data
     *
     * @return $this
     */
    public function setOffering($offering)
    {
        $this->container['offering'] = $offering;

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
     * @param string $type The system Service Type of the shipment. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer)  and refer to Shipping API Reference Data.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature For RM Tracked items only, this element specifies whether a signature is required on delivery. If this element is not included then it defaults to false.
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets enhancements
     *
     * @return \RoyalMail\Shipping\Rest\Api\Client\models\ServiceEnhancements
     */
    public function getEnhancements()
    {
        return $this->container['enhancements'];
    }

    /**
     * Sets enhancements
     *
     * @param \RoyalMail\Shipping\Rest\Api\Client\models\ServiceEnhancements $enhancements enhancements
     *
     * @return $this
     */
    public function setEnhancements($enhancements)
    {
        $this->container['enhancements'] = $enhancements;

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


