# YCloud\Client\WhatsappMessagesApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](WhatsappMessagesApi.md#send) | **POST** /whatsapp/messages | Send a WhatsApp message


## `send()`

```php
send($whatsapp_message_send_request): \YCloud\Client\Model\WhatsappMessage
```

Send a WhatsApp message

Sends an outbound WhatsApp message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_message_send_request = new \YCloud\Client\Model\WhatsappMessageSendRequest(); // \YCloud\Client\Model\WhatsappMessageSendRequest

try {
    $result = $apiInstance->send($whatsapp_message_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappMessagesApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_message_send_request** | [**\YCloud\Client\Model\WhatsappMessageSendRequest**](../Model/WhatsappMessageSendRequest.md)|  | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappMessage**](../Model/WhatsappMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
