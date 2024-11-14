# # Verification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the verification. |
**status** | [**\YCloud\Client\Model\VerificationStatus**](VerificationStatus.md) |  | [optional]
**to** | **string** | Recipient of the verification. | [optional]
**channel** | [**\YCloud\Client\Model\VerificationChannel**](VerificationChannel.md) |  | [optional]
**send_time** | **\DateTime** | The time at which this verification was sent, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**total_price** | **double** | Total price of this verification. | [optional]
**currency** | **string** | Price currency. [ISO 4217 currency code](https://en.wikipedia.org/wiki/ISO_4217). | [optional]
**sms_fallback_enabled** | **bool** | Whether sms fallback is enabled or not. Applicable when &#x60;channel&#x60; is &#x60;whatsapp&#x60;. If enabled, we will try to send the verification code via sms when the WhatsApp message is failed. | [optional]
**sms_fallback** | [**\YCloud\Client\Model\VerificationFallback**](VerificationFallback.md) |  | [optional]
**external_id** | **string** | A unique (recommended) string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
