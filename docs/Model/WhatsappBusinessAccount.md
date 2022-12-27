# # WhatsappBusinessAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the WhatApp Business Account. | [optional]
**name** | **string** | User-friendly name to differentiate WhatsApp Business Accounts. | [optional]
**currency** | **string** | The currency in which the payment transactions for the WhatsApp Business Account will be processed. | [optional]
**message_template_namespace** | **string** | Namespace string for the message templates that belong to the WhatsApp Business Account. | [optional]
**account_review_status** | [**\YCloud\Client\Model\WhatsappBusinessAccountReviewStatus**](WhatsappBusinessAccountReviewStatus.md) |  | [optional]
**business_verification_status** | [**\YCloud\Client\Model\MetaBusinessAccountVerificationStatus**](MetaBusinessAccountVerificationStatus.md) |  | [optional]
**country** | **string** | Country of the WhatsApp Business Account&#39;s owning Meta Business account. | [optional]
**ownership_type** | **string** | Ownership type of the WhatsApp Business Account. | [optional]
**primary_funding_id** | **string** | Primary funding ID for the WhatsApp Business Account paid service. | [optional]
**purchase_order_number** | **string** | The purchase order number supplied by the business for payment management purposes. | [optional]
**timezone_id** | **string** | The timezone ID of the WhatsApp Business Account. See [Timezone IDs](https://developers.facebook.com/docs/marketing-api/reference/ad-account/timezone-ids). | [optional]
**decision** | [**\YCloud\Client\Model\WhatsappReviewDecision**](WhatsappReviewDecision.md) |  | [optional]
**update_event** | [**\YCloud\Client\Model\WhatsappBusinessAccountUpdateEventEnum**](WhatsappBusinessAccountUpdateEventEnum.md) |  | [optional]
**ban_state** | [**\YCloud\Client\Model\WhatsappBusinessAccountBanState**](WhatsappBusinessAccountBanState.md) |  | [optional]
**ban_date** | **string** | The date when the WABA is banned. | [optional]
**violation_type** | **string** | Used to report violations imposed on the WABA. See also [WhatsApp Business Platform Policy Violations](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement/violations). | [optional]
**restrictions** | [**\YCloud\Client\Model\WhatsappBusinessAccountRestrictionInfo[]**](WhatsappBusinessAccountRestrictionInfo.md) | Used to report restrictions imposed on the WABA, when that WABA violates [WhatsApp Business Platform policies](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
