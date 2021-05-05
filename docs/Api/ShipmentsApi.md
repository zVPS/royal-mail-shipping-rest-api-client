# RoyalMail\Shipping\Rest\Api\ShipmentsApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentsCancel**](ShipmentsApi.md#shipmentsCancel) | **PUT** /shipments/cancel | Cancel Shipments
[**shipmentsCreate**](ShipmentsApi.md#shipmentsCreate) | **POST** /shipments | Create Shipment
[**shipmentsDefer**](ShipmentsApi.md#shipmentsDefer) | **PUT** /shipments/defer | Defer Shipments
[**shipmentsHold**](ShipmentsApi.md#shipmentsHold) | **PUT** /shipments/hold | Hold Shipments
[**shipmentsPrintDocument**](ShipmentsApi.md#shipmentsPrintDocument) | **PUT** /shipments/{shipmentId}/printDocument | Print Document
[**shipmentsPrintLabel**](ShipmentsApi.md#shipmentsPrintLabel) | **PUT** /shipments/{shipmentId}/printLabel | Print Label
[**shipmentsRelease**](ShipmentsApi.md#shipmentsRelease) | **PUT** /shipments/release | Release Shipments
[**shipmentsServiceAvailability**](ShipmentsApi.md#shipmentsServiceAvailability) | **POST** /shipments/serviceAvailability | Service Availability

# **shipmentsCancel**
> \RoyalMail\Shipping\Rest\Api\models\ShipmentsCancelResponse shipmentsCancel($body, $xRMGAuthToken)

Cancel Shipments

Can be used to cancel/void one or more current shipping labels.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 cancellation requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \RoyalMail\Shipping\Rest\Api\models\ShipmentCancelRequest()); // \RoyalMail\Shipping\Rest\Api\models\ShipmentCancelRequest[] | Shipment Cancel Requests
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsCancel($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ShipmentCancelRequest[]**](../Model/ShipmentCancelRequest.md)| Shipment Cancel Requests |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ShipmentsCancelResponse**](../Model/ShipmentsCancelResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsCreate**
> \RoyalMail\Shipping\Rest\Api\models\ShipmentCreateResponse shipmentsCreate($body, $xRMGAuthToken)

Create Shipment

Use to generate the final delivery label for your packages.<br />            <br />The request is split into several sections:<br />            <br />**Shipper** - who and where the parcel is coming from - optional if the posting location is to be used.<br />**Destination** - who and where the parcel is going to.<br />**Shipment Information** - overall package details, individual item details and requested service information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\CreateShipmentShipment(); // \RoyalMail\Shipping\Rest\Api\models\CreateShipmentShipment | The shipment.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsCreate($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\CreateShipmentShipment**](../Model/CreateShipmentShipment.md)| The shipment. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ShipmentCreateResponse**](../Model/ShipmentCreateResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsDefer**
> \RoyalMail\Shipping\Rest\Api\models\ShipmentsDeferResponse shipmentsDefer($body, $xRMGAuthToken)

Defer Shipments

Used to update the shipment shipping date for a current shipment.<br />A shipment can be deferred by a maximum of 28 days from the date of the request.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 defer requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \RoyalMail\Shipping\Rest\Api\models\ShipmentDeferRequest()); // \RoyalMail\Shipping\Rest\Api\models\ShipmentDeferRequest[] | The shipments to defer.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsDefer($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsDefer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ShipmentDeferRequest[]**](../Model/ShipmentDeferRequest.md)| The shipments to defer. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ShipmentsDeferResponse**](../Model/ShipmentsDeferResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsHold**
> \RoyalMail\Shipping\Rest\Api\models\ShipmentsHoldResponse shipmentsHold($body, $xRMGAuthToken)

Hold Shipments

Used to put a shipment on hold indefinitely.<br />A shipment on hold will not be included in any closeouts, but instead will remain in its current state.<br />Calling printLabel will release the shipment from being held.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />            <br />A hold reason must be provided and must match those set in Pro Shipping under your maintenance screens.<br />If no hold reasons exist, then shipments cannot be put on hold.<br />            <br />There can be a maximum of 99 hold requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \RoyalMail\Shipping\Rest\Api\models\ShipmentHoldRequest()); // \RoyalMail\Shipping\Rest\Api\models\ShipmentHoldRequest[] | The shipments to hold.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsHold($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ShipmentHoldRequest[]**](../Model/ShipmentHoldRequest.md)| The shipments to hold. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ShipmentsHoldResponse**](../Model/ShipmentsHoldResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPrintDocument**
> \RoyalMail\Shipping\Rest\Api\models\PrintDocumentResponse shipmentsPrintDocument($body, $xRMGAuthToken, $shipmentId)

Print Document

Prints the requested document for the shipment.<br />If item information, description of goods or reason for export have not been provided then the document cannot be printed.<br />            <br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\PrintDocumentRequest(); // \RoyalMail\Shipping\Rest\Api\models\PrintDocumentRequest | Print Document Request
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipmentId = "shipmentId_example"; // string | Shipment Id<br />The tracking number or Unique Id of the shipment to print.

try {
    $result = $apiInstance->shipmentsPrintDocument($body, $xRMGAuthToken, $shipmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsPrintDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\PrintDocumentRequest**](../Model/PrintDocumentRequest.md)| Print Document Request |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipmentId** | **string**| Shipment Id&lt;br /&gt;The tracking number or Unique Id of the shipment to print. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PrintDocumentResponse**](../Model/PrintDocumentResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPrintLabel**
> \RoyalMail\Shipping\Rest\Api\models\PrintLabelResponse shipmentsPrintLabel($body, $xRMGAuthToken, $shipmentId)

Print Label

Prints the label for the shipment.<br />Moves the shipment to processed, ready to manifest, if the shipment was not already in a processed state.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />**On Hold Shipment**<br />Calling print label on a held shipment will release the shipment from hold and update the shipment date to today.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\PrintLabelRequest(); // \RoyalMail\Shipping\Rest\Api\models\PrintLabelRequest | Print Label Request
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipmentId = "shipmentId_example"; // string | Shipment Id<br />The tracking number or Unique Id of the shipment to print.

try {
    $result = $apiInstance->shipmentsPrintLabel($body, $xRMGAuthToken, $shipmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsPrintLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\PrintLabelRequest**](../Model/PrintLabelRequest.md)| Print Label Request |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipmentId** | **string**| Shipment Id&lt;br /&gt;The tracking number or Unique Id of the shipment to print. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\PrintLabelResponse**](../Model/PrintLabelResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsRelease**
> \RoyalMail\Shipping\Rest\Api\models\ShipmentsReleaseResponse shipmentsRelease($body, $xRMGAuthToken)

Release Shipments

Used to release a shipment from being on hold.<br />This service can only be used for shipments on hold.<br />            <br />Releasing a shipment from hold will update the shipment date to today's date and if the shipment is processed it will be included the next requested manifest.<br />            <br />There can be a maximum of 99 release requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ShipmentsReleaseRequest(); // \RoyalMail\Shipping\Rest\Api\models\ShipmentsReleaseRequest | Shipments Release Request
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsRelease($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ShipmentsReleaseRequest**](../Model/ShipmentsReleaseRequest.md)| Shipments Release Request |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ShipmentsReleaseResponse**](../Model/ShipmentsReleaseResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsServiceAvailability**
> \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityResponse shipmentsServiceAvailability($body, $xRMGAuthToken)

Service Availability

Retrieve a list of available services for a potential shipment.<br />            <br />**Destination** - where the parcel is going to.<br />**Shipment Information** - overall package details and requested service requirements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipment(); // \RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipment | The shipment.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->shipmentsServiceAvailability($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsServiceAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityShipment**](../Model/ServiceAvailabilityShipment.md)| The shipment. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityResponse**](../Model/ServiceAvailabilityResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

