# # WhatsappInboundMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**wamid** | **string** | The native WhatsApp message ID. | [optional]
**waba_id** | **string** | WhatsApp Business Account ID. | [optional]
**from** | **string** | The customer&#39;s phone number who sent the message to the business, formatted in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**customer_profile** | [**\YCloud\Client\Model\WhatsappProfile**](WhatsappProfile.md) |  | [optional]
**to** | **string** | The recipient&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**send_time** | **\DateTime** | The time at which this message is sent, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**type** | [**\YCloud\Client\Model\WhatsappInboundMessageType**](WhatsappInboundMessageType.md) |  | [optional]
**text** | [**\YCloud\Client\Model\WhatsappInboundMessageText**](WhatsappInboundMessageText.md) |  | [optional]
**image** | [**\YCloud\Client\Model\WhatsappInboundMessageMedia**](WhatsappInboundMessageMedia.md) |  | [optional]
**video** | [**\YCloud\Client\Model\WhatsappInboundMessageMedia**](WhatsappInboundMessageMedia.md) |  | [optional]
**audio** | [**\YCloud\Client\Model\WhatsappInboundMessageMedia**](WhatsappInboundMessageMedia.md) |  | [optional]
**document** | [**\YCloud\Client\Model\WhatsappInboundMessageMedia**](WhatsappInboundMessageMedia.md) |  | [optional]
**sticker** | [**\YCloud\Client\Model\WhatsappInboundMessageMedia**](WhatsappInboundMessageMedia.md) |  | [optional]
**interactive** | [**\YCloud\Client\Model\WhatsappInboundMessageInteractive**](WhatsappInboundMessageInteractive.md) |  | [optional]
**location** | [**\YCloud\Client\Model\WhatsappInboundMessageLocation**](WhatsappInboundMessageLocation.md) |  | [optional]
**button** | [**\YCloud\Client\Model\WhatsappInboundMessageButton**](WhatsappInboundMessageButton.md) |  | [optional]
**contacts** | [**\YCloud\Client\Model\WhatsappMessageContact[]**](WhatsappMessageContact.md) |  | [optional]
**reaction** | [**\YCloud\Client\Model\WhatsappInboundMessageReaction**](WhatsappInboundMessageReaction.md) |  | [optional]
**order** | [**\YCloud\Client\Model\WhatsappInboundMessageOrder**](WhatsappInboundMessageOrder.md) |  | [optional]
**system** | [**\YCloud\Client\Model\WhatsappInboundMessageSystem**](WhatsappInboundMessageSystem.md) |  | [optional]
**errors** | [**\YCloud\Client\Model\WhatsappInboundMessageError[]**](WhatsappInboundMessageError.md) |  | [optional]
**context** | [**\YCloud\Client\Model\WhatsappInboundMessageContext**](WhatsappInboundMessageContext.md) |  | [optional]
**referral** | [**\YCloud\Client\Model\WhatsappInboundMessageReferral**](WhatsappInboundMessageReferral.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
