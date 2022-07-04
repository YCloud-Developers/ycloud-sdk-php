# # WebhookEndpoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**url** | **string** | The URL of the webhook endpoint. | [optional]
**enabled_events** | **string[]** | The list of events to enable for this endpoint. | [optional]
**description** | **string** | An optional description of what the webhook is used for. | [optional]
**status** | [**\YCloud\Client\Model\WebhookEndpointStatus**](WebhookEndpointStatus.md) |  | [optional]
**secret** | **string** | The endpoint&#39;s secret, used to generate webhook signatures. | [optional]
**create_time** | **\DateTime** | The time at which this object was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which this object was updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
