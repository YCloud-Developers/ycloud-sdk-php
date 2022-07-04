# YCloud SDK for PHP

The [YCloud](https://ycloud.com) API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API is designed to have predictable, resource-oriented URLs, return [JSON](https://www.json.org) responses, and use standard HTTP response codes and verbs.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command in your project directory:

```shell
composer require ycloud/ycloud-sdk-php
```

Alternatively, add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ycloud-cpaas/ycloud-sdk-php.git"
    }
  ],
  "require": {
    "ycloud/ycloud-sdk-php": "*@dev"
  }
}
```

Then run `composer install`.

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->retrieve: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ycloud.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BalanceApi* | [**retrieve**](docs/Api/BalanceApi.md#retrieve) | **GET** /balance | Retrieve balance
*EmailsApi* | [**send**](docs/Api/EmailsApi.md#send) | **POST** /emails | Send an email
*SmsApi* | [**list**](docs/Api/SmsApi.md#list) | **GET** /sms | List SMS records
*SmsApi* | [**send**](docs/Api/SmsApi.md#send) | **POST** /sms | Send an SMS
*VoicesApi* | [**list**](docs/Api/VoicesApi.md#list) | **GET** /voices | List voice records
*VoicesApi* | [**send**](docs/Api/VoicesApi.md#send) | **POST** /voices | Send a voice code
*WebhookEndpointsApi* | [**create**](docs/Api/WebhookEndpointsApi.md#create) | **POST** /webhookEndpoints | Create a webhook endpoint
*WebhookEndpointsApi* | [**delete**](docs/Api/WebhookEndpointsApi.md#delete) | **DELETE** /webhookEndpoints/{id} | Delete a webhook endpoint
*WebhookEndpointsApi* | [**list**](docs/Api/WebhookEndpointsApi.md#list) | **GET** /webhookEndpoints | List webhook endpoints
*WebhookEndpointsApi* | [**retrieve**](docs/Api/WebhookEndpointsApi.md#retrieve) | **GET** /webhookEndpoints/{id} | Retrieve a webhook endpoint
*WebhookEndpointsApi* | [**rotateSecret**](docs/Api/WebhookEndpointsApi.md#rotatesecret) | **POST** /webhookEndpoints/{id}/rotateSecret | Rotate a webhook endpoint secret
*WebhookEndpointsApi* | [**update**](docs/Api/WebhookEndpointsApi.md#update) | **PATCH** /webhookEndpoints/{id} | Update a webhook endpoint

## Models

- [Balance](docs/Model/Balance.md)
- [Email](docs/Model/Email.md)
- [EmailContentType](docs/Model/EmailContentType.md)
- [EmailDelivery](docs/Model/EmailDelivery.md)
- [EmailSendRequest](docs/Model/EmailSendRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [EventType](docs/Model/EventType.md)
- [Mailbox](docs/Model/Mailbox.md)
- [Page](docs/Model/Page.md)
- [Sms](docs/Model/Sms.md)
- [SmsPage](docs/Model/SmsPage.md)
- [SmsSendRequest](docs/Model/SmsSendRequest.md)
- [Voice](docs/Model/Voice.md)
- [VoicePage](docs/Model/VoicePage.md)
- [VoiceSendRequest](docs/Model/VoiceSendRequest.md)
- [WebhookEndpoint](docs/Model/WebhookEndpoint.md)
- [WebhookEndpointCreateRequest](docs/Model/WebhookEndpointCreateRequest.md)
- [WebhookEndpointPage](docs/Model/WebhookEndpointPage.md)
- [WebhookEndpointStatus](docs/Model/WebhookEndpointStatus.md)
- [WebhookEndpointUpdateRequest](docs/Model/WebhookEndpointUpdateRequest.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header
