# OfflineShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Offline 1D Linear Barcode number assigned to the shipment. This should be from the 1D barcode range received by you in response to request1Drange | 
**itemID** | **string** | Offline 2D Item ID number assigned to the shipment. This should be from the 2D barcode range received by you in response to request2Drange | 
**status** | **string** | Code for status of Offline Shipment. Valid values are &#39;AllocatedOffline&#39;. You have to call the *label* operation before adding the shipment to the manifest, and ‘PrintedOffline’  label is not required when using this status in this operation. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


