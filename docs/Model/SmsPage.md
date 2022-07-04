# # SmsPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\YCloud\Client\Model\Sms[]**](Sms.md) | An array containing SMS objects. | [optional]
**offset** | **int** | The position of the item this page starts from, zero-based. e.g., the 11th item is at offset 10. |
**limit** | **int** | A limit on the number of items to be returned, between 1 and 100, defaults to 10. |
**length** | **int** | The actual number of items in the page. |
**total** | **int** | The total number of items. This field is returned only when the request parameter &#x60;includeTotal&#x60; is set to &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
