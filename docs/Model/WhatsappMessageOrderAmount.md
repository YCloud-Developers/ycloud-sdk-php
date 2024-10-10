# # WhatsappMessageOrderAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Must be &#x60;100&#x60; for &#x60;INR&#x60;. |
**value** | **int** | Positive integer representing the amount value multiplied by offset.  For example, ₹12.34 has value 1234. |
**description** | **string** | Use only for &#x60;tax&#x60;, &#x60;shipping&#x60;, or &#x60;discount&#x60;. Description of the amount. Max character limit is 60 characters. | [optional]
**discount_program_name** | **string** | Use only for &#x60;discount&#x60;. Text used for defining incentivised orders. If order is incentivised, the merchant needs to define this information. Max character limit is 60 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
