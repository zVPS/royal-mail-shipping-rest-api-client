# PrintDocumentResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentId** | **string** | Shipment Id&lt;br /&gt;Tracking Number or Unique Id of the shipment involved. | [optional] 
**documentType** | **string** | Document Type&lt;br /&gt;            &lt;br /&gt;**CN23** - Customs Documents PDF 100mm x 150mm&lt;br /&gt;**CI** - Commercial Invoice PDF A4 Portrait&lt;br /&gt;**P** - Proforma PDF A4 Portrait | [optional] 
**documentImage** | **string** | Document Image&lt;br /&gt;Base 64 encoded PDF | [optional] 
**httpStatusCode** | **int** | HTTP Status Code | 
**httpStatusDescription** | **string** | HTTP Status Description | 
**message** | **string** | Message&lt;br /&gt;Successful response may include a success message.&lt;br /&gt;Failure responses will have general reason as to why. Further details may be contained in the list of errors. | [optional] 
**errors** | [**\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]**](ErrorDetail.md) | Errors&lt;br /&gt;Details about why a request failed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

