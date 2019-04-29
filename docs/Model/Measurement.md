# Measurement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unitOfMeasure** | **string** | &#x27;g&#x27; for grams. &#x27;kg&#x27; for kilograms. &#x27;cm&#x27; for centimeters.  For shipment/items must be &#x27;g&#x27;. For shipment/internationalInfo/parcels, use appropriate &#x27;g&#x27; or &#x27;kg&#x27; for weight measures. For length, width and height fields, use &#x27;cm&#x27; for parcel dimensions. | 
**value** | [**BigDecimal**](BigDecimal.md) | For shipment/items, this is the weight in grams of each item (no decimal places). If the service has a weight band, for example Special Delivery, then the upper band will be used. For example, 150 grams will use the 100 to 200 grams band. Tracked services, for example, do not have a band and therefore take the actual weight. **Note** Where Average Weight End of Day option is turned ON, for Average Weight Products populate with &#x27;0&#x27;. For more information go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to Shipping API Reference Data for Average Weight Products. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

