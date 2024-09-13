# # WhatsappTemplateComponentButton

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YCloud\Client\Model\WhatsappTemplateComponentButtonType**](WhatsappTemplateComponentButtonType.md) |  |
**text** | **string** | **Required for button type &#x60;PHONE_NUMBER&#x60; or &#x60;URL&#x60;.** Button text. For &#x60;CODE_CODE&#x60; buttons, the text is a pre-set value and cannot be customized. For &#x60;OTP&#x60; buttons, if omitted, the text will default to a pre-set value localized to the template&#39;s language. For example, &#x60;Copy Code&#x60; for English (US). If your template is using a one-tap autofill button and you supply this value, the authentication template message will display a copy code button with this text if we are unable to validate your [handshake](https://developers.facebook.com/docs/whatsapp/business-management-api/authentication-templates/autofill-button-authentication-templates#handshake). Maximum 25 characters. | [optional]
**url** | **string** | **Required for button type &#x60;URL&#x60;.** URL of website. There can be at most 1 variable at the end of the URL. Example: &#x60;https://www.luckyshrub.com/shop?promo&#x3D;{{1}}&#x60;. 2000 characters maximum. | [optional]
**phone_number** | **string** | **Required for button type &#x60;PHONE_NUMBER&#x60;.** Alphanumeric string. Business phone number to be (display phone number) called when the user taps the button. 20 characters maximum. | [optional]
**otp_type** | [**\YCloud\Client\Model\WhatsappTemplateComponentButtonOtpType**](WhatsappTemplateComponentButtonOtpType.md) |  | [optional]
**autofill_text** | **string** | **One-tap and zero-tap buttons only.** One-tap button text. Maximum 25 characters. | [optional]
**package_name** | **string** | **One-tap and zero-tap buttons only.** Your Android app&#39;s package name. | [optional]
**signature_hash** | **string** | **One-tap and zero-tap buttons only.** Your app signing key hash. See [App Signing Key Hash](https://developers.facebook.com/docs/whatsapp/business-management-api/authentication-templates/zero-tap-authentication-templates#app-signing-key-hash). | [optional]
**zero_tap_terms_accepted** | **bool** | **Zero-tap buttons only.** Set to &#x60;true&#x60; to indicate that you understand that your use of zero-tap authentication is subject to the WhatsApp Business Terms of Service, and that it&#39;s your responsibility to ensure your customers expect that the code will be automatically filled in on their behalf when they choose to receive the zero-tap code through WhatsApp. If set to &#x60;false&#x60;, the template will not be created as you need to accept zero-tap terms before creating zero-tap enabled message templates. | [optional]
**example** | **string[]** | Sample full URL for a &#x60;URL&#x60; button with a variable. | [optional]
**flow_id** | **string** | **Required for button type &#x60;FLOW&#x60;.** The unique ID of a Flow. | [optional]
**flow_action** | **string** | **Use for button type &#x60;FLOW&#x60;.** Either &#x60;navigate&#x60; or &#x60;data_exchange&#x60;. Defaults to &#x60;navigate&#x60;. | [optional]
**navigate_screen** | **string** | **Required if &#x60;flow_action&#x60; is &#x60;navigate&#x60;.** The unique ID of the Screen in the Flow. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
