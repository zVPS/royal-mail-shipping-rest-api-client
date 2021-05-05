# RoyalMail\Shipping\Rest\Api\TokenApi

All URIs are relative to *///shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticatePost**](TokenApi.md#authenticatePost) | **POST** /token | Authenticates a User and provides token.

# **authenticatePost**
> authenticatePost($xRMGSecurityUsername, $xRMGSecurityPassword)

Authenticates a User and provides token.

Provides security token.

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

$apiInstance = new RoyalMail\Shipping\Rest\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGSecurityUsername = "xRMGSecurityUsername_example"; // string | User Name
$xRMGSecurityPassword = "xRMGSecurityPassword_example"; // string | Password in plain text

try {
    $apiInstance->authenticatePost($xRMGSecurityUsername, $xRMGSecurityPassword);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->authenticatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGSecurityUsername** | **string**| User Name |
 **xRMGSecurityPassword** | **string**| Password in plain text |

### Return type

void (empty response body)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

