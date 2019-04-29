# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | The Service Format code for the shipment. Note that this field is case sensitive. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to Shipping API Reference Data. | [optional] 
**occurrence** | **string** | Part of the customer’s contract identifier. In conjunction with the Service Offering it identifies an agreement line on the customer’s account. If only one Service Reference exists then this is not required. No leading zero is required. | [optional] 
**offering** | **string** | The Service Offering code for the mail item ordered. Please note that this field is case sensitive. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to Shipping API Reference Data | 
**type** | **string** | The system Service Type of the shipment. For the list of permissible values, please go to Pro Shipping V2 API page on the Royal Mail API (Developer)  and refer to Shipping API Reference Data. | 
**signature** | **string** | For RM Tracked items only, this element specifies whether a signature is required on delivery. If this element is not included then it defaults to false. | [optional] 
**enhancements** | [**\RoyalMail\Shipping\Rest\Api\models\ServiceEnhancements**](ServiceEnhancements.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

