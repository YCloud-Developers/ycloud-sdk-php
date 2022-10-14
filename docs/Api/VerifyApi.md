# YCloud\Client\VerifyApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**check()**](VerifyApi.md#check) | **POST** /verify/verificationChecks | Check a verification
[**send()**](VerifyApi.md#send) | **POST** /verify/verifications | Start a verification


## `check()`

```php
check($verification_check_request): \YCloud\Client\Model\VerificationCheck
```

Check a verification

Checks a verification with a phone number, an email address, or a verification ID. A `pending` verification status changes to `approved` once you receive a response with the `valid` parameter is `true`. An approved verification cannot be checked anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verification_check_request = new \YCloud\Client\Model\VerificationCheckRequest(); // \YCloud\Client\Model\VerificationCheckRequest

try {
    $result = $apiInstance->check($verification_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verification_check_request** | [**\YCloud\Client\Model\VerificationCheckRequest**](../Model/VerificationCheckRequest.md)|  | [optional]

### Return type

[**\YCloud\Client\Model\VerificationCheck**](../Model/VerificationCheck.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($verification_send_request): \YCloud\Client\Model\Verification
```

Start a verification

Starts a verification by sending an SMS, voice, or email message to the recipient. This verification is charged once the message is sent successfully.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verification_send_request = new \YCloud\Client\Model\VerificationSendRequest(); // \YCloud\Client\Model\VerificationSendRequest | Verification request that needs to be sent.

try {
    $result = $apiInstance->send($verification_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verification_send_request** | [**\YCloud\Client\Model\VerificationSendRequest**](../Model/VerificationSendRequest.md)| Verification request that needs to be sent. |

### Return type

[**\YCloud\Client\Model\Verification**](../Model/Verification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
