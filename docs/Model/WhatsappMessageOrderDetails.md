# # WhatsappMessageOrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | The currency for this order. Currently the only supported value is &#x60;INR&#x60;. |
**order** | [**\YCloud\Client\Model\WhatsappMessageOrderInfo**](WhatsappMessageOrderInfo.md) |  |
**reference_id** | **string** | Unique identifier for the order provided by the business. It is case sensitive and cannot be an empty string and can only contain English letters, numbers, underscores, dashes, or dots, and should not exceed 35 characters.  The &#x60;reference_id&#x60; must be unique for each order_details message for a given business. If there is a need to send multiple order_details messages for the same order, it is recommended to include a sequence number in the reference_id (for example, \&quot;BM345A-12\&quot;) to ensure reference_id uniqueness. |
**total_amount** | [**\YCloud\Client\Model\WhatsappMessageOrderAmount**](WhatsappMessageOrderAmount.md) |  |
**type** | **string** | The type of goods being paid for in this order. Current supported options are &#x60;digital-goods&#x60; and &#x60;physical-goods&#x60;. |
**payment_settings** | [**\YCloud\Client\Model\WhatsappMessageOrderPaymentSetting[]**](WhatsappMessageOrderPaymentSetting.md) | Payment settings for the order. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
