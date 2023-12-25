# # Unsubscriber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YCloud\Client\Model\UnsubscriberType**](UnsubscriberType.md) |  | [optional]
**customer** | **string** | The customer who has opted out. For &#x60;type&#x3D;PHONE_NUMBER&#x60;, it should be a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**channel** | [**\YCloud\Client\Model\UnsubscriberChannel**](UnsubscriberChannel.md) |  | [optional]
**region_code** | **string** | The customer&#39;s region code, formatted in [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
**create_time** | **\DateTime** | The time at which this object was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
