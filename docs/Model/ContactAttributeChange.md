# # ContactAttributeChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**old_value** | **mixed** | The previous value of the attribute before the change. Can be a string, number, array, or boolean depending on the attribute type. This field is not included when the value is null. | [optional]
**new_value** | **mixed** | The new value of the attribute after the change. Can be a string, number, array, or boolean depending on the attribute type. This field is not included when the value is null. | [optional]
**extra** | [**\YCloud\Client\Model\AttributeChangeAction[]**](AttributeChangeAction.md) | An array of change actions that describe what operations were performed on this attribute. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
