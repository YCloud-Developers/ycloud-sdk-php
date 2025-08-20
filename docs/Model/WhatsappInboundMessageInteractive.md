# # WhatsappInboundMessageInteractive

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of interactive message received. - &#x60;button_reply&#x60;: Sent when a customer clicks a button. - &#x60;list_reply&#x60;: Sent when a customer selects an item from a list. - &#x60;nfm_reply&#x60;: Sent when a customer responds to a WhatsApp Flow (Next Feature Messaging). - &#x60;call_permission_reply&#x60;: Sent when a customer responds to a call permission request. | [optional]
**button_reply** | [**\YCloud\Client\Model\WhatsappInboundMessageInteractiveButtonReply**](WhatsappInboundMessageInteractiveButtonReply.md) |  | [optional]
**list_reply** | [**\YCloud\Client\Model\WhatsappInboundMessageInteractiveListReply**](WhatsappInboundMessageInteractiveListReply.md) |  | [optional]
**nfm_reply** | [**\YCloud\Client\Model\WhatsappInboundMessageInteractiveNfmReply**](WhatsappInboundMessageInteractiveNfmReply.md) |  | [optional]
**call_permission_reply** | [**\YCloud\Client\Model\WhatsappInboundMessageInteractiveCallPermissionReply**](WhatsappInboundMessageInteractiveCallPermissionReply.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
