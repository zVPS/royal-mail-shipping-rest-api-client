# PackageResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packageOccurance** | **int** | Package Occurence&lt;br /&gt;Unique package number within this shipment | 
**uniqueId** | **string** | Unique Shipment ID&lt;br /&gt;All shipments are assigned a unique Shipment ID. | [optional] 
**trackingNumber** | **string** | Shipment Tracking Number&lt;br /&gt;Final Mile carrier tracking number.&lt;br /&gt;Only populated for services that support tracking numbers. | [optional] 
**trackingUrl** | **string** | Tracking URL&lt;br /&gt;Final Mile Tracking, if available. | [optional] 
**carrierCode** | **string** | Carrier Code&lt;br /&gt;The allocated carrier. | [optional] 
**primary2DBarcodeImage** | **string** | Primary 2D Barcode Image&lt;br /&gt;Only populated for Data Stream response.&lt;br /&gt;Base64 Encoded PNG Image of the 2D data matrix barcode. | [optional] 
**primary2DBarcodeData** | **string** | Primary 2D Barcode Data - Base 64 Encoded&lt;br /&gt;Only populated for Data Stream response.&lt;br /&gt;Data required to create your own 2D data matrix barcode. Please decode before use. | [optional] 
**formattedUniqueId** | **string** | Formatted Unique Id&lt;br /&gt;Only populated for Data Stream response.&lt;br /&gt;Label for 2D data matrix barcode. | [optional] 
**highVolumeBarcodeData** | **string** | High Volume Barcode Data&lt;br /&gt;Only populated for Data Stream response where the service requires the barcode on the label.&lt;br /&gt;Data required to create your own High Volume barcode. | [optional] 
**highVolumeBarcodeImage** | **string** | High Volume Barcode Image&lt;br /&gt;Only populated for Data Stream response where the service requires the barcode on the label.&lt;br /&gt;Base64 Encoded PNG Image of the High Volume barcode. | [optional] 
**highVolumeSortCode** | **string** | High Volume Sort Code&lt;br /&gt;Only populated for Data Stream response where the service requires the sort code on the label. | [optional] 
**primary1DBarcodeData** | **string** | Primary 1D Barcode Data&lt;br /&gt;Only populated for Data Stream response where the service requires the barcode on the label.&lt;br /&gt;Data required to create your own 1D barcode. | [optional] 
**primary1DBarcodeImage** | **string** | Primary 1D Barcode Image&lt;br /&gt;Only populated for Data Stream response where the service requires the barcode on the label.&lt;br /&gt;Base64 Encoded PNG Image of the 1D barcode. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

