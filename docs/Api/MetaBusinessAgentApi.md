# YCloud\Client\MetaBusinessAgentApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**budgetReplace()**](MetaBusinessAgentApi.md#budgetReplace) | **PUT** /metaBusinessAgents/{entityId}/budgets | Replace Meta Business Agent budgets
[**budgetRetrieve()**](MetaBusinessAgentApi.md#budgetRetrieve) | **GET** /metaBusinessAgents/{entityId}/budgets | Retrieve Meta Business Agent budgets
[**businessAgentCreateConnector()**](MetaBusinessAgentApi.md#businessAgentCreateConnector) | **POST** /metaBusinessAgents/{entityId}/connectors | Create Connector
[**businessAgentCreateConnectorTool()**](MetaBusinessAgentApi.md#businessAgentCreateConnectorTool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | Create Connector Tool
[**businessAgentDeleteConnector()**](MetaBusinessAgentApi.md#businessAgentDeleteConnector) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Delete Connector
[**businessAgentDeleteConnectorTool()**](MetaBusinessAgentApi.md#businessAgentDeleteConnectorTool) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Delete Connector Tool
[**businessAgentGetConnector()**](MetaBusinessAgentApi.md#businessAgentGetConnector) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Get Connector
[**businessAgentGetConnectorTool()**](MetaBusinessAgentApi.md#businessAgentGetConnectorTool) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Get Connector Tool
[**businessAgentListConnectorLogs()**](MetaBusinessAgentApi.md#businessAgentListConnectorLogs) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/logs | List Connector Logs
[**businessAgentListConnectorTools()**](MetaBusinessAgentApi.md#businessAgentListConnectorTools) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | List Connector Tools
[**businessAgentListConnectors()**](MetaBusinessAgentApi.md#businessAgentListConnectors) | **GET** /metaBusinessAgents/{entityId}/connectors | List Connectors
[**businessAgentRefreshConnectorMcpTools()**](MetaBusinessAgentApi.md#businessAgentRefreshConnectorMcpTools) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/refreshMCPTools | Refresh MCP Connector Tools
[**businessAgentRunConnectorTool()**](MetaBusinessAgentApi.md#businessAgentRunConnectorTool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId}/runs | Run Connector Tool
[**businessAgentUpdateConnector()**](MetaBusinessAgentApi.md#businessAgentUpdateConnector) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Update Connector
[**businessAgentUpdateConnectorTool()**](MetaBusinessAgentApi.md#businessAgentUpdateConnectorTool) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Update Connector Tool
[**businessAgentUpsertConnectorApiKey()**](MetaBusinessAgentApi.md#businessAgentUpsertConnectorApiKey) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/apiKey | Upsert Connector Api Key
[**businessAgentUpsertConnectorCertificate()**](MetaBusinessAgentApi.md#businessAgentUpsertConnectorCertificate) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/certificate | Upsert Connector Certificate
[**businessAgentUpsertConnectorOAuth()**](MetaBusinessAgentApi.md#businessAgentUpsertConnectorOAuth) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/oauth | Upsert Connector O Auth
[**conversationTurnsRetrieve()**](MetaBusinessAgentApi.md#conversationTurnsRetrieve) | **GET** /metaBusinessAgents/{entityId}/conversationTurns | Retrieve Meta Business Agent conversation turns
[**settingsReplace()**](MetaBusinessAgentApi.md#settingsReplace) | **PUT** /metaBusinessAgents/{entityId}/settings | Replace Meta Business Agent settings
[**settingsRetrieve()**](MetaBusinessAgentApi.md#settingsRetrieve) | **GET** /metaBusinessAgents/{entityId}/settings | Retrieve Meta Business Agent settings


## `budgetReplace()`

```php
budgetReplace($entity_id, $meta_business_agent_budget_replace_request): \YCloud\Client\Model\MetaBusinessAgentBudgetResponse
```

Replace Meta Business Agent budgets

Replaces the complete Budget collection. Include both `token` and `ai_turn` entries that should remain. An empty collection removes all limits and restores unlimited usage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1249005978294267; // string | Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID.
$meta_business_agent_budget_replace_request = new \YCloud\Client\Model\MetaBusinessAgentBudgetReplaceRequest(); // \YCloud\Client\Model\MetaBusinessAgentBudgetReplaceRequest

try {
    $result = $apiInstance->budgetReplace($entity_id, $meta_business_agent_budget_replace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->budgetReplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **meta_business_agent_budget_replace_request** | [**\YCloud\Client\Model\MetaBusinessAgentBudgetReplaceRequest**](../Model/MetaBusinessAgentBudgetReplaceRequest.md)|  |

### Return type

[**\YCloud\Client\Model\MetaBusinessAgentBudgetResponse**](../Model/MetaBusinessAgentBudgetResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `budgetRetrieve()`

```php
budgetRetrieve($entity_id): \YCloud\Client\Model\MetaBusinessAgentBudgetResponse
```

Retrieve Meta Business Agent budgets

Retrieves the complete Budget collection for the Business Manager associated with the specified WhatsApp Business Phone Number ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1249005978294267; // string | Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID.

try {
    $result = $apiInstance->budgetRetrieve($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->budgetRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |

### Return type

[**\YCloud\Client\Model\MetaBusinessAgentBudgetResponse**](../Model/MetaBusinessAgentBudgetResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentCreateConnector()`

```php
businessAgentCreateConnector($entity_id, $public_create_connector_request): \YCloud\Client\Model\ConnectorDTO
```

Create Connector

Creates an external API connector with its name, description, base URL, authentication type, and optional user-auth or certificate configuration. For MCP, base_url is the remote MCP server address and authentication uses the existing auth fields. Creating a connector does not guarantee discovered tools are immediately ready; inspect mcp_tool_sync when returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$public_create_connector_request = new \YCloud\Client\Model\PublicCreateConnectorRequest(); // \YCloud\Client\Model\PublicCreateConnectorRequest

try {
    $result = $apiInstance->businessAgentCreateConnector($entity_id, $public_create_connector_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentCreateConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **public_create_connector_request** | [**\YCloud\Client\Model\PublicCreateConnectorRequest**](../Model/PublicCreateConnectorRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentCreateConnectorTool()`

```php
businessAgentCreateConnectorTool($entity_id, $connector_id, $public_create_connector_tool_request): \YCloud\Client\Model\ConnectorToolDTO
```

Create Connector Tool

Creates a tool under `connectorId`, including its agent-facing description, outbound request definition, and optional user-auth extraction configuration. transformation_spec is optional: omit it to preserve an existing transformation on update, send null to delete it, or send an object to set it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$public_create_connector_tool_request = {"name":"get_order","description":"Gets an order","request_definition":{"method":"GET","path":"/orders"},"user_auth_required":false}; // \YCloud\Client\Model\PublicCreateConnectorToolRequest

try {
    $result = $apiInstance->businessAgentCreateConnectorTool($entity_id, $connector_id, $public_create_connector_tool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentCreateConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **public_create_connector_tool_request** | [**\YCloud\Client\Model\PublicCreateConnectorToolRequest**](../Model/PublicCreateConnectorToolRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorToolDTO**](../Model/ConnectorToolDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentDeleteConnector()`

```php
businessAgentDeleteConnector($entity_id, $connector_id)
```

Delete Connector

Deletes the external API connector identified by `connectorId` from the agent configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.

try {
    $apiInstance->businessAgentDeleteConnector($entity_id, $connector_id);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentDeleteConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |

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

## `businessAgentDeleteConnectorTool()`

```php
businessAgentDeleteConnectorTool($entity_id, $connector_id, $tool_id)
```

Delete Connector Tool

Deletes the tool identified by `toolId` from `connectorId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$tool_id = 'tool_id_example'; // string | Connector tool resource ID.

try {
    $apiInstance->businessAgentDeleteConnectorTool($entity_id, $connector_id, $tool_id);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentDeleteConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **tool_id** | **string**| Connector tool resource ID. |

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

## `businessAgentGetConnector()`

```php
businessAgentGetConnector($entity_id, $connector_id): \YCloud\Client\Model\ConnectorDTO
```

Get Connector

Retrieves the external API connector identified by `connectorId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.

try {
    $result = $apiInstance->businessAgentGetConnector($entity_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentGetConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentGetConnectorTool()`

```php
businessAgentGetConnectorTool($entity_id, $connector_id, $tool_id): \YCloud\Client\Model\ConnectorToolDTO
```

Get Connector Tool

Retrieves the connector tool identified by `toolId`, including its outbound request and user-auth definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$tool_id = 'tool_id_example'; // string | Connector tool resource ID.

try {
    $result = $apiInstance->businessAgentGetConnectorTool($entity_id, $connector_id, $tool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentGetConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **tool_id** | **string**| Connector tool resource ID. |

### Return type

[**\YCloud\Client\Model\ConnectorToolDTO**](../Model/ConnectorToolDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentListConnectorLogs()`

```php
businessAgentListConnectorLogs($entity_id, $connector_id, $start_time, $end_time, $limit, $tool_id, $include_stats, $summary_only, $top_n): \YCloud\Client\Model\ConnectorLogStatsDTO
```

List Connector Logs

Retrieves third-party connector error logs for the requested time and tool filters. It can return individual entries, aggregated failure patterns, and optional success-rate or latency statistics; Meta limits the query window and retention to seven days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$start_time = 56; // int
$end_time = 56; // int
$limit = 56; // int
$tool_id = 'tool_id_example'; // string
$include_stats = True; // bool
$summary_only = True; // bool
$top_n = 56; // int

try {
    $result = $apiInstance->businessAgentListConnectorLogs($entity_id, $connector_id, $start_time, $end_time, $limit, $tool_id, $include_stats, $summary_only, $top_n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListConnectorLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **start_time** | **int**|  | [optional]
 **end_time** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **tool_id** | **string**|  | [optional]
 **include_stats** | **bool**|  | [optional]
 **summary_only** | **bool**|  | [optional]
 **top_n** | **int**|  | [optional]

### Return type

[**\YCloud\Client\Model\ConnectorLogStatsDTO**](../Model/ConnectorLogStatsDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentListConnectorTools()`

```php
businessAgentListConnectorTools($entity_id, $connector_id): \YCloud\Client\Model\ConnectorToolDTO[]
```

List Connector Tools

Lists the tool operations defined under `connectorId` that the agent can use to call the external service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.

try {
    $result = $apiInstance->businessAgentListConnectorTools($entity_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListConnectorTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |

### Return type

[**\YCloud\Client\Model\ConnectorToolDTO[]**](../Model/ConnectorToolDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentListConnectors()`

```php
businessAgentListConnectors($entity_id): \YCloud\Client\Model\ConnectorDTO[]
```

List Connectors

Lists the external API connectors configured for the agent, including their endpoint and authentication definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.

try {
    $result = $apiInstance->businessAgentListConnectors($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListConnectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |

### Return type

[**\YCloud\Client\Model\ConnectorDTO[]**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentRefreshConnectorMcpTools()`

```php
businessAgentRefreshConnectorMcpTools($entity_id, $connector_id): \YCloud\Client\Model\ConnectorDTO
```

Refresh MCP Connector Tools

Triggers Meta to rediscover the MCP tools exposed by this connector. The request has no body. A successful HTTP 200 returns the current Connector; inspect mcp_tool_sync.status because remote discovery or provisioning failure can still return HTTP 200 with status ERROR. This operation has no idempotency key. Do not retry it automatically; after a timeout, query the Connector because the refresh outcome is uncertain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Meta Connector ID returned by the Connector API. This is not a YCloud local Connector UUID.

try {
    $result = $apiInstance->businessAgentRefreshConnectorMcpTools($entity_id, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentRefreshConnectorMcpTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Meta Connector ID returned by the Connector API. This is not a YCloud local Connector UUID. |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentRunConnectorTool()`

```php
businessAgentRunConnectorTool($entity_id, $connector_id, $tool_id, $public_run_connector_tool_request): \YCloud\Client\Model\ConnectorToolRunResultDTO
```

Run Connector Tool

Executes the connector tool identified by `toolId` with the supplied `input` and returns the upstream API result exposed by Meta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$tool_id = 'tool_id_example'; // string | Connector tool resource ID.
$public_run_connector_tool_request = new \YCloud\Client\Model\PublicRunConnectorToolRequest(); // \YCloud\Client\Model\PublicRunConnectorToolRequest

try {
    $result = $apiInstance->businessAgentRunConnectorTool($entity_id, $connector_id, $tool_id, $public_run_connector_tool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentRunConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **tool_id** | **string**| Connector tool resource ID. |
 **public_run_connector_tool_request** | [**\YCloud\Client\Model\PublicRunConnectorToolRequest**](../Model/PublicRunConnectorToolRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorToolRunResultDTO**](../Model/ConnectorToolRunResultDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpdateConnector()`

```php
businessAgentUpdateConnector($entity_id, $connector_id, $public_update_connector_request): \YCloud\Client\Model\ConnectorDTO
```

Update Connector

Updates the connector definition identified by `connectorId`, including its descriptive, endpoint, authentication, and certificate requirement fields. connector_protocol cannot be changed after creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$public_update_connector_request = new \YCloud\Client\Model\PublicUpdateConnectorRequest(); // \YCloud\Client\Model\PublicUpdateConnectorRequest

try {
    $result = $apiInstance->businessAgentUpdateConnector($entity_id, $connector_id, $public_update_connector_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpdateConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **public_update_connector_request** | [**\YCloud\Client\Model\PublicUpdateConnectorRequest**](../Model/PublicUpdateConnectorRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpdateConnectorTool()`

```php
businessAgentUpdateConnectorTool($entity_id, $connector_id, $tool_id, $public_update_connector_tool_request): \YCloud\Client\Model\ConnectorToolDTO
```

Update Connector Tool

Updates the name, description, outbound request definition, and user-auth configuration of the connector tool identified by `toolId`. transformation_spec is optional: omit it to preserve an existing transformation on update, send null to delete it, or send an object to set it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$tool_id = 'tool_id_example'; // string | Connector tool resource ID.
$public_update_connector_tool_request = {"name":"get_order","description":"Gets an order","request_definition":{"method":"GET","path":"/orders"},"user_auth_required":false}; // \YCloud\Client\Model\PublicUpdateConnectorToolRequest

try {
    $result = $apiInstance->businessAgentUpdateConnectorTool($entity_id, $connector_id, $tool_id, $public_update_connector_tool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpdateConnectorTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **tool_id** | **string**| Connector tool resource ID. |
 **public_update_connector_tool_request** | [**\YCloud\Client\Model\PublicUpdateConnectorToolRequest**](../Model/PublicUpdateConnectorToolRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorToolDTO**](../Model/ConnectorToolDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpsertConnectorApiKey()`

```php
businessAgentUpsertConnectorApiKey($entity_id, $connector_id, $public_upsert_connector_api_key_request): \YCloud\Client\Model\ConnectorDTO
```

Upsert Connector Api Key

Sets or rotates the API key credentials for `connectorId`. Existing API key credentials are replaced, and the updated connector is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$public_upsert_connector_api_key_request = new \YCloud\Client\Model\PublicUpsertConnectorApiKeyRequest(); // \YCloud\Client\Model\PublicUpsertConnectorApiKeyRequest

try {
    $result = $apiInstance->businessAgentUpsertConnectorApiKey($entity_id, $connector_id, $public_upsert_connector_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpsertConnectorApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **public_upsert_connector_api_key_request** | [**\YCloud\Client\Model\PublicUpsertConnectorApiKeyRequest**](../Model/PublicUpsertConnectorApiKeyRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpsertConnectorCertificate()`

```php
businessAgentUpsertConnectorCertificate($entity_id, $connector_id, $public_upsert_connector_certificate_request): \YCloud\Client\Model\ConnectorDTO
```

Upsert Connector Certificate

Uploads or rotates the mTLS client certificate, private key, and optional CA certificate for `connectorId`, then returns the updated connector.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$public_upsert_connector_certificate_request = new \YCloud\Client\Model\PublicUpsertConnectorCertificateRequest(); // \YCloud\Client\Model\PublicUpsertConnectorCertificateRequest

try {
    $result = $apiInstance->businessAgentUpsertConnectorCertificate($entity_id, $connector_id, $public_upsert_connector_certificate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpsertConnectorCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **public_upsert_connector_certificate_request** | [**\YCloud\Client\Model\PublicUpsertConnectorCertificateRequest**](../Model/PublicUpsertConnectorCertificateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpsertConnectorOAuth()`

```php
businessAgentUpsertConnectorOAuth($entity_id, $connector_id, $public_upsert_connector_o_auth_request): \YCloud\Client\Model\ConnectorDTO
```

Upsert Connector O Auth

Sets or rotates the OAuth 2.0 client credentials for `connectorId`. Existing OAuth credentials are replaced, and the updated connector is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string | WhatsApp Business Phone Number ID that owns the Meta Business Agent.
$connector_id = 'connector_id_example'; // string | Connector resource ID.
$public_upsert_connector_o_auth_request = new \YCloud\Client\Model\PublicUpsertConnectorOAuthRequest(); // \YCloud\Client\Model\PublicUpsertConnectorOAuthRequest

try {
    $result = $apiInstance->businessAgentUpsertConnectorOAuth($entity_id, $connector_id, $public_upsert_connector_o_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpsertConnectorOAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **connector_id** | **string**| Connector resource ID. |
 **public_upsert_connector_o_auth_request** | [**\YCloud\Client\Model\PublicUpsertConnectorOAuthRequest**](../Model/PublicUpsertConnectorOAuthRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ConnectorDTO**](../Model/ConnectorDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationTurnsRetrieve()`

```php
conversationTurnsRetrieve($entity_id, $user_phone_number, $start_timestamp_ms, $end_timestamp_ms, $before, $after, $limit): \YCloud\Client\Model\MetaBusinessAgentConversationTurnPage
```

Retrieve Meta Business Agent conversation turns

Retrieves conversation turns for one WhatsApp user. `entityId` is the WhatsApp Business Phone Number ID. Timestamp boundaries are inclusive and use Unix epoch milliseconds. Supply at most one of `before` and `after`; cursors are opaque. Continue pagination while `paging.next` is present, including when the current `data` array is empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['entity_id'] = 1249005978294267; // string | Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID.
$associate_array['user_phone_number'] = 14155550123; // string | WhatsApp user phone number including the country code, with digits only and no leading `+`, spaces, or separators.
$associate_array['start_timestamp_ms'] = 56; // int | Inclusive start time as Unix epoch milliseconds.
$associate_array['end_timestamp_ms'] = 56; // int | Inclusive end time as Unix epoch milliseconds. Must be greater than or equal to `start_timestamp_ms` when both are supplied.
$associate_array['before'] = 'before_example'; // string | Opaque backward-pagination cursor. Do not combine with `after`.
$associate_array['after'] = 'after_example'; // string | Opaque forward-pagination cursor. Do not combine with `before`.
$associate_array['limit'] = 56; // int | Maximum number of conversation turns to return.

try {
    $result = $apiInstance->conversationTurnsRetrieve($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->conversationTurnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **user_phone_number** | **string**| WhatsApp user phone number including the country code, with digits only and no leading &#x60;+&#x60;, spaces, or separators. |
 **start_timestamp_ms** | **int**| Inclusive start time as Unix epoch milliseconds. | [optional]
 **end_timestamp_ms** | **int**| Inclusive end time as Unix epoch milliseconds. Must be greater than or equal to &#x60;start_timestamp_ms&#x60; when both are supplied. | [optional]
 **before** | **string**| Opaque backward-pagination cursor. Do not combine with &#x60;after&#x60;. | [optional]
 **after** | **string**| Opaque forward-pagination cursor. Do not combine with &#x60;before&#x60;. | [optional]
 **limit** | **int**| Maximum number of conversation turns to return. | [optional]

### Return type

[**\YCloud\Client\Model\MetaBusinessAgentConversationTurnPage**](../Model/MetaBusinessAgentConversationTurnPage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsReplace()`

```php
settingsReplace($entity_id, $meta_business_agent_settings_replace_request): \YCloud\Client\Model\MetaBusinessAgentSettings
```

Replace Meta Business Agent settings

Replaces the supplied settings fields. Omitting `never_say_phrases` preserves the current list, an empty list clears it, and a non-empty list fully replaces it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1249005978294267; // string | Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID.
$meta_business_agent_settings_replace_request = new \YCloud\Client\Model\MetaBusinessAgentSettingsReplaceRequest(); // \YCloud\Client\Model\MetaBusinessAgentSettingsReplaceRequest

try {
    $result = $apiInstance->settingsReplace($entity_id, $meta_business_agent_settings_replace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->settingsReplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **meta_business_agent_settings_replace_request** | [**\YCloud\Client\Model\MetaBusinessAgentSettingsReplaceRequest**](../Model/MetaBusinessAgentSettingsReplaceRequest.md)|  |

### Return type

[**\YCloud\Client\Model\MetaBusinessAgentSettings**](../Model/MetaBusinessAgentSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsRetrieve()`

```php
settingsRetrieve($entity_id, $agent_id): \YCloud\Client\Model\MetaBusinessAgentSettings[]
```

Retrieve Meta Business Agent settings

Retrieves the settings associated with the specified Meta Business Agent entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\MetaBusinessAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['entity_id'] = 1249005978294267; // string | Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID.
$associate_array['agent_id'] = 'agent_id_example'; // string | Optional Meta Agent ID used to select one settings record.

try {
    $result = $apiInstance->settingsRetrieve($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->settingsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **agent_id** | **string**| Optional Meta Agent ID used to select one settings record. | [optional]

### Return type

[**\YCloud\Client\Model\MetaBusinessAgentSettings[]**](../Model/MetaBusinessAgentSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
