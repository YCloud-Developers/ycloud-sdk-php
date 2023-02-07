# # WhatsappMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**wamid** | **string** | The native WhatsApp message ID. | [optional]
**waba_id** | **string** | WhatsApp Business Account ID. |
**from** | **string** | The sender&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**to** | **string** | The recipient&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**conversation** | [**\YCloud\Client\Model\WhatsappConversation**](WhatsappConversation.md) |  | [optional]
**type** | [**\YCloud\Client\Model\WhatsappMessageType**](WhatsappMessageType.md) |  |
**template** | [**\YCloud\Client\Model\WhatsappMessageTemplate**](WhatsappMessageTemplate.md) |  | [optional]
**text** | [**\YCloud\Client\Model\WhatsappMessageText**](WhatsappMessageText.md) |  | [optional]
**image** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**video** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**audio** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**document** | [**\YCloud\Client\Model\WhatsappMessageMedia**](WhatsappMessageMedia.md) |  | [optional]
**location** | [**\YCloud\Client\Model\WhatsappMessageLocation**](WhatsappMessageLocation.md) |  | [optional]
**interactive** | [**\YCloud\Client\Model\WhatsappMessageInteractive**](WhatsappMessageInteractive.md) |  | [optional]
**contacts** | [**\YCloud\Client\Model\WhatsappMessageContact[]**](WhatsappMessageContact.md) |  | [optional]
**external_id** | **string** | A unique string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]
**status** | [**\YCloud\Client\Model\WhatsappMessageStatus**](WhatsappMessageStatus.md) |  | [optional]
**error_code** | **string** | Error code when the message status is &#x60;failed&#x60;. | [optional]
**error_message** | **string** | Error message when the message status is &#x60;failed&#x60;. | [optional]
**create_time** | **\DateTime** | The time at which this message is created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which this message is updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**total_price** | **double** | Total price of this message. | [optional]
**currency** | **string** | Price currency. [ISO 4217 currency code](https://en.wikipedia.org/wiki/ISO_4217). | [optional]
**whatsapp_api_error** | [**\YCloud\Client\Model\WhatsappApiError**](WhatsappApiError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
