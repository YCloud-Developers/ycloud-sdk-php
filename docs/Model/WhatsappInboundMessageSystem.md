# # WhatsappInboundMessageSystem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | Describes the system message event. Supported use cases are: - Phone number update: for when a user changes from an old number to a new number. - Identity update: for when a user identity has changed. | [optional]
**new_wa_id** | **string** | **Added to Webhooks for phone number updates.**  New WhatsApp ID of the customer. | [optional]
**identity** | **string** | **Added to Webhooks for identity updates.**  New WhatsApp ID of the customer. | [optional]
**type** | **string** | Supported types are: - &#x60;user_changed_number&#x60;: for a user changed number notification. - &#x60;user_identity_changed&#x60;: for user identity changed notification. | [optional]
**user** | **string** | **Added to Webhooks for identity updates.**  The new WhatsApp user ID of the customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
