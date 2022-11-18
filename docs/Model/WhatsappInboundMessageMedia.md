# # WhatsappInboundMessageMedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the media. Can be used to delete the media if stored locally on the client. | [optional]
**link** | **string** | The url to download the media file. Note that This link can be directly accessed in a few minutes for the convenience of the consumer, but you should always include an &#x60;X-API-Key&#x60; header to download this file within a month. | [optional]
**caption** | **string** | The provided caption for the media. Only present if specified. | [optional]
**filename** | **string** | Filename on the sender&#39;s device. This will only be present in &#x60;document&#x60; media messages. | [optional]
**metadata** | **array<string,object>** | Metadata pertaining to &#x60;sticker&#x60; media. | [optional]
**mime_type** | **string** | Mime type of the media. | [optional]
**sha256** | **string** | Checksum. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
