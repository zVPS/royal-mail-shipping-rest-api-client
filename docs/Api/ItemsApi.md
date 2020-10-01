# RoyalMail\Shipping\Rest\Api\ItemsApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsCreate**](ItemsApi.md#itemsCreate) | **POST** /items | Create Item
[**itemsDelete**](ItemsApi.md#itemsDelete) | **DELETE** /items/{itemId} | Delete Item
[**itemsGet**](ItemsApi.md#itemsGet) | **GET** /items/{itemId} | Get Item
[**itemsGetAll**](ItemsApi.md#itemsGetAll) | **GET** /items | Get Items
[**itemsUpdate**](ItemsApi.md#itemsUpdate) | **PUT** /items/{itemId} | Update item

# **itemsCreate**
> \RoyalMail\Shipping\Rest\Api\models\ItemResponse itemsCreate($body, $xRMGAuthToken)

Create Item

Add a new item to your stored items that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Item(); // \RoyalMail\Shipping\Rest\Api\models\Item | The item.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->itemsCreate($body, $xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Item**](../Model/Item.md)| The item. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsDelete**
> \RoyalMail\Shipping\Rest\Api\models\ItemResponse itemsDelete($xRMGAuthToken, $itemId)

Delete Item

Deletes the specified item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$itemId = "itemId_example"; // string | Your unique Item ID of the item to delete.

try {
    $result = $apiInstance->itemsDelete($xRMGAuthToken, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **itemId** | **string**| Your unique Item ID of the item to delete. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsGet**
> \RoyalMail\Shipping\Rest\Api\models\Item itemsGet($xRMGAuthToken, $itemId)

Get Item

Get the item specified by your unique Item ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$itemId = "itemId_example"; // string | Your unique Item ID.

try {
    $result = $apiInstance->itemsGet($xRMGAuthToken, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **itemId** | **string**| Your unique Item ID. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Item**](../Model/Item.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsGetAll**
> \RoyalMail\Shipping\Rest\Api\models\Item[] itemsGetAll($xRMGAuthToken)

Get Items

Get all of your stored items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->itemsGetAll($xRMGAuthToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Item[]**](../Model/Item.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsUpdate**
> \RoyalMail\Shipping\Rest\Api\models\ItemResponse itemsUpdate($body, $xRMGAuthToken, $itemId)

Update item

Update an item that is already stored with new details. The whole item will be replaced with new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientID
$config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RoyalMail\Shipping\Rest\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new RoyalMail\Shipping\Rest\ApiItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMail\Shipping\Rest\Api\models\Item(); // \RoyalMail\Shipping\Rest\Api\models\Item | The item with the updated details.
$xRMGAuthToken = "xRMGAuthToken_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$itemId = "itemId_example"; // string | Your unique Item ID of the item to update.

try {
    $result = $apiInstance->itemsUpdate($body, $xRMGAuthToken, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMail\Shipping\Rest\Api\models\Item**](../Model/Item.md)| The item with the updated details. |
 **xRMGAuthToken** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **itemId** | **string**| Your unique Item ID of the item to update. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

