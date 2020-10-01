<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @description An address that is part of the address book.&lt;br /&gt;A stored address can be used in shipment requests.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressId' => 'string',
'isReturnAddress' => 'bool',
'companyName' => 'string',
'contactName' => 'string',
'addressLine1' => 'string',
'addressLine2' => 'string',
'addressLine3' => 'string',
'town' => 'string',
'county' => 'string',
'countryCode' => 'string',
'postcode' => 'string',
'phoneNumber' => 'string',
'emailAddress' => 'string',
'vatNumber' => 'string',
'safeplace' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addressId' => null,
'isReturnAddress' => null,
'companyName' => null,
'contactName' => null,
'addressLine1' => null,
'addressLine2' => null,
'addressLine3' => null,
'town' => null,
'county' => null,
'countryCode' => null,
'postcode' => null,
'phoneNumber' => null,
'emailAddress' => null,
'vatNumber' => null,
'safeplace' => null    ];

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
        'addressId' => 'AddressId',
'isReturnAddress' => 'IsReturnAddress',
'companyName' => 'CompanyName',
'contactName' => 'ContactName',
'addressLine1' => 'AddressLine1',
'addressLine2' => 'AddressLine2',
'addressLine3' => 'AddressLine3',
'town' => 'Town',
'county' => 'County',
'countryCode' => 'CountryCode',
'postcode' => 'Postcode',
'phoneNumber' => 'PhoneNumber',
'emailAddress' => 'EmailAddress',
'vatNumber' => 'VatNumber',
'safeplace' => 'Safeplace'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressId' => 'setAddressId',
'isReturnAddress' => 'setIsReturnAddress',
'companyName' => 'setCompanyName',
'contactName' => 'setContactName',
'addressLine1' => 'setAddressLine1',
'addressLine2' => 'setAddressLine2',
'addressLine3' => 'setAddressLine3',
'town' => 'setTown',
'county' => 'setCounty',
'countryCode' => 'setCountryCode',
'postcode' => 'setPostcode',
'phoneNumber' => 'setPhoneNumber',
'emailAddress' => 'setEmailAddress',
'vatNumber' => 'setVatNumber',
'safeplace' => 'setSafeplace'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressId' => 'getAddressId',
'isReturnAddress' => 'getIsReturnAddress',
'companyName' => 'getCompanyName',
'contactName' => 'getContactName',
'addressLine1' => 'getAddressLine1',
'addressLine2' => 'getAddressLine2',
'addressLine3' => 'getAddressLine3',
'town' => 'getTown',
'county' => 'getCounty',
'countryCode' => 'getCountryCode',
'postcode' => 'getPostcode',
'phoneNumber' => 'getPhoneNumber',
'emailAddress' => 'getEmailAddress',
'vatNumber' => 'getVatNumber',
'safeplace' => 'getSafeplace'    ];

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
        $this->container['addressId'] = isset($data['addressId']) ? $data['addressId'] : null;
        $this->container['isReturnAddress'] = isset($data['isReturnAddress']) ? $data['isReturnAddress'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressLine3'] = isset($data['addressLine3']) ? $data['addressLine3'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
        $this->container['vatNumber'] = isset($data['vatNumber']) ? $data['vatNumber'] : null;
        $this->container['safeplace'] = isset($data['safeplace']) ? $data['safeplace'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isReturnAddress'] === null) {
            $invalidProperties[] = "'isReturnAddress' can't be null";
        }
        if ($this->container['contactName'] === null) {
            $invalidProperties[] = "'contactName' can't be null";
        }
        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['town'] === null) {
            $invalidProperties[] = "'town' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
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
     * Gets addressId
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->container['addressId'];
    }

    /**
     * Sets addressId
     *
     * @param string $addressId Address ID<br />Your unique identifier for this address.<br />If not provided, a GUID will be generated.
     *
     * @return $this
     */
    public function setAddressId($addressId)
    {
        $this->container['addressId'] = $addressId;

        return $this;
    }

    /**
     * Gets isReturnAddress
     *
     * @return bool
     */
    public function getIsReturnAddress()
    {
        return $this->container['isReturnAddress'];
    }

    /**
     * Sets isReturnAddress
     *
     * @param bool $isReturnAddress Is Return Address<br />If true, then this address is also available as a return address.
     *
     * @return $this
     */
    public function setIsReturnAddress($isReturnAddress)
    {
        $this->container['isReturnAddress'] = $isReturnAddress;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName Company Name<br />*Ignored if is a return address*
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string $contactName Contact Name / Return Name
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 Address Line 1
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string $addressLine2 Address Line 2
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string $addressLine3 Address Line 3
     *
     * @return $this
     */
    public function setAddressLine3($addressLine3)
    {
        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county County / State / Province<br />Conditional dependent on country.<br />USA, Australia and Canada all require a valid state code or name.
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode Country Code<br />[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) per ISO 3166 Standard<br />*Required to be GB if is a return address*
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode / Zip<br />Required for domestic addresses and some international addresses.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber Contact Phone Number<br />Required for destination addresses where SMS notifications are requested.<br />(Service Enhancement Code 13 or 16)<br />*Ignored if is a return address*
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress Contact Email Address<br />Required for destination addresses where email notifications are requested.<br />(Service Enhancement Code 14 or 16)<br />*Ignored if is a Return Address*
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string $vatNumber VAT Number<br />*Ignored if is a return address*
     *
     * @return $this
     */
    public function setVatNumber($vatNumber)
    {
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets safeplace
     *
     * @return string
     */
    public function getSafeplace()
    {
        return $this->container['safeplace'];
    }

    /**
     * Sets safeplace
     *
     * @param string $safeplace Safeplace<br />Free text to describe a safe place to leave the parcel if the service allows it.<br />*Ignored if is a return address*
     *
     * @return $this
     */
    public function setSafeplace($safeplace)
    {
        $this->container['safeplace'] = $safeplace;

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
