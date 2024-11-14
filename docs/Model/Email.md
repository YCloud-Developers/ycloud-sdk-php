# # Email

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**from** | [**\YCloud\Client\Model\Mailbox**](Mailbox.md) |  | [optional]
**to** | [**\YCloud\Client\Model\Mailbox[]**](Mailbox.md) | The intended recipients&#39; email addresses. | [optional]
**cc** | [**\YCloud\Client\Model\Mailbox[]**](Mailbox.md) | Recipients who will receive a copy of the email. | [optional]
**bcc** | [**\YCloud\Client\Model\Mailbox[]**](Mailbox.md) | Recipients who will receive a blind carbon copy of the email. | [optional]
**reply_to** | [**\YCloud\Client\Model\Mailbox[]**](Mailbox.md) | If this field exists, then the reply should go to the addresses indicated in that field and not to the address(es) indicated in the &#x60;from&#x60; field. | [optional]
**subject** | **string** | The email subject, which contains a short string identifying the topic of the message. | [optional]
**summary** | **string** | This is a summary of your email. Max length: 70. | [optional]
**content_type** | [**\YCloud\Client\Model\EmailContentType**](EmailContentType.md) |  | [optional]
**external_id** | **string** | A unique (recommended) string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]
**callback_url** | **string** | Delivery report URL. You can provide a URL, and we will push the updated status report to your server in time. e.g., https://httpbin.org/anything?tag&#x3D;api. Note: We recommend configuring Webhook Endpoints instead. | [optional]
**create_time** | **\DateTime** | The time at which this message was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**total_recipients** | **int** | Total recipients of this message, including &#x60;to&#x60;, &#x60;cc&#x60; and &#x60;bcc&#x60;. | [optional]
**total_price** | **double** | Total price of this message. | [optional]
**currency** | **string** | Price currency. [ISO 4217 currency code](https://en.wikipedia.org/wiki/ISO_4217). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
