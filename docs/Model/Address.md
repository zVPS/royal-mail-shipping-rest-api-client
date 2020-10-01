# Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressId** | **string** | Address ID&lt;br /&gt;Your unique identifier for this address.&lt;br /&gt;If not provided, a GUID will be generated. | [optional] 
**isReturnAddress** | **bool** | Is Return Address&lt;br /&gt;If true, then this address is also available as a return address. | 
**companyName** | **string** | Company Name&lt;br /&gt;*Ignored if is a return address* | [optional] 
**contactName** | **string** | Contact Name / Return Name | 
**addressLine1** | **string** | Address Line 1 | 
**addressLine2** | **string** | Address Line 2 | [optional] 
**addressLine3** | **string** | Address Line 3 | [optional] 
**town** | **string** | Town | 
**county** | **string** | County / State / Province&lt;br /&gt;Conditional dependent on country.&lt;br /&gt;USA, Australia and Canada all require a valid state code or name. | [optional] 
**countryCode** | **string** | Country Code&lt;br /&gt;[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) per ISO 3166 Standard&lt;br /&gt;*Required to be GB if is a return address* | 
**postcode** | **string** | Postcode / Zip&lt;br /&gt;Required for domestic addresses and some international addresses. | [optional] 
**phoneNumber** | **string** | Contact Phone Number&lt;br /&gt;Required for destination addresses where SMS notifications are requested.&lt;br /&gt;(Service Enhancement Code 13 or 16)&lt;br /&gt;*Ignored if is a return address* | [optional] 
**emailAddress** | **string** | Contact Email Address&lt;br /&gt;Required for destination addresses where email notifications are requested.&lt;br /&gt;(Service Enhancement Code 14 or 16)&lt;br /&gt;*Ignored if is a Return Address* | [optional] 
**vatNumber** | **string** | VAT Number&lt;br /&gt;*Ignored if is a return address* | [optional] 
**safeplace** | **string** | Safeplace&lt;br /&gt;Free text to describe a safe place to leave the parcel if the service allows it.&lt;br /&gt;*Ignored if is a return address* | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

