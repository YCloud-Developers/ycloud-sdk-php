# # WhatsappTemplateAnalyticsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** |  |
**official_template_id** | **string** | Official WhatsApp/Meta template ID exposed by the existing template REST APIs. | [optional]
**template_name** | **string** | Exact template name. Must be provided together with language when officialTemplateId is absent. | [optional]
**language** | **string** | Template language code. Must be provided together with templateName when officialTemplateId is absent. | [optional]
**start_date** | **\DateTime** | Inclusive start date interpreted in the WABA timezone. |
**end_date** | **\DateTime** | Inclusive end date interpreted in the WABA timezone. The inclusive range must not exceed 90 calendar days. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
