# YCloud\Client\MetaBusinessAgentApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**budgetReplace()**](MetaBusinessAgentApi.md#budgetReplace) | **PUT** /metaBusinessAgents/{entityId}/budgets | Replace Meta Business Agent budgets
[**budgetRetrieve()**](MetaBusinessAgentApi.md#budgetRetrieve) | **GET** /metaBusinessAgents/{entityId}/budgets | Retrieve Meta Business Agent budgets
[**businessAgentCreateAllowlistEntry()**](MetaBusinessAgentApi.md#businessAgentCreateAllowlistEntry) | **POST** /metaBusinessAgents/{entityId}/allowListEntries | Create Allowlist Entry
[**businessAgentCreateConnector()**](MetaBusinessAgentApi.md#businessAgentCreateConnector) | **POST** /metaBusinessAgents/{entityId}/connectors | Create Connector
[**businessAgentCreateConnectorTool()**](MetaBusinessAgentApi.md#businessAgentCreateConnectorTool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | Create Connector Tool
[**businessAgentCreateFaq()**](MetaBusinessAgentApi.md#businessAgentCreateFaq) | **POST** /metaBusinessAgents/{entityId}/faqs | Create Faq
[**businessAgentCreateWebsite()**](MetaBusinessAgentApi.md#businessAgentCreateWebsite) | **POST** /metaBusinessAgents/{entityId}/websites | Create Website
[**businessAgentDeleteAllowlistEntry()**](MetaBusinessAgentApi.md#businessAgentDeleteAllowlistEntry) | **DELETE** /metaBusinessAgents/{entityId}/allowListEntries/{entryId} | Delete Allowlist Entry
[**businessAgentDeleteConnector()**](MetaBusinessAgentApi.md#businessAgentDeleteConnector) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Delete Connector
[**businessAgentDeleteConnectorTool()**](MetaBusinessAgentApi.md#businessAgentDeleteConnectorTool) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Delete Connector Tool
[**businessAgentDeleteFaq()**](MetaBusinessAgentApi.md#businessAgentDeleteFaq) | **DELETE** /metaBusinessAgents/{entityId}/faqs/{faqId} | Delete Faq
[**businessAgentDeleteWebsite()**](MetaBusinessAgentApi.md#businessAgentDeleteWebsite) | **DELETE** /metaBusinessAgents/{entityId}/websites/{websiteId} | Delete Website
[**businessAgentGetAgentEventStatus()**](MetaBusinessAgentApi.md#businessAgentGetAgentEventStatus) | **GET** /metaBusinessAgents/{entityId}/events/{agentEventId} | Get Agent Event Status
[**businessAgentGetConnector()**](MetaBusinessAgentApi.md#businessAgentGetConnector) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Get Connector
[**businessAgentGetConnectorTool()**](MetaBusinessAgentApi.md#businessAgentGetConnectorTool) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Get Connector Tool
[**businessAgentGetFaq()**](MetaBusinessAgentApi.md#businessAgentGetFaq) | **GET** /metaBusinessAgents/{entityId}/faqs/{faqId} | Get Faq
[**businessAgentGetWebsite()**](MetaBusinessAgentApi.md#businessAgentGetWebsite) | **GET** /metaBusinessAgents/{entityId}/websites/{websiteId} | Get Website
[**businessAgentListAllowlist()**](MetaBusinessAgentApi.md#businessAgentListAllowlist) | **GET** /metaBusinessAgents/{entityId}/allowListEntries | List Allowlist
[**businessAgentListConnectorLogs()**](MetaBusinessAgentApi.md#businessAgentListConnectorLogs) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/logs | List Connector Logs
[**businessAgentListConnectorTools()**](MetaBusinessAgentApi.md#businessAgentListConnectorTools) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | List Connector Tools
[**businessAgentListConnectors()**](MetaBusinessAgentApi.md#businessAgentListConnectors) | **GET** /metaBusinessAgents/{entityId}/connectors | List Connectors
[**businessAgentListFaqs()**](MetaBusinessAgentApi.md#businessAgentListFaqs) | **GET** /metaBusinessAgents/{entityId}/faqs | List Faqs
[**businessAgentListWebsites()**](MetaBusinessAgentApi.md#businessAgentListWebsites) | **GET** /metaBusinessAgents/{entityId}/websites | List Websites
[**businessAgentRefreshConnectorMcpTools()**](MetaBusinessAgentApi.md#businessAgentRefreshConnectorMcpTools) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/refreshMCPTools | Refresh MCP Connector Tools
[**businessAgentRunConnectorTool()**](MetaBusinessAgentApi.md#businessAgentRunConnectorTool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId}/runs | Run Connector Tool
[**businessAgentSubmitAgentEvent()**](MetaBusinessAgentApi.md#businessAgentSubmitAgentEvent) | **POST** /metaBusinessAgents/{entityId}/events | Submit Agent Event
[**businessAgentUpdateConnector()**](MetaBusinessAgentApi.md#businessAgentUpdateConnector) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Update Connector
[**businessAgentUpdateConnectorTool()**](MetaBusinessAgentApi.md#businessAgentUpdateConnectorTool) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Update Connector Tool
[**businessAgentUpdateFaq()**](MetaBusinessAgentApi.md#businessAgentUpdateFaq) | **PATCH** /metaBusinessAgents/{entityId}/faqs/{faqId} | Update Faq
[**businessAgentUpdateWebsite()**](MetaBusinessAgentApi.md#businessAgentUpdateWebsite) | **PATCH** /metaBusinessAgents/{entityId}/websites/{websiteId} | Update Website
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

## `businessAgentCreateAllowlistEntry()`

```php
businessAgentCreateAllowlistEntry($entity_id, $public_create_allowlist_entry_request): \YCloud\Client\Model\AgentAllowlistEntryDTO
```

Create Allowlist Entry

Adds exactly one explicitly supplied WhatsApp identity: consumer_phone_number or consumer_bsuid. This public API does not look up a BSUID from a phone number. Phone and BSUID entries have distinct IDs and each counts toward the shared limit of 20.

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
$public_create_allowlist_entry_request = {"consumer_phone_number":"+15551234567"}; // \YCloud\Client\Model\PublicCreateAllowlistEntryRequest

try {
    $result = $apiInstance->businessAgentCreateAllowlistEntry($entity_id, $public_create_allowlist_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentCreateAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **public_create_allowlist_entry_request** | [**\YCloud\Client\Model\PublicCreateAllowlistEntryRequest**](../Model/PublicCreateAllowlistEntryRequest.md)|  |

### Return type

[**\YCloud\Client\Model\AgentAllowlistEntryDTO**](../Model/AgentAllowlistEntryDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `businessAgentCreateFaq()`

```php
businessAgentCreateFaq($entity_id, $public_create_faq_request): \YCloud\Client\Model\FaqDTO
```

Create Faq

Creates a question-and-answer entry in the agent knowledge base and returns the created FAQ.

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
$public_create_faq_request = new \YCloud\Client\Model\PublicCreateFaqRequest(); // \YCloud\Client\Model\PublicCreateFaqRequest

try {
    $result = $apiInstance->businessAgentCreateFaq($entity_id, $public_create_faq_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentCreateFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **public_create_faq_request** | [**\YCloud\Client\Model\PublicCreateFaqRequest**](../Model/PublicCreateFaqRequest.md)|  |

### Return type

[**\YCloud\Client\Model\FaqDTO**](../Model/FaqDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentCreateWebsite()`

```php
businessAgentCreateWebsite($entity_id, $public_create_website_request): \YCloud\Client\Model\WebsiteDTO
```

Create Website

Adds a website URL for Meta to crawl and ingest into the agent knowledge base and returns the created crawl entry.

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
$public_create_website_request = new \YCloud\Client\Model\PublicCreateWebsiteRequest(); // \YCloud\Client\Model\PublicCreateWebsiteRequest

try {
    $result = $apiInstance->businessAgentCreateWebsite($entity_id, $public_create_website_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentCreateWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **public_create_website_request** | [**\YCloud\Client\Model\PublicCreateWebsiteRequest**](../Model/PublicCreateWebsiteRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WebsiteDTO**](../Model/WebsiteDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentDeleteAllowlistEntry()`

```php
businessAgentDeleteAllowlistEntry($entity_id, $entry_id)
```

Delete Allowlist Entry

Deletes only the entry identified by entryId. Other phone or BSUID entries remain unchanged.

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
$entry_id = 'entry_id_example'; // string | Allowlist entry ID.

try {
    $apiInstance->businessAgentDeleteAllowlistEntry($entity_id, $entry_id);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentDeleteAllowlistEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **entry_id** | **string**| Allowlist entry ID. |

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

## `businessAgentDeleteFaq()`

```php
businessAgentDeleteFaq($entity_id, $faq_id)
```

Delete Faq

Deletes the FAQ identified by `faqId`. Returns HTTP `204` when deletion succeeds or Meta explicitly reports that the FAQ does not exist. Other `404` errors remain errors.

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
$faq_id = 'faq_id_example'; // string | FAQ resource ID.

try {
    $apiInstance->businessAgentDeleteFaq($entity_id, $faq_id);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentDeleteFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **faq_id** | **string**| FAQ resource ID. |

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

## `businessAgentDeleteWebsite()`

```php
businessAgentDeleteWebsite($entity_id, $website_id)
```

Delete Website

Removes the website crawl entry identified by `websiteId` from the agent knowledge base.

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
$website_id = 'website_id_example'; // string | Website resource ID.

try {
    $apiInstance->businessAgentDeleteWebsite($entity_id, $website_id);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentDeleteWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **website_id** | **string**| Website resource ID. |

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

## `businessAgentGetAgentEventStatus()`

```php
businessAgentGetAgentEventStatus($entity_id, $agent_event_id): \YCloud\Client\Model\AgentEventStatusDTO
```

Get Agent Event Status

Retrieves the current processing status, timestamps, and any error or skip reason for the event identified by `agentEventId`.

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
$agent_event_id = 'agent_event_id_example'; // string | Agent event ID returned when the event was submitted.

try {
    $result = $apiInstance->businessAgentGetAgentEventStatus($entity_id, $agent_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentGetAgentEventStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **agent_event_id** | **string**| Agent event ID returned when the event was submitted. |

### Return type

[**\YCloud\Client\Model\AgentEventStatusDTO**](../Model/AgentEventStatusDTO.md)

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

## `businessAgentGetFaq()`

```php
businessAgentGetFaq($entity_id, $faq_id): \YCloud\Client\Model\FaqDTO
```

Get Faq

Retrieves the FAQ knowledge entry identified by `faqId`.

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
$faq_id = 'faq_id_example'; // string | FAQ resource ID.

try {
    $result = $apiInstance->businessAgentGetFaq($entity_id, $faq_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentGetFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **faq_id** | **string**| FAQ resource ID. |

### Return type

[**\YCloud\Client\Model\FaqDTO**](../Model/FaqDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentGetWebsite()`

```php
businessAgentGetWebsite($entity_id, $website_id): \YCloud\Client\Model\WebsiteDTO
```

Get Website

Retrieves the website knowledge entry identified by `websiteId`, including its URL and crawl status information.

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
$website_id = 'website_id_example'; // string | Website resource ID.

try {
    $result = $apiInstance->businessAgentGetWebsite($entity_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentGetWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **website_id** | **string**| Website resource ID. |

### Return type

[**\YCloud\Client\Model\WebsiteDTO**](../Model/WebsiteDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentListAllowlist()`

```php
businessAgentListAllowlist($entity_id): \YCloud\Client\Model\AgentAllowlistEntryDTO[]
```

List Allowlist

Lists allowlist entries that may receive agent replies when `ai_audience` is set to `ALLOWLISTED_ONLY`. Identity fields may be absent.

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
    $result = $apiInstance->businessAgentListAllowlist($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListAllowlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |

### Return type

[**\YCloud\Client\Model\AgentAllowlistEntryDTO[]**](../Model/AgentAllowlistEntryDTO.md)

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

## `businessAgentListFaqs()`

```php
businessAgentListFaqs($entity_id): \YCloud\Client\Model\FaqDTO[]
```

List Faqs

Lists all FAQ question-and-answer entries currently available to the agent as knowledge.

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
    $result = $apiInstance->businessAgentListFaqs($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListFaqs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |

### Return type

[**\YCloud\Client\Model\FaqDTO[]**](../Model/FaqDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentListWebsites()`

```php
businessAgentListWebsites($entity_id): \YCloud\Client\Model\WebsiteDTO[]
```

List Websites

Lists the website URLs configured for Meta to crawl and ingest into the agent knowledge base, including each crawl entry's current state.

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
    $result = $apiInstance->businessAgentListWebsites($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentListWebsites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |

### Return type

[**\YCloud\Client\Model\WebsiteDTO[]**](../Model/WebsiteDTO.md)

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

## `businessAgentSubmitAgentEvent()`

```php
businessAgentSubmitAgentEvent($entity_id, $public_submit_agent_event_request): \YCloud\Client\Model\AgentEventResultDTO
```

Submit Agent Event

Submits a business event for a consumer and enqueues it for asynchronous agent processing. The immediate response contains `status` and `agent_event_id` for later polling.

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
$public_submit_agent_event_request = new \YCloud\Client\Model\PublicSubmitAgentEventRequest(); // \YCloud\Client\Model\PublicSubmitAgentEventRequest

try {
    $result = $apiInstance->businessAgentSubmitAgentEvent($entity_id, $public_submit_agent_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentSubmitAgentEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| WhatsApp Business Phone Number ID that owns the Meta Business Agent. |
 **public_submit_agent_event_request** | [**\YCloud\Client\Model\PublicSubmitAgentEventRequest**](../Model/PublicSubmitAgentEventRequest.md)|  |

### Return type

[**\YCloud\Client\Model\AgentEventResultDTO**](../Model/AgentEventResultDTO.md)

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

## `businessAgentUpdateFaq()`

```php
businessAgentUpdateFaq($entity_id, $faq_id, $public_update_faq_request): \YCloud\Client\Model\FaqDTO
```

Update Faq

Send both `question` and `answer` to update the FAQ. You can also include `metadata`. The response may contain a new `id`. Use the returned ID for subsequent reads, updates, and deletes. If the ID changes, `created_at` resets to the update time. A timeout or HTTP `502` response does not necessarily mean that the update failed. Do not automatically retry the update or create a replacement FAQ.

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
$faq_id = 'faq_id_example'; // string | FAQ resource ID.
$public_update_faq_request = new \YCloud\Client\Model\PublicUpdateFaqRequest(); // \YCloud\Client\Model\PublicUpdateFaqRequest

try {
    $result = $apiInstance->businessAgentUpdateFaq($entity_id, $faq_id, $public_update_faq_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpdateFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **faq_id** | **string**| FAQ resource ID. |
 **public_update_faq_request** | [**\YCloud\Client\Model\PublicUpdateFaqRequest**](../Model/PublicUpdateFaqRequest.md)|  |

### Return type

[**\YCloud\Client\Model\FaqDTO**](../Model/FaqDTO.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessAgentUpdateWebsite()`

```php
businessAgentUpdateWebsite($entity_id, $website_id, $public_update_website_request): \YCloud\Client\Model\WebsiteDTO
```

Update Website

Updates the URL and optional crawl scope of the website identified by `websiteId`. The response may contain a new `id`. Use the returned ID for subsequent reads, updates, and deletes. Do not automatically retry an update whose outcome is uncertain.

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
$website_id = 'website_id_example'; // string | Website resource ID.
$public_update_website_request = new \YCloud\Client\Model\PublicUpdateWebsiteRequest(); // \YCloud\Client\Model\PublicUpdateWebsiteRequest

try {
    $result = $apiInstance->businessAgentUpdateWebsite($entity_id, $website_id, $public_update_website_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaBusinessAgentApi->businessAgentUpdateWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| Endpoint-specific Meta Business Agent entity ID. Budget and Conversation Turns operations use the tenant-owned WhatsApp Business Phone Number ID. |
 **website_id** | **string**| Website resource ID. |
 **public_update_website_request** | [**\YCloud\Client\Model\PublicUpdateWebsiteRequest**](../Model/PublicUpdateWebsiteRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WebsiteDTO**](../Model/WebsiteDTO.md)

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
