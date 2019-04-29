# Change Log

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
