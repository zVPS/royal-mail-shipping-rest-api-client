# CreateShipmentShipmentPackage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packageOccurrence** | **int** | Package Occurrence&lt;br /&gt;Unique package number within this shipment.&lt;br /&gt;Cannot exceed total number of packages. | 
**packagingId** | **string** | Packaging ID&lt;br /&gt;If supplied, packaging details will be populated from the stored information. | [optional] 
**weight** | **double** | Total Package Weight.&lt;br /&gt;            &lt;br /&gt;This field will be used as the Shipment Weight for single-package services such as RMG.&lt;br /&gt;The package weight must be greater than or equal to the sum of all item weights and packaging, if this information is provided.&lt;br /&gt;Min weight: 1 gram.&lt;br /&gt;*Optional/Overwritten for Average Weight Services - Average Weight Customers only.* | 
**length** | **double** | Package Length&lt;br /&gt;Dimensions are in Centimetres.&lt;br /&gt;*Dimensions are optional, however supplying accurate information helps ensure a smooth delivery experience.* | [optional] 
**width** | **double** | Package Width&lt;br /&gt;Dimensions are in Centimetres.&lt;br /&gt;*Dimensions are optional, however supplying accurate information helps ensure a smooth delivery experience.* | [optional] 
**height** | **double** | Package Height&lt;br /&gt;Dimensions are in Centimetres.&lt;br /&gt;*Dimensions are optional, however supplying accurate information helps ensure a smooth delivery experience.* | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

