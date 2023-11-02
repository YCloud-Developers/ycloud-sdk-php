# YCloud\Client\WhatsappTemplatesApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](WhatsappTemplatesApi.md#create) | **POST** /whatsapp/templates | Create a WhatsApp template
[**deleteByName()**](WhatsappTemplatesApi.md#deleteByName) | **DELETE** /whatsapp/templates/{wabaId}/{name} | Delete WhatsApp templates by name
[**deleteByNameAndLanguage()**](WhatsappTemplatesApi.md#deleteByNameAndLanguage) | **DELETE** /whatsapp/templates/{wabaId}/{name}/{language} | Delete a WhatsApp template
[**editByNameAndLanguage()**](WhatsappTemplatesApi.md#editByNameAndLanguage) | **PATCH** /whatsapp/templates/{wabaId}/{name}/{language} | Edit a WhatsApp template
[**list()**](WhatsappTemplatesApi.md#list) | **GET** /whatsapp/templates | List WhatsApp templates
[**retrieveByNameAndLanguage()**](WhatsappTemplatesApi.md#retrieveByNameAndLanguage) | **GET** /whatsapp/templates/{wabaId}/{name}/{language} | Retrieve a WhatsApp template


## `create()`

```php
create($whatsapp_template_create_request): \YCloud\Client\Model\WhatsappTemplate
```

Create a WhatsApp template

Creates a WhatsApp template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_template_create_request = new \YCloud\Client\Model\WhatsappTemplateCreateRequest(); // \YCloud\Client\Model\WhatsappTemplateCreateRequest

try {
    $result = $apiInstance->create($whatsapp_template_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_template_create_request** | [**\YCloud\Client\Model\WhatsappTemplateCreateRequest**](../Model/WhatsappTemplateCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappTemplate**](../Model/WhatsappTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteByName()`

```php
deleteByName($waba_id, $name): \YCloud\Client\Model\WhatsappTemplate[]
```

Delete WhatsApp templates by name

Deletes WhatsApp templates by name. If that template name exists in multiple languages, all languages will be deleted. HTTP status `404` is returned if no templates are found for the specific name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$name = sample_whatsapp_template; // string | Name of the template.

try {
    $result = $apiInstance->deleteByName($waba_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->deleteByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **name** | **string**| Name of the template. |

### Return type

[**\YCloud\Client\Model\WhatsappTemplate[]**](../Model/WhatsappTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteByNameAndLanguage()`

```php
deleteByNameAndLanguage($waba_id, $name, $language): \YCloud\Client\Model\WhatsappTemplate
```

Delete a WhatsApp template

Deletes a WhatsApp template by name and language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$name = sample_whatsapp_template; // string | Name of the template.
$language = en_US; // string | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes.

try {
    $result = $apiInstance->deleteByNameAndLanguage($waba_id, $name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->deleteByNameAndLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **name** | **string**| Name of the template. |
 **language** | **string**| Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. |

### Return type

[**\YCloud\Client\Model\WhatsappTemplate**](../Model/WhatsappTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editByNameAndLanguage()`

```php
editByNameAndLanguage($waba_id, $name, $language, $whatsapp_template_edit_request): \YCloud\Client\Model\WhatsappTemplate
```

Edit a WhatsApp template

Edits a WhatsApp template by name and language. Editing a template replaces its old contents entirely, so include any components you wish to preserve as well as components you wish to update using the components parameter. See also [Edit a Message Template](https://developers.facebook.com/docs/whatsapp/business-management-api/message-templates#edit-a-message-template).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$name = sample_whatsapp_template; // string | Name of the template.
$language = en_US; // string | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes.
$whatsapp_template_edit_request = new \YCloud\Client\Model\WhatsappTemplateEditRequest(); // \YCloud\Client\Model\WhatsappTemplateEditRequest

try {
    $result = $apiInstance->editByNameAndLanguage($waba_id, $name, $language, $whatsapp_template_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->editByNameAndLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **name** | **string**| Name of the template. |
 **language** | **string**| Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. |
 **whatsapp_template_edit_request** | [**\YCloud\Client\Model\WhatsappTemplateEditRequest**](../Model/WhatsappTemplateEditRequest.md)|  | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappTemplate**](../Model/WhatsappTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `list()`

```php
list($page, $limit, $include_total, $filter_waba_id, $filter_name, $filter_language): \YCloud\Client\Model\WhatsappTemplatePage
```

List WhatsApp templates

Returns a paginated list of WhatsApp templates you've previously created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['filter_waba_id'] = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$associate_array['filter_name'] = sample_whatsapp_template; // string | Name of the template.
$associate_array['filter_language'] = en_US; // string | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **filter_waba_id** | **string**| WhatsApp Business Account ID. | [optional]
 **filter_name** | **string**| Name of the template. | [optional]
 **filter_language** | **string**| Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappTemplatePage**](../Model/WhatsappTemplatePage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveByNameAndLanguage()`

```php
retrieveByNameAndLanguage($waba_id, $name, $language): \YCloud\Client\Model\WhatsappTemplate
```

Retrieve a WhatsApp template

Retrieves a WhatsApp template by name and language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$name = sample_whatsapp_template; // string | Name of the template.
$language = en_US; // string | Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes.

try {
    $result = $apiInstance->retrieveByNameAndLanguage($waba_id, $name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappTemplatesApi->retrieveByNameAndLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **name** | **string**| Name of the template. |
 **language** | **string**| Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes. |

### Return type

[**\YCloud\Client\Model\WhatsappTemplate**](../Model/WhatsappTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
