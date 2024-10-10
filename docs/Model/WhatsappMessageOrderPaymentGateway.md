# # WhatsappMessageOrderPaymentGateway

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Payment type. Must set this to &#x60;billdesk&#x60;, &#x60;razorpay&#x60;, &#x60;payu&#x60;, or &#x60;zaakpay&#x60;, if you have linked your BillDesk, Razorpay, PayU, or Zaakpay payment gateway to accept payments. |
**configuration_name** | **string** | The name of the pre-configured payment configuration to use for this order and must not exceed 60 characters. This value must match with a payment configuration set up on the WhatsApp Business Manager. |
**billdesk** | [**\YCloud\Client\Model\WhatsappMessageOrderPaymentSettingPaymentGatewayBilldesk**](WhatsappMessageOrderPaymentSettingPaymentGatewayBilldesk.md) |  | [optional]
**payu** | [**\YCloud\Client\Model\WhatsappMessageOrderPaymentSettingPaymentGatewayPayu**](WhatsappMessageOrderPaymentSettingPaymentGatewayPayu.md) |  | [optional]
**razorpay** | [**\YCloud\Client\Model\WhatsappMessageOrderPaymentSettingPaymentGatewayRazorpay**](WhatsappMessageOrderPaymentSettingPaymentGatewayRazorpay.md) |  | [optional]
**zaakpay** | [**\YCloud\Client\Model\WhatsappMessageOrderPaymentSettingPaymentGatewayZaakpay**](WhatsappMessageOrderPaymentSettingPaymentGatewayZaakpay.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
