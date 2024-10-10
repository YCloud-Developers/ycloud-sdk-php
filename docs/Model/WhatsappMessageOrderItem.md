# # WhatsappMessageOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retailer_id** | **string** | Content ID for an item in the order from your catalog. | [optional]
**name** | **string** | The item&#39;s name to be displayed to the user. Cannot exceed 60 characters. |
**image** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**amount** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  |
**sale_amount** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  | [optional]
**quantity** | **int** | The number of items in the order. |
**country_of_origin** | **string** | Required if &#x60;catalog_id&#x60; is not present. The country of origin of the product. | [optional]
**importer_name** | **string** | Required if &#x60;catalog_id&#x60; is not present. Name of the importer company. | [optional]
**importer_address** | **string** | Required if &#x60;catalog_id&#x60; is not present. Address of importer company. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
