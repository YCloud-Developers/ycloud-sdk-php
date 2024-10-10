# # WhatsappPaymentTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction ID. |
**type** | **string** | The payment type for this transactions. One of &#x60;billdesk&#x60;, &#x60;razorpay&#x60;, &#x60;payu&#x60;, or &#x60;zaakpay&#x60;. |
**status** | **string** | The status of the transaction. One of &#x60;pending&#x60;, &#x60;success&#x60; or &#x60;failed&#x60;. |
**created_timestamp** | **int** | Time when transaction was created in epoch milliseconds. |
**updated_timestamp** | **int** | Time when transaction was last updated in epoch milliseconds. |
**amount** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  |
**currency** | **string** | The currency for this payment. Currently the only supported value is &#x60;INR&#x60;. |
**method_type** | **string** | Describes the type of payment method used by consumer to pay for the order. Can be one of &#x60;upi&#x60;, &#x60;card&#x60;, &#x60;wallet&#x60;, or &#x60;netbanking&#x60;. The payment method information might not be available for failed payments. | [optional]
**error** | [**\YCloud\Client\Model\WhatsappPaymentTransactionError**](WhatsappPaymentTransactionError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
