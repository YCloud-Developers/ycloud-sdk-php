# # WhatsappMessageSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The sender&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**to** | **string** | The recipient&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. Required when &#x60;recipient&#x60; is not provided. | [optional]
**recipient** | **string** | The recipient&#39;s WhatsApp Business-scoped user ID (BSUID) or parent BSUID. Required when &#x60;to&#x60; is not provided. | [optional]
**customer_profile** | [**\YCloud\Client\Model\WhatsappProfile**](WhatsappProfile.md) |  | [optional]
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
**category** | **string** | **Optional.** Indicates the category of the message to be sent with Direct Send. Supported values are &#x60;utility&#x60; and &#x60;authentication&#x60;.  Use &#x60;utility&#x60; for business-initiated utility messages. Messages sent with &#x60;utility&#x60; are charged at utility rates.  Use &#x60;authentication&#x60; for business-initiated authentication messages. Messages sent with &#x60;authentication&#x60; are charged at authentication rates. Authentication Direct Send only supports &#x60;text&#x60; messages. | [optional]
**ttl_seconds** | **int** | **Optional.** Message time-to-live in seconds for Direct Send &#x60;utility&#x60; or &#x60;authentication&#x60; messages.  The supported range is 30 seconds to 43200 seconds (12 hours). If omitted, the default Direct Send TTL is used. | [optional]
**use_direct_send** | **bool** | **Optional.** Whether to send the message through Direct Send. Defaults to &#x60;false&#x60;.  Set this to &#x60;true&#x60; to send the message through Direct Send when the sender WABA is enabled for Direct Send.  For template messages, the template must be convertible to a Direct Send message type. Supported Direct Send message types for template conversion are:  - Text messages - Interactive Call-to-Action URL button messages - Interactive reply button messages | [optional] [default to false]
**template_name** | **string** | **Optional.** Business-defined template name for a Utility Direct Send message submitted through synchronous &#x60;POST /v2/whatsapp/messages/sendDirectly&#x60; or asynchronous &#x60;POST /v2/whatsapp/messages&#x60;.  The value is case-sensitive and may contain only lowercase letters, digits, and underscores. It does not enable Direct Send by itself. When Direct Send is not selected, this field is ignored.  The name must not already be used by a non-Direct-Send template in the sender WABA. A conflict is rejected before the synchronous provider call or asynchronous acceptance, so an asynchronous conflict does not return a message ID. This field is not supported for Authentication Direct Send. | [optional]
**filter_unsubscribed** | **bool** | **Optional.** If set to &#x60;true&#x60;, the message will not be sent to users who have unsubscribed from your account. Defaults to &#x60;false&#x60;.  Only use for &#x60;POST /v2/whatsapp/messages&#x60;. If the user has unsubscribed, we will push webhook notifications with &#x60;whatsappMessage.errorCode&#x60; set to &#x60;RECIPIENT_UNSUBSCRIBED&#x60;.  Not applicable to &#x60;POST /v2/whatsapp/messages/sendDirectly&#x60;. | [optional]
**filter_blocked** | **bool** | **Optional.** If set to &#x60;true&#x60;, the message will not be sent to users in your block list. Defaults to &#x60;false&#x60;.  Only use for &#x60;POST /v2/whatsapp/messages&#x60;. If the user is in your block list, we will push webhook notifications with &#x60;whatsappMessage.errorCode&#x60; set to &#x60;RECIPIENT_IN_BLOCK_LIST&#x60;.  Not applicable to &#x60;POST /v2/whatsapp/messages/sendDirectly&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
