# # WhatsappPhoneNumber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**display_phone_number** | **string** | Display phone number. | [optional]
**waba_id** | **string** | WhatsApp Business Account ID. | [optional]
**quality_rating** | [**\YCloud\Client\Model\WhatsappPhoneNumberQualityRating**](WhatsappPhoneNumberQualityRating.md) |  | [optional]
**messaging_limit** | **string** | Messaging limits determine the maximum number of business-initiated conversations each phone number can start in a rolling 24-hour period. See also [Messaging Limits](https://developers.facebook.com/docs/whatsapp/messaging-limits#messaging-limits). - &#x60;TIER_NOT_SET&#x60;: Unknown limit. - &#x60;TIER_50&#x60;: 50 business-initiated conversations in a rolling 24-hour period. - &#x60;TIER_250&#x60;: 250 business-initiated conversations in a rolling 24-hour period. - &#x60;TIER_1K&#x60;: 1K business-initiated conversations with unique customers in a rolling 24-hour period. - &#x60;TIER_10K&#x60;: 10K business-initiated conversations with unique customers in a rolling 24-hour period. - &#x60;TIER_100K&#x60;: 100K business-initiated conversations with unique customers in a rolling 24-hour period. - &#x60;TIER_UNLIMITED&#x60;: An unlimited number of business-initiated conversations in a rolling 24-hour period. | [optional]
**verified_name** | **string** | Verified name. | [optional]
**code_verification_status** | [**\YCloud\Client\Model\WhatsappPhoneNumberCodeVerificationStatus**](WhatsappPhoneNumberCodeVerificationStatus.md) |  | [optional]
**is_official_business_account** | **bool** | Whether this phone number is an official business account or not. An official business account has a green checkmark badge in its profile and chat thread headers. See [Official Business Account](https://developers.facebook.com/docs/whatsapp/overview/business-accounts#official-business-account) for more information. | [optional]
**status** | [**\YCloud\Client\Model\WhatsappPhoneNumberStatus**](WhatsappPhoneNumberStatus.md) |  | [optional]
**name_status** | [**\YCloud\Client\Model\WhatsappPhoneNumberNameStatus**](WhatsappPhoneNumberNameStatus.md) |  | [optional]
**new_name_status** | [**\YCloud\Client\Model\WhatsappPhoneNumberNameStatus**](WhatsappPhoneNumberNameStatus.md) |  | [optional]
**decision** | [**\YCloud\Client\Model\WhatsappReviewDecision**](WhatsappReviewDecision.md) |  | [optional]
**requested_verified_name** | **string** | Last requested verified name. See [Phone Number Name Update](https://developers.facebook.com/docs/graph-api/webhooks/reference/whatsapp-business-account/#phone_number_name_update). | [optional]
**rejection_reason** | **string** | Rejection reason. See [Phone Number Name Update](https://developers.facebook.com/docs/graph-api/webhooks/reference/whatsapp-business-account/#phone_number_name_update). | [optional]
**quality_update_event** | [**\YCloud\Client\Model\WhatsappPhoneNumberQualityUpdateEventEnum**](WhatsappPhoneNumberQualityUpdateEventEnum.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
