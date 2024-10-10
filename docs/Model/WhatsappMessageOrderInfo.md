# # WhatsappMessageOrderInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\YCloud\Client\Model\WhatsappMessageOrderStatusEnum**](WhatsappMessageOrderStatusEnum.md) |  | [optional]
**type** | **string** | Only supported value is &#x60;quick_pay&#x60;. When this field is passed in we hide the \&quot;Review and Pay\&quot; button and only show the \&quot;Pay Now\&quot; button in the order details bubble. | [optional]
**catalog_id** | **string** | Unique identifier of the Facebook catalog being used by the business. If you do not provide this field, you must provide the following fields inside the items object: &#x60;country_of_origin&#x60;, &#x60;importer_name&#x60;, and &#x60;importer_address&#x60;. | [optional]
**items** | [**\YCloud\Client\Model\WhatsappMessageOrderItem[]**](WhatsappMessageOrderItem.md) | Array of items in the order. | [optional]
**subtotal** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  | [optional]
**tax** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  | [optional]
**shipping** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  | [optional]
**discount** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  | [optional]
**expiration** | [**\YCloud\Client\Model\WhatsappMessageOrderExpiration**](WhatsappMessageOrderExpiration.md) |  | [optional]
**description** | **string** | **Optional.** Text for sharing status related information. Could be useful while sending cancellation. Max character limit is 120 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
