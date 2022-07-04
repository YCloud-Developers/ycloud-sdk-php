# YCloud\Client\EmailsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](EmailsApi.md#send) | **POST** /emails | Send an email


## `send()`

```php
send($email_send_request): \YCloud\Client\Model\Email
```

Send an email

Sends an outbound email message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_send_request = new \YCloud\Client\Model\EmailSendRequest(); // \YCloud\Client\Model\EmailSendRequest

try {
    $result = $apiInstance->send($email_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_send_request** | [**\YCloud\Client\Model\EmailSendRequest**](../Model/EmailSendRequest.md)|  |

### Return type

[**\YCloud\Client\Model\Email**](../Model/Email.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
