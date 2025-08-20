# # WhatsappInboundMessageInteractiveCallPermissionReply

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | **string** | The customer&#39;s response to the call permission request. - &#x60;accept&#x60;: User granted permission for business to call back - &#x60;reject&#x60;: User rejected permission for business to call back | [optional]
**expiration_timestamp** | **int** | The timestamp (in seconds) when the call permission expires. Only present when response is \&quot;accept\&quot; and is_permanent is false. | [optional]
**is_permanent** | **bool** | Whether the permission is permanent or temporary. - &#x60;true&#x60;: Permanent authorization (no expiration) - &#x60;false&#x60;: Temporary authorization (expires at expiration_timestamp) | [optional]
**response_source** | **string** | The source of this permission response. - &#x60;user_action&#x60;: User explicitly approved or rejected the permission - &#x60;automatic&#x60;: Automatic permission approval due to the WhatsApp user initiating the call | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
