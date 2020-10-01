# CreateShipmentShipmentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentDate** | [**\DateTime**](\DateTime.md) | Shipment Date&lt;br /&gt;Date of despatch - YYYY-MM-DD.&lt;br /&gt;Cannot be in the past. Max 28 days in the future. | 
**serviceCode** | **string** | Service Code&lt;br /&gt;Must be a valid system service code OR a customer mapped service code. | 
**serviceOptions** | [**\RoyalMail\Shipping\Rest\Api\models\CreateShipmentServiceOptions**](CreateShipmentServiceOptions.md) |  | [optional] 
**totalPackages** | **int** | Number of Packages&lt;br /&gt;The total number of packages. | 
**totalWeight** | **double** | Total Weight&lt;br /&gt;The total weight of the shipment including packaging. Validated againt package weight.&lt;br /&gt;Min weight: 1 gram.     &lt;br /&gt;*Optional/Overwritten for Average Weight Services - Average Weight Customers only.* | 
**weightUnitOfMeasure** | **string** | Weight Unit of Measure | [optional] [default to 'KG']
**product** | **string** | Shipment/Product type being shipped&lt;br /&gt;            &lt;br /&gt;**DOX** - Documents Only&lt;br /&gt;**NDX** - All other shipment product types | [optional] [default to 'NDX']
**descriptionOfGoods** | **string** | Description of Goods&lt;br /&gt;General description of the goods being sent.&lt;br /&gt;Required for Non-Document International and BFPO Shipments.&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 
**reasonForExport** | **string** | Reason For Export&lt;br /&gt;Required for International Shipments and BFPO (British Forces Post Office). | [optional] 
**value** | **double** | Total Shipment Value&lt;br /&gt;Required for Non-Document International and BFPO Shipments.&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 
**currency** | **string** | Currency&lt;br /&gt;This currency will be used for all values across the shipment request.&lt;br /&gt;3 digit ISO Currency Code.&lt;br /&gt;Required for Non-Document International and BFPO Shipments, or when values are provided.&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 
**labelFormat** | **string** | Requested Label Format&lt;br /&gt;*DATASTREAM is only available if it has been activated on your account.*&lt;br /&gt;Ignored if ShipmentAction set to Create or Allocate. | [optional] [default to 'PDF']
**silentPrintProfile** | **string** | Silent Print Profile&lt;br /&gt;If present, resulting labels will be printed using this profile. | [optional] 
**shipmentAction** | **string** | Shipment Action&lt;br /&gt;            &lt;br /&gt;**Process** - Shipment created and processed, ready for manifesting. Label and tracking number returned.&lt;br /&gt;            &lt;br /&gt;**Create** - Shipment created as unprocessed, ready for scanning. Scanning will create label and tracking number and move shipment to processed.&lt;br /&gt;            &lt;br /&gt;**Allocate** - Shipment created as unprocessed with tracking number allocated and returned and label created but not returned. Scanning will return label and move shipment to processed. | [optional] [default to 'Process']
**packages** | [**\RoyalMail\Shipping\Rest\Api\models\CreateShipmentShipmentPackage[]**](CreateShipmentShipmentPackage.md) | Shipment Packages&lt;br /&gt;The packages in the shipment.&lt;br /&gt;Required if TotalPackages is more than 1. | [optional] 
**items** | [**\RoyalMail\Shipping\Rest\Api\models\ShipmentItem[]**](ShipmentItem.md) | Shipment Items&lt;br /&gt;The items in the shipment.&lt;br /&gt;Required for Non-Document International Shipments and BFPO (British Forces Post Office).&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

