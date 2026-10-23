# # ContactUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remark_name** | **string** | Contact&#39;s remark name. Maximum length: 250 characters. | [optional]
**nickname** | **string** | Deprecated compatibility alias for &#x60;remarkName&#x60;. When &#x60;remarkName&#x60; is absent, this value is saved as the contact&#39;s remark name. It does not update the read-only WhatsApp nickname. Maximum length: 250 characters. | [optional]
**phone_number** | **string** | Unique Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**country_code** | **string** | Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
**email** | **string** | The contact&#39;s email address. If present, the email address must be unique. | [optional]
**tags** | **string[]** | Contact&#39;s tags. Maximum items: 50. | [optional]
**custom_attributes** | [**\YCloud\Client\Model\ContactCustomAttribute[]**](ContactCustomAttribute.md) | Contact&#39;s custom attributes. If present (i.e., not &#x60;null&#x60;), all previous attributes of this contact will be replaced. | [optional]
**owner_email** | **string** | The email address of the contact&#39;s owner. | [optional]
**notes** | [**\YCloud\Client\Model\ContactNoteMutationInput[]**](ContactNoteMutationInput.md) | Optional incremental note mutations. An empty array changes nothing. Items without &#x60;id&#x60; create notes; items with &#x60;id&#x60; update owned notes. Notes not listed remain unchanged. Delete notes with the dedicated endpoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
