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
**sticker** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**location** | [**\YCloud\Client\Model\WhatsappMessageLocation**](WhatsappMessageLocation.md) |  | [optional]
**interactive** | [**\YCloud\Client\Model\WhatsappMessageInteractive**](WhatsappMessageInteractive.md) |  | [optional]
**contacts** | [**\YCloud\Client\Model\WhatsappMessageContact[]**](WhatsappMessageContact.md) | Required when &#x60;type&#x60; is &#x60;contacts&#x60;. | [optional]
**reaction** | [**\YCloud\Client\Model\WhatsappMessageReaction**](WhatsappMessageReaction.md) |  | [optional]
**context** | [**\YCloud\Client\Model\WhatsappMessageContext**](WhatsappMessageContext.md) |  | [optional]
**external_id** | **string** | A unique (recommended) string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]
**filter_unsubscribed** | **bool** | **Optional.** If set to &#x60;true&#x60;, the message will not be sent to users who have unsubscribed from your account. Defaults to &#x60;false&#x60;.  Only use for &#x60;POST /v2/whatsapp/messages&#x60;. If the user has unsubscribed, we will push webhook notifications with &#x60;whatsappMessage.errorCode&#x60; set to &#x60;RECIPIENT_UNSUBSCRIBED&#x60;.  Not applicable to &#x60;POST /v2/whatsapp/message/sendDirectly&#x60;. | [optional]
**filter_blocked** | **bool** | **Optional.** If set to &#x60;true&#x60;, the message will not be sent to users in your block list. Defaults to &#x60;false&#x60;.  Only use for &#x60;POST /v2/whatsapp/messages&#x60;. If the user is in your block list, we will push webhook notifications with &#x60;whatsappMessage.errorCode&#x60; set to &#x60;RECIPIENT_IN_BLOCK_LIST&#x60;.  Not applicable to &#x60;POST /v2/whatsapp/message/sendDirectly&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
