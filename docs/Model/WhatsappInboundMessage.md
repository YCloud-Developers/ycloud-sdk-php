# # WhatsappInboundMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**waba_id** | **string** | WhatsApp Business Account ID. | [optional]
**from** | **string** | The sender&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
