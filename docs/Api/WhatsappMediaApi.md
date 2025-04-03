# YCloud\Client\WhatsappMediaApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](WhatsappMediaApi.md#upload) | **POST** /whatsapp/media/{phoneNumber}/upload | Upload media


## `upload()`

```php
upload($phone_number, $file): \YCloud\Client\Model\WhatsappMediaUpload200Response
```

Upload media

Uploads media that can later be sent in WhatsApp messages. This endpoint interfaces with Meta's WhatsApp Business API media endpoints. All media files sent through this endpoint are encrypted and persist for 30 days.  For supported media types and size limitations, please refer to [Supported Media Types](https://developers.facebook.com/docs/whatsapp/cloud-api/reference/media#supported-media-types).  For more information, refer to [Meta's WhatsApp Cloud API Media documentation](https://developers.facebook.com/docs/whatsapp/cloud-api/reference/media).  Note that all interactive messages cannot send images, documents, videos, or audio using a Media ID in the header section. These elements must be sent using a link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format to use for the upload.
$file = "/path/to/file.txt"; // \SplFileObject | The media file to upload. Only one file is supported. If multiple files are uploaded, only the first file will be processed.

try {
    $result = $apiInstance->upload($phone_number, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappMediaApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format to use for the upload. |
 **file** | **\SplFileObject****\SplFileObject**| The media file to upload. Only one file is supported. If multiple files are uploaded, only the first file will be processed. |

### Return type

[**\YCloud\Client\Model\WhatsappMediaUpload200Response**](../Model/WhatsappMediaUpload200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
