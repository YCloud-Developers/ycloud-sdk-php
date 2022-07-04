# YCloud\Client\SmsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**list()**](SmsApi.md#list) | **GET** /sms | List SMS records
[**send()**](SmsApi.md#send) | **POST** /sms | Send an SMS


## `list()`

```php
list($page, $limit, $include_total, $filter_create_time_gte, $filter_create_time_lte, $filter_id): \YCloud\Client\Model\SmsPage
```

List SMS records

Returns a paginated list of SMS messages you've previously sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['filter_create_time_gte'] = 2022-03-01T12:00Z; // \DateTime | Return results where the `createTime` field is greater than or equal to this value. Default: One day ago from now.
$associate_array['filter_create_time_lte'] = 2022-03-31T12:00Z; // \DateTime | Return results where the `createTime` field is less than or equal to this value.
$associate_array['filter_id'] = 'filter_id_example'; // string | Unique object ID on our side. Other filter parameters will be ignored if this parameter is present.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **filter_create_time_gte** | **\DateTime**| Return results where the &#x60;createTime&#x60; field is greater than or equal to this value. Default: One day ago from now. | [optional]
 **filter_create_time_lte** | **\DateTime**| Return results where the &#x60;createTime&#x60; field is less than or equal to this value. | [optional]
 **filter_id** | **string**| Unique object ID on our side. Other filter parameters will be ignored if this parameter is present. | [optional]

### Return type

[**\YCloud\Client\Model\SmsPage**](../Model/SmsPage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($sms_send_request): \YCloud\Client\Model\Sms
```

Send an SMS

Sends an outbound text message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_send_request = new \YCloud\Client\Model\SmsSendRequest(); // \YCloud\Client\Model\SmsSendRequest | SMS request that needs to be sent.

try {
    $result = $apiInstance->send($sms_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sms_send_request** | [**\YCloud\Client\Model\SmsSendRequest**](../Model/SmsSendRequest.md)| SMS request that needs to be sent. |

### Return type

[**\YCloud\Client\Model\Sms**](../Model/Sms.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
