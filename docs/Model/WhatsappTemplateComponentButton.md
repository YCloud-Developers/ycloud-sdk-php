# # WhatsappTemplateComponentButton

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YCloud\Client\Model\WhatsappTemplateComponentButtonType**](WhatsappTemplateComponentButtonType.md) |  |
**text** | **string** | **Required.** Button text. For &#x60;OTP&#x60; buttons, note that even if your template is using a one-tap autofill button, this value must still be supplied. If we are unable to validate your handshake the authentication template message will display a copy code button with this text instead. Maximum 25 characters. |
**url** | **string** | **Required for button type &#x60;URL&#x60;.**  There can be at most 1 variable at the end of the URL. | [optional]
**phone_number** | **string** | **Required for button type &#x60;PHONE_NUMBER&#x60;.** | [optional]
**otp_type** | [**\YCloud\Client\Model\WhatsappTemplateComponentButtonOtpType**](WhatsappTemplateComponentButtonOtpType.md) |  | [optional]
**autofill_text** | **string** | **One-tap buttons only.** One-tap button text. Maximum 25 characters. | [optional]
**package_name** | **string** | **One-tap buttons only.** Your Android app&#39;s package name. | [optional]
**signature_hash** | **string** | **One-tap buttons only.** Your app signing key hash. See [App Signing Key Hash](https://developers.facebook.com/docs/whatsapp/business-management-api/authentication-templates#app-signing-key-hash). | [optional]
**example** | **string[]** | Sample full URL for a &#x60;URL&#x60; button with a variable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
