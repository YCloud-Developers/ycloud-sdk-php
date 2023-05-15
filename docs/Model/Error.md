# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | HTTP status code, [RFC 7231, Section 6](https://datatracker.ietf.org/doc/html/rfc7231#section-6). It conveys the HTTP status code used for the convenience of the consumer. |
**code** | **string** | One of a server-defined error codes. Some &#x60;4xx&#x60; errors that could be handled programmatically include an error code that briefly explains the error reported. |
**message** | **string** | A human-readable representation of the error. It is intended as an aid to developers and is not suitable for exposure to end users. | [optional]
**target** | **string** | The target of the error. | [optional]
**doc_url** | **string** | A URL to more information about the error. | [optional]
**request_id** | **string** | Each API request has an associated request ID. It conveys the response header &#x60;YCloud-Request-ID&#x60; used for the convenience of the consumer. | [optional]
**whatsapp_api_error** | [**\YCloud\Client\Model\WhatsappApiError**](WhatsappApiError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
