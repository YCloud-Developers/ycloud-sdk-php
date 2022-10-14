# # WhatsappMessageSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The sender&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**to** | **string** | The recipient&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**type** | [**\YCloud\Client\Model\WhatsappMessageType**](WhatsappMessageType.md) |  |
**template** | [**\YCloud\Client\Model\WhatsappMessageTemplate**](WhatsappMessageTemplate.md) |  | [optional]
**text** | [**\YCloud\Client\Model\WhatsappMessageText**](WhatsappMessageText.md) |  | [optional]
**image** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**video** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**audio** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**document** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**location** | [**\YCloud\Client\Model\WhatsappMessageLocation**](WhatsappMessageLocation.md) |  | [optional]
**interactive** | [**\YCloud\Client\Model\WhatsappMessageInteractive**](WhatsappMessageInteractive.md) |  | [optional]
**contacts** | [**\YCloud\Client\Model\WhatsappMessageContact[]**](WhatsappMessageContact.md) | Required when &#x60;type&#x60; is &#x60;contacts&#x60;. | [optional]
**external_id** | **string** | A unique string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
