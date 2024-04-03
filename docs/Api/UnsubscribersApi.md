# YCloud\Client\UnsubscribersApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](UnsubscribersApi.md#create) | **POST** /unsubscribers | Create an unsubscriber
[**deleteByCustomerAndChannel()**](UnsubscribersApi.md#deleteByCustomerAndChannel) | **DELETE** /unsubscribers/{customer}/{channel} | Delete an unsubscriber
[**list()**](UnsubscribersApi.md#list) | **GET** /unsubscribers | List unsubscribers
[**listAllByCustomer()**](UnsubscribersApi.md#listAllByCustomer) | **GET** /unsubscribers/{customer} | List all unsubscribers by customer
[**retrieveByCustomerAndChannel()**](UnsubscribersApi.md#retrieveByCustomerAndChannel) | **GET** /unsubscribers/{customer}/{channel} | Retrieve an unsubscriber


## `create()`

```php
create($unsubscriber_create_request): \YCloud\Client\Model\Unsubscriber
```

Create an unsubscriber

Creates an unsubscriber. An unsubscriber is a configuration item representing that customers opt out of receiving messages from your business. **A customer and a channel form a unique identifier for an unsubscriber.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\UnsubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unsubscriber_create_request = new \YCloud\Client\Model\UnsubscriberCreateRequest(); // \YCloud\Client\Model\UnsubscriberCreateRequest

try {
    $result = $apiInstance->create($unsubscriber_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribersApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsubscriber_create_request** | [**\YCloud\Client\Model\UnsubscriberCreateRequest**](../Model/UnsubscriberCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\Unsubscriber**](../Model/Unsubscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteByCustomerAndChannel()`

```php
deleteByCustomerAndChannel($customer, $channel): \YCloud\Client\Model\Unsubscriber
```

Delete an unsubscriber

Deletes the unsubscriber for the specified customer and channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\UnsubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = +16315551111; // string | The customer who has opted out.
$channel = new \YCloud\Client\Model\UnsubscriberChannel(); // UnsubscriberChannel

try {
    $result = $apiInstance->deleteByCustomerAndChannel($customer, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribersApi->deleteByCustomerAndChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| The customer who has opted out. |
 **channel** | [**UnsubscriberChannel**](../Model/.md)|  |

### Return type

[**\YCloud\Client\Model\Unsubscriber**](../Model/Unsubscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `list()`

```php
list($page, $limit, $include_total, $page_after, $filter_customer, $filter_channel, $filter_region_code): \YCloud\Client\Model\UnsubscriberPage
```

List unsubscribers

Returns a paginated list of unsubscribers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\UnsubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['page_after'] = id:foo; // string | A cursor to fetch the next page in cursor pagination. For example, if you make a list request, receive 100 objects and `cursor.after=id:foo`, your subsequent call can include `pageAfter=id:foo` in order to fetch the next page of the list.
$associate_array['filter_customer'] = +16315551111; // string
$associate_array['filter_channel'] = new \YCloud\Client\Model\UnsubscriberChannel(); // UnsubscriberChannel
$associate_array['filter_region_code'] = 'filter_region_code_example'; // string

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribersApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **page_after** | **string**| A cursor to fetch the next page in cursor pagination. For example, if you make a list request, receive 100 objects and &#x60;cursor.after&#x3D;id:foo&#x60;, your subsequent call can include &#x60;pageAfter&#x3D;id:foo&#x60; in order to fetch the next page of the list. | [optional]
 **filter_customer** | **string**|  | [optional]
 **filter_channel** | [**UnsubscriberChannel**](../Model/.md)|  | [optional]
 **filter_region_code** | **string**|  | [optional]

### Return type

[**\YCloud\Client\Model\UnsubscriberPage**](../Model/UnsubscriberPage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllByCustomer()`

```php
listAllByCustomer($customer): \YCloud\Client\Model\Unsubscriber[]
```

List all unsubscribers by customer

Returns all unsubscribers for the specified customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\UnsubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = +16315551111; // string | The customer who has opted out.

try {
    $result = $apiInstance->listAllByCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribersApi->listAllByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| The customer who has opted out. |

### Return type

[**\YCloud\Client\Model\Unsubscriber[]**](../Model/Unsubscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveByCustomerAndChannel()`

```php
retrieveByCustomerAndChannel($customer, $channel): \YCloud\Client\Model\Unsubscriber
```

Retrieve an unsubscriber

Retrieves the unsubscriber for the specified customer and channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\UnsubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = +16315551111; // string | The customer who has opted out.
$channel = new \YCloud\Client\Model\UnsubscriberChannel(); // UnsubscriberChannel

try {
    $result = $apiInstance->retrieveByCustomerAndChannel($customer, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribersApi->retrieveByCustomerAndChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| The customer who has opted out. |
 **channel** | [**UnsubscriberChannel**](../Model/.md)|  |

### Return type

[**\YCloud\Client\Model\Unsubscriber**](../Model/Unsubscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
