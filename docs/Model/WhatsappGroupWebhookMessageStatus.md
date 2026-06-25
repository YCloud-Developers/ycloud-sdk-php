# # WhatsappGroupWebhookMessageStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | WhatsApp message ID. | [optional]
**status** | **string** | Message status. | [optional]
**timestamp** | **int** | Unix timestamp indicating when the message status was updated. | [optional]
**recipient_id** | **string** | Recipient group ID. | [optional]
**recipient_type** | **string** | Recipient type. | [optional]
**recipient_participant_id** | **string** | WhatsApp user ID of the recipient participant. | [optional]
**recipient_user_id** | **string** | Business-scoped user ID of the recipient participant. | [optional]
**parent_recipient_user_id** | **string** | Parent business-scoped user ID of the recipient participant. | [optional]
**conversation** | [**\YCloud\Client\Model\WhatsappGroupWebhookConversation**](WhatsappGroupWebhookConversation.md) |  | [optional]
**pricing** | [**\YCloud\Client\Model\WhatsappGroupWebhookPricing**](WhatsappGroupWebhookPricing.md) |  | [optional]
**errors** | **array<string,mixed>[]** | Errors returned by WhatsApp. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
