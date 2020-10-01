# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | Unique ID&lt;br /&gt;Your unique identifier for this item.&lt;br /&gt;If not provided, a GUID will be generated. | [optional] 
**description** | **string** | Item Description | 
**value** | **double** | Item Value | 
**currency** | **string** | Currency&lt;br /&gt;3 digit ISO Currency Code | 
**weight** | **double** | Item Weight&lt;br /&gt;The weight of this item.&lt;br /&gt;Min weight: 1 gram. | [optional] 
**weightUnitOfMeasure** | **string** | Weight Unit of Measure&lt;br /&gt;If using Grams, minimum weight is 1 and partial numbers will be ignored. | [optional] [default to 'KG']
**hsCode** | **string** | HS Code&lt;br /&gt;The [standardised commodity code](https://www.gov.uk/trade-tariff). It must be 6-12 digits only.&lt;br /&gt;Used by Customs to calculate potential duties / taxes. | [optional] 
**skuCode** | **string** | SKU Code.&lt;br /&gt;Used by Customs to calculate potential duties / taxes. | [optional] 
**countryOfOrigin** | **string** | Country of Origin&lt;br /&gt;[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) of item country of origin, per ISO 3166 Standard | [optional] 
**imageUrl** | **string** | Image URL&lt;br /&gt;Used to save a link to an image of the item with the shipment details, so that this can be used in the Returns&lt;br /&gt;system for consumers to see an image of the item when selecting items for return.&lt;br /&gt;URL must be a publicly accessible image. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

