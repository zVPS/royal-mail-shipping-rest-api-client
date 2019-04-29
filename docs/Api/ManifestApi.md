# RoyalMail\Shipping\Rest\Api\ManifestApi

All URIs are relative to *https://localhost/shipping/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manifestPost**](ManifestApi.md#manifestPost) | **POST** /manifest | Create shipping manifest.
[**manifestPut**](ManifestApi.md#manifestPut) | **PUT** /manifest | Create manifest image.

# **manifestPost**
> \RoyalMail\Shipping\Rest\Api\models\ManifestResponse manifestPost($body, $xRMGAuthToken)

Create shipping manifest.

This method creates a shipping manifest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\RoyalMail\Shipping\Rest\Api\ManifestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ManifestRequest(); // \RoyalMail\Shipping\Rest\Api\models\ManifestRequest | 
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->manifestPost($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestApi->manifestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ManifestRequest**](../Model/ManifestRequest.md)|  |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestPut**
> \RoyalMail\Shipping\Rest\Api\models\PrintManifestResponse manifestPut($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber)

Create manifest image.

This method return a manifest image for a previously manifested shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\RoyalMail\Shipping\Rest\Api\ManifestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$salesOrderNumber = "salesOrderNumber_example"; // string | The Sales Order Number, which is available via the GUI the day after the manifest was created.
$manifestBatchNumber = "manifestBatchNumber_example"; // string | This is the batch number to print and is returned by a prior call to create manifest operation.

try {
    $result = $apiInstance->manifestPut($xRMGAuthToken, $salesOrderNumber, $manifestBatchNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestApi->manifestPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **salesOrderNumber** | **string**| The Sales Order Number, which is available via the GUI the day after the manifest was created. | [optional]
 **manifestBatchNumber** | **string**| This is the batch number to print and is returned by a prior call to create manifest operation. | [optional]

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PrintManifestResponse**](../Model/PrintManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

