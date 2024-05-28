# # WhatsappTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waba_id** | **string** | WhatsApp Business Account ID. |
**name** | **string** | Name of the template. |
**language** | **string** | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. |
**category** | [**\YCloud\Client\Model\WhatsappTemplateCategory**](WhatsappTemplateCategory.md) |  | [optional]
**previous_category** | **string** | This field indicates the template&#39;s previous category (or &#x60;null&#x60;, for newly created templates after April 1, 2023). Compare this value to the template&#39;s &#x60;category&#x60; field value, which indicates the template&#39;s current category. | [optional]
**message_send_ttl_seconds** | **int** | **Use only for template category is &#x60;AUTHENTICATION&#x60;.** If we are unable to deliver an authentication template for an amount of time that exceeds its time-to-live, we will stop retrying and drop the message. Defaults to &#x60;600&#x60; seconds for newly created authentication templates. To override the default value, set this field to a value between &#x60;60&#x60; and &#x60;600&#x60; seconds. Or set it to &#x60;-1&#x60; resulting in a 30-day time-to-live. We encourage you to set a time-to-live for all of your authentication templates, preferably equal to or less than your code expiration time, to ensure your customers only get a message when a code is still usable. | [optional]
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
