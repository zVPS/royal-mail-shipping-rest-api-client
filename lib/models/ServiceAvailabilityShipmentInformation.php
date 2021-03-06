<?php
/**
 * ServiceAvailabilityShipmentInformation
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
 * API Shipping V3 (REST) provides the functionality for customers to take a shipping transaction from creation to collection.   It specifically covers how the Royal Mail API Shipping V3 can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V3 exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic and international items with Royal Mail.  Built on industry standards, Royal Mail API Shipping V3 provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming to allow customers greater flexibility when generating their labels. There are no costs to customers for using the Royal Mail API Shipping V3 services, however customers??? own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating/ cancelling a shipment and Manifesting please refer to http://www.royalmail.com/pro-shipping-help.
 *
 * OpenAPI spec version: 3.0.20
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
 * ServiceAvailabilityShipmentInformation Class Doc Comment
 *
 * @category Class
 * @description Shipment Information&lt;br /&gt;Overall package details and requested service requirements.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceAvailabilityShipmentInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceAvailability.ShipmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceCode' => 'string',
'serviceOptions' => '\RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityServiceOptions',
'totalPackages' => 'int',
'totalWeight' => 'double',
'weightUnitOfMeasure' => 'string',
'product' => 'string',
'value' => 'double',
'currency' => 'string',
'packages' => '\RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipmentPackage[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceCode' => null,
'serviceOptions' => null,
'totalPackages' => 'int32',
'totalWeight' => 'double',
'weightUnitOfMeasure' => null,
'product' => null,
'value' => 'double',
'currency' => null,
'packages' => null    ];

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
        'serviceCode' => 'ServiceCode',
'serviceOptions' => 'ServiceOptions',
'totalPackages' => 'TotalPackages',
'totalWeight' => 'TotalWeight',
'weightUnitOfMeasure' => 'WeightUnitOfMeasure',
'product' => 'Product',
'value' => 'Value',
'currency' => 'Currency',
'packages' => 'Packages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceCode' => 'setServiceCode',
'serviceOptions' => 'setServiceOptions',
'totalPackages' => 'setTotalPackages',
'totalWeight' => 'setTotalWeight',
'weightUnitOfMeasure' => 'setWeightUnitOfMeasure',
'product' => 'setProduct',
'value' => 'setValue',
'currency' => 'setCurrency',
'packages' => 'setPackages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceCode' => 'getServiceCode',
'serviceOptions' => 'getServiceOptions',
'totalPackages' => 'getTotalPackages',
'totalWeight' => 'getTotalWeight',
'weightUnitOfMeasure' => 'getWeightUnitOfMeasure',
'product' => 'getProduct',
'value' => 'getValue',
'currency' => 'getCurrency',
'packages' => 'getPackages'    ];

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

    const WEIGHT_UNIT_OF_MEASURE_KG = 'KG';
const WEIGHT_UNIT_OF_MEASURE_GRAMS = 'Grams';
const PRODUCT_NDX = 'NDX';
const PRODUCT_DOX = 'DOX';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightUnitOfMeasureAllowableValues()
    {
        return [
            self::WEIGHT_UNIT_OF_MEASURE_KG,
self::WEIGHT_UNIT_OF_MEASURE_GRAMS,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductAllowableValues()
    {
        return [
            self::PRODUCT_NDX,
self::PRODUCT_DOX,        ];
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
        $this->container['serviceCode'] = isset($data['serviceCode']) ? $data['serviceCode'] : null;
        $this->container['serviceOptions'] = isset($data['serviceOptions']) ? $data['serviceOptions'] : null;
        $this->container['totalPackages'] = isset($data['totalPackages']) ? $data['totalPackages'] : null;
        $this->container['totalWeight'] = isset($data['totalWeight']) ? $data['totalWeight'] : null;
        $this->container['weightUnitOfMeasure'] = isset($data['weightUnitOfMeasure']) ? $data['weightUnitOfMeasure'] : 'KG';
        $this->container['product'] = isset($data['product']) ? $data['product'] : 'NDX';
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['totalPackages'] === null) {
            $invalidProperties[] = "'totalPackages' can't be null";
        }
        if ($this->container['totalWeight'] === null) {
            $invalidProperties[] = "'totalWeight' can't be null";
        }
        $allowedValues = $this->getWeightUnitOfMeasureAllowableValues();
        if (!is_null($this->container['weightUnitOfMeasure']) && !in_array($this->container['weightUnitOfMeasure'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'weightUnitOfMeasure', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product', must be one of '%s'",
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
     * Gets serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string $serviceCode Service Code<br />Must be a valid system service code OR a customer mapped service code.<br />If service code is not supplied a list of all available service options will be returned, otherwise only information about the service requested will be returned.
     *
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets serviceOptions
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityServiceOptions
     */
    public function getServiceOptions()
    {
        return $this->container['serviceOptions'];
    }

    /**
     * Sets serviceOptions
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityServiceOptions $serviceOptions serviceOptions
     *
     * @return $this
     */
    public function setServiceOptions($serviceOptions)
    {
        $this->container['serviceOptions'] = $serviceOptions;

        return $this;
    }

    /**
     * Gets totalPackages
     *
     * @return int
     */
    public function getTotalPackages()
    {
        return $this->container['totalPackages'];
    }

    /**
     * Sets totalPackages
     *
     * @param int $totalPackages Number of Packages<br />The total number of packages.
     *
     * @return $this
     */
    public function setTotalPackages($totalPackages)
    {
        $this->container['totalPackages'] = $totalPackages;

        return $this;
    }

    /**
     * Gets totalWeight
     *
     * @return double
     */
    public function getTotalWeight()
    {
        return $this->container['totalWeight'];
    }

    /**
     * Sets totalWeight
     *
     * @param double $totalWeight Total Weight<br />The total weight of the shipment including packaging. Validated againt package weight.<br />Min weight: 1 gram.
     *
     * @return $this
     */
    public function setTotalWeight($totalWeight)
    {
        $this->container['totalWeight'] = $totalWeight;

        return $this;
    }

    /**
     * Gets weightUnitOfMeasure
     *
     * @return string
     */
    public function getWeightUnitOfMeasure()
    {
        return $this->container['weightUnitOfMeasure'];
    }

    /**
     * Sets weightUnitOfMeasure
     *
     * @param string $weightUnitOfMeasure Weight Unit of Measure
     *
     * @return $this
     */
    public function setWeightUnitOfMeasure($weightUnitOfMeasure)
    {
        $allowedValues = $this->getWeightUnitOfMeasureAllowableValues();
        if (!is_null($weightUnitOfMeasure) && !in_array($weightUnitOfMeasure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weightUnitOfMeasure', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weightUnitOfMeasure'] = $weightUnitOfMeasure;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product Shipment/Product type being shipped<br />            <br />**DOX** - Documents Only<br />**NDX** - All other shipment product types
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($product) && !in_array($product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double $value Total Shipment Value<br />Required for Non-Document International and BFPO Shipments.<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency<br />This currency will be used for all values across the shipment request.<br />3 digit ISO Currency Code.<br />Required for Non-Document International and BFPO Shipments, or when value is provided.<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipmentPackage[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipmentPackage[] $packages Shipment Packages<br />The packages in the shipment.<br />Required if TotalPackages is more than 1.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

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
