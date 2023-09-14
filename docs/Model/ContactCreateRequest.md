# # ContactCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nickname** | **string** | Contact&#39;s nickname. Maximum length: 250 characters. | [optional]
**phone_number** | **string** | Unique Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**country_code** | **string** | Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
**email** | **string** | Contact&#39;s email address. If present, the email address must be unique. | [optional]
**tags** | **string[]** | Contact&#39;s tags. Max items: 50. Max characters per tag: 50. | [optional]
**custom_attributes** | [**\YCloud\Client\Model\ContactCustomAttribute[]**](ContactCustomAttribute.md) | Contact&#39;s custom attributes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
