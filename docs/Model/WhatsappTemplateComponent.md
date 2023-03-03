# # WhatsappTemplateComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | **Required.** Template component type. | [optional]
**format** | **string** | **Required for type &#x60;HEADER&#x60;.** | [optional]
**text** | **string** | **Required for type &#x60;BODY&#x60;, &#x60;FOOTER&#x60;, and format &#x60;TEXT&#x60;.** | [optional]
**buttons** | [**\YCloud\Client\Model\WhatsappTemplateComponentButton[]**](WhatsappTemplateComponentButton.md) | **Required for type &#x60;BUTTONS&#x60;.** The &#x60;BUTTONS&#x60; component has two types of buttons: Quick Reply, and Call To Action. These button types are exclusive, which means you cannot use both of them in one template. Quick Reply buttons are limited to 3. Call To Actions buttons have at most 1 PHONE_NUMBER button, and at most 1 URL button. | [optional]
**example** | [**\YCloud\Client\Model\WhatsappTemplateComponentExample**](WhatsappTemplateComponentExample.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
