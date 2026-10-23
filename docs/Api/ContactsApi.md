# YCloud\Client\ContactsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributesList()**](ContactsApi.md#attributesList) | **GET** /contact/contacts/attributes | List contact attributes
[**create()**](ContactsApi.md#create) | **POST** /contact/contacts | Create a contact
[**delete()**](ContactsApi.md#delete) | **DELETE** /contact/contacts/{id} | Delete a contact
[**list()**](ContactsApi.md#list) | **GET** /contact/contacts | List contacts
[**noteCreate()**](ContactsApi.md#noteCreate) | **POST** /contact/contacts/{contactIdentifier}/notes | Create a contact note
[**noteDelete()**](ContactsApi.md#noteDelete) | **DELETE** /contact/notes/{noteId} | Delete a contact note
[**noteUpdate()**](ContactsApi.md#noteUpdate) | **PATCH** /contact/notes/{noteId} | Update a contact note
[**notesList()**](ContactsApi.md#notesList) | **GET** /contact/contacts/{contactIdentifier}/notes | List contact notes
[**retrieve()**](ContactsApi.md#retrieve) | **GET** /contact/contacts/{id} | Retrieve a contact
[**update()**](ContactsApi.md#update) | **PATCH** /contact/contacts/{id} | Update a contact


## `attributesList()`

```php
attributesList(): \YCloud\Client\Model\ContactAttribute[]
```

List contact attributes

Returns a list of all available contact attributes and their configurations.

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

try {
    $result = $apiInstance->attributesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->attributesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\YCloud\Client\Model\ContactAttribute[]**](../Model/ContactAttribute.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
$id = alice_01; // string | Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with `+` (for example, `+16315551111`), or a Meta username without the leading `@`. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID.

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
 **id** | **string**| Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with &#x60;+&#x60; (for example, &#x60;+16315551111&#x60;), or a Meta username without the leading &#x60;@&#x60;. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID. |

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
list($page, $limit, $include_total, $page_after, $filter_tags, $filter_country_code, $filter_phone_number, $filter_email): \YCloud\Client\Model\ContactPage
```

List contacts

Returns a paginated list of contacts.  Omit `pageAfter` to use the existing page-based pagination. To use forward cursor pagination, set `pageAfter=0` for the first page, then pass the exact `cursor.after` value returned by the previous response. Cursor results are ordered by contact ID in ascending order.  Do not combine `pageAfter` with `page`, `pageBefore`, `offset`, or `sort`. Keep all filters unchanged while following a cursor. Concurrent contact inserts, deletions, or filter-field updates use weak consistency; restart a full traversal with `pageAfter=0` when a fresh snapshot is required.

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
$associate_array['page_after'] = 0; // string | Contact ID cursor for forward pagination. Use `0` to start a new cursor traversal. For each subsequent page, pass the exact `cursor.after` value from the previous response. The value must be a non-negative decimal integer in the signed 64-bit range (`0` through `9223372036854775807`). It cannot be combined with `page`, `pageBefore`, `offset`, or `sort`.
$associate_array['filter_tags'] = tag1,tag2; // string | Comma-separated list of tag names. If any tag does not exist, the request fails with a parameter error.
$associate_array['filter_country_code'] = US; // string | Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
$associate_array['filter_phone_number'] = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
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
 **page_after** | **string**| Contact ID cursor for forward pagination. Use &#x60;0&#x60; to start a new cursor traversal. For each subsequent page, pass the exact &#x60;cursor.after&#x60; value from the previous response. The value must be a non-negative decimal integer in the signed 64-bit range (&#x60;0&#x60; through &#x60;9223372036854775807&#x60;). It cannot be combined with &#x60;page&#x60;, &#x60;pageBefore&#x60;, &#x60;offset&#x60;, or &#x60;sort&#x60;. | [optional]
 **filter_tags** | **string**| Comma-separated list of tag names. If any tag does not exist, the request fails with a parameter error. | [optional]
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

## `noteCreate()`

```php
noteCreate($contact_identifier, $contact_note_write_request): \YCloud\Client\Model\ContactNote
```

Create a contact note

Creates one note for the contact and returns the created note. Leading and trailing whitespace is removed before storage. This operation does not use a client idempotency key; repeating the request creates another note with a different ID.

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
$contact_identifier = alice_01; // string | Identifier of the contact that owns the note. Supports a contact ID, a username without the leading `@`, or a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with `+`. Usernames contain 3 to 35 letters, digits, periods, or underscores. A numeric value is resolved as a username first and then as a contact ID when no matching username exists.
$contact_note_write_request = new \YCloud\Client\Model\ContactNoteWriteRequest(); // \YCloud\Client\Model\ContactNoteWriteRequest

try {
    $result = $apiInstance->noteCreate($contact_identifier, $contact_note_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->noteCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_identifier** | **string**| Identifier of the contact that owns the note. Supports a contact ID, a username without the leading &#x60;@&#x60;, or a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with &#x60;+&#x60;. Usernames contain 3 to 35 letters, digits, periods, or underscores. A numeric value is resolved as a username first and then as a contact ID when no matching username exists. |
 **contact_note_write_request** | [**\YCloud\Client\Model\ContactNoteWriteRequest**](../Model/ContactNoteWriteRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteDelete()`

```php
noteDelete($note_id): \YCloud\Client\Model\ContactNote
```

Delete a contact note

Deletes one note in the current tenant by note ID and returns its snapshot before deletion. Deleting the same note again returns `404`; the operation does not use a client idempotency key.

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
$note_id = 6a3de646e18f344f743aaa4d; // string | The 24-character ObjectId of the contact note.

try {
    $result = $apiInstance->noteDelete($note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->noteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | **string**| The 24-character ObjectId of the contact note. |

### Return type

[**\YCloud\Client\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `noteUpdate()`

```php
noteUpdate($note_id, $contact_note_write_request): \YCloud\Client\Model\ContactNote
```

Update a contact note

Updates one note in the current tenant by note ID and returns the updated note. Repeating the same request leaves the stored content unchanged, but an accepted update may still produce another `contact.note.updated` event.

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
$note_id = 6a3de646e18f344f743aaa4d; // string | The 24-character ObjectId of the contact note.
$contact_note_write_request = new \YCloud\Client\Model\ContactNoteWriteRequest(); // \YCloud\Client\Model\ContactNoteWriteRequest

try {
    $result = $apiInstance->noteUpdate($note_id, $contact_note_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->noteUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | **string**| The 24-character ObjectId of the contact note. |
 **contact_note_write_request** | [**\YCloud\Client\Model\ContactNoteWriteRequest**](../Model/ContactNoteWriteRequest.md)|  |

### Return type

[**\YCloud\Client\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notesList()`

```php
notesList($contact_identifier): \YCloud\Client\Model\ContactNote[]
```

List contact notes

Returns all notes for a contact, ordered by creation time descending. The `{contactIdentifier}` path parameter supports a contact ID, a phone number in E.164 format starting with `+`, or a Meta username without the leading `@`. Ambiguous numeric values are resolved as Meta usernames first and fall back to contact IDs only when no matching Meta username exists. Contact retrieve, list, and search responses do not include notes; use this endpoint to read contact notes.

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
$contact_identifier = alice_01; // string | Identifier of the contact that owns the note. Supports a contact ID, a username without the leading `@`, or a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with `+`. Usernames contain 3 to 35 letters, digits, periods, or underscores. A numeric value is resolved as a username first and then as a contact ID when no matching username exists.

try {
    $result = $apiInstance->notesList($contact_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->notesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_identifier** | **string**| Identifier of the contact that owns the note. Supports a contact ID, a username without the leading &#x60;@&#x60;, or a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with &#x60;+&#x60;. Usernames contain 3 to 35 letters, digits, periods, or underscores. A numeric value is resolved as a username first and then as a contact ID when no matching username exists. |

### Return type

[**\YCloud\Client\Model\ContactNote[]**](../Model/ContactNote.md)

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
$id = alice_01; // string | Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with `+` (for example, `+16315551111`), or a Meta username without the leading `@`. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID.

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
 **id** | **string**| Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with &#x60;+&#x60; (for example, &#x60;+16315551111&#x60;), or a Meta username without the leading &#x60;@&#x60;. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID. |

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

Updates a contact. If every supplied persisted contact field already has the requested value, the contact is not updated and no `contact.attributes_changed` event is emitted. Note mutations in the same request are still applied.

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
$id = alice_01; // string | Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with `+` (for example, `+16315551111`), or a Meta username without the leading `@`. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID.
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
 **id** | **string**| Identifier of the contact. Supports a contact ID, a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format starting with &#x60;+&#x60; (for example, &#x60;+16315551111&#x60;), or a Meta username without the leading &#x60;@&#x60;. A Meta username must contain 3 to 35 letters, digits, periods, or underscores. If a numeric value can be interpreted as both a Meta username and a contact ID, it is resolved as a Meta username first. If no contact has that Meta username, the value is resolved as a contact ID. |
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
