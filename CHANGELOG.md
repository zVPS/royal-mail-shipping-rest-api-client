# Change Log

### v5.0

  - Upgraded to latest Royal Mail OpenAPI spec (v3.0.12)
    - Manual fixes for swagger-gen incorrect handling of arrays of types (see https://github.com/OpenAPITools/openapi-generator/pull/1037/files)
    - API client ID and Secret RFC compliance (see https://tools.ietf.org/html/rfc7230#section-3.2.4)
    - Data Stream V3 Update - Gazetteer Routing support if enabled in the associated ProShipping account
    - Simplified data stream response, components of the barcode now need decoding into their separate variables manually if required.
    - Ability to defer up to 99 shipment dates per api call
    - Ability to cancel up to 99 shipments per api call
 
Release notes from Royal Mail API Team:

  - The 21 digit tracking number is returned on the CreateShipment response so enabling Standard Parcels 2D barcode to be easily shared for Delivery Confirmation checking (this was only available via datastream or decoding the 2D Datamatrix barcode before).
  - Improved API performance by using RESTful code and a more efficient set of API calls.
  - Additional label formats - PNG and ZPL code formats as well as PDF to ensure improved barcode printing and scanning.
  - CN23 Customs documents printed on 6x4 inch labels so enabling them to be printed at the same time as the shipment label.
  - Additional API calls to optimise your processes


### v4.0

 - Added this change log
 - Upgraded to latest Royal Mail OpenAPI spec (v1.0.21)
    - Adds support for international shipment calls
    - Many fixes to required fields
    - New fields and responses added
 - Reapplied fix for CompletedShipment response not populating


### v3.1

 - Removed unused classes


### v3.0

 - Usage docs added
 - Remove composer lock as not relevant for a package
 - Fixed truncation of API error messages
 - Fixed shipment item not being populated from guzzle response to ShipmentResponseItem
 - Fixed CompletedShipments not mapping responses correctly giving a blank object
 - Fixed CompletedShipments container property for items response named incorrectly



### v2.0

 - Test classes to separate namespace for cleaner auto completion and documentation
 - Fixed Duplicated namespace path
 - Moved API class files to correct folder
 - Set default API url

### v1.0

 - Intial generation of SDK by swagger-gen from Royal Mail OpenAPI spec (v1.0.3)
 - Packagist naming fixed
 - Composer json setup for package
