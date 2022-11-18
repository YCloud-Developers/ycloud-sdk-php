# # WhatsappTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** | WhatsApp Business Account ID. |
**name** | **string** | Name of the template. |
**language** | **string** | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages-) for all codes. |
**category** | [**\YCloud\Client\Model\WhatsappTemplateCategory**](WhatsappTemplateCategory.md) |  |
**components** | [**\YCloud\Client\Model\WhatsappTemplateComponent[]**](WhatsappTemplateComponent.md) |  |
**status** | [**\YCloud\Client\Model\WhatsappTemplateStatus**](WhatsappTemplateStatus.md) |  | [optional]
**reason** | **string** | The reason why the template is rejected. | [optional]
**create_time** | **\DateTime** | The time at which this object is created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which this object is updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
