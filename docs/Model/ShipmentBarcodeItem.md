# ShipmentBarcodeItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentNumber** | **string** | For barcoded products i.e. you have used offline barcoding operation, this field will contain the 1D barcode number sent in the request. For nonbarcoded products, this field will contain the Shipping API V2 internal reference number. For requests where there are multiple items, there will be a corresponding shipmentNumber for each item. | 
**itemID** | **string** | This is the 2D item ID used in the label | 
**status** | **string** | This will be set to &#x27;Allocated&#x27; or &#x27;Printed&#x27;. &#x27;Printed&#x27; when label is also returned when creating shipment, otherwise &#x27;Allocated&#x27; set. For the full set of values the shipment status can hold, please go to Pro Shipping V2 API page on the Royal Mail API (Developer) Portal and refer to the Shipping API Reference Data sheet. | 
**validFrom** | [**\DateTime**](\DateTime.md) | Datetime value associated with when the shipment status code is valid from. | [optional] 
**label** | **string** | Label in PDF format and Base64 encoded. Depending on the scenarios described below, the label contents returned here can vary depending on what is enabled in the Pro Shipping GUI.    For both domestic &amp; international shipments:  1. A standard outward shipment label is returned if combined Create Shipment/ Include Label Image are enabled.  For domestic shipment only:  2. If #1. above is enabled and Include Returns Label is also enabled, then two shipments will be created and a standard outward shipment label is created for the outward shipment and a returns label is created for the return shipment.  For international shipment only:  3. If #1. above is enabled and Include CN Documentation is also enabled, then the label also includes the CN23 Customs document as well as the standard outward shipment label. Note, no Commercial Invoice is returned. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

