# # WhatsappTemplateAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** | WhatsApp Business Account ID. |
**official_template_id** | **string** | Resolved official WhatsApp/Meta template ID. Successful queries resolve a current template; the property remains nullable for contract compatibility. |
**template_name** | **string** | Template name used for the statistics query. |
**language** | **string** | Template language used for the statistics query. |
**timezone** | **string** | IANA timezone resolved from the WABA configuration and used to interpret the date range. |
**analytics_status** | **string** | Meta Template Insights status only; it does not describe YCloud message metrics. NO_DATA means the Meta query completed without data for the requested date range. ERROR indicates that Template Insights are unavailable because of an error after the current template was successfully resolved and validated. |
**start_date** | **\DateTime** | Inclusive start date from the request. |
**end_date** | **\DateTime** | Inclusive end date from the request. |
**data_points** | [**\YCloud\Client\Model\WhatsappTemplateAnalyticsDataPoint[]**](WhatsappTemplateAnalyticsDataPoint.md) | One item for every date in the requested range, ordered by date ascending. Missing metrics are returned as zero and missing button details as an empty array. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
