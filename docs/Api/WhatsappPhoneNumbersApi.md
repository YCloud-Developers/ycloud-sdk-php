# YCloud\Client\WhatsappPhoneNumbersApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**list()**](WhatsappPhoneNumbersApi.md#list) | **GET** /whatsapp/phoneNumbers | List phone numbers
[**register()**](WhatsappPhoneNumbersApi.md#register) | **POST** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/register | Register a phone number
[**retrieve()**](WhatsappPhoneNumbersApi.md#retrieve) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber} | Retrieve a phone number
[**retrieveCommerceSettings()**](WhatsappPhoneNumbersApi.md#retrieveCommerceSettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Retrieve commerce settings
[**retrieveProfile()**](WhatsappPhoneNumbersApi.md#retrieveProfile) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Retrieve a phone number profile
[**updateCommerceSettings()**](WhatsappPhoneNumbersApi.md#updateCommerceSettings) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Update commerce settings
[**updateProfile()**](WhatsappPhoneNumbersApi.md#updateProfile) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Update a phone number profile


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
$associate_array['filter_waba_id'] = whatsapp-business-account-id; // string | WhatsApp Business Account ID.

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
 **filter_waba_id** | **string**| WhatsApp Business Account ID. | [optional]

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
$phone_number = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

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
$phone_number = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

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
$phone_number = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.

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
$phone_number = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
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
$phone_number = +447901614024; // string | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
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
