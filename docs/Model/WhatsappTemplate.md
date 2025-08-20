# # WhatsappTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**official_template_id** | **string** | Official template ID assigned by WhatsApp. This ID is used to identify the template in WhatsApp&#39;s system. | [optional]
**waba_id** | **string** | WhatsApp Business Account ID. |
**name** | **string** | Name of the template. |
**language** | **string** | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. |
**category** | [**\YCloud\Client\Model\WhatsappTemplateCategory**](WhatsappTemplateCategory.md) |  | [optional]
**sub_category** | [**\YCloud\Client\Model\WhatsappTemplateSubCategory**](WhatsappTemplateSubCategory.md) |  | [optional]
**previous_category** | **string** | This field indicates the template&#39;s previous category (or &#x60;null&#x60;, for newly created templates after April 1, 2023). Compare this value to the template&#39;s &#x60;category&#x60; field value, which indicates the template&#39;s current category. | [optional]
**message_send_ttl_seconds** | **int** | If we are unable to deliver a message for an amount of time that exceeds its time-to-live, we will stop retrying and drop the message. By default, messages that use an authentication template have a default TTL of **10 minutes**, and messages that use a utility or marketing template have a default TTL of **30 days**. Set its value between &#x60;30&#x60; and &#x60;900&#x60; seconds (i.e., 30 seconds to 15 minutes) for authentication templates, or &#x60;30&#x60; and &#x60;43200&#x60; seconds (i.e., 30 seconds to 12 hours) for utility templates, or &#x60;43200&#x60; and &#x60;2592000&#x60; seconds (i.e., 12 hours to 30 days) for marketing templates. Alternatively, you can set this value to &#x60;-1&#x60;, which will set a custom TTL of 30 days for either type of template. We encourage you to set a time-to-live for all of your authentication templates, preferably equal to or less than your code expiration time, to ensure your customers only get a message when a code is still usable. Authentication templates created before October 23, 2024, have a default TTL of 30 days. | [optional]
**components** | [**\YCloud\Client\Model\WhatsappTemplateComponent[]**](WhatsappTemplateComponent.md) | Template components. A template consists of &#x60;HEADER&#x60;, &#x60;BODY&#x60;, &#x60;FOOTER&#x60;, and &#x60;BUTTONS&#x60; components. &#x60;BODY&#x60; component is required, the other types are optional. | [optional]
**status** | [**\YCloud\Client\Model\WhatsappTemplateStatus**](WhatsappTemplateStatus.md) |  | [optional]
**quality_rating** | [**\YCloud\Client\Model\WhatsappTemplateQualityRating**](WhatsappTemplateQualityRating.md) |  | [optional]
**reason** | **string** | The reason why the template is rejected. | [optional]
**create_time** | **\DateTime** | The time at which this object is created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which this object is updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**status_update_event** | [**\YCloud\Client\Model\WhatsappTemplateStatusUpdateEventEnum**](WhatsappTemplateStatusUpdateEventEnum.md) |  | [optional]
**disable_date** | **string** | The date at which the template will be disabled. When a WhatsApp template &#x60;FLAGGED&#x60; event is received, this field is set. | [optional]
**whatsapp_api_error** | [**\YCloud\Client\Model\WhatsappApiError**](WhatsappApiError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
