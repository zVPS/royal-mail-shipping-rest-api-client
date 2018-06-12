# RoyalMail\Shipping\Rest\Api\ShipmentApi

All URIs are relative to *https://localhost/shipping/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domesticPost**](ShipmentApi.md#domesticPost) | **POST** /domestic | Operation to create a shipment
[**shipmentNumberDelete**](ShipmentApi.md#shipmentNumberDelete) | **DELETE** /{shipmentNumber} | Cancel a shipment.
[**shipmentNumberLabelPut**](ShipmentApi.md#shipmentNumberLabelPut) | **PUT** /{shipmentNumber}/label | Create shipment label.
[**shipmentNumberPut**](ShipmentApi.md#shipmentNumberPut) | **PUT** /{shipmentNumber} | Update a shipment.


# **domesticPost**
> \RoyalMail\Shipping\Rest\Api\models\CreatedShipmentResponse domesticPost($xRMGAuthToken, $createDomesticBody)

Operation to create a shipment

This method will take a domestic shipment request in the body and on successful response, it will return the shipment numbers and item details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');
// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token
$createDomesticBody = new \RoyalMail\Shipping\Rest\Api\models\Shipment(); // \RoyalMail\Shipping\Rest\Api\models\Shipment | 

try {
    $result = $apiInstance->domesticPost($xRMGAuthToken, $createDomesticBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->domesticPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token |
 **createDomesticBody** | [**\RoyalMail\Shipping\Rest\Api\models\Shipment**](../Model/Shipment.md)|  |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\CreatedShipmentResponse**](../Model/CreatedShipmentResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentNumberDelete**
> \RoyalMail\Shipping\Rest\Api\models\CancelOrUpdateShipmentResponse shipmentNumberDelete($shipmentNumber, $xRMGAuthToken)

Cancel a shipment.

Delete a shipment. Send a shipment identifier in Url. Successful response will be 200 with no content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');
// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentNumber = "shipmentNumber_example"; // string | Shipment number.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token

try {
    $result = $apiInstance->shipmentNumberDelete($shipmentNumber, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentNumberDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentNumber** | **string**| Shipment number. |
 **xRMGAuthToken** | **string**| Authorisation token |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\CancelOrUpdateShipmentResponse**](../Model/CancelOrUpdateShipmentResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentNumberLabelPut**
> \RoyalMail\Shipping\Rest\Api\models\LabelResponse shipmentNumberLabelPut($shipmentNumber, $xRMGAuthToken, $outputFormat)

Create shipment label.

This method returns a label for the shipment identifier passed in the url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');
// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentNumber = "shipmentNumber_example"; // string | Shipment number.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token
$outputFormat = "outputFormat_example"; // string | Label Format Type. The content of response.  > Unspecified / PDF: returns the  standard Base64 Encoded PDF Label DS: returns a data stream  DSPDF: returns both the data stream and the Base64 Encoded PDF Label.  PNG: returns Base64 Encoded PNG images of the 2D Data Matric and 1D Linear Barcode.  DSPNG: returns both the data stream and the Base64 Encoded PNG images of the 2D Data Matric and 1D Linear Barcode.

try {
    $result = $apiInstance->shipmentNumberLabelPut($shipmentNumber, $xRMGAuthToken, $outputFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentNumberLabelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentNumber** | **string**| Shipment number. |
 **xRMGAuthToken** | **string**| Authorisation token |
 **outputFormat** | **string**| Label Format Type. The content of response.  &gt; Unspecified / PDF: returns the  standard Base64 Encoded PDF Label DS: returns a data stream  DSPDF: returns both the data stream and the Base64 Encoded PDF Label.  PNG: returns Base64 Encoded PNG images of the 2D Data Matric and 1D Linear Barcode.  DSPNG: returns both the data stream and the Base64 Encoded PNG images of the 2D Data Matric and 1D Linear Barcode. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\LabelResponse**](../Model/LabelResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentNumberPut**
> \RoyalMail\Shipping\Rest\Api\models\CancelOrUpdateShipmentResponse shipmentNumberPut($shipmentNumber, $xRMGAuthToken, $detail)

Update a shipment.

Update a shipment. Send a shipment request in body. On successful response, it will return shipment number.  Service related information can not be updated, and if passed as part of request, it will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');
// Configure API key authorization: clientSecret
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\Api\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentNumber = "shipmentNumber_example"; // string | Shipment number.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token
$detail = new \RoyalMail\Shipping\Rest\Api\models\Shipment(); // \RoyalMail\Shipping\Rest\Api\models\Shipment | 

try {
    $result = $apiInstance->shipmentNumberPut($shipmentNumber, $xRMGAuthToken, $detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentNumberPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentNumber** | **string**| Shipment number. |
 **xRMGAuthToken** | **string**| Authorisation token |
 **detail** | [**\RoyalMail\Shipping\Rest\Api\models\Shipment**](../Model/Shipment.md)|  |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\CancelOrUpdateShipmentResponse**](../Model/CancelOrUpdateShipmentResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

