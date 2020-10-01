# ItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | Item Id&lt;br /&gt;The Id of the Item involved in the request, or in the case of create, the created Id, if not provided. | [optional] 
**httpStatusCode** | **int** | HTTP Status Code | 
**httpStatusDescription** | **string** | HTTP Status Description | 
**message** | **string** | Message&lt;br /&gt;Successful response may include a success message.&lt;br /&gt;Failure responses will have general reason as to why. Further details may be contained in the list of errors. | [optional] 
**errors** | [**\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]**](ErrorDetail.md) | Errors&lt;br /&gt;Details about why a request failed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

