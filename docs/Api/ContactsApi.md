# YCloud\Client\ContactsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](ContactsApi.md#create) | **POST** /contact/contacts | Create a contact
[**delete()**](ContactsApi.md#delete) | **DELETE** /contact/contacts/{id} | Delete a contact
[**list()**](ContactsApi.md#list) | **GET** /contact/contacts | List contacts
[**retrieve()**](ContactsApi.md#retrieve) | **GET** /contact/contacts/{id} | Retrieve a contact
[**update()**](ContactsApi.md#update) | **PATCH** /contact/contacts/{id} | Update a contact


## `create()`

```php
create($contact_create_request): \YCloud\Client\Model\Contact
```

Create a contact

Creates a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_create_request = new \YCloud\Client\Model\ContactCreateRequest(); // \YCloud\Client\Model\ContactCreateRequest

try {
    $result = $apiInstance->create($contact_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_create_request** | [**\YCloud\Client\Model\ContactCreateRequest**](../Model/ContactCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\Contact**](../Model/Contact.md)

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
delete($id): \YCloud\Client\Model\Contact
```

Delete a contact

Deletes a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1693364594105000026; // string | ID of the contact.

try {
    $result = $apiInstance->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the contact. |

### Return type

[**\YCloud\Client\Model\Contact**](../Model/Contact.md)

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
list($page, $limit, $include_total, $filter_tags, $filter_country_code, $filter_phone_number, $filter_email): \YCloud\Client\Model\ContactPage
```

List contacts

Returns a paginated list of contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['filter_tags'] = tag1,tag2; // string | Comma-separated list of tags.
$associate_array['filter_country_code'] = GB; // string | Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
$associate_array['filter_phone_number'] = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$associate_array['filter_email'] = support@example.com; // string | The contact's email address.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **filter_tags** | **string**| Comma-separated list of tags. | [optional]
 **filter_country_code** | **string**| Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
 **filter_phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
 **filter_email** | **string**| The contact&#39;s email address. | [optional]

### Return type

[**\YCloud\Client\Model\ContactPage**](../Model/ContactPage.md)

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
retrieve($id): \YCloud\Client\Model\Contact
```

Retrieve a contact

Retrieves a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1693364594105000026; // string | ID of the contact.

try {
    $result = $apiInstance->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the contact. |

### Return type

[**\YCloud\Client\Model\Contact**](../Model/Contact.md)

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
update($id, $contact_update_request): \YCloud\Client\Model\Contact
```

Update a contact

Updates a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1693364594105000026; // string | ID of the contact.
$contact_update_request = new \YCloud\Client\Model\ContactUpdateRequest(); // \YCloud\Client\Model\ContactUpdateRequest

try {
    $result = $apiInstance->update($id, $contact_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the contact. |
 **contact_update_request** | [**\YCloud\Client\Model\ContactUpdateRequest**](../Model/ContactUpdateRequest.md)|  | [optional]

### Return type

[**\YCloud\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
