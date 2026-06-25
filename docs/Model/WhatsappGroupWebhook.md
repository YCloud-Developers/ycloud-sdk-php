# # WhatsappGroupWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** | WhatsApp Business Account ID. | [optional]
**display_phone_number** | **string** | The display phone number from WhatsApp webhook metadata. | [optional]
**phone_number_id** | **string** | WhatsApp phone number ID. | [optional]
**field** | [**\YCloud\Client\Model\WhatsappGroupWebhookField**](WhatsappGroupWebhookField.md) |  | [optional]
**type** | [**\YCloud\Client\Model\WhatsappGroupWebhookType**](WhatsappGroupWebhookType.md) |  | [optional]
**request_id** | **string** | The request ID returned by an asynchronous group API operation. | [optional]
**status** | [**\YCloud\Client\Model\WhatsappGroupWebhookStatus**](WhatsappGroupWebhookStatus.md) |  | [optional]
**group_id** | **string** | WhatsApp group ID. | [optional]
**invite_link** | **string** | The group invite link. | [optional]
**reason** | **string** | The reason for a participant, join request, or removal event. | [optional]
**initiated_by** | **string** | Indicates who initiated a participant removal event. | [optional]
**join_request_id** | **string** | The join request ID. | [optional]
**wa_id** | **string** | WhatsApp user ID for a single participant event. | [optional]
**recipient_user_id** | **string** | Business-scoped user ID for a single participant event. | [optional]
**parent_recipient_user_id** | **string** | Parent business-scoped user ID for a single participant event. | [optional]
**customer_profile** | [**\YCloud\Client\Model\WhatsappGroupCustomerProfile**](WhatsappGroupCustomerProfile.md) |  | [optional]
**subject** | **string** | The group subject. | [optional]
**description** | **string** | The group description. | [optional]
**join_approval_mode** | [**\YCloud\Client\Model\WhatsappGroupJoinApprovalMode**](WhatsappGroupJoinApprovalMode.md) |  | [optional]
**added_participants** | [**\YCloud\Client\Model\WhatsappGroupWebhookParticipant[]**](WhatsappGroupWebhookParticipant.md) | Participants added to the group. | [optional]
**removed_participants** | [**\YCloud\Client\Model\WhatsappGroupWebhookParticipant[]**](WhatsappGroupWebhookParticipant.md) | Participants removed from the group. | [optional]
**failed_participants** | [**\YCloud\Client\Model\WhatsappGroupWebhookParticipant[]**](WhatsappGroupWebhookParticipant.md) | Participants that failed to be added or removed. | [optional]
**settings** | [**\YCloud\Client\Model\WhatsappGroupWebhookSetting[]**](WhatsappGroupWebhookSetting.md) | Group setting update details. | [optional]
**errors** | **array<string,mixed>[]** | Errors returned by WhatsApp. | [optional]
**contacts** | [**\YCloud\Client\Model\WhatsappGroupWebhookStatusContact[]**](WhatsappGroupWebhookStatusContact.md) | Contacts included in group message status webhooks. | [optional]
**statuses** | [**\YCloud\Client\Model\WhatsappGroupWebhookMessageStatus[]**](WhatsappGroupWebhookMessageStatus.md) | Group message status details. | [optional]
**webhook_time** | **\DateTime** | The time at which WhatsApp triggered this webhook. | [optional]
**dedupe_key** | **string** | Idempotency key for deduplicating group webhook events. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
