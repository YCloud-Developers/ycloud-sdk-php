# # WhatsappMessageInteractiveAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buttons** | [**\YCloud\Client\Model\WhatsappMessageInteractiveActionButton[]**](WhatsappMessageInteractiveActionButton.md) | Required for Reply Buttons. | [optional]
**button** | **string** | Required for List Messages. Button content. It cannot be an empty string and must be unique within the message. Emojis are supported, markdown is not. | [optional]
**catalog_id** | **string** | Required for Single Product Messages and Multi-Product Messages. Unique identifier of the Facebook catalog linked to your WhatsApp Business Account. This ID can be retrieved via the [Meta Commerce Manager](https://business.facebook.com/commerce/). | [optional]
**product_retailer_id** | **string** | Required for Single Product Messages and Multi-Product Messages. Unique identifier of the product in a catalog. | [optional]
**sections** | [**\YCloud\Client\Model\WhatsappMessageInteractiveActionSection[]**](WhatsappMessageInteractiveActionSection.md) | Required for List Messages and Multi-Product Messages. Array of section objects. Minimum of 1, maximum of 10. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
