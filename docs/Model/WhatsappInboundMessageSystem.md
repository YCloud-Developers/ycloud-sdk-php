# # WhatsappInboundMessageSystem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wa_id** | **string** | Phone number supplied by Meta, without the leading &#x60;+&#x60;. It can be unchanged or omitted for a BSUID change. | [optional]
**user_id** | **string** | New business-scoped user ID supplied by Meta. | [optional]
**parent_user_id** | **string** | New Parent BSUID, only when enabled and supplied by Meta. | [optional]
**previous_user_id** | **string** | Previous business-scoped user ID supplied by Meta. | [optional]
**previous_parent_user_id** | **string** | Previous Parent BSUID, only when enabled and supplied by Meta. | [optional]
**body** | **string** | Describes the system message event. Supported use cases are: - Phone number update: for when a user changes from an old number to a new number. - Identity update: for when a user identity has changed. | [optional]
**new_wa_id** | **string** | **Added to Webhooks for phone number updates.**  New WhatsApp ID of the customer. | [optional]
**type** | **string** | Supported types are: - &#x60;user_changed_user_id&#x60;: notification that a user changed their BSUID. - &#x60;user_changed_number&#x60;: for a user changed number notification. - &#x60;user_identity_changed&#x60;: for user identity changed notification. | [optional]
**user** | **string** | **Added to Webhooks for identity updates.**  The new WhatsApp user ID of the customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
