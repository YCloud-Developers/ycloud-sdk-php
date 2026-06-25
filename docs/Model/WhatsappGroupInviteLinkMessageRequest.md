# # WhatsappGroupInviteLinkMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | The recipient&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**template_name** | **string** | The name of the approved WhatsApp template. |
**language_code** | **string** | The template language code. |
**parameters** | [**\YCloud\Client\Model\WhatsappMessageTemplateComponentParameter[]**](WhatsappMessageTemplateComponentParameter.md) | Template body parameters in template variable order. Must include one group invite link parameter with &#x60;type&#x3D;group_id&#x60; and &#x60;group_id&#x3D;&lt;groupId&gt;&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
