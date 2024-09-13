# # CustomEventDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the custom event definition. | [optional]
**label** | **string** | The label of the event definition, used for display purposes. | [optional]
**description** | **string** | The description of the event definition. | [optional]
**object_type** | **string** | Type of the object that the event will be associated with. - &#x60;CONTACT&#x60;: Indicates that the object is a &#x60;contact&#x60;. | [optional]
**create_time** | **\DateTime** | The time at which this object is created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**properties** | [**\YCloud\Client\Model\CustomEventDefinitionProperty[]**](CustomEventDefinitionProperty.md) | The list of property definitions for the event definition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
