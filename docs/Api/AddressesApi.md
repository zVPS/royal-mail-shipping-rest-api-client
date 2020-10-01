# RoyalMail\Shipping\Rest\Api\AddressesApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressesCreate**](AddressesApi.md#addressesCreate) | **POST** /addresses | Create Address
[**addressesDelete**](AddressesApi.md#addressesDelete) | **DELETE** /addresses/{addressId} | Delete Address
[**addressesGet**](AddressesApi.md#addressesGet) | **GET** /addresses/{addressId} | Get Address
[**addressesGetAll**](AddressesApi.md#addressesGetAll) | **GET** /addresses | Get Addresses
[**addressesUpdate**](AddressesApi.md#addressesUpdate) | **PUT** /addresses/{addressId} | Update address

# **addressesCreate**
> \RoyalMail\Shipping\Rest\Api\models\AddressResponse addressesCreate($body, $xRMGAuthToken)

Create Address

Add a new address to your address book that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Address(); // \RoyalMail\Shipping\Rest\Api\models\Address | The address.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->addressesCreate($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Address**](../Model/Address.md)| The address. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesDelete**
> \RoyalMail\Shipping\Rest\Api\models\AddressResponse addressesDelete($xRMGAuthToken, $addressId)

Delete Address

Deletes the specified address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$addressId = "addressId_example"; // string | Your unique Address ID of the address to delete.

try {
    $result = $apiInstance->addressesDelete($xRMGAuthToken, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **addressId** | **string**| Your unique Address ID of the address to delete. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesGet**
> \RoyalMail\Shipping\Rest\Api\models\Address addressesGet($xRMGAuthToken, $addressId)

Get Address

Get the address specified by your unique Address ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$addressId = "addressId_example"; // string | Your unique Address ID.

try {
    $result = $apiInstance->addressesGet($xRMGAuthToken, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **addressId** | **string**| Your unique Address ID. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Address**](../Model/Address.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesGetAll**
> \RoyalMail\Shipping\Rest\Api\models\Address[] addressesGetAll($xRMGAuthToken)

Get Addresses

Get all of your stored addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->addressesGetAll($xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Address[]**](../Model/Address.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesUpdate**
> \RoyalMail\Shipping\Rest\Api\models\AddressResponse addressesUpdate($body, $xRMGAuthToken, $addressId)

Update address

Update an address that is already in your address book with new details. The whole address will be replaced with<br />new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Address(); // \RoyalMail\Shipping\Rest\Api\models\Address | The address with the updated details.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$addressId = "addressId_example"; // string | Your unique Address ID of the address to update.

try {
    $result = $apiInstance->addressesUpdate($body, $xRMGAuthToken, $addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Address**](../Model/Address.md)| The address with the updated details. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **addressId** | **string**| Your unique Address ID of the address to update. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

