# # WhatsappTemplateComponentCardComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | **Required.** Card component type. - &#x60;BODY&#x60;: Body components are text-only components. Cards must have body text. - &#x60;HEADER&#x60;: Cards must have a media header (image or video). - &#x60;BUTTONS&#x60;: Buttons are interactive components that perform specific actions when tapped. Cards must have at least one button, up to 2 buttons. | [optional]
**format** | **string** | **Required for type &#x60;HEADER&#x60;.** Cards must have a media header (image or video). | [optional]
**text** | **string** | **Required for type &#x60;BODY&#x60;.** Card body text supports variables. Maximum 160 characters. | [optional]
**buttons** | [**\YCloud\Client\Model\WhatsappTemplateComponentButton[]**](WhatsappTemplateComponentButton.md) | **Required for type &#x60;BUTTONS&#x60;.** Cards must have at least one button. Supports 2 buttons. Buttons can be the same or a mix of quick reply buttons, phone number buttons, or URL buttons. | [optional]
**example** | [**\YCloud\Client\Model\WhatsappTemplateComponentExample**](WhatsappTemplateComponentExample.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
