# # SmsInbound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the message. | [optional]
**from** | **string** | The user&#39;s phone number who sent the message to your registered sender ID, formatted in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**to** | **string** | The receiver&#39;s phone number, which is one of your registered Sender IDs. | [optional]
**text** | **string** | The text of this message. | [optional]
**send_time** | **\DateTime** | The time at which this message was sent, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
