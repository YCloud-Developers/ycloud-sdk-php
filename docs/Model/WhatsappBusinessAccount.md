# # WhatsappBusinessAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | WhatApp Business Account ID. | [optional]
**name** | **string** | User-friendly name to differentiate WhatsApp Business Accounts. | [optional]
**currency** | **string** | The currency in which the payment transactions for the WhatsApp Business Account will be processed. | [optional]
**message_template_namespace** | **string** | Namespace string for the message templates that belong to the WhatsApp Business Account. | [optional]
**account_review_status** | [**\YCloud\Client\Model\WhatsappBusinessAccountReviewStatus**](WhatsappBusinessAccountReviewStatus.md) |  | [optional]
**business_verification_status** | [**\YCloud\Client\Model\MetaBusinessAccountVerificationStatus**](MetaBusinessAccountVerificationStatus.md) |  | [optional]
**country** | **string** | Country of the WhatsApp Business Account&#39;s owning Meta Business account. | [optional]
**ownership_type** | **string** | Ownership type of the WhatsApp Business Account. | [optional]
**payment_method_attached** | **bool** | Whether we have attached a payment method to the WhatsApp Business Account. | [optional]
**primary_funding_id** | **string** | Primary funding ID for the WhatsApp Business Account paid service. | [optional]
**purchase_order_number** | **string** | The purchase order number supplied by the business for payment management purposes. | [optional]
**timezone_id** | **string** | The timezone ID of the WhatsApp Business Account. See [Timezone IDs](https://developers.facebook.com/docs/marketing-api/reference/ad-account/timezone-ids). | [optional]
**decision** | [**\YCloud\Client\Model\WhatsappReviewDecision**](WhatsappReviewDecision.md) |  | [optional]
**update_event** | [**\YCloud\Client\Model\WhatsappBusinessAccountUpdateEventEnum**](WhatsappBusinessAccountUpdateEventEnum.md) |  | [optional]
**ban_state** | [**\YCloud\Client\Model\WhatsappBusinessAccountBanState**](WhatsappBusinessAccountBanState.md) |  | [optional]
**ban_date** | **string** | The date when the WABA is banned. | [optional]
**violation_type** | **string** | Used to report violations imposed on the WABA. See also [WhatsApp Business Platform Policy Violations](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement/violations). | [optional]
**restrictions** | [**\YCloud\Client\Model\WhatsappBusinessAccountRestrictionInfo[]**](WhatsappBusinessAccountRestrictionInfo.md) | Used to report restrictions imposed on the WABA, when that WABA violates [WhatsApp Business Platform policies](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement). | [optional]
**auth_intl_rate_eligibility_countries** | [**\YCloud\Client\Model\WhatsappAuthIntlRateEligibilityCountry[]**](WhatsappAuthIntlRateEligibilityCountry.md) | Starting June 1, 2024, we are updating our authentication rate card and introducing a new authentication-international rate. This rate will apply in the the following countries: - June 1, 2024 – Indonesia (country calling code +62, country code &#x60;ID&#x60;) - July 1, 2024 – India (country calling code +91, country code &#x60;IN&#x60;)  See also [Authentication-International Rates](https://developers.facebook.com/docs/whatsapp/pricing/authentication-international-rates). | [optional]
**primary_business_location** | **string** | Your primary business location is the country where your business is based. It will appear in the Business Manager under the Primary Business Location field starting May 1, 2024. [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
