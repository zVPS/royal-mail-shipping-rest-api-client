# Parcel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | [**\RoyalMail\Shipping\Rest\Api\models\Measurement**](Measurement.md) |  | [optional] 
**length** | [**\RoyalMail\Shipping\Rest\Api\models\Measurement**](Measurement.md) |  | [optional] 
**height** | [**\RoyalMail\Shipping\Rest\Api\models\Measurement**](Measurement.md) |  | [optional] 
**width** | [**\RoyalMail\Shipping\Rest\Api\models\Measurement**](Measurement.md) |  | [optional] 
**purposeOfShipment** | **string** | Purpose of shipment (also known as Nature of Goods). These are 2-3 character codes as defined below&amp;#58;   \&quot;21\&quot; for Returned Goods  “31” for Gift “32” for Commercial Sample \&quot;91\&quot; for Documents  “991” for Mixed Content \&quot;999\&quot; for Other | [optional] 
**explanation** | **string** | Comments regarding the parcel | [optional] 
**invoiceNumber** | **string** | Invoice number | [optional] 
**exportLicenseNumber** | **string** | Export licence number | [optional] 
**certificateNumber** | **string** | Certificate number | [optional] 
**contentDetails** | [**\RoyalMail\Shipping\Rest\Api\models\ContentDetail[]**](ContentDetail.md) | Content details list. | 
**fees** | [**BigDecimal**](BigDecimal.md) | Parcel fees | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

