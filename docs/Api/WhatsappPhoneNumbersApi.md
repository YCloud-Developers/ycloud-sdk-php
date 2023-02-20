# YCloud\Client\WhatsappPhoneNumbersApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**list()**](WhatsappPhoneNumbersApi.md#list) | **GET** /whatsapp/phoneNumbers | List WhatsApp phone numbers
[**retrieve()**](WhatsappPhoneNumbersApi.md#retrieve) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber} | Retrieve a WhatsApp phone number
[**retrieveProfile()**](WhatsappPhoneNumbersApi.md#retrieveProfile) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Retrieve a WhatsApp phone number profile
[**updateProfile()**](WhatsappPhoneNumbersApi.md#updateProfile) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Update a WhatsApp phone number profile


## `list()`

```php
list($page, $limit, $include_total, $filter_waba_id): \YCloud\Client\Model\WhatsappPhoneNumberPage
```

List WhatsApp phone numbers

Returns a paginated list of WhatsApp business account phone numbers you've registered on YCloud.

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

## `retrieve()`

```php
retrieve($waba_id, $phone_number): \YCloud\Client\Model\WhatsappPhoneNumber
```

Retrieve a WhatsApp phone number

Retrieves a WhatsApp business account phone number you've registered on YCloud.

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

## `retrieveProfile()`

```php
retrieveProfile($waba_id, $phone_number): \YCloud\Client\Model\WhatsappPhoneNumberProfile
```

Retrieve a WhatsApp phone number profile

Retrieves a WhatsApp business account phone number's profile. Customers can view your business profile by clicking your business's name or number in a conversation thread.

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

## `updateProfile()`

```php
updateProfile($waba_id, $phone_number, $whatsapp_phone_number_profile_update_request): \YCloud\Client\Model\WhatsappPhoneNumberProfile
```

Update a WhatsApp phone number profile

Updates a WhatsApp phone number profile.

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
