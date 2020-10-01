# ServiceAvailabilityOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceCode** | **string** | Service Code&lt;br /&gt;Customer Mapped Service Code or System Service Code for this service. | 
**serviceName** | **string** | Service Name | 
**transitDays** | **int** | Estimated Transit Days | 
**isTracked** | **bool** | Is Tracked&lt;br /&gt;If true, the service is a tracked service. | 
**signatureIncluded** | **bool** | Signature Included&lt;br /&gt;If true, a signature required on delivery is included with the service. | 
**recordedSignedForAvailable** | **bool** | Recorded Signed For Enhancement Available&lt;br /&gt;If true, the recorded signed for enhancement can be used with this service. | 
**safeplaceAvailable** | **bool** | Safe Place Enhancement Available&lt;br /&gt;If true, the safe place enhancement can be used with this service. | 
**localCollectAvailable** | **bool** | Local Collect Enhancement Available&lt;br /&gt;If true, the local collect enhancement can be used with this service. | 
**saturdayGuaranteedAvailable** | **bool** | Saturday Guaranteed Enhancement Available&lt;br /&gt;If true, the saturday guaranteed enhancement can be used with this service. | 
**consequentialLossAvailable** | **bool** | Consequential Loss Enhancement Available&lt;br /&gt;If true, the consequential loss enhancement can be used with this service. | 
**formatsAvailable** | [**\RoyalMail\Shipping\Rest\Api\models\ServiceAvailabilityFormat[]**](ServiceAvailabilityFormat.md) | Formats Available&lt;br /&gt;All formats that are available for this service for the given weight, including the maximum weight possible for each format. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

