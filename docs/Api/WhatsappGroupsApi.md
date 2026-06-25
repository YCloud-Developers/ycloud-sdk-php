# YCloud\Client\WhatsappGroupsApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveJoinRequests()**](WhatsappGroupsApi.md#approveJoinRequests) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests/approve | Approve group join requests
[**create()**](WhatsappGroupsApi.md#create) | **POST** /whatsapp/{businessPhoneNumber}/groups | Create a group
[**delete()**](WhatsappGroupsApi.md#delete) | **DELETE** /whatsapp/{businessPhoneNumber}/groups/{groupId} | Delete a group
[**list()**](WhatsappGroupsApi.md#list) | **GET** /whatsapp/{businessPhoneNumber}/groups | List groups
[**listJoinRequests()**](WhatsappGroupsApi.md#listJoinRequests) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests | List group join requests
[**rejectJoinRequests()**](WhatsappGroupsApi.md#rejectJoinRequests) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests/reject | Reject group join requests
[**removeParticipants()**](WhatsappGroupsApi.md#removeParticipants) | **POST** /whatsapp/groups/{groupId}/participants/remove | Remove group participants
[**resetInviteLink()**](WhatsappGroupsApi.md#resetInviteLink) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/inviteLink/reset | Reset a group invite link
[**retrieve()**](WhatsappGroupsApi.md#retrieve) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId} | Retrieve a group
[**retrieveInviteLink()**](WhatsappGroupsApi.md#retrieveInviteLink) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId}/inviteLink | Retrieve a group invite link
[**sendInviteLinkMessage()**](WhatsappGroupsApi.md#sendInviteLinkMessage) | **POST** /whatsapp/{businessPhoneNumber}/groups/inviteLink/messages | Send a group invite link message
[**updateSettings()**](WhatsappGroupsApi.md#updateSettings) | **PATCH** /whatsapp/{businessPhoneNumber}/groups/{groupId}/settings | Update group settings


## `approveJoinRequests()`

```php
approveJoinRequests($business_phone_number, $group_id, $whatsapp_group_join_request_action_request): \YCloud\Client\Model\WhatsappGroupJoinRequestActionResponse
```

Approve group join requests

Approves one or more pending join requests for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.
$whatsapp_group_join_request_action_request = new \YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest(); // \YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest

try {
    $result = $apiInstance->approveJoinRequests($business_phone_number, $group_id, $whatsapp_group_join_request_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->approveJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |
 **whatsapp_group_join_request_action_request** | [**\YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest**](../Model/WhatsappGroupJoinRequestActionRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappGroupJoinRequestActionResponse**](../Model/WhatsappGroupJoinRequestActionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($business_phone_number, $whatsapp_group_create_request): \YCloud\Client\Model\WhatsappGroupAsyncResponse
```

Create a group

Creates a WhatsApp group for the specified business phone number.  The request is processed asynchronously. Use webhooks to receive the final group lifecycle result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_group_create_request = new \YCloud\Client\Model\WhatsappGroupCreateRequest(); // \YCloud\Client\Model\WhatsappGroupCreateRequest

try {
    $result = $apiInstance->create($business_phone_number, $whatsapp_group_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_group_create_request** | [**\YCloud\Client\Model\WhatsappGroupCreateRequest**](../Model/WhatsappGroupCreateRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappGroupAsyncResponse**](../Model/WhatsappGroupAsyncResponse.md)

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
delete($business_phone_number, $group_id): \YCloud\Client\Model\WhatsappGroupAsyncResponse
```

Delete a group

Deletes a WhatsApp group.  The request is processed asynchronously. Use webhooks to receive the final group lifecycle result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.

try {
    $result = $apiInstance->delete($business_phone_number, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |

### Return type

[**\YCloud\Client\Model\WhatsappGroupAsyncResponse**](../Model/WhatsappGroupAsyncResponse.md)

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
list($business_phone_number, $limit, $before, $after): \YCloud\Client\Model\WhatsappGroupListResponse
```

List groups

Returns a cursor-paginated list of active WhatsApp groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['business_phone_number'] = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$associate_array['limit'] = 25; // int | A limit on the number of results to be returned, between 1 and 1024. Defaults to 25.
$associate_array['before'] = eyJvIjoiYmVmb3JlIn0; // string | A cursor to fetch the previous page.
$associate_array['after'] = eyJvIjoiYWZ0ZXIifQ; // string | A cursor to fetch the next page.

try {
    $result = $apiInstance->list($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->list: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **limit** | **int**| A limit on the number of results to be returned, between 1 and 1024. Defaults to 25. | [optional] [default to 25]
 **before** | **string**| A cursor to fetch the previous page. | [optional]
 **after** | **string**| A cursor to fetch the next page. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappGroupListResponse**](../Model/WhatsappGroupListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listJoinRequests()`

```php
listJoinRequests($business_phone_number, $group_id, $limit, $before, $after): \YCloud\Client\Model\WhatsappGroupJoinRequestListResponse
```

List group join requests

Returns a cursor-paginated list of pending join requests for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['business_phone_number'] = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$associate_array['group_id'] = 120363345678901234@g.us; // string | WhatsApp group ID.
$associate_array['limit'] = 25; // int | A limit on the number of results to be returned, between 1 and 1024. Defaults to 25.
$associate_array['before'] = eyJvIjoiYmVmb3JlIn0; // string | A cursor to fetch the previous page.
$associate_array['after'] = eyJvIjoiYWZ0ZXIifQ; // string | A cursor to fetch the next page.

try {
    $result = $apiInstance->listJoinRequests($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->listJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |
 **limit** | **int**| A limit on the number of results to be returned, between 1 and 1024. Defaults to 25. | [optional] [default to 25]
 **before** | **string**| A cursor to fetch the previous page. | [optional]
 **after** | **string**| A cursor to fetch the next page. | [optional]

### Return type

[**\YCloud\Client\Model\WhatsappGroupJoinRequestListResponse**](../Model/WhatsappGroupJoinRequestListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectJoinRequests()`

```php
rejectJoinRequests($business_phone_number, $group_id, $whatsapp_group_join_request_action_request): \YCloud\Client\Model\WhatsappGroupJoinRequestActionResponse
```

Reject group join requests

Rejects one or more pending join requests for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.
$whatsapp_group_join_request_action_request = new \YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest(); // \YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest

try {
    $result = $apiInstance->rejectJoinRequests($business_phone_number, $group_id, $whatsapp_group_join_request_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->rejectJoinRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |
 **whatsapp_group_join_request_action_request** | [**\YCloud\Client\Model\WhatsappGroupJoinRequestActionRequest**](../Model/WhatsappGroupJoinRequestActionRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappGroupJoinRequestActionResponse**](../Model/WhatsappGroupJoinRequestActionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeParticipants()`

```php
removeParticipants($group_id, $whatsapp_group_remove_participants_request): \YCloud\Client\Model\WhatsappGroupAsyncResponse
```

Remove group participants

Removes one or more participants from a WhatsApp group.  The request is processed asynchronously. Use webhooks to receive the final participants update result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.
$whatsapp_group_remove_participants_request = new \YCloud\Client\Model\WhatsappGroupRemoveParticipantsRequest(); // \YCloud\Client\Model\WhatsappGroupRemoveParticipantsRequest

try {
    $result = $apiInstance->removeParticipants($group_id, $whatsapp_group_remove_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->removeParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| WhatsApp group ID. |
 **whatsapp_group_remove_participants_request** | [**\YCloud\Client\Model\WhatsappGroupRemoveParticipantsRequest**](../Model/WhatsappGroupRemoveParticipantsRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappGroupAsyncResponse**](../Model/WhatsappGroupAsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetInviteLink()`

```php
resetInviteLink($business_phone_number, $group_id): \YCloud\Client\Model\WhatsappGroupInviteLink
```

Reset a group invite link

Resets and returns the invite link for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.

try {
    $result = $apiInstance->resetInviteLink($business_phone_number, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->resetInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |

### Return type

[**\YCloud\Client\Model\WhatsappGroupInviteLink**](../Model/WhatsappGroupInviteLink.md)

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
retrieve($business_phone_number, $group_id): \YCloud\Client\Model\WhatsappGroup
```

Retrieve a group

Retrieves a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.

try {
    $result = $apiInstance->retrieve($business_phone_number, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |

### Return type

[**\YCloud\Client\Model\WhatsappGroup**](../Model/WhatsappGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveInviteLink()`

```php
retrieveInviteLink($business_phone_number, $group_id): \YCloud\Client\Model\WhatsappGroupInviteLink
```

Retrieve a group invite link

Retrieves the invite link for a WhatsApp group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.

try {
    $result = $apiInstance->retrieveInviteLink($business_phone_number, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->retrieveInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |

### Return type

[**\YCloud\Client\Model\WhatsappGroupInviteLink**](../Model/WhatsappGroupInviteLink.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInviteLinkMessage()`

```php
sendInviteLinkMessage($business_phone_number, $whatsapp_group_invite_link_message_request): \YCloud\Client\Model\WhatsappMessage
```

Send a group invite link message

Sends a WhatsApp template message that contains the group invite link parameter.  This sends a message to an individual WhatsApp user. It does not send a message into the group conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$whatsapp_group_invite_link_message_request = new \YCloud\Client\Model\WhatsappGroupInviteLinkMessageRequest(); // \YCloud\Client\Model\WhatsappGroupInviteLinkMessageRequest

try {
    $result = $apiInstance->sendInviteLinkMessage($business_phone_number, $whatsapp_group_invite_link_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->sendInviteLinkMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **whatsapp_group_invite_link_message_request** | [**\YCloud\Client\Model\WhatsappGroupInviteLinkMessageRequest**](../Model/WhatsappGroupInviteLinkMessageRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappMessage**](../Model/WhatsappMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSettings()`

```php
updateSettings($business_phone_number, $group_id, $whatsapp_group_update_settings_request): \YCloud\Client\Model\WhatsappGroupAsyncResponse
```

Update group settings

Updates a WhatsApp group's settings, such as subject or description.  The request is processed asynchronously. Use webhooks to receive the final settings update result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_phone_number = +16315551111; // string | The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
$group_id = 120363345678901234@g.us; // string | WhatsApp group ID.
$whatsapp_group_update_settings_request = new \YCloud\Client\Model\WhatsappGroupUpdateSettingsRequest(); // \YCloud\Client\Model\WhatsappGroupUpdateSettingsRequest

try {
    $result = $apiInstance->updateSettings($business_phone_number, $group_id, $whatsapp_group_update_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappGroupsApi->updateSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_phone_number** | **string**| The WhatsApp business phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
 **group_id** | **string**| WhatsApp group ID. |
 **whatsapp_group_update_settings_request** | [**\YCloud\Client\Model\WhatsappGroupUpdateSettingsRequest**](../Model/WhatsappGroupUpdateSettingsRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappGroupAsyncResponse**](../Model/WhatsappGroupAsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
