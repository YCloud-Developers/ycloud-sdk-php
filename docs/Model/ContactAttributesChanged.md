# # ContactAttributesChanged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the contact whose attributes were changed. |
**update_time** | **\DateTime** | The time at which the contact attributes were updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. |
**changed_attributes** | [**array<string,\YCloud\Client\Model\ContactAttributeChange>**](ContactAttributeChange.md) | An object containing the changed attributes. Each key represents the name of the changed attribute, and the value contains the old value, new value, and change actions. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
