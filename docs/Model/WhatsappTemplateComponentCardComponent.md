# # WhatsappTemplateComponentCardComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | **Required.** Card component type. - &#x60;BODY&#x60;: Body components are text-only components. Cards can optionally include body text. - &#x60;HEADER&#x60;: Cards must have a media header (image or video). - &#x60;BUTTONS&#x60;: Buttons are optional interactive components that perform specific actions when tapped. | [optional]
**format** | **string** | **Required for type &#x60;HEADER&#x60;.** Cards must have a media header (image or video). | [optional]
**text** | **string** | Card body text supports variables. There is no maximum character limit on variables, but they count against the card body text limit of 160 characters. | [optional]
**buttons** | [**\YCloud\Client\Model\WhatsappTemplateComponentButton[]**](WhatsappTemplateComponentButton.md) | **Required for type &#x60;BUTTONS&#x60;.** Cards can optionally include up to 2 quick reply buttons, phone number buttons, or URL buttons (button types can be mixed). | [optional]
**example** | [**\YCloud\Client\Model\WhatsappTemplateComponentExample**](WhatsappTemplateComponentExample.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
