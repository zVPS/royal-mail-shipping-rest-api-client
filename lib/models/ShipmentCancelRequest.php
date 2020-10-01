<?php
/**
 * ShipmentCancelRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V3 (REST)
 *
 * This API specification details the requirements for integrating with **Royal Mail API Shipping V3**.<br><br>It specifically covers how the Royal Mail API Shipping V3 can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.<br><br>Royal Mail API Shipping V3 exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail.<br><br>Built on industry standards, Royal Mail API Shipping V3 provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming and offline barcoding to allow customers greater flexibility when generating their labels. There are no costs to customers for using the Royal Mail API Shipping V3 services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.<br><br>This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating/ cancelling a shipment and Manifesting please refer to http://www.royalmail.com/pro-shipping-help.
 *
 * OpenAPI spec version: 3.0.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\models;

use \ArrayAccess;
use \RoyalMail\Shipping\Rest\Api\ObjectSerializer;

/**
 * ShipmentCancelRequest Class Doc Comment
 *
 * @category Class
 * @description A request to cancel a shipment.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCancelRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCancelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentId' => 'string',
'reasonForCancellation' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentId' => null,
'reasonForCancellation' => null    ];

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
        'shipmentId' => 'ShipmentId',
'reasonForCancellation' => 'ReasonForCancellation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentId' => 'setShipmentId',
'reasonForCancellation' => 'setReasonForCancellation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentId' => 'getShipmentId',
'reasonForCancellation' => 'getReasonForCancellation'    ];

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

    const REASON_FOR_CANCELLATION_ORDER_CANCELLED = 'OrderCancelled';
const REASON_FOR_CANCELLATION_REPACKED = 'Repacked';
const REASON_FOR_CANCELLATION_UPLOADED_IN_ERROR = 'UploadedInError';
const REASON_FOR_CANCELLATION_WRONG_SERVICE = 'WrongService';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonForCancellationAllowableValues()
    {
        return [
            self::REASON_FOR_CANCELLATION_ORDER_CANCELLED,
self::REASON_FOR_CANCELLATION_REPACKED,
self::REASON_FOR_CANCELLATION_UPLOADED_IN_ERROR,
self::REASON_FOR_CANCELLATION_WRONG_SERVICE,        ];
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
        $this->container['shipmentId'] = isset($data['shipmentId']) ? $data['shipmentId'] : null;
        $this->container['reasonForCancellation'] = isset($data['reasonForCancellation']) ? $data['reasonForCancellation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['reasonForCancellation'] === null) {
            $invalidProperties[] = "'reasonForCancellation' can't be null";
        }
        $allowedValues = $this->getReasonForCancellationAllowableValues();
        if (!is_null($this->container['reasonForCancellation']) && !in_array($this->container['reasonForCancellation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reasonForCancellation', must be one of '%s'",
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
     * Gets shipmentId
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId Shipment Id<br />The tracking number or Unique Id of the shipment to cancel.
     *
     * @return $this
     */
    public function setShipmentId($shipmentId)
    {
        $this->container['shipmentId'] = $shipmentId;

        return $this;
    }

    /**
     * Gets reasonForCancellation
     *
     * @return string
     */
    public function getReasonForCancellation()
    {
        return $this->container['reasonForCancellation'];
    }

    /**
     * Sets reasonForCancellation
     *
     * @param string $reasonForCancellation Reason for Cancellation
     *
     * @return $this
     */
    public function setReasonForCancellation($reasonForCancellation)
    {
        $allowedValues = $this->getReasonForCancellationAllowableValues();
        if (!in_array($reasonForCancellation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reasonForCancellation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reasonForCancellation'] = $reasonForCancellation;

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