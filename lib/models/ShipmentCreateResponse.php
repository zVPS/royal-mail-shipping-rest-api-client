<?php
/**
 * ShipmentCreateResponse
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
 * ShipmentCreateResponse Class Doc Comment
 *
 * @category Class
 * @description Response from a create shipment request
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCreateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCreateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignmentNumber' => 'string',
'consignmentTrackingUrl' => 'string',
'packages' => '\RoyalMail\Shipping\Rest\Api\models\PackageResponse[]',
'routing' => '\RoyalMail\Shipping\Rest\Api\models\Routing',
'labelImageFormat' => 'string',
'labelImages' => 'string',
'customsDocuments' => 'string',
'returnLabelImageFormat' => 'string',
'returnLabelImages' => 'string',
'httpStatusCode' => 'int',
'httpStatusDescription' => 'string',
'message' => 'string',
'errors' => '\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignmentNumber' => null,
'consignmentTrackingUrl' => null,
'packages' => null,
'routing' => null,
'labelImageFormat' => null,
'labelImages' => null,
'customsDocuments' => null,
'returnLabelImageFormat' => null,
'returnLabelImages' => null,
'httpStatusCode' => 'int32',
'httpStatusDescription' => null,
'message' => null,
'errors' => null    ];

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
        'consignmentNumber' => 'ConsignmentNumber',
'consignmentTrackingUrl' => 'ConsignmentTrackingUrl',
'packages' => 'Packages',
'routing' => 'Routing',
'labelImageFormat' => 'LabelImageFormat',
'labelImages' => 'LabelImages',
'customsDocuments' => 'CustomsDocuments',
'returnLabelImageFormat' => 'ReturnLabelImageFormat',
'returnLabelImages' => 'ReturnLabelImages',
'httpStatusCode' => 'HttpStatusCode',
'httpStatusDescription' => 'HttpStatusDescription',
'message' => 'Message',
'errors' => 'Errors'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignmentNumber' => 'setConsignmentNumber',
'consignmentTrackingUrl' => 'setConsignmentTrackingUrl',
'packages' => 'setPackages',
'routing' => 'setRouting',
'labelImageFormat' => 'setLabelImageFormat',
'labelImages' => 'setLabelImages',
'customsDocuments' => 'setCustomsDocuments',
'returnLabelImageFormat' => 'setReturnLabelImageFormat',
'returnLabelImages' => 'setReturnLabelImages',
'httpStatusCode' => 'setHttpStatusCode',
'httpStatusDescription' => 'setHttpStatusDescription',
'message' => 'setMessage',
'errors' => 'setErrors'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignmentNumber' => 'getConsignmentNumber',
'consignmentTrackingUrl' => 'getConsignmentTrackingUrl',
'packages' => 'getPackages',
'routing' => 'getRouting',
'labelImageFormat' => 'getLabelImageFormat',
'labelImages' => 'getLabelImages',
'customsDocuments' => 'getCustomsDocuments',
'returnLabelImageFormat' => 'getReturnLabelImageFormat',
'returnLabelImages' => 'getReturnLabelImages',
'httpStatusCode' => 'getHttpStatusCode',
'httpStatusDescription' => 'getHttpStatusDescription',
'message' => 'getMessage',
'errors' => 'getErrors'    ];

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

    const LABEL_IMAGE_FORMAT_PDF = 'PDF';
const LABEL_IMAGE_FORMAT_PNG = 'PNG';
const LABEL_IMAGE_FORMAT_DATASTREAM = 'DATASTREAM';
const LABEL_IMAGE_FORMAT_ZPL203_DPI = 'ZPL203DPI';
const LABEL_IMAGE_FORMAT_ZPL300_DPI = 'ZPL300DPI';
const RETURN_LABEL_IMAGE_FORMAT_PDF = 'PDF';
const RETURN_LABEL_IMAGE_FORMAT_PNG = 'PNG';
const RETURN_LABEL_IMAGE_FORMAT_ZPL300_DPI = 'ZPL300DPI';
const RETURN_LABEL_IMAGE_FORMAT_ZPL203_DPI = 'ZPL203DPI';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelImageFormatAllowableValues()
    {
        return [
            self::LABEL_IMAGE_FORMAT_PDF,
self::LABEL_IMAGE_FORMAT_PNG,
self::LABEL_IMAGE_FORMAT_DATASTREAM,
self::LABEL_IMAGE_FORMAT_ZPL203_DPI,
self::LABEL_IMAGE_FORMAT_ZPL300_DPI,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReturnLabelImageFormatAllowableValues()
    {
        return [
            self::RETURN_LABEL_IMAGE_FORMAT_PDF,
self::RETURN_LABEL_IMAGE_FORMAT_PNG,
self::RETURN_LABEL_IMAGE_FORMAT_ZPL300_DPI,
self::RETURN_LABEL_IMAGE_FORMAT_ZPL203_DPI,        ];
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
        $this->container['consignmentNumber'] = isset($data['consignmentNumber']) ? $data['consignmentNumber'] : null;
        $this->container['consignmentTrackingUrl'] = isset($data['consignmentTrackingUrl']) ? $data['consignmentTrackingUrl'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['routing'] = isset($data['routing']) ? $data['routing'] : null;
        $this->container['labelImageFormat'] = isset($data['labelImageFormat']) ? $data['labelImageFormat'] : null;
        $this->container['labelImages'] = isset($data['labelImages']) ? $data['labelImages'] : null;
        $this->container['customsDocuments'] = isset($data['customsDocuments']) ? $data['customsDocuments'] : null;
        $this->container['returnLabelImageFormat'] = isset($data['returnLabelImageFormat']) ? $data['returnLabelImageFormat'] : null;
        $this->container['returnLabelImages'] = isset($data['returnLabelImages']) ? $data['returnLabelImages'] : null;
        $this->container['httpStatusCode'] = isset($data['httpStatusCode']) ? $data['httpStatusCode'] : null;
        $this->container['httpStatusDescription'] = isset($data['httpStatusDescription']) ? $data['httpStatusDescription'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLabelImageFormatAllowableValues();
        if (!is_null($this->container['labelImageFormat']) && !in_array($this->container['labelImageFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'labelImageFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReturnLabelImageFormatAllowableValues();
        if (!is_null($this->container['returnLabelImageFormat']) && !in_array($this->container['returnLabelImageFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'returnLabelImageFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['httpStatusCode'] === null) {
            $invalidProperties[] = "'httpStatusCode' can't be null";
        }
        if ($this->container['httpStatusDescription'] === null) {
            $invalidProperties[] = "'httpStatusDescription' can't be null";
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
     * Gets consignmentNumber
     *
     * @return string
     */
    public function getConsignmentNumber()
    {
        return $this->container['consignmentNumber'];
    }

    /**
     * Sets consignmentNumber
     *
     * @param string $consignmentNumber Consignment Number<br />Only populated for services that support Multi-Packages
     *
     * @return $this
     */
    public function setConsignmentNumber($consignmentNumber)
    {
        $this->container['consignmentNumber'] = $consignmentNumber;

        return $this;
    }

    /**
     * Gets consignmentTrackingUrl
     *
     * @return string
     */
    public function getConsignmentTrackingUrl()
    {
        return $this->container['consignmentTrackingUrl'];
    }

    /**
     * Sets consignmentTrackingUrl
     *
     * @param string $consignmentTrackingUrl Consignment Tracking URL<br />Only populated for services that support Multi-Packages
     *
     * @return $this
     */
    public function setConsignmentTrackingUrl($consignmentTrackingUrl)
    {
        $this->container['consignmentTrackingUrl'] = $consignmentTrackingUrl;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\PackageResponse[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\PackageResponse[] $packages Packages<br />Details each package tracking information and Unique Id.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }
    
    /**
     * Gets routing
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Routing
     */
    public function getRouting()
    {
        return $this->container['routing'];
    }

    /**
     * Sets routing
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Routing
     *
     * @return $this
     */
    public function setRouting($routing)
    {
        $this->container['routing'] = $routing;

        return $this;
    }

    /**
     * Gets labelImageFormat
     *
     * @return string
     */
    public function getLabelImageFormat()
    {
        return $this->container['labelImageFormat'];
    }

    /**
     * Sets labelImageFormat
     *
     * @param string $labelImageFormat Label Image Format
     *
     * @return $this
     */
    public function setLabelImageFormat($labelImageFormat)
    {
        $allowedValues = $this->getLabelImageFormatAllowableValues();
        if (!is_null($labelImageFormat) && !in_array($labelImageFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'labelImageFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['labelImageFormat'] = $labelImageFormat;

        return $this;
    }

    /**
     * Gets labelImages
     *
     * @return string
     */
    public function getLabelImages()
    {
        return $this->container['labelImages'];
    }

    /**
     * Sets labelImages
     *
     * @param string $labelImages Label Images<br />Any labels that have been created as a result of the request.<br />Depends on Label Image Format.<br />            <br />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file)<br />            <br />**Data stream**<br />Not Included - see Packages for Data Stream responses
     *
     * @return $this
     */
    public function setLabelImages($labelImages)
    {
        $this->container['labelImages'] = $labelImages;

        return $this;
    }

    /**
     * Gets customsDocuments
     *
     * @return string
     */
    public function getCustomsDocuments()
    {
        return $this->container['customsDocuments'];
    }

    /**
     * Sets customsDocuments
     *
     * @param string $customsDocuments Customs Documents<br />Base 64 encoded PDF<br />Any customs documents that have been created as a result of the request.
     *
     * @return $this
     */
    public function setCustomsDocuments($customsDocuments)
    {
        $this->container['customsDocuments'] = $customsDocuments;

        return $this;
    }

    /**
     * Gets returnLabelImageFormat
     *
     * @return string
     */
    public function getReturnLabelImageFormat()
    {
        return $this->container['returnLabelImageFormat'];
    }

    /**
     * Sets returnLabelImageFormat
     *
     * @param string $returnLabelImageFormat Return Label Image Format
     *
     * @return $this
     */
    public function setReturnLabelImageFormat($returnLabelImageFormat)
    {
        $allowedValues = $this->getReturnLabelImageFormatAllowableValues();
        if (!is_null($returnLabelImageFormat) && !in_array($returnLabelImageFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'returnLabelImageFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['returnLabelImageFormat'] = $returnLabelImageFormat;

        return $this;
    }

    /**
     * Gets returnLabelImages
     *
     * @return string
     */
    public function getReturnLabelImages()
    {
        return $this->container['returnLabelImages'];
    }

    /**
     * Sets returnLabelImages
     *
     * @param string $returnLabelImages Return Label Images<br />Any return labels that have been created as a result of the request and label option settings.<br />Depends on ReturnLabelImageFormat.<br />            <br />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file)
     *
     * @return $this
     */
    public function setReturnLabelImages($returnLabelImages)
    {
        $this->container['returnLabelImages'] = $returnLabelImages;

        return $this;
    }

    /**
     * Gets httpStatusCode
     *
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->container['httpStatusCode'];
    }

    /**
     * Sets httpStatusCode
     *
     * @param int $httpStatusCode HTTP Status Code
     *
     * @return $this
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->container['httpStatusCode'] = $httpStatusCode;

        return $this;
    }

    /**
     * Gets httpStatusDescription
     *
     * @return string
     */
    public function getHttpStatusDescription()
    {
        return $this->container['httpStatusDescription'];
    }

    /**
     * Sets httpStatusDescription
     *
     * @param string $httpStatusDescription HTTP Status Description
     *
     * @return $this
     */
    public function setHttpStatusDescription($httpStatusDescription)
    {
        $this->container['httpStatusDescription'] = $httpStatusDescription;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Message<br />Successful response may include a success message.<br />Failure responses will have general reason as to why. Further details may be contained in the list of errors.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ErrorDetail[] $errors Errors<br />Details about why a request failed.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
