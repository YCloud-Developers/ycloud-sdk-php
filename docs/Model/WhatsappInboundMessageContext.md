# # WhatsappInboundMessageContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**forwarded** | **bool** | **Added to Webhooks if message was forwarded.**  Set to &#x60;true&#x60; if the received message has been forwarded. | [optional]
**frequently_forwarded** | **bool** | **Added to Webhooks if message has been frequently forwarded.**  Set to &#x60;true&#x60; if the received message has been forwarded more than five times. | [optional]
**from** | **string** | **Added to Webhooks if message is an inbound reply to a sent message.**  The WhatsApp ID (a phone number without the &#39;+&#39; prefix) of the sender of the sent message. | [optional]
**id** | **string** | **Optional.**  The &#x60;wamid&#x60; for the sent message for an inbound reply. | [optional]
**referred_product** | [**\YCloud\Client\Model\WhatsappInboundMessageReferredProduct**](WhatsappInboundMessageReferredProduct.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
