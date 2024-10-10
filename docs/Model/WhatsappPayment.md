# # WhatsappPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** | WhatsApp Business Account ID. |
**reference_id** | **string** | Unique identifier for the payment provided by the business. It is case sensitive and cannot be an empty string and can only contain English letters, numbers, underscores, dashes, or dots, and should not exceed 35 characters. |
**status** | [**\YCloud\Client\Model\WhatsappPaymentStatus**](WhatsappPaymentStatus.md) |  |
**transactions** | [**\YCloud\Client\Model\WhatsappPaymentTransaction[]**](WhatsappPaymentTransaction.md) | Contains the latest transaction attempt for this payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
