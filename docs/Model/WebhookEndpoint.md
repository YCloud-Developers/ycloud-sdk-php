# # WebhookEndpoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**url** | **string** | The URL of the webhook endpoint. | [optional]
**enabled_events** | **string[]** | The list of events to enable for this endpoint. | [optional]
**event_properties** | [**\YCloud\Client\Model\EventProperty[]**](EventProperty.md) | Optional configuration for event properties in webhook payloads. Specifies which properties should be included for specific event types. When &#x60;enabledEvents&#x60; contains &#x60;contact.attributes_changed&#x60;, this field is required and must contain at least one event property configuration for that event type. | [optional]
**description** | **string** | An optional description of what the webhook is used for. | [optional]
**status** | [**\YCloud\Client\Model\WebhookEndpointStatus**](WebhookEndpointStatus.md) |  | [optional]
**secret** | **string** | The endpoint&#39;s secret, used to generate webhook signatures. | [optional]
**create_time** | **\DateTime** | The time at which this object was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which this object was updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
