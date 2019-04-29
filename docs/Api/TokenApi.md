# RoyalMail\Shipping\Rest\Api\TokenApi

All URIs are relative to *///shipping/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](TokenApi.md#getToken) | **GET** /token | Method to get a JSON Web Token (JWT).

# **getToken**
> \RoyalMail\Shipping\Rest\Api\models\Token getToken($xRMGUserName, $xRMGPassword)

Method to get a JSON Web Token (JWT).

This method accepts a Royal Mail issued user name and (encoded SHA-1 hash) password. On successful validation of the user's credentials, a JWT valid for 4 hours is returned. The user must send this JWT in the *X-RMG-Auth-Token* header when making subsequent calls to this API's business operations. > **Use the Password Generator utility attachment on the Developer Portal API Shipping V2 (REST) page to hash and encode the plain text password.**

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

$apiInstance = new RoyalMail\Shipping\Rest\Api\RoyalMail\Shipping\Rest\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRMGUserName = "xRMGUserName_example"; // string | User Name
$xRMGPassword = "xRMGPassword_example"; // string | Encoded SHA-1 hashed password.

try {
    $result = $apiInstance->getToken($xRMGUserName, $xRMGPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xRMGUserName** | **string**| User Name |
 **xRMGPassword** | **string**| Encoded SHA-1 hashed password. |

### Return type

[**\RoyalMail\Shipping\Rest\Api\models\Token**](../Model/Token.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

