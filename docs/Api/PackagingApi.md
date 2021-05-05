# RoyalMail\Shipping\Rest\Api\PackagingApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packagingCreate**](PackagingApi.md#packagingCreate) | **POST** /packaging | Create Packaging
[**packagingDelete**](PackagingApi.md#packagingDelete) | **DELETE** /packaging/{packagingId} | Delete Packaging
[**packagingGet**](PackagingApi.md#packagingGet) | **GET** /packaging/{packagingId} | Get Packaging
[**packagingGetAll**](PackagingApi.md#packagingGetAll) | **GET** /packaging | Get All Packaging
[**packagingUpdate**](PackagingApi.md#packagingUpdate) | **PUT** /packaging/{packagingId} | Update packaging

# **packagingCreate**
> \RoyalMail\Shipping\Rest\Api\models\PackagingResponse packagingCreate($body, $xRMGAuthToken)

Create Packaging

Add new packaging to your stored packaging details that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Packaging(); // \RoyalMail\Shipping\Rest\Api\models\Packaging | The packaging details.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->packagingCreate($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Packaging**](../Model/Packaging.md)| The packaging details. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingDelete**
> \RoyalMail\Shipping\Rest\Api\models\PackagingResponse packagingDelete($xRMGAuthToken, $packagingId)

Delete Packaging

Deletes the specified packaging.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packagingId = "packagingId_example"; // string | Your unique Packaging ID of the packaging details to delete.

try {
    $result = $apiInstance->packagingDelete($xRMGAuthToken, $packagingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packagingId** | **string**| Your unique Packaging ID of the packaging details to delete. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingGet**
> \RoyalMail\Shipping\Rest\Api\models\Packaging packagingGet($xRMGAuthToken, $packagingId)

Get Packaging

Get the packaging details specified by your unique Packaging ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packagingId = "packagingId_example"; // string | Your Unique Packaging ID.

try {
    $result = $apiInstance->packagingGet($xRMGAuthToken, $packagingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packagingId** | **string**| Your Unique Packaging ID. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Packaging**](../Model/Packaging.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingGetAll**
> \RoyalMail\Shipping\Rest\Api\models\Packaging[] packagingGetAll($xRMGAuthToken)

Get All Packaging

Get all of your stored packaging details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->packagingGetAll($xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Packaging[]**](../Model/Packaging.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingUpdate**
> \RoyalMail\Shipping\Rest\Api\models\PackagingResponse packagingUpdate($body, $xRMGAuthToken, $packagingId)

Update packaging

Update packaging details that is already stored with new details. All details will be replaced with new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Packaging(); // \RoyalMail\Shipping\Rest\Api\models\Packaging | The packaging with the updated details.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packagingId = "packagingId_example"; // string | Your unique Packaging ID of the packaging details to update.

try {
    $result = $apiInstance->packagingUpdate($body, $xRMGAuthToken, $packagingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Packaging**](../Model/Packaging.md)| The packaging with the updated details. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packagingId** | **string**| Your unique Packaging ID of the packaging details to update. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

