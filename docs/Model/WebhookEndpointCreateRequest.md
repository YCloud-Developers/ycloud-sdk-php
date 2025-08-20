# # WebhookEndpointCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL of the webhook endpoint. |
**enabled_events** | [**\YCloud\Client\Model\EventType[]**](EventType.md) | The list of events to enable for this endpoint. |
**event_properties** | [**\YCloud\Client\Model\EventProperty[]**](EventProperty.md) | Optional configuration for event properties in webhook payloads. Specifies which properties should be included for specific event types. When &#x60;enabledEvents&#x60; contains &#x60;contact.attributes_changed&#x60;, this field is required and must contain at least one event property configuration for that event type. | [optional]
**description** | **string** | An optional description of what the webhook is used for. | [optional]
**status** | [**\YCloud\Client\Model\WebhookEndpointStatus**](WebhookEndpointStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
