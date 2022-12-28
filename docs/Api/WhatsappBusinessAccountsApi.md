# YCloud\Client\WhatsappBusinessAccountsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**list()**](WhatsappBusinessAccountsApi.md#list) | **GET** /whatsapp/businessAccounts | List WABAs
[**retrieve()**](WhatsappBusinessAccountsApi.md#retrieve) | **GET** /whatsapp/businessAccounts/{id} | Retrieve a WABA


## `list()`

```php
list($page, $limit, $include_total, $filter_account_review_status): \YCloud\Client\Model\WhatsappBusinessAccountPage
```

List WABAs

Returns a paginated list of WhatsApp business accounts you've registered on YCloud.

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

Retrieves a WABA you've registered on YCloud.

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
