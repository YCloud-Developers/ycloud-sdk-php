# # Contact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**nickname** | **string** | Contact&#39;s nickname. | [optional]
**country_code** | **string** | Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
**country_name** | **string** | Full country name. | [optional]
**phone_number** | **string** | Unique Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**email** | **string** | The contact&#39;s email address. If present, the email address must be unique. | [optional]
**last_seen** | **\DateTime** | The time at which the contact last sent a message to your business, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**last_message_to_phone_number** | **string** | The business phone number that the contact last sent a message to. | [optional]
**tags** | **string[]** | Contact&#39;s tags. | [optional]
**create_time** | **\DateTime** | The time at which the contact was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**custom_attributes** | [**\YCloud\Client\Model\ContactCustomAttribute[]**](ContactCustomAttribute.md) | Contact&#39;s custom attributes. | [optional]
**owner_email** | **string** | The email address of the contact&#39;s owner. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
