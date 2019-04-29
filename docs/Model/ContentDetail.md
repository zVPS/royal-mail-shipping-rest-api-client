# ContentDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countryOfManufactureCode** | **string** | 2-digit country ISO code representing the country in which the goods where manufactured. Note that this field is case sensitive. For the list of allowable values, please go to API Shipping V2 page on the Royal Mail API (Developer) Portal and refer to API Shipping Reference Data. | 
**manufacturersName** | **string** | Name of manufacturer of goods in the shipment. | [optional] 
**description** | **string** | Description of goods being delivered. | [optional] 
**unitWeight** | [**\RoyalMail\Shipping\Rest\Api\models\Measurement**](Measurement.md) |  | [optional] 
**unitQuantity** | **int** | Quantity of content items within the shipment. | 
**unitValue** | [**BigDecimal**](BigDecimal.md) | Value of content items within the shipment. | 
**currencyCode** | **string** | 3-digit ISO currency code for value of content item within the shipment. | 
**tariffCode** | [**BigDecimal**](BigDecimal.md) | Tariff code for content item within the shipment. See https&amp;#58;//www.gov.uk/trade-tariff. | [optional] 
**tariffDescription** | **string** | Description that compliments the tariff code supplied. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

