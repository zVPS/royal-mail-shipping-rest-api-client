# ServiceAvailabilityDestination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressId** | **string** | Destination Address ID&lt;br /&gt;If supplied all destination address fields will be ignored and the stored address will be used. | [optional] 
**town** | **string** | Town&lt;br /&gt;Required if Address Id is not provided. | [optional] 
**countryCode** | **string** | Country Code&lt;br /&gt;[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm)  per ISO 3166 Standard.  Required if Address Id is not provided | [optional] 
**postcode** | **string** | Postcode / Zip&lt;br /&gt;Mandatory for all domestic destinations and some international destinations if the Address Id is not provided. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

