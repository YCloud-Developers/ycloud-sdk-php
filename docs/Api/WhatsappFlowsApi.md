# YCloud\Client\WhatsappFlowsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](WhatsappFlowsApi.md#create) | **POST** /whatsapp/flows | Create a flow
[**delete()**](WhatsappFlowsApi.md#delete) | **DELETE** /whatsapp/flows/{flowId} | Delete a flow
[**deprecate()**](WhatsappFlowsApi.md#deprecate) | **POST** /whatsapp/flows/{flowId}/deprecate | Deprecate a flow
[**list()**](WhatsappFlowsApi.md#list) | **GET** /whatsapp/flows | List flows
[**preview()**](WhatsappFlowsApi.md#preview) | **GET** /whatsapp/flows/{flowId}/preview | generate a web preview URL with this flow.
[**publish()**](WhatsappFlowsApi.md#publish) | **POST** /whatsapp/flows/{flowId}/publish | Publish a flow
[**retrieve()**](WhatsappFlowsApi.md#retrieve) | **GET** /whatsapp/flows/{flowId} | Retrieve a flow
[**updateMetadata()**](WhatsappFlowsApi.md#updateMetadata) | **PATCH** /whatsapp/flows/{flowId}/metadata | Update flow metadata
[**updateStructure()**](WhatsappFlowsApi.md#updateStructure) | **PATCH** /whatsapp/flows/{flowId}/assets | Update flow structure


## `create()`

```php
create($whatsapp_flow_create_request): \YCloud\Client\Model\WhatsappFlowCreate200Response
```

Create a flow

Creates a new WhatsApp Flow. New Flows are by default created in DRAFT state. You can create a new published Flow in single request by specifying flowJson and publish parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_flow_create_request = new \YCloud\Client\Model\WhatsappFlowCreateRequest(); // \YCloud\Client\Model\WhatsappFlowCreateRequest

try {
    $result = $apiInstance->create($whatsapp_flow_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_flow_create_request** | [**\YCloud\Client\Model\WhatsappFlowCreateRequest**](../Model/WhatsappFlowCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappFlowCreate200Response**](../Model/WhatsappFlowCreate200Response.md)

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
delete($flow_id): \YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response
```

Delete a flow

Deletes a WhatsApp Flow. Only Flows in DRAFT status can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.

try {
    $result = $apiInstance->delete($flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |

### Return type

[**\YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response**](../Model/WhatsappFlowUpdateMetadata200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deprecate()`

```php
deprecate($flow_id): \YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response
```

Deprecate a flow

Marks a published Flow as deprecated. Once a Flow is published, it cannot be modified or deleted, but can be marked as deprecated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.

try {
    $result = $apiInstance->deprecate($flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->deprecate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |

### Return type

[**\YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response**](../Model/WhatsappFlowUpdateMetadata200Response.md)

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
list($waba_id): \YCloud\Client\Model\WhatsappFlowList200Response
```

List flows

Returns a list of WhatsApp Flows under a WhatsApp Business Account (WABA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.

try {
    $result = $apiInstance->list($waba_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |

### Return type

[**\YCloud\Client\Model\WhatsappFlowList200Response**](../Model/WhatsappFlowList200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preview()`

```php
preview($flow_id, $invalidate): \YCloud\Client\Model\WhatsappFlowPreviewUrl
```

generate a web preview URL with this flow.

In order to visualize the Flows created, you can generate a web preview URL with this request. **The preview URL is public and can be shared with different stakeholders to visualize the Flow.**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.
$invalidate = false; // bool | the link will expire in 30 days in default, or if you set with invalidate=true which will generate a new link.

try {
    $result = $apiInstance->preview($flow_id, $invalidate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->preview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |
 **invalidate** | **bool**| the link will expire in 30 days in default, or if you set with invalidate&#x3D;true which will generate a new link. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappFlowPreviewUrl**](../Model/WhatsappFlowPreviewUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publish()`

```php
publish($flow_id): \YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response
```

Publish a flow

Updates the status of the Flow to \"PUBLISHED\". You can either edit this flow in the future and turn it back to the \"DRAFT\" state, or create a new flow by specifying the existing Flow ID as the cloneFlowId parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.

try {
    $result = $apiInstance->publish($flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |

### Return type

[**\YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response**](../Model/WhatsappFlowUpdateMetadata200Response.md)

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
retrieve($flow_id): \YCloud\Client\Model\WhatsappFlow
```

Retrieve a flow

Retrieves a WhatsApp Flow's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.

try {
    $result = $apiInstance->retrieve($flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |

### Return type

[**\YCloud\Client\Model\WhatsappFlow**](../Model/WhatsappFlow.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMetadata()`

```php
updateMetadata($flow_id, $whatsapp_flow_update_metadata_request): \YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response
```

Update flow metadata

Updates a WhatsApp Flow's metadata (name or categories).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.
$whatsapp_flow_update_metadata_request = new \YCloud\Client\Model\WhatsappFlowUpdateMetadataRequest(); // \YCloud\Client\Model\WhatsappFlowUpdateMetadataRequest

try {
    $result = $apiInstance->updateMetadata($flow_id, $whatsapp_flow_update_metadata_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->updateMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |
 **whatsapp_flow_update_metadata_request** | [**\YCloud\Client\Model\WhatsappFlowUpdateMetadataRequest**](../Model/WhatsappFlowUpdateMetadataRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response**](../Model/WhatsappFlowUpdateMetadata200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStructure()`

```php
updateStructure($flow_id, $flow_json): \YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response
```

Update flow structure

Updates a WhatsApp Flow's structure. Note that the file must be attached as form-data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = flow-1; // string | Flow ID.
$flow_json = "/path/to/file.txt"; // \SplFileObject | JSON file containing the Flow structure.

try {
    $result = $apiInstance->updateStructure($flow_id, $flow_json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappFlowsApi->updateStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow_id** | **string**| Flow ID. |
 **flow_json** | **\SplFileObject****\SplFileObject**| JSON file containing the Flow structure. |

### Return type

[**\YCloud\Client\Model\WhatsappFlowUpdateMetadata200Response**](../Model/WhatsappFlowUpdateMetadata200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
