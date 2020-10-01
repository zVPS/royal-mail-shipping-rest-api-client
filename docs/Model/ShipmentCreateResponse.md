# ShipmentCreateResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consignmentNumber** | **string** | Consignment Number&lt;br /&gt;Only populated for services that support Multi-Packages | [optional] 
**consignmentTrackingUrl** | **string** | Consignment Tracking URL&lt;br /&gt;Only populated for services that support Multi-Packages | [optional] 
**packages** | [**\RoyalMail\Shipping\Rest\Api\models\PackageResponse[]**](PackageResponse.md) | Packages&lt;br /&gt;Details each package tracking information and Unique Id. | [optional] 
**labelImageFormat** | **string** | Label Image Format | [optional] 
**labelImages** | **string** | Label Images&lt;br /&gt;Any labels that have been created as a result of the request.&lt;br /&gt;Depends on Label Image Format.&lt;br /&gt;            &lt;br /&gt;**PDF**&lt;br /&gt;Base 64 encoded PDF&lt;br /&gt;            &lt;br /&gt;**PNG**&lt;br /&gt;Base 64 encoded PNG&lt;br /&gt;            &lt;br /&gt;**ZPL 300 / 203 dpi**&lt;br /&gt;Base 64 encoded PRN (text file)&lt;br /&gt;            &lt;br /&gt;**Data stream**&lt;br /&gt;Not Included - see Packages for Data Stream responses | [optional] 
**customsDocuments** | **string** | Customs Documents&lt;br /&gt;Base 64 encoded PDF&lt;br /&gt;Any customs documents that have been created as a result of the request. | [optional] 
**returnLabelImageFormat** | **string** | Return Label Image Format | [optional] 
**returnLabelImages** | **string** | Return Label Images&lt;br /&gt;Any return labels that have been created as a result of the request and label option settings.&lt;br /&gt;Depends on ReturnLabelImageFormat.&lt;br /&gt;            &lt;br /&gt;**PDF**&lt;br /&gt;Base 64 encoded PDF&lt;br /&gt;            &lt;br /&gt;**PNG**&lt;br /&gt;Base 64 encoded PNG&lt;br /&gt;            &lt;br /&gt;**ZPL 300 / 203 dpi**&lt;br /&gt;Base 64 encoded PRN (text file) | [optional] 
**httpStatusCode** | **int** | HTTP Status Code | 
**httpStatusDescription** | **string** | HTTP Status Description | 
**message** | **string** | Message&lt;br /&gt;Successful response may include a success message.&lt;br /&gt;Failure responses will have general reason as to why. Further details may be contained in the list of errors. | [optional] 
**errors** | [**\RoyalMail\Shipping\Rest\Api\models\ErrorDetail[]**](ErrorDetail.md) | Errors&lt;br /&gt;Details about why a request failed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

