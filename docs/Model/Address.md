# Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buildingName** | **string** | This field will be used if supplied but is not necessary to process a shipment. It does not replace the need for a full addressLine1 input. | [optional] 
**buildingNumber** | **string** | This field will be used if supplied but is not necessary to process a shipment. It does not replace the need for a full addressLine1 input. | [optional] 
**addressLine1** | **string** | First line of the address. | 
**addressLine2** | **string** | Second line of the address | [optional] 
**addressLine3** | **string** | Third line of the address | [optional] 
**postTown** | **string** | Town or City. The postTown will be updated to match the postTown resolved postcode. | 
**county** | **string** | County of address. Mandatory for state &amp; provinces in the US, Canada or Australia. | [optional] 
**postCode** | **string** | Mandatory for UK addresses. If the Shipment Type is “Return” then this must match the postcode of the registered return address. | 
**countryCode** | **string** | The relevant country&#x27;s 2-digit ISO code for the address. Note that this field is case sensitive.   Optional for domestic shipments.    - If supplied, must be UK country code. One of GB,JE,GE or JM.  Mandatory for international shipments.    - DO NOT USE UK country codes. For the list of allowable values, please go to API Shipping V2 page on the Royal Mail API (Developer) Portal and refer to API Shipping Reference Data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

