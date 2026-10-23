# YCloud\Client\WhatsappPhoneNumbersApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBusinessUsername()**](WhatsappPhoneNumbersApi.md#deleteBusinessUsername) | **DELETE** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Delete a phone number business username
[**deleteContactBookEntry()**](WhatsappPhoneNumbersApi.md#deleteContactBookEntry) | **DELETE** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/contactBook/{bsuid} | Delete a Meta contact book entry
[**list()**](WhatsappPhoneNumbersApi.md#list) | **GET** /whatsapp/phoneNumbers | List phone numbers
[**register()**](WhatsappPhoneNumbersApi.md#register) | **POST** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/register | Register a phone number
[**retrieve()**](WhatsappPhoneNumbersApi.md#retrieve) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber} | Retrieve a phone number
[**retrieveBusinessUsername()**](WhatsappPhoneNumbersApi.md#retrieveBusinessUsername) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Retrieve a phone number business username
[**retrieveBusinessUsernameSuggestions()**](WhatsappPhoneNumbersApi.md#retrieveBusinessUsernameSuggestions) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername/suggestions | Retrieve phone number business username suggestions
[**retrieveCommerceSettings()**](WhatsappPhoneNumbersApi.md#retrieveCommerceSettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Retrieve commerce settings
[**retrieveProfile()**](WhatsappPhoneNumbersApi.md#retrieveProfile) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Retrieve a phone number profile
[**retrieveSettings()**](WhatsappPhoneNumbersApi.md#retrieveSettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/settings | Retrieve phone number settings
[**saveSettings()**](WhatsappPhoneNumbersApi.md#saveSettings) | **POST** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/settings | Save phone number settings
[**updateBusinessUsername()**](WhatsappPhoneNumbersApi.md#updateBusinessUsername) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Update a phone number business username
[**updateCommerceSettings()**](WhatsappPhoneNumbersApi.md#updateCommerceSettings) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Update commerce settings
[**updateDisplayName()**](WhatsappPhoneNumbersApi.md#updateDisplayName) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/displayName | Update a phone number display name
[**updateProfile()**](WhatsappPhoneNumbersApi.md#updateProfile) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Update a phone number profile


## `deleteBusinessUsername()`

```php
deleteBusinessUsername($waba_id, $phone_number): \YCloud\Client\Model\WhatsappBusinessUsernameDeleteResult
```

Delete a phone number business username

Deletes the active Business Username for a WhatsApp business phone number. This operation removes the currently active Business Username. It does not cancel or remove a reserved Business Username request. If a reserved request still exists after deletion, the returned `businessUsernameStatus` remains `reserved`; otherwise it becomes `not_set`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->deleteBusinessUsername($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->deleteBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappBusinessUsernameDeleteResult**](../Model/WhatsappBusinessUsernameDeleteResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactBookEntry()`

```php
deleteContactBookEntry($waba_id, $phone_number, $bsuid): \YCloud\Client\Model\WhatsappContactBookEntryDeleteResult
```

Delete a Meta contact book entry

Deletes the Meta contact book entry that associates a WhatsApp business phone number with a customer's WhatsApp Business-scoped user ID (BSUID).  Only standard BSUIDs such as `US.11815799212886844830` are supported. Parent BSUIDs such as `US.ENT.11815799212886844830` are not supported. The BSUID must be scoped to the same Meta business portfolio as the phone number. The specified WABA must belong to the authenticated YCloud account and be available, and the phone number must be bound to that WABA in YCloud. Use the YCloud account API key in the `X-API-Key` header. Developer App API keys are not supported and return HTTP 403.  An HTTP 200 response always has `success=true`. `deleted=true` means Meta reports that it deleted a matching contact book entry. `deleted=false` means Meta processed the request but found no matching entry to delete. This operation does not delete or modify YCloud Contact, message, or BSUID business records, and it does not bypass Meta's 30-day caching behavior. A later WhatsApp interaction between the same business phone number and customer may cause Meta to create the entry again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format, bound to the specified WABA in YCloud. When constructing the path manually, URL-encode the leading `+` as `%2B`.
$bsuid = US.11815799212886844830; // string | Standard WhatsApp Business-scoped user ID (BSUID) from the same Meta business portfolio as the phone number. Parent BSUIDs containing `.ENT.` are not supported.

try {
    $result = $apiInstance->deleteContactBookEntry($waba_id, $phone_number, $bsuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->deleteContactBookEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format, bound to the specified WABA in YCloud. When constructing the path manually, URL-encode the leading &#x60;+&#x60; as &#x60;%2B&#x60;. |
 **bsuid** | **string**| Standard WhatsApp Business-scoped user ID (BSUID) from the same Meta business portfolio as the phone number. Parent BSUIDs containing &#x60;.ENT.&#x60; are not supported. |

### Return type

[**\YCloud\Client\Model\WhatsappContactBookEntryDeleteResult**](../Model/WhatsappContactBookEntryDeleteResult.md)

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
list($page, $limit, $include_total, $filter_waba_id): \YCloud\Client\Model\WhatsappPhoneNumberPage
```

List phone numbers

Returns a paginated list of WhatsApp business phone numbers you've registered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number of the results to be returned, 1-based.
$associate_array['limit'] = 10; // int | A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10.
$associate_array['include_total'] = false; // bool | Return results inside an object that contains the total result count or not.
$associate_array['filter_waba_id'] = whatsapp-business-account-id; // string | **Required if you have more than 100 WABAs.** WhatsApp Business Account ID.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number of the results to be returned, 1-based. | [optional] [default to 1]
 **limit** | **int**| A limit on the number of results to be returned, or number of results per page, between 1 and 100, defaults to 10. | [optional] [default to 10]
 **include_total** | **bool**| Return results inside an object that contains the total result count or not. | [optional] [default to false]
 **filter_waba_id** | **string**| **Required if you have more than 100 WABAs.** WhatsApp Business Account ID. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumberPage**](../Model/WhatsappPhoneNumberPage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($waba_id, $phone_number): \YCloud\Client\Model\WhatsappPhoneNumber
```

Register a phone number

Registers a WhatsApp business phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = 1234567890123456; // string | Phone number ID.

try {
    $result = $apiInstance->register($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number ID. |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumber**](../Model/WhatsappPhoneNumber.md)

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
retrieve($waba_id, $phone_number): \YCloud\Client\Model\WhatsappPhoneNumber
```

Retrieve a phone number

Retrieves a WhatsApp business phone number you've registered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->retrieve($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumber**](../Model/WhatsappPhoneNumber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBusinessUsername()`

```php
retrieveBusinessUsername($waba_id, $phone_number): \YCloud\Client\Model\WhatsappBusinessUsername
```

Retrieve a phone number business username

Retrieves the Business Username state for a WhatsApp business phone number. The response reflects YCloud's latest known phone number state. If the phone number has no locally stored Business Username state, YCloud may sync the current username state from Meta before returning the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->retrieveBusinessUsername($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieveBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappBusinessUsername**](../Model/WhatsappBusinessUsername.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBusinessUsernameSuggestions()`

```php
retrieveBusinessUsernameSuggestions($waba_id, $phone_number): \YCloud\Client\Model\WhatsappBusinessUsernameSuggestions
```

Retrieve phone number business username suggestions

Retrieves reserved Business Username suggestions for a WhatsApp business phone number. The response flattens Meta username suggestions into a string array. If no suggestions are available, `data` is an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->retrieveBusinessUsernameSuggestions($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieveBusinessUsernameSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappBusinessUsernameSuggestions**](../Model/WhatsappBusinessUsernameSuggestions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveCommerceSettings()`

```php
retrieveCommerceSettings($waba_id, $phone_number): \YCloud\Client\Model\WhatsappCommerceSettings
```

Retrieve commerce settings

Retrieves a WhatsApp business phone number's commerce settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->retrieveCommerceSettings($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieveCommerceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappCommerceSettings**](../Model/WhatsappCommerceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveProfile()`

```php
retrieveProfile($waba_id, $phone_number): \YCloud\Client\Model\WhatsappPhoneNumberProfile
```

Retrieve a phone number profile

Retrieves a WhatsApp business phone number's profile. Customers can view your business profile by clicking your business's name or number in a conversation thread.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

try {
    $result = $apiInstance->retrieveProfile($waba_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieveProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumberProfile**](../Model/WhatsappPhoneNumberProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSettings()`

```php
retrieveSettings($waba_id, $phone_number, $type): \YCloud\Client\Model\WhatsappPhoneNumberSettings
```

Retrieve phone number settings

Retrieves phone number specific settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +6283138205170; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$type = 'type_example'; // string | Set to `capture` to retrieve only Calling recording and transcription capture settings. Omit it or set it to `calling` to retrieve the existing Calling settings response.

try {
    $result = $apiInstance->retrieveSettings($waba_id, $phone_number, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->retrieveSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **type** | **string**| Set to &#x60;capture&#x60; to retrieve only Calling recording and transcription capture settings. Omit it or set it to &#x60;calling&#x60; to retrieve the existing Calling settings response. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumberSettings**](../Model/WhatsappPhoneNumberSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveSettings()`

```php
saveSettings($waba_id, $phone_number, $whatsapp_phone_number_settings): \YCloud\Client\Model\WhatsappPhoneNumberSettings
```

Save phone number settings

Saves phone number specific settings. Send `calling`, `capture`, or both. When both are supplied, the service independently attempts both saves after shared authorization and phone-number validation. A failure in either branch does not prevent the other branch from being attempted. If either branch fails, the existing error response is returned and the other setting may already have been saved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +6283138205150; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_phone_number_settings = {"calling":{"status":"ENABLED","iconVisibility":"DEFAULT"}}; // \YCloud\Client\Model\WhatsappPhoneNumberSettings | Phone number settings to save.

try {
    $result = $apiInstance->saveSettings($waba_id, $phone_number, $whatsapp_phone_number_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->saveSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_phone_number_settings** | [**\YCloud\Client\Model\WhatsappPhoneNumberSettings**](../Model/WhatsappPhoneNumberSettings.md)| Phone number settings to save. |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumberSettings**](../Model/WhatsappPhoneNumberSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessUsername()`

```php
updateBusinessUsername($waba_id, $phone_number, $whatsapp_business_username_update_request): \YCloud\Client\Model\WhatsappBusinessUsername
```

Update a phone number business username

Requests a Business Username update for a WhatsApp business phone number. The requested username may require Meta review before it becomes active. If Meta accepts or reserves the request for review, the response status is usually `reserved`; `pending_review` is kept only as a legacy compatibility value. If Meta returns an error, YCloud returns the error and does not change the stored Business Username state.  The `username` value is a plain username without `@`. YCloud trims leading and trailing whitespace and normalizes the value to lowercase before validation and submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_business_username_update_request = new \YCloud\Client\Model\WhatsappBusinessUsernameUpdateRequest(); // \YCloud\Client\Model\WhatsappBusinessUsernameUpdateRequest

try {
    $result = $apiInstance->updateBusinessUsername($waba_id, $phone_number, $whatsapp_business_username_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->updateBusinessUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_business_username_update_request** | [**\YCloud\Client\Model\WhatsappBusinessUsernameUpdateRequest**](../Model/WhatsappBusinessUsernameUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappBusinessUsername**](../Model/WhatsappBusinessUsername.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommerceSettings()`

```php
updateCommerceSettings($waba_id, $phone_number, $whatsapp_commerce_settings_update_request): \YCloud\Client\Model\WhatsappCommerceSettings
```

Update commerce settings

Updates a WhatsApp business phone number's commerce settings. Use this endpoint to enable or disable the shopping cart or the product catalog for a specific business phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_commerce_settings_update_request = new \YCloud\Client\Model\WhatsappCommerceSettingsUpdateRequest(); // \YCloud\Client\Model\WhatsappCommerceSettingsUpdateRequest

try {
    $result = $apiInstance->updateCommerceSettings($waba_id, $phone_number, $whatsapp_commerce_settings_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->updateCommerceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_commerce_settings_update_request** | [**\YCloud\Client\Model\WhatsappCommerceSettingsUpdateRequest**](../Model/WhatsappCommerceSettingsUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappCommerceSettings**](../Model/WhatsappCommerceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDisplayName()`

```php
updateDisplayName($waba_id, $phone_number, $whatsapp_phone_name_update_request): \YCloud\Client\Model\WhatsappPhoneNameUpdateResponse
```

Update a phone number display name

Updates a WhatsApp business phone number display name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_phone_name_update_request = new \YCloud\Client\Model\WhatsappPhoneNameUpdateRequest(); // \YCloud\Client\Model\WhatsappPhoneNameUpdateRequest

try {
    $result = $apiInstance->updateDisplayName($waba_id, $phone_number, $whatsapp_phone_name_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->updateDisplayName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_phone_name_update_request** | [**\YCloud\Client\Model\WhatsappPhoneNameUpdateRequest**](../Model/WhatsappPhoneNameUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNameUpdateResponse**](../Model/WhatsappPhoneNameUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($waba_id, $phone_number, $whatsapp_phone_number_profile_update_request): \YCloud\Client\Model\WhatsappPhoneNumberProfile
```

Update a phone number profile

Updates a WhatsApp business phone number profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappPhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waba_id = whatsapp-business-account-id; // string | WhatsApp Business Account ID.
$phone_number = +16315551111; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_phone_number_profile_update_request = new \YCloud\Client\Model\WhatsappPhoneNumberProfileUpdateRequest(); // \YCloud\Client\Model\WhatsappPhoneNumberProfileUpdateRequest

try {
    $result = $apiInstance->updateProfile($waba_id, $phone_number, $whatsapp_phone_number_profile_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappPhoneNumbersApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waba_id** | **string**| WhatsApp Business Account ID. |
 **phone_number** | **string**| Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_phone_number_profile_update_request** | [**\YCloud\Client\Model\WhatsappPhoneNumberProfileUpdateRequest**](../Model/WhatsappPhoneNumberProfileUpdateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappPhoneNumberProfile**](../Model/WhatsappPhoneNumberProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
