# # WhatsappTemplateAnalyticsDataPoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  |
**sent** | **int** | Number of messages created on this date for the selected template. |
**delivered** | **int** | Number of those messages that were delivered. |
**failed** | **int** | Number of those messages whose status is failed or expired. |
**read** | **int** | Number of those messages that were read. |
**clicks** | **int** | Total number of clicks recorded for this template on this date. Interpret zero together with analyticsStatus. |
**unique_replies** | **int** | Number of unique replies recorded for this template on this date. This is mapped from Meta replied and is a Meta Template Insights metric. |
**button_clicks** | [**\YCloud\Client\Model\WhatsappTemplateAnalyticsButtonClick[]**](WhatsappTemplateAnalyticsButtonClick.md) | Button click breakdown for this template on this date. Empty when no details are available. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
