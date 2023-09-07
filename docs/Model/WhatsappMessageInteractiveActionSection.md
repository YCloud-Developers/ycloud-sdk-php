# # WhatsappMessageInteractiveActionSection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | **Required if the message has more than one section.** Title of the section. Maximum length: 24 characters. | [optional]
**rows** | [**\YCloud\Client\Model\WhatsappMessageInteractiveActionSectionRow[]**](WhatsappMessageInteractiveActionSectionRow.md) | Contains a list of rows. You can have a total of 10 rows across your sections. Each row must have a title (Maximum length: 24 characters) and an ID (Maximum length: 200 characters). You can add a description (Maximum length: 72 characters), but it is optional. | [optional]
**product_items** | [**\YCloud\Client\Model\WhatsappMessageInteractiveActionSectionProductItem[]**](WhatsappMessageInteractiveActionSectionProductItem.md) | Required for Multi-Product Messages. Array of product objects. There is a minimum of 1 product per section and a maximum of 30 products across all sections. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
