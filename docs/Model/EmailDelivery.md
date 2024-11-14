# # EmailDelivery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_id** | **string** | Unique ID for the related email you&#39;ve previously sent. |
**recipient_address** | **string** | A recipient&#39;s email address. |
**status** | **string** | Delivery status of the email to the specific recipient address. - &#x60;sending&#x60;: The messaging request is accepted by our system. - &#x60;failed&#x60;: The message failed to be sent from our system. - &#x60;sent&#x60;: The message has been sent from our system. - &#x60;delivered&#x60;: Our system has received a delivery receipt indicating that message is delivered. - &#x60;undelivered&#x60;: Our system has received a delivery receipt indicating that message is not delivered. | [optional]
**error_code** | **string** | Error code when the email is undeliverable. | [optional]
**error_message** | **string** | Error message when the email is undeliverable. | [optional]
**external_id** | **string** | The &#x60;externalId&#x60; you set when you sent the email. | [optional]
**biz_type** | **string** | This can be either empty or one of &#x60;email&#x60;, or &#x60;verify&#x60;. Defaults to &#x60;email&#x60;. - &#x60;email&#x60;: Indicates that the message is sent via the **Email** product. - &#x60;verify&#x60;: Indicates that the message is sent via the **Verify** product. | [optional]
**verification_id** | **string** | The verification ID. Included only when &#x60;bizType&#x60; is &#x60;verify&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
