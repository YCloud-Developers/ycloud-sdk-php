# YCloud\Client\WebhookEndpointsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](WebhookEndpointsApi.md#create) | **POST** /webhookEndpoints | Create a webhook endpoint
[**delete()**](WebhookEndpointsApi.md#delete) | **DELETE** /webhookEndpoints/{id} | Delete a webhook endpoint
[**list()**](WebhookEndpointsApi.md#list) | **GET** /webhookEndpoints | List webhook endpoints
[**retrieve()**](WebhookEndpointsApi.md#retrieve) | **GET** /webhookEndpoints/{id} | Retrieve a webhook endpoint
[**rotateSecret()**](WebhookEndpointsApi.md#rotateSecret) | **POST** /webhookEndpoints/{id}/rotateSecret | Rotate a webhook endpoint secret
[**update()**](WebhookEndpointsApi.md#update) | **PATCH** /webhookEndpoints/{id} | Update a webhook endpoint


## `create()`

```php
create($webhook_endpoint_create_request): \YCloud\Client\Model\WebhookEndpoint
```

Create a webhook endpoint

Creates a webhook endpoint listening the specified events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_endpoint_create_request = new \YCloud\Client\Model\WebhookEndpointCreateRequest(); // \YCloud\Client\Model\WebhookEndpointCreateRequest

try {
    $result = $apiInstance->create($webhook_endpoint_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_endpoint_create_request** | [**\YCloud\Client\Model\WebhookEndpointCreateRequest**](../Model/WebhookEndpointCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id): \YCloud\Client\Model\WebhookEndpoint
```

Delete a webhook endpoint

Deletes a webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wh627c8640675de8fc689ab9d9; // string | ID of the webhook endpoint.

try {
    $result = $apiInstance->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the webhook endpoint. |

### Return type

[**\YCloud\Client\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

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
list($page, $limit, $include_total): \YCloud\Client\Model\WebhookEndpointPage
```

List webhook endpoints

Returns a paginated list of webhook endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]

### Return type

[**\YCloud\Client\Model\WebhookEndpointPage**](../Model/WebhookEndpointPage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieve()`

```php
retrieve($id): \YCloud\Client\Model\WebhookEndpoint
```

Retrieve a webhook endpoint

Retrieves the webhook endpoint with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wh627c8640675de8fc689ab9d9; // string | ID of the webhook endpoint.

try {
    $result = $apiInstance->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the webhook endpoint. |

### Return type

[**\YCloud\Client\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotateSecret()`

```php
rotateSecret($id): \YCloud\Client\Model\WebhookEndpoint
```

Rotate a webhook endpoint secret

Generates a new secret for a webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wh627c8640675de8fc689ab9d9; // string | ID of the webhook endpoint.

try {
    $result = $apiInstance->rotateSecret($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->rotateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the webhook endpoint. |

### Return type

[**\YCloud\Client\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `update()`

```php
update($id, $webhook_endpoint_update_request): \YCloud\Client\Model\WebhookEndpoint
```

Update a webhook endpoint

Updates a webhook endpoint, such as url, events, status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wh627c8640675de8fc689ab9d9; // string | ID of the webhook endpoint.
$webhook_endpoint_update_request = new \YCloud\Client\Model\WebhookEndpointUpdateRequest(); // \YCloud\Client\Model\WebhookEndpointUpdateRequest

try {
    $result = $apiInstance->update($id, $webhook_endpoint_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the webhook endpoint. |
 **webhook_endpoint_update_request** | [**\YCloud\Client\Model\WebhookEndpointUpdateRequest**](../Model/WebhookEndpointUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
