# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the event. |
**type** | [**\YCloud\Client\Model\EventType**](EventType.md) |  |
**api_version** | **string** | The API version used to render this event. |
**create_time** | **\DateTime** | The time at which this event was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. |
**email_delivery** | [**\YCloud\Client\Model\EmailDelivery**](EmailDelivery.md) |  | [optional]
**sms** | [**\YCloud\Client\Model\Sms**](Sms.md) |  | [optional]
**sms_inbound** | [**\YCloud\Client\Model\SmsInbound**](SmsInbound.md) |  | [optional]
**voice** | [**\YCloud\Client\Model\Voice**](Voice.md) |  | [optional]
**whatsapp_business_account** | [**\YCloud\Client\Model\WhatsappBusinessAccount**](WhatsappBusinessAccount.md) |  | [optional]
**whatsapp_inbound_message** | [**\YCloud\Client\Model\WhatsappInboundMessage**](WhatsappInboundMessage.md) |  | [optional]
**whatsapp_message** | [**\YCloud\Client\Model\WhatsappMessage**](WhatsappMessage.md) |  | [optional]
**whatsapp_phone_number** | [**\YCloud\Client\Model\WhatsappPhoneNumber**](WhatsappPhoneNumber.md) |  | [optional]
**whatsapp_payment** | [**\YCloud\Client\Model\WhatsappPayment**](WhatsappPayment.md) |  | [optional]
**whatsapp_template** | [**\YCloud\Client\Model\WhatsappTemplate**](WhatsappTemplate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
