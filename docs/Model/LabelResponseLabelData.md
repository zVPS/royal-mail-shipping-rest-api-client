# LabelResponseLabelData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upuCode** | **string** | Always &#39;JGB&#39; | [optional] 
**informationTypeID** | **string** | Always 6 | [optional] 
**versionID** | **string** | Always 1 | [optional] 
**format** | **string** | Dependant on Service Format selected | [optional] 
**mailType** | **string** | Depends on what service was selected e.g. Inland Large Letter | [optional] 
**itemID** | **string** | Unique Item ID for shipment which is same as received in response to creatshipmentRequest. If customer is not using the 2D barcode returned by the API, then they must convert this number to hex and then use this hex number in the 2D barcode. | [optional] 
**checkDigit** | **string** | System Calculated value | [optional] 
**itemWeight** | **string** | Shipment/Item Weight | [optional] 
**weightType** | **string** | Dependant on Service selected i.e. g, kg etc. | [optional] 
**product** | **string** | Dependant on Service Reference selected | [optional] 
**trackingNumber** | **string** | 1D Linear Barcode for shipment which is the same as shipment number received in response to a createShipmentRequest | [optional] 
**destinationPostcodeDPS** | **string** | The post/pin code for the destination. | [optional] 
**returnToSenderPostcode** | **string** | Post/Pin code for the sender for returns | [optional] 
**requiredAtDelivery** | **string** | If a signature is required, the value will be S, otherwise blank. | [optional] 
**buildingNumber** | **string** | Building Number (Label) | [optional] 
**buildingName** | **string** | Building Name (Label) | [optional] 
**dateOfShipment** | **string** | Provisional Date Of Shipment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


