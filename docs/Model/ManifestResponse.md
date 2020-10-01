# ManifestResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**postingLocation** | **string** | Posting Location.&lt;br /&gt;The Posting Location manifested | 
**manifests** | [**\RoyalMail\Shipping\Rest\Api\models\Manifest[]**](Manifest.md) | The Created Manifests&lt;br /&gt;Only populated if the request was successful. | [optional] 
**httpStatusCode** | **int** | HTTP Status Code | 
**httpStatusDescription** | **string** | HTTP Status Description | 
**message** | **string** | Message&lt;br /&gt;Successful response may include a success message.&lt;br /&gt;Failure responses will have general reason as to why. Further details may be contained in the list of errors. | [optional] 
**errors** | [**\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]**](ErrorDetail.md) | Errors&lt;br /&gt;Details about why a request failed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

