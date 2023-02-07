# # WhatsappApiError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | A human-readable description of the error. |
**code** | **string** | An error code. |
**type** | **string** | Error type. | [optional]
**error_subcode** | **string** | Additional code about the error. | [optional]
**error_user_msg** | **string** | The message to display to the user. The language of the message is based on the locale of the API request. | [optional]
**error_user_title** | **string** | The title of the dialog, if shown. The language of the message is based on the locale of the API request. | [optional]
**fbtrace_id** | **string** | Internal support identifier. When reporting a bug related to a Graph API call, include the fbtrace_id to help us find log data for debugging. | [optional]
**error_data** | **object** | Additional data about the error. A string or map. - For template APIs, this field is a string describing the reason for the error.   - For message APIs, this field is a map with property &#x60;details&#x60; describing the reason for the error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
