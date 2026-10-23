# YCloud\Client\WhatsappBusinessAccountsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**list()**](WhatsappBusinessAccountsApi.md#list) | **GET** /whatsapp/businessAccounts | List WABAs
[**retrieve()**](WhatsappBusinessAccountsApi.md#retrieve) | **GET** /whatsapp/businessAccounts/{id} | Retrieve a WABA
[**retrieveAutomaticCreativeOptimizations()**](WhatsappBusinessAccountsApi.md#retrieveAutomaticCreativeOptimizations) | **GET** /whatsapp/businessAccounts/{wabaId}/automatic-creative-optimizations | Retrieve WABA automatic creative optimizations
[**updateAutomaticCreativeOptimizations()**](WhatsappBusinessAccountsApi.md#updateAutomaticCreativeOptimizations) | **PATCH** /whatsapp/businessAccounts/{wabaId}/automatic-creative-optimizations | Update WABA automatic creative optimizations


## `list()`

```php
list($page, $limit, $include_total, $filter_account_review_status): \YCloud\Client\Model\WhatsappBusinessAccountPage
```

List WABAs

Returns a paginated list of WhatsApp business accounts you've registered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappBusinessAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['filter_account_review_status'] = APPROVED; // string | WhatsApp Business Account review status.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappBusinessAccountsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **filter_account_review_status** | **string**| WhatsApp Business Account review status. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappBusinessAccountPage**](../Model/WhatsappBusinessAccountPage.md)

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
retrieve($id): \YCloud\Client\Model\WhatsappBusinessAccount
```

Retrieve a WABA

Retrieves a WABA you've registered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappBusinessAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.

try {
    $result = $apiInstance->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappBusinessAccountsApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| WhatsApp Business Account ID. |

### Return type

[**\YCloud\Client\Model\WhatsappBusinessAccount**](../Model/WhatsappBusinessAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAutomaticCreativeOptimizations()`

```php
retrieveAutomaticCreativeOptimizations($waba_id): \YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationRetrieveResponse
```

Retrieve WABA automatic creative optimizations

Retrieves current automatic creative optimization feature enrollment for a WhatsApp Business Account from Meta.  This endpoint does not persist feature enrollment locally. If Meta returns `degrees_of_freedom_spec.data[0].creative_features_spec[0]` as an object, its string fields are returned as `creativeOptimizationFeatures` without feature-key filtering, status-value validation, or case normalization. If Meta returns success without a valid `creative_features_spec[0]` object, `creativeOptimizationFeatures` is returned as an empty object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappBusinessAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.

try {
    $result = $apiInstance->retrieveAutomaticCreativeOptimizations($waba_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappBusinessAccountsApi->retrieveAutomaticCreativeOptimizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |

### Return type

[**\YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationRetrieveResponse**](../Model/WhatsappAutomaticCreativeOptimizationRetrieveResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomaticCreativeOptimizations()`

```php
updateAutomaticCreativeOptimizations($waba_id, $whatsapp_automatic_creative_optimization_update_request): \YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationUpdateResponse
```

Update WABA automatic creative optimizations

Partially updates automatic creative optimization feature enrollment for a WhatsApp Business Account.  Only submitted feature keys are updated. This endpoint does not persist feature enrollment locally and does not check whether the WABA has completed Meta MM Lite / ACO onboarding before forwarding the request to Meta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappBusinessAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$whatsapp_automatic_creative_optimization_update_request = new \YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationUpdateRequest(); // \YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationUpdateRequest

try {
    $result = $apiInstance->updateAutomaticCreativeOptimizations($waba_id, $whatsapp_automatic_creative_optimization_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappBusinessAccountsApi->updateAutomaticCreativeOptimizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **whatsapp_automatic_creative_optimization_update_request** | [**\YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationUpdateRequest**](../Model/WhatsappAutomaticCreativeOptimizationUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappAutomaticCreativeOptimizationUpdateResponse**](../Model/WhatsappAutomaticCreativeOptimizationUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
