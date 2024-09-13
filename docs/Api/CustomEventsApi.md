# YCloud\Client\CustomEventsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDefinition()**](CustomEventsApi.md#createDefinition) | **POST** /event/definitions | Create an event definition
[**createPropertyDefinition()**](CustomEventsApi.md#createPropertyDefinition) | **POST** /event/definitions/{name}/properties | Create an event property definition
[**propertyDefinition()**](CustomEventsApi.md#propertyDefinition) | **DELETE** /event/definitions/{name}/properties/{propertyName} | Delete an event property definition
[**propertyDefinition_0()**](CustomEventsApi.md#propertyDefinition_0) | **PATCH** /event/definitions/{name}/properties/{propertyName} | Update an event property definition
[**retrieveDefinition()**](CustomEventsApi.md#retrieveDefinition) | **GET** /event/definitions/{name} | Retrieve an event definition
[**sendEvent()**](CustomEventsApi.md#sendEvent) | **POST** /event/events | Send an event
[**updateDefinition()**](CustomEventsApi.md#updateDefinition) | **PATCH** /event/definitions/{name} | Update an event definition


## `createDefinition()`

```php
createDefinition($custom_event_definition_create_request): \YCloud\Client\Model\CustomEventDefinition
```

Create an event definition

Creates a custom event definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_event_definition_create_request = new \YCloud\Client\Model\CustomEventDefinitionCreateRequest(); // \YCloud\Client\Model\CustomEventDefinitionCreateRequest

try {
    $result = $apiInstance->createDefinition($custom_event_definition_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->createDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_event_definition_create_request** | [**\YCloud\Client\Model\CustomEventDefinitionCreateRequest**](../Model/CustomEventDefinitionCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\CustomEventDefinition**](../Model/CustomEventDefinition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPropertyDefinition()`

```php
createPropertyDefinition($name, $custom_event_definition_property_create_request): \YCloud\Client\Model\CustomEventDefinitionProperty
```

Create an event property definition

Defines a new property for the event definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = unique_event_name; // string | Name of the custom event.
$custom_event_definition_property_create_request = new \YCloud\Client\Model\CustomEventDefinitionPropertyCreateRequest(); // \YCloud\Client\Model\CustomEventDefinitionPropertyCreateRequest

try {
    $result = $apiInstance->createPropertyDefinition($name, $custom_event_definition_property_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->createPropertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the custom event. |
 **custom_event_definition_property_create_request** | [**\YCloud\Client\Model\CustomEventDefinitionPropertyCreateRequest**](../Model/CustomEventDefinitionPropertyCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\CustomEventDefinitionProperty**](../Model/CustomEventDefinitionProperty.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertyDefinition()`

```php
propertyDefinition($name, $property_name)
```

Delete an event property definition

Deletes a property of the event definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = unique_event_name; // string | Name of the custom event.
$property_name = unique_property_name; // string | Name of the custom event property.

try {
    $apiInstance->propertyDefinition($name, $property_name);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->propertyDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the custom event. |
 **property_name** | **string**| Name of the custom event property. |

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

## `propertyDefinition_0()`

```php
propertyDefinition_0($name, $property_name, $custom_event_definition_property_update_request): \YCloud\Client\Model\CustomEventDefinitionProperty
```

Update an event property definition

Updates an event property definition's label and description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = unique_event_name; // string | Name of the custom event.
$property_name = unique_property_name; // string | Name of the custom event property.
$custom_event_definition_property_update_request = new \YCloud\Client\Model\CustomEventDefinitionPropertyUpdateRequest(); // \YCloud\Client\Model\CustomEventDefinitionPropertyUpdateRequest

try {
    $result = $apiInstance->propertyDefinition_0($name, $property_name, $custom_event_definition_property_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->propertyDefinition_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the custom event. |
 **property_name** | **string**| Name of the custom event property. |
 **custom_event_definition_property_update_request** | [**\YCloud\Client\Model\CustomEventDefinitionPropertyUpdateRequest**](../Model/CustomEventDefinitionPropertyUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\CustomEventDefinitionProperty**](../Model/CustomEventDefinitionProperty.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDefinition()`

```php
retrieveDefinition($name): \YCloud\Client\Model\CustomEventDefinition
```

Retrieve an event definition

Retrieves a custom event definition you previously created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = unique_event_name; // string | Name of the custom event.

try {
    $result = $apiInstance->retrieveDefinition($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->retrieveDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the custom event. |

### Return type

[**\YCloud\Client\Model\CustomEventDefinition**](../Model/CustomEventDefinition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEvent()`

```php
sendEvent($custom_event_send_request)
```

Send an event

Sends an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_event_send_request = new \YCloud\Client\Model\CustomEventSendRequest(); // \YCloud\Client\Model\CustomEventSendRequest

try {
    $apiInstance->sendEvent($custom_event_send_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->sendEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_event_send_request** | [**\YCloud\Client\Model\CustomEventSendRequest**](../Model/CustomEventSendRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefinition()`

```php
updateDefinition($name, $custom_event_definition_update_request): \YCloud\Client\Model\CustomEventDefinition
```

Update an event definition

Updates an event definition's label and description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\CustomEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = unique_event_name; // string | Name of the custom event.
$custom_event_definition_update_request = new \YCloud\Client\Model\CustomEventDefinitionUpdateRequest(); // \YCloud\Client\Model\CustomEventDefinitionUpdateRequest

try {
    $result = $apiInstance->updateDefinition($name, $custom_event_definition_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEventsApi->updateDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the custom event. |
 **custom_event_definition_update_request** | [**\YCloud\Client\Model\CustomEventDefinitionUpdateRequest**](../Model/CustomEventDefinitionUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\CustomEventDefinition**](../Model/CustomEventDefinition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
