# YCloud\Client\WhatsappInboundMessagesApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**markAsRead()**](WhatsappInboundMessagesApi.md#markAsRead) | **POST** /whatsapp/inboundMessages/{id}/markAsRead | Mark message as read
[**typingIndicator()**](WhatsappInboundMessagesApi.md#typingIndicator) | **POST** /whatsapp/inboundMessages/{id}/typingIndicator | Mark message as read and display a typing indicator


## `markAsRead()`

```php
markAsRead($id)
```

Mark message as read

When you receive an inbound message from webhooks, you can use this endpoint to mark the message as read. Messages marked as read display two blue check marks alongside their timestamp.  Marking a message as read will also mark earlier messages in the conversation as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappInboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 627c8640675de8fc689ab9d9; // string | ID of the message.  A wamid (i.e., the original message ID on WhatsApp's platform) is also acceptable.

try {
    $apiInstance->markAsRead($id);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappInboundMessagesApi->markAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message.  A wamid (i.e., the original message ID on WhatsApp&#39;s platform) is also acceptable. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `typingIndicator()`

```php
typingIndicator($id)
```

Mark message as read and display a typing indicator

When you receive an inbound message from webhooks, you can use this endpoint to mark the message as read and display a typing indicator so the WhatsApp user knows you are preparing a response. Messages marked as read display two blue check marks alongside their timestamp.The typing indicator will be dismissed once you respond, or after 25 seconds, whichever comes first. To prevent a poor user experience, only display a typing indicator if you are going to respond.  Marking a message as read will also mark earlier messages in the conversation as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappInboundMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 627c8640675de8fc689ab9d9; // string | ID of the message.  A wamid (i.e., the original message ID on WhatsApp's platform) is also acceptable.

try {
    $apiInstance->typingIndicator($id);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappInboundMessagesApi->typingIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the message.  A wamid (i.e., the original message ID on WhatsApp&#39;s platform) is also acceptable. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
