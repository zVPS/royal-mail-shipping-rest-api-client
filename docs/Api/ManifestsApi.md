# RoyalMail\Shipping\Rest\Api\ManifestsApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manifestsCreate**](ManifestsApi.md#manifestsCreate) | **POST** /manifests | Manifest All Shipments
[**manifestsCreateByCarrier**](ManifestsApi.md#manifestsCreateByCarrier) | **POST** /manifests/bycarrier | Manifest by Carrier Code(s)
[**manifestsCreateByService**](ManifestsApi.md#manifestsCreateByService) | **POST** /manifests/byservice | Manifest by Service Code(s)

# **manifestsCreate**
> \RoyalMail\Shipping\Rest\Api\models\ManifestResponse manifestsCreate($body, $xRMGAuthToken)

Manifest All Shipments

Manifest all shipments that are ready to manifest for a single Posting Location.<br />             <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ManifestRequest(); // \RoyalMail\Shipping\Rest\Api\models\ManifestRequest | Request
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->manifestsCreate($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ManifestRequest**](../Model/ManifestRequest.md)| Request |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestsCreateByCarrier**
> \RoyalMail\Shipping\Rest\Api\models\ManifestResponse manifestsCreateByCarrier($body, $xRMGAuthToken)

Manifest by Carrier Code(s)

Manifest shipments created with the given carrier codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ManifestCarrierCodesRequest(); // \RoyalMail\Shipping\Rest\Api\models\ManifestCarrierCodesRequest | 
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->manifestsCreateByCarrier($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreateByCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ManifestCarrierCodesRequest**](../Model/ManifestCarrierCodesRequest.md)|  |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestsCreateByService**
> \RoyalMail\Shipping\Rest\Api\models\ManifestResponse manifestsCreateByService($body, $xRMGAuthToken)

Manifest by Service Code(s)

Manifest shipments created with the given service codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ManifestServiceCodesRequest(); // \RoyalMail\Shipping\Rest\Api\models\ManifestServiceCodesRequest | 
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->manifestsCreateByService($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreateByService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ManifestServiceCodesRequest**](../Model/ManifestServiceCodesRequest.md)|  |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

