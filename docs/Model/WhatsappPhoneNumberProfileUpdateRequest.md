# # WhatsappPhoneNumberProfileUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**about** | **string** | The business&#39;s **About** text. This text appears in the business&#39;s profile, beneath its profile image, phone number, and contact buttons. - String cannot be empty. - Strings must be between 1 and 139 characters. - Rendered emojis are supported however their unicode values are not. Emoji unicode values must be Java- or JavaScript-escape encoded. - Hyperlinks can be included but will not render as clickable links. - Markdown is not supported. | [optional]
**address** | **string** | Address of the business. Character limit 256. | [optional]
**description** | **string** | Description of the business. Character limit 512. | [optional]
**email** | **string** | The contact email address (in valid email format) of the business. Character limit 128. | [optional]
**profile_picture_url** | **string** | URL of the profile picture that was uploaded to Meta. | [optional]
**vertical** | [**\YCloud\Client\Model\WhatsappPhoneNumberProfileVertical**](WhatsappPhoneNumberProfileVertical.md) |  | [optional]
**websites** | **string[]** | The URLs associated with the business. For instance, a website, Facebook Page, or Instagram. You must include the http:// or https:// portion of the URL. There is a maximum of 2 websites with a maximum of 256 characters each. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
