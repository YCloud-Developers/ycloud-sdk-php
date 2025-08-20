# YCloud\Client\WhatsappCallingApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accept()**](WhatsappCallingApi.md#accept) | **POST** /whatsapp/calls/accept | Accept a call
[**connect()**](WhatsappCallingApi.md#connect) | **POST** /whatsapp/calls/connect | Connect a call
[**preAccept()**](WhatsappCallingApi.md#preAccept) | **POST** /whatsapp/calls/preAccept | Pre-accept a call
[**reject()**](WhatsappCallingApi.md#reject) | **POST** /whatsapp/calls/reject | Reject a call
[**terminate()**](WhatsappCallingApi.md#terminate) | **POST** /whatsapp/calls/terminate | Terminate a call


## `accept()`

```php
accept($whatsapp_calling_pre_accept_request): \YCloud\Client\Model\WhatsappCallingResponse
```

Accept a call

Accepts an inbound WhatsApp call.  Once the WebRTC connection is made, this endpoint is used to accept the call. Media will begin flowing immediately since the connection was established prior to call connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_calling_pre_accept_request = new \YCloud\Client\Model\WhatsappCallingPreAcceptRequest(); // \YCloud\Client\Model\WhatsappCallingPreAcceptRequest

try {
    $result = $apiInstance->accept($whatsapp_calling_pre_accept_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappCallingApi->accept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_calling_pre_accept_request** | [**\YCloud\Client\Model\WhatsappCallingPreAcceptRequest**](../Model/WhatsappCallingPreAcceptRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCallingResponse**](../Model/WhatsappCallingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connect()`

```php
connect($whatsapp_calling_connect_request): \YCloud\Client\Model\WhatsappCallingResponse
```

Connect a call

Initiates a WhatsApp call connection.  Establishes the initial connection for a WhatsApp call by providing SDP offer information. This endpoint is used for business-initiated calling scenarios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_calling_connect_request = new \YCloud\Client\Model\WhatsappCallingConnectRequest(); // \YCloud\Client\Model\WhatsappCallingConnectRequest

try {
    $result = $apiInstance->connect($whatsapp_calling_connect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappCallingApi->connect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_calling_connect_request** | [**\YCloud\Client\Model\WhatsappCallingConnectRequest**](../Model/WhatsappCallingConnectRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCallingResponse**](../Model/WhatsappCallingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preAccept()`

```php
preAccept($whatsapp_calling_pre_accept_request): \YCloud\Client\Model\WhatsappCallingResponse
```

Pre-accept a call

Pre-accepts an inbound WhatsApp call.  Pre-accepting calls allows the calling media connection to be established before attempting to send call media through the connection. This facilitates faster connection times and avoids audio clipping issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_calling_pre_accept_request = new \YCloud\Client\Model\WhatsappCallingPreAcceptRequest(); // \YCloud\Client\Model\WhatsappCallingPreAcceptRequest

try {
    $result = $apiInstance->preAccept($whatsapp_calling_pre_accept_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappCallingApi->preAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_calling_pre_accept_request** | [**\YCloud\Client\Model\WhatsappCallingPreAcceptRequest**](../Model/WhatsappCallingPreAcceptRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCallingResponse**](../Model/WhatsappCallingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reject()`

```php
reject($whatsapp_calling_terminate_request): \YCloud\Client\Model\WhatsappCallingResponse
```

Reject a call

Rejects an inbound WhatsApp call.  This endpoint is used to reject an incoming call from a WhatsApp user. The call will be terminated on the WhatsApp user side with appropriate notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_calling_terminate_request = new \YCloud\Client\Model\WhatsappCallingTerminateRequest(); // \YCloud\Client\Model\WhatsappCallingTerminateRequest

try {
    $result = $apiInstance->reject($whatsapp_calling_terminate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappCallingApi->reject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_calling_terminate_request** | [**\YCloud\Client\Model\WhatsappCallingTerminateRequest**](../Model/WhatsappCallingTerminateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCallingResponse**](../Model/WhatsappCallingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `terminate()`

```php
terminate($whatsapp_calling_terminate_request): \YCloud\Client\Model\WhatsappCallingResponse
```

Terminate a call

Terminates an active WhatsApp call.  Both the business or the WhatsApp user can terminate the call at any time. This endpoint is used by the business to end the call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappCallingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_calling_terminate_request = new \YCloud\Client\Model\WhatsappCallingTerminateRequest(); // \YCloud\Client\Model\WhatsappCallingTerminateRequest

try {
    $result = $apiInstance->terminate($whatsapp_calling_terminate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappCallingApi->terminate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_calling_terminate_request** | [**\YCloud\Client\Model\WhatsappCallingTerminateRequest**](../Model/WhatsappCallingTerminateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCallingResponse**](../Model/WhatsappCallingResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
