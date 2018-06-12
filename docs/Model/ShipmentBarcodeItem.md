# ShipmentBarcodeItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentNumber** | **string** | For barcoded products i.e. you have used offline barcoding operation, this field will contain the 1D barcode number sent in the request. For nonbarcoded products, this field will contain the Shipping API V2 internal reference number. For requests where there are multiple items, there will be a corresponding shipmentNumber for each item. | 
**itemID** | **string** | This is the 2D item ID used in the label | 
**status** | **string** | This will be set to ‘Allocated’. For the full set of values the shipment status can hold, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to the Shipping API Reference Data sheet. | 
**validFrom** | [**\DateTime**](\DateTime.md) | Datetime value associated with when the shipment status code is valid from. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


