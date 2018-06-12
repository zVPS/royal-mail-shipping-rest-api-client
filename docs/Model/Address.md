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
**county** | **string** | County of address | 
**postCode** | **string** | Mandatory for UK addresses. If the Shipment Type is “Return” then this must match the postcode of the registered return address. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


