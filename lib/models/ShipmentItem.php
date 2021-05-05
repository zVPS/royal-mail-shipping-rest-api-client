<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Details of an item in a shipment request, including what package it is in if possible.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemId' => 'string',
'quantity' => 'int',
'description' => 'string',
'value' => 'double',
'weight' => 'double',
'packageOccurrence' => 'int',
'hsCode' => 'string',
'skuCode' => 'string',
'countryOfOrigin' => 'string',
'imageUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemId' => null,
'quantity' => 'int32',
'description' => null,
'value' => 'double',
'weight' => 'double',
'packageOccurrence' => 'int32',
'hsCode' => null,
'skuCode' => null,
'countryOfOrigin' => null,
'imageUrl' => null    ];

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
        'itemId' => 'ItemId',
'quantity' => 'Quantity',
'description' => 'Description',
'value' => 'Value',
'weight' => 'Weight',
'packageOccurrence' => 'PackageOccurrence',
'hsCode' => 'HsCode',
'skuCode' => 'SkuCode',
'countryOfOrigin' => 'CountryOfOrigin',
'imageUrl' => 'ImageUrl'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemId' => 'setItemId',
'quantity' => 'setQuantity',
'description' => 'setDescription',
'value' => 'setValue',
'weight' => 'setWeight',
'packageOccurrence' => 'setPackageOccurrence',
'hsCode' => 'setHsCode',
'skuCode' => 'setSkuCode',
'countryOfOrigin' => 'setCountryOfOrigin',
'imageUrl' => 'setImageUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemId' => 'getItemId',
'quantity' => 'getQuantity',
'description' => 'getDescription',
'value' => 'getValue',
'weight' => 'getWeight',
'packageOccurrence' => 'getPackageOccurrence',
'hsCode' => 'getHsCode',
'skuCode' => 'getSkuCode',
'countryOfOrigin' => 'getCountryOfOrigin',
'imageUrl' => 'getImageUrl'    ];

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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['packageOccurrence'] = isset($data['packageOccurrence']) ? $data['packageOccurrence'] : null;
        $this->container['hsCode'] = isset($data['hsCode']) ? $data['hsCode'] : null;
        $this->container['skuCode'] = isset($data['skuCode']) ? $data['skuCode'] : null;
        $this->container['countryOfOrigin'] = isset($data['countryOfOrigin']) ? $data['countryOfOrigin'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string $itemId Item ID<br />If supplied all item fields except Item Quantity will be populated from the stored item record.
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Item Quantity<br />The quantity of items of this type.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item Description<br />Required if an Item Id is not supplied.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param double $value Item Value<br />Individual item value (use same currency as shipment currency).<br />Required if an Item Id is not supplied.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight Item Weight<br />Individual item weight.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets packageOccurrence
     *
     * @return int
     */
    public function getPackageOccurrence()
    {
        return $this->container['packageOccurrence'];
    }

    /**
     * Sets packageOccurrence
     *
     * @param int $packageOccurrence Package Occurrence<br />Optional Package Occurrence used to indicate which package the item has been packed into.
     *
     * @return $this
     */
    public function setPackageOccurrence($packageOccurrence)
    {
        $this->container['packageOccurrence'] = $packageOccurrence;

        return $this;
    }

    /**
     * Gets hsCode
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hsCode'];
    }

    /**
     * Sets hsCode
     *
     * @param string $hsCode HS Code<br />The [standardised commodity code](https://www.gov.uk/trade-tariff). It must be 6-12 digits only.<br />Used by Customs to calculate potential duties / taxes.
     *
     * @return $this
     */
    public function setHsCode($hsCode)
    {
        $this->container['hsCode'] = $hsCode;

        return $this;
    }

    /**
     * Gets skuCode
     *
     * @return string
     */
    public function getSkuCode()
    {
        return $this->container['skuCode'];
    }

    /**
     * Sets skuCode
     *
     * @param string $skuCode SKU Code.<br />Used by Customs to calculate potential duties / taxes.
     *
     * @return $this
     */
    public function setSkuCode($skuCode)
    {
        $this->container['skuCode'] = $skuCode;

        return $this;
    }

    /**
     * Gets countryOfOrigin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['countryOfOrigin'];
    }

    /**
     * Sets countryOfOrigin
     *
     * @param string $countryOfOrigin Country of Origin<br />[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) of item country of origin, per ISO 3166 Standard
     *
     * @return $this
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->container['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl Image URL<br />Used to save a link to an image of the item with the shipment details, so that this can be used in the Returns<br />system for consumers to see an image of the item when selecting items for return.<br />URL must be a publicly accessible image.
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

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
