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
      "url": "https://github.com/ycloud-developers/ycloud-sdk-php.git"
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
*ContactsApi* | [**attributesList**](docs/Api/ContactsApi.md#attributeslist) | **GET** /contact/contacts/attributes | List contact attributes
*ContactsApi* | [**create**](docs/Api/ContactsApi.md#create) | **POST** /contact/contacts | Create a contact
*ContactsApi* | [**delete**](docs/Api/ContactsApi.md#delete) | **DELETE** /contact/contacts/{id} | Delete a contact
*ContactsApi* | [**list**](docs/Api/ContactsApi.md#list) | **GET** /contact/contacts | List contacts
*ContactsApi* | [**noteCreate**](docs/Api/ContactsApi.md#notecreate) | **POST** /contact/contacts/{contactIdentifier}/notes | Create a contact note
*ContactsApi* | [**noteDelete**](docs/Api/ContactsApi.md#notedelete) | **DELETE** /contact/notes/{noteId} | Delete a contact note
*ContactsApi* | [**noteUpdate**](docs/Api/ContactsApi.md#noteupdate) | **PATCH** /contact/notes/{noteId} | Update a contact note
*ContactsApi* | [**notesList**](docs/Api/ContactsApi.md#noteslist) | **GET** /contact/contacts/{contactIdentifier}/notes | List contact notes
*ContactsApi* | [**retrieve**](docs/Api/ContactsApi.md#retrieve) | **GET** /contact/contacts/{id} | Retrieve a contact
*ContactsApi* | [**update**](docs/Api/ContactsApi.md#update) | **PATCH** /contact/contacts/{id} | Update a contact
*CustomEventsApi* | [**createDefinition**](docs/Api/CustomEventsApi.md#createdefinition) | **POST** /event/definitions | Create an event definition
*CustomEventsApi* | [**createPropertyDefinition**](docs/Api/CustomEventsApi.md#createpropertydefinition) | **POST** /event/definitions/{name}/properties | Create an event property definition
*CustomEventsApi* | [**propertyDefinition**](docs/Api/CustomEventsApi.md#propertydefinition) | **DELETE** /event/definitions/{name}/properties/{propertyName} | Delete an event property definition
*CustomEventsApi* | [**propertyDefinition_0**](docs/Api/CustomEventsApi.md#propertydefinition_0) | **PATCH** /event/definitions/{name}/properties/{propertyName} | Update an event property definition
*CustomEventsApi* | [**retrieveDefinition**](docs/Api/CustomEventsApi.md#retrievedefinition) | **GET** /event/definitions/{name} | Retrieve an event definition
*CustomEventsApi* | [**sendEvent**](docs/Api/CustomEventsApi.md#sendevent) | **POST** /event/events | Send an event
*CustomEventsApi* | [**updateDefinition**](docs/Api/CustomEventsApi.md#updatedefinition) | **PATCH** /event/definitions/{name} | Update an event definition
*EmailsApi* | [**send**](docs/Api/EmailsApi.md#send) | **POST** /emails | Send an email
*MetaBusinessAgentApi* | [**budgetReplace**](docs/Api/MetaBusinessAgentApi.md#budgetreplace) | **PUT** /metaBusinessAgents/{entityId}/budgets | Replace Meta Business Agent budgets
*MetaBusinessAgentApi* | [**budgetRetrieve**](docs/Api/MetaBusinessAgentApi.md#budgetretrieve) | **GET** /metaBusinessAgents/{entityId}/budgets | Retrieve Meta Business Agent budgets
*MetaBusinessAgentApi* | [**businessAgentCreateConnector**](docs/Api/MetaBusinessAgentApi.md#businessagentcreateconnector) | **POST** /metaBusinessAgents/{entityId}/connectors | Create Connector
*MetaBusinessAgentApi* | [**businessAgentCreateConnectorTool**](docs/Api/MetaBusinessAgentApi.md#businessagentcreateconnectortool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | Create Connector Tool
*MetaBusinessAgentApi* | [**businessAgentDeleteConnector**](docs/Api/MetaBusinessAgentApi.md#businessagentdeleteconnector) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Delete Connector
*MetaBusinessAgentApi* | [**businessAgentDeleteConnectorTool**](docs/Api/MetaBusinessAgentApi.md#businessagentdeleteconnectortool) | **DELETE** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Delete Connector Tool
*MetaBusinessAgentApi* | [**businessAgentGetConnector**](docs/Api/MetaBusinessAgentApi.md#businessagentgetconnector) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Get Connector
*MetaBusinessAgentApi* | [**businessAgentGetConnectorTool**](docs/Api/MetaBusinessAgentApi.md#businessagentgetconnectortool) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Get Connector Tool
*MetaBusinessAgentApi* | [**businessAgentListConnectorLogs**](docs/Api/MetaBusinessAgentApi.md#businessagentlistconnectorlogs) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/logs | List Connector Logs
*MetaBusinessAgentApi* | [**businessAgentListConnectorTools**](docs/Api/MetaBusinessAgentApi.md#businessagentlistconnectortools) | **GET** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools | List Connector Tools
*MetaBusinessAgentApi* | [**businessAgentListConnectors**](docs/Api/MetaBusinessAgentApi.md#businessagentlistconnectors) | **GET** /metaBusinessAgents/{entityId}/connectors | List Connectors
*MetaBusinessAgentApi* | [**businessAgentRefreshConnectorMcpTools**](docs/Api/MetaBusinessAgentApi.md#businessagentrefreshconnectormcptools) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/refreshMCPTools | Refresh MCP Connector Tools
*MetaBusinessAgentApi* | [**businessAgentRunConnectorTool**](docs/Api/MetaBusinessAgentApi.md#businessagentrunconnectortool) | **POST** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId}/runs | Run Connector Tool
*MetaBusinessAgentApi* | [**businessAgentUpdateConnector**](docs/Api/MetaBusinessAgentApi.md#businessagentupdateconnector) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId} | Update Connector
*MetaBusinessAgentApi* | [**businessAgentUpdateConnectorTool**](docs/Api/MetaBusinessAgentApi.md#businessagentupdateconnectortool) | **PATCH** /metaBusinessAgents/{entityId}/connectors/{connectorId}/tools/{toolId} | Update Connector Tool
*MetaBusinessAgentApi* | [**businessAgentUpsertConnectorApiKey**](docs/Api/MetaBusinessAgentApi.md#businessagentupsertconnectorapikey) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/apiKey | Upsert Connector Api Key
*MetaBusinessAgentApi* | [**businessAgentUpsertConnectorCertificate**](docs/Api/MetaBusinessAgentApi.md#businessagentupsertconnectorcertificate) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/certificate | Upsert Connector Certificate
*MetaBusinessAgentApi* | [**businessAgentUpsertConnectorOAuth**](docs/Api/MetaBusinessAgentApi.md#businessagentupsertconnectoroauth) | **PUT** /metaBusinessAgents/{entityId}/connectors/{connectorId}/credentials/oauth | Upsert Connector O Auth
*MetaBusinessAgentApi* | [**conversationTurnsRetrieve**](docs/Api/MetaBusinessAgentApi.md#conversationturnsretrieve) | **GET** /metaBusinessAgents/{entityId}/conversationTurns | Retrieve Meta Business Agent conversation turns
*MetaBusinessAgentApi* | [**settingsReplace**](docs/Api/MetaBusinessAgentApi.md#settingsreplace) | **PUT** /metaBusinessAgents/{entityId}/settings | Replace Meta Business Agent settings
*MetaBusinessAgentApi* | [**settingsRetrieve**](docs/Api/MetaBusinessAgentApi.md#settingsretrieve) | **GET** /metaBusinessAgents/{entityId}/settings | Retrieve Meta Business Agent settings
*SmsApi* | [**list**](docs/Api/SmsApi.md#list) | **GET** /sms | List SMS records
*SmsApi* | [**send**](docs/Api/SmsApi.md#send) | **POST** /sms | Send an SMS
*UnsubscribersApi* | [**create**](docs/Api/UnsubscribersApi.md#create) | **POST** /unsubscribers | Create an unsubscriber
*UnsubscribersApi* | [**deleteByCustomerAndChannel**](docs/Api/UnsubscribersApi.md#deletebycustomerandchannel) | **DELETE** /unsubscribers/{customer}/{channel} | Delete an unsubscriber
*UnsubscribersApi* | [**list**](docs/Api/UnsubscribersApi.md#list) | **GET** /unsubscribers | List unsubscribers
*UnsubscribersApi* | [**listAllByCustomer**](docs/Api/UnsubscribersApi.md#listallbycustomer) | **GET** /unsubscribers/{customer} | List all unsubscribers by customer
*UnsubscribersApi* | [**retrieveByCustomerAndChannel**](docs/Api/UnsubscribersApi.md#retrievebycustomerandchannel) | **GET** /unsubscribers/{customer}/{channel} | Retrieve an unsubscriber
*VerifyApi* | [**check**](docs/Api/VerifyApi.md#check) | **POST** /verify/verificationChecks | Check a verification
*VerifyApi* | [**send**](docs/Api/VerifyApi.md#send) | **POST** /verify/verifications | Start a verification
*VoicesApi* | [**list**](docs/Api/VoicesApi.md#list) | **GET** /voices | List voice records
*VoicesApi* | [**send**](docs/Api/VoicesApi.md#send) | **POST** /voices | Send a voice code
*WebhookEndpointsApi* | [**create**](docs/Api/WebhookEndpointsApi.md#create) | **POST** /webhookEndpoints | Create a webhook endpoint
*WebhookEndpointsApi* | [**delete**](docs/Api/WebhookEndpointsApi.md#delete) | **DELETE** /webhookEndpoints/{id} | Delete a webhook endpoint
*WebhookEndpointsApi* | [**list**](docs/Api/WebhookEndpointsApi.md#list) | **GET** /webhookEndpoints | List webhook endpoints
*WebhookEndpointsApi* | [**retrieve**](docs/Api/WebhookEndpointsApi.md#retrieve) | **GET** /webhookEndpoints/{id} | Retrieve a webhook endpoint
*WebhookEndpointsApi* | [**rotateSecret**](docs/Api/WebhookEndpointsApi.md#rotatesecret) | **POST** /webhookEndpoints/{id}/rotateSecret | Rotate a webhook endpoint secret
*WebhookEndpointsApi* | [**update**](docs/Api/WebhookEndpointsApi.md#update) | **PATCH** /webhookEndpoints/{id} | Update a webhook endpoint
*WhatsappBusinessAccountsApi* | [**list**](docs/Api/WhatsappBusinessAccountsApi.md#list) | **GET** /whatsapp/businessAccounts | List WABAs
*WhatsappBusinessAccountsApi* | [**retrieve**](docs/Api/WhatsappBusinessAccountsApi.md#retrieve) | **GET** /whatsapp/businessAccounts/{id} | Retrieve a WABA
*WhatsappBusinessAccountsApi* | [**retrieveAutomaticCreativeOptimizations**](docs/Api/WhatsappBusinessAccountsApi.md#retrieveautomaticcreativeoptimizations) | **GET** /whatsapp/businessAccounts/{wabaId}/automatic-creative-optimizations | Retrieve WABA automatic creative optimizations
*WhatsappBusinessAccountsApi* | [**updateAutomaticCreativeOptimizations**](docs/Api/WhatsappBusinessAccountsApi.md#updateautomaticcreativeoptimizations) | **PATCH** /whatsapp/businessAccounts/{wabaId}/automatic-creative-optimizations | Update WABA automatic creative optimizations
*WhatsappCallingApi* | [**accept**](docs/Api/WhatsappCallingApi.md#accept) | **POST** /whatsapp/calls/accept | Accept a call
*WhatsappCallingApi* | [**connect**](docs/Api/WhatsappCallingApi.md#connect) | **POST** /whatsapp/calls/connect | Connect a call
*WhatsappCallingApi* | [**downloadMedia**](docs/Api/WhatsappCallingApi.md#downloadmedia) | **GET** /whatsapp/calls/media/{mediaAssetId} | Download call media
*WhatsappCallingApi* | [**preAccept**](docs/Api/WhatsappCallingApi.md#preaccept) | **POST** /whatsapp/calls/preAccept | Pre-accept a call
*WhatsappCallingApi* | [**reject**](docs/Api/WhatsappCallingApi.md#reject) | **POST** /whatsapp/calls/reject | Reject a call
*WhatsappCallingApi* | [**terminate**](docs/Api/WhatsappCallingApi.md#terminate) | **POST** /whatsapp/calls/terminate | Terminate a call
*WhatsappFlowsApi* | [**create**](docs/Api/WhatsappFlowsApi.md#create) | **POST** /whatsapp/flows | Create a flow
*WhatsappFlowsApi* | [**delete**](docs/Api/WhatsappFlowsApi.md#delete) | **DELETE** /whatsapp/flows/{flowId} | Delete a flow
*WhatsappFlowsApi* | [**deprecate**](docs/Api/WhatsappFlowsApi.md#deprecate) | **POST** /whatsapp/flows/{flowId}/deprecate | Deprecate a flow
*WhatsappFlowsApi* | [**list**](docs/Api/WhatsappFlowsApi.md#list) | **GET** /whatsapp/flows | List flows
*WhatsappFlowsApi* | [**preview**](docs/Api/WhatsappFlowsApi.md#preview) | **GET** /whatsapp/flows/{flowId}/preview | generate a web preview URL with this flow.
*WhatsappFlowsApi* | [**publish**](docs/Api/WhatsappFlowsApi.md#publish) | **POST** /whatsapp/flows/{flowId}/publish | Publish a flow
*WhatsappFlowsApi* | [**retrieve**](docs/Api/WhatsappFlowsApi.md#retrieve) | **GET** /whatsapp/flows/{flowId} | Retrieve a flow
*WhatsappFlowsApi* | [**updateMetadata**](docs/Api/WhatsappFlowsApi.md#updatemetadata) | **PATCH** /whatsapp/flows/{flowId}/metadata | Update flow metadata
*WhatsappFlowsApi* | [**updateStructure**](docs/Api/WhatsappFlowsApi.md#updatestructure) | **PATCH** /whatsapp/flows/{flowId}/assets | Update flow structure
*WhatsappGroupsApi* | [**approveJoinRequests**](docs/Api/WhatsappGroupsApi.md#approvejoinrequests) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests/approve | Approve group join requests
*WhatsappGroupsApi* | [**create**](docs/Api/WhatsappGroupsApi.md#create) | **POST** /whatsapp/{businessPhoneNumber}/groups | Create a group
*WhatsappGroupsApi* | [**delete**](docs/Api/WhatsappGroupsApi.md#delete) | **DELETE** /whatsapp/{businessPhoneNumber}/groups/{groupId} | Delete a group
*WhatsappGroupsApi* | [**list**](docs/Api/WhatsappGroupsApi.md#list) | **GET** /whatsapp/{businessPhoneNumber}/groups | List groups
*WhatsappGroupsApi* | [**listJoinRequests**](docs/Api/WhatsappGroupsApi.md#listjoinrequests) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests | List group join requests
*WhatsappGroupsApi* | [**rejectJoinRequests**](docs/Api/WhatsappGroupsApi.md#rejectjoinrequests) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/joinRequests/reject | Reject group join requests
*WhatsappGroupsApi* | [**removeParticipants**](docs/Api/WhatsappGroupsApi.md#removeparticipants) | **POST** /whatsapp/groups/{groupId}/participants/remove | Remove group participants
*WhatsappGroupsApi* | [**resetInviteLink**](docs/Api/WhatsappGroupsApi.md#resetinvitelink) | **POST** /whatsapp/{businessPhoneNumber}/groups/{groupId}/inviteLink/reset | Reset a group invite link
*WhatsappGroupsApi* | [**retrieve**](docs/Api/WhatsappGroupsApi.md#retrieve) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId} | Retrieve a group
*WhatsappGroupsApi* | [**retrieveInviteLink**](docs/Api/WhatsappGroupsApi.md#retrieveinvitelink) | **GET** /whatsapp/{businessPhoneNumber}/groups/{groupId}/inviteLink | Retrieve a group invite link
*WhatsappGroupsApi* | [**sendInviteLinkMessage**](docs/Api/WhatsappGroupsApi.md#sendinvitelinkmessage) | **POST** /whatsapp/{businessPhoneNumber}/groups/inviteLink/messages | Send a group invite link message
*WhatsappGroupsApi* | [**updateSettings**](docs/Api/WhatsappGroupsApi.md#updatesettings) | **PATCH** /whatsapp/{businessPhoneNumber}/groups/{groupId}/settings | Update group settings
*WhatsappInboundMessagesApi* | [**markAsRead**](docs/Api/WhatsappInboundMessagesApi.md#markasread) | **POST** /whatsapp/inboundMessages/{id}/markAsRead | Mark message as read
*WhatsappInboundMessagesApi* | [**typing**](docs/Api/WhatsappInboundMessagesApi.md#typing) | **POST** /whatsapp/inboundMessages/{id}/typing | Mark message as read and display a typing indicator with a JSON response
*WhatsappMediaApi* | [**upload**](docs/Api/WhatsappMediaApi.md#upload) | **POST** /whatsapp/media/{phoneNumber}/upload | Upload media
*WhatsappMessagesApi* | [**retrieve**](docs/Api/WhatsappMessagesApi.md#retrieve) | **GET** /whatsapp/messages/{id} | Retrieve a message
*WhatsappMessagesApi* | [**send**](docs/Api/WhatsappMessagesApi.md#send) | **POST** /whatsapp/messages | Enqueue a message
*WhatsappMessagesApi* | [**sendDirectly**](docs/Api/WhatsappMessagesApi.md#senddirectly) | **POST** /whatsapp/messages/sendDirectly | Send a message directly
*WhatsappPhoneNumbersApi* | [**deleteBusinessUsername**](docs/Api/WhatsappPhoneNumbersApi.md#deletebusinessusername) | **DELETE** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Delete a phone number business username
*WhatsappPhoneNumbersApi* | [**deleteContactBookEntry**](docs/Api/WhatsappPhoneNumbersApi.md#deletecontactbookentry) | **DELETE** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/contactBook/{bsuid} | Delete a Meta contact book entry
*WhatsappPhoneNumbersApi* | [**list**](docs/Api/WhatsappPhoneNumbersApi.md#list) | **GET** /whatsapp/phoneNumbers | List phone numbers
*WhatsappPhoneNumbersApi* | [**register**](docs/Api/WhatsappPhoneNumbersApi.md#register) | **POST** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/register | Register a phone number
*WhatsappPhoneNumbersApi* | [**retrieve**](docs/Api/WhatsappPhoneNumbersApi.md#retrieve) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber} | Retrieve a phone number
*WhatsappPhoneNumbersApi* | [**retrieveBusinessUsername**](docs/Api/WhatsappPhoneNumbersApi.md#retrievebusinessusername) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Retrieve a phone number business username
*WhatsappPhoneNumbersApi* | [**retrieveBusinessUsernameSuggestions**](docs/Api/WhatsappPhoneNumbersApi.md#retrievebusinessusernamesuggestions) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername/suggestions | Retrieve phone number business username suggestions
*WhatsappPhoneNumbersApi* | [**retrieveCommerceSettings**](docs/Api/WhatsappPhoneNumbersApi.md#retrievecommercesettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Retrieve commerce settings
*WhatsappPhoneNumbersApi* | [**retrieveProfile**](docs/Api/WhatsappPhoneNumbersApi.md#retrieveprofile) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Retrieve a phone number profile
*WhatsappPhoneNumbersApi* | [**retrieveSettings**](docs/Api/WhatsappPhoneNumbersApi.md#retrievesettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/settings | Retrieve phone number settings
*WhatsappPhoneNumbersApi* | [**saveSettings**](docs/Api/WhatsappPhoneNumbersApi.md#savesettings) | **POST** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/settings | Save phone number settings
*WhatsappPhoneNumbersApi* | [**updateBusinessUsername**](docs/Api/WhatsappPhoneNumbersApi.md#updatebusinessusername) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/businessUsername | Update a phone number business username
*WhatsappPhoneNumbersApi* | [**updateCommerceSettings**](docs/Api/WhatsappPhoneNumbersApi.md#updatecommercesettings) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Update commerce settings
*WhatsappPhoneNumbersApi* | [**updateDisplayName**](docs/Api/WhatsappPhoneNumbersApi.md#updatedisplayname) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/displayName | Update a phone number display name
*WhatsappPhoneNumbersApi* | [**updateProfile**](docs/Api/WhatsappPhoneNumbersApi.md#updateprofile) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Update a phone number profile
*WhatsappTemplatesApi* | [**analytics**](docs/Api/WhatsappTemplatesApi.md#analytics) | **POST** /whatsapp/templates/analytics | Retrieve WhatsApp template analytics
*WhatsappTemplatesApi* | [**create**](docs/Api/WhatsappTemplatesApi.md#create) | **POST** /whatsapp/templates | Create a template
*WhatsappTemplatesApi* | [**deleteByName**](docs/Api/WhatsappTemplatesApi.md#deletebyname) | **DELETE** /whatsapp/templates/{wabaId}/{name} | Delete templates by name
*WhatsappTemplatesApi* | [**deleteByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#deletebynameandlanguage) | **DELETE** /whatsapp/templates/{wabaId}/{name}/{language} | Delete a template
*WhatsappTemplatesApi* | [**editByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#editbynameandlanguage) | **PATCH** /whatsapp/templates/{wabaId}/{name}/{language} | Edit a template
*WhatsappTemplatesApi* | [**list**](docs/Api/WhatsappTemplatesApi.md#list) | **GET** /whatsapp/templates | List templates
*WhatsappTemplatesApi* | [**retrieveByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#retrievebynameandlanguage) | **GET** /whatsapp/templates/{wabaId}/{name}/{language} | Retrieve a template

## Models

- [ApiKeyDTO](docs/Model/ApiKeyDTO.md)
- [ApiKeyDTOAnyOf](docs/Model/ApiKeyDTOAnyOf.md)
- [ApiKeyDTOAnyOf1](docs/Model/ApiKeyDTOAnyOf1.md)
- [ApiKeyDTOAnyOf2](docs/Model/ApiKeyDTOAnyOf2.md)
- [ApiKeyParamDTO](docs/Model/ApiKeyParamDTO.md)
- [AttributeChangeAction](docs/Model/AttributeChangeAction.md)
- [Balance](docs/Model/Balance.md)
- [BodyNodeDTO](docs/Model/BodyNodeDTO.md)
- [CallingCaptureSettings](docs/Model/CallingCaptureSettings.md)
- [CallingMediaUpdated](docs/Model/CallingMediaUpdated.md)
- [CallingMediaUpdatedError](docs/Model/CallingMediaUpdatedError.md)
- [ConnectionStatusDTO](docs/Model/ConnectionStatusDTO.md)
- [ConnectorAuthConfigDTO](docs/Model/ConnectorAuthConfigDTO.md)
- [ConnectorDTO](docs/Model/ConnectorDTO.md)
- [ConnectorLogStatsDTO](docs/Model/ConnectorLogStatsDTO.md)
- [ConnectorMcpToolSyncDTO](docs/Model/ConnectorMcpToolSyncDTO.md)
- [ConnectorToolDTO](docs/Model/ConnectorToolDTO.md)
- [ConnectorToolRequestDefinitionDTO](docs/Model/ConnectorToolRequestDefinitionDTO.md)
- [ConnectorToolRunResultDTO](docs/Model/ConnectorToolRunResultDTO.md)
- [ConnectorToolTransformationSpecDTO](docs/Model/ConnectorToolTransformationSpecDTO.md)
- [ConnectorToolTransformationStepDTO](docs/Model/ConnectorToolTransformationStepDTO.md)
- [ConnectorToolUserAuthActionConfigDTO](docs/Model/ConnectorToolUserAuthActionConfigDTO.md)
- [Contact](docs/Model/Contact.md)
- [ContactAttribute](docs/Model/ContactAttribute.md)
- [ContactAttributeChange](docs/Model/ContactAttributeChange.md)
- [ContactAttributesChanged](docs/Model/ContactAttributesChanged.md)
- [ContactCreateRequest](docs/Model/ContactCreateRequest.md)
- [ContactCreated](docs/Model/ContactCreated.md)
- [ContactCustomAttribute](docs/Model/ContactCustomAttribute.md)
- [ContactDeleted](docs/Model/ContactDeleted.md)
- [ContactNote](docs/Model/ContactNote.md)
- [ContactNoteCreateInput](docs/Model/ContactNoteCreateInput.md)
- [ContactNoteMutationInput](docs/Model/ContactNoteMutationInput.md)
- [ContactNoteWebhookPayload](docs/Model/ContactNoteWebhookPayload.md)
- [ContactNoteWriteRequest](docs/Model/ContactNoteWriteRequest.md)
- [ContactPage](docs/Model/ContactPage.md)
- [ContactPageCursor](docs/Model/ContactPageCursor.md)
- [ContactSourceType](docs/Model/ContactSourceType.md)
- [ContactUnsubscribeCreated](docs/Model/ContactUnsubscribeCreated.md)
- [ContactUnsubscribeDeleted](docs/Model/ContactUnsubscribeDeleted.md)
- [ContactUpdateRequest](docs/Model/ContactUpdateRequest.md)
- [CustomEventDefinition](docs/Model/CustomEventDefinition.md)
- [CustomEventDefinitionCreateRequest](docs/Model/CustomEventDefinitionCreateRequest.md)
- [CustomEventDefinitionProperty](docs/Model/CustomEventDefinitionProperty.md)
- [CustomEventDefinitionPropertyCreateRequest](docs/Model/CustomEventDefinitionPropertyCreateRequest.md)
- [CustomEventDefinitionPropertyUpdateRequest](docs/Model/CustomEventDefinitionPropertyUpdateRequest.md)
- [CustomEventDefinitionUpdateRequest](docs/Model/CustomEventDefinitionUpdateRequest.md)
- [CustomEventSendRequest](docs/Model/CustomEventSendRequest.md)
- [Email](docs/Model/Email.md)
- [EmailContentType](docs/Model/EmailContentType.md)
- [EmailDelivery](docs/Model/EmailDelivery.md)
- [EmailSendRequest](docs/Model/EmailSendRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [EventProperty](docs/Model/EventProperty.md)
- [EventType](docs/Model/EventType.md)
- [LogEntryDTO](docs/Model/LogEntryDTO.md)
- [Mailbox](docs/Model/Mailbox.md)
- [MetaBusinessAccountVerificationStatus](docs/Model/MetaBusinessAccountVerificationStatus.md)
- [MetaBusinessAgentApiError](docs/Model/MetaBusinessAgentApiError.md)
- [MetaBusinessAgentBudget](docs/Model/MetaBusinessAgentBudget.md)
- [MetaBusinessAgentBudgetAllOf](docs/Model/MetaBusinessAgentBudgetAllOf.md)
- [MetaBusinessAgentBudgetInput](docs/Model/MetaBusinessAgentBudgetInput.md)
- [MetaBusinessAgentBudgetReplaceRequest](docs/Model/MetaBusinessAgentBudgetReplaceRequest.md)
- [MetaBusinessAgentBudgetResponse](docs/Model/MetaBusinessAgentBudgetResponse.md)
- [MetaBusinessAgentConversationTurn](docs/Model/MetaBusinessAgentConversationTurn.md)
- [MetaBusinessAgentConversationTurnCursors](docs/Model/MetaBusinessAgentConversationTurnCursors.md)
- [MetaBusinessAgentConversationTurnPage](docs/Model/MetaBusinessAgentConversationTurnPage.md)
- [MetaBusinessAgentConversationTurnPaging](docs/Model/MetaBusinessAgentConversationTurnPaging.md)
- [MetaBusinessAgentConversationTurnStep](docs/Model/MetaBusinessAgentConversationTurnStep.md)
- [MetaBusinessAgentSettings](docs/Model/MetaBusinessAgentSettings.md)
- [MetaBusinessAgentSettingsFollowup](docs/Model/MetaBusinessAgentSettingsFollowup.md)
- [MetaBusinessAgentSettingsHandoff](docs/Model/MetaBusinessAgentSettingsHandoff.md)
- [MetaBusinessAgentSettingsReplaceRequest](docs/Model/MetaBusinessAgentSettingsReplaceRequest.md)
- [MetaBusinessAgentSettingsRollout](docs/Model/MetaBusinessAgentSettingsRollout.md)
- [MtlsConfigDTO](docs/Model/MtlsConfigDTO.md)
- [OAuth2ClientCredentialsDTO](docs/Model/OAuth2ClientCredentialsDTO.md)
- [Page](docs/Model/Page.md)
- [PageCursor](docs/Model/PageCursor.md)
- [ParameterBindingDTO](docs/Model/ParameterBindingDTO.md)
- [ParameterNodeDTO](docs/Model/ParameterNodeDTO.md)
- [PublicCreateConnectorRequest](docs/Model/PublicCreateConnectorRequest.md)
- [PublicCreateConnectorToolRequest](docs/Model/PublicCreateConnectorToolRequest.md)
- [PublicRunConnectorToolRequest](docs/Model/PublicRunConnectorToolRequest.md)
- [PublicUpdateConnectorRequest](docs/Model/PublicUpdateConnectorRequest.md)
- [PublicUpdateConnectorToolRequest](docs/Model/PublicUpdateConnectorToolRequest.md)
- [PublicUpsertConnectorApiKeyRequest](docs/Model/PublicUpsertConnectorApiKeyRequest.md)
- [PublicUpsertConnectorCertificateRequest](docs/Model/PublicUpsertConnectorCertificateRequest.md)
- [PublicUpsertConnectorOAuthRequest](docs/Model/PublicUpsertConnectorOAuthRequest.md)
- [RequestBodyDefinitionDTO](docs/Model/RequestBodyDefinitionDTO.md)
- [Sms](docs/Model/Sms.md)
- [SmsInbound](docs/Model/SmsInbound.md)
- [SmsPage](docs/Model/SmsPage.md)
- [SmsSendRequest](docs/Model/SmsSendRequest.md)
- [StatsDTO](docs/Model/StatsDTO.md)
- [Unsubscriber](docs/Model/Unsubscriber.md)
- [UnsubscriberChannel](docs/Model/UnsubscriberChannel.md)
- [UnsubscriberCreateRequest](docs/Model/UnsubscriberCreateRequest.md)
- [UnsubscriberPage](docs/Model/UnsubscriberPage.md)
- [UnsubscriberType](docs/Model/UnsubscriberType.md)
- [UserAuthInjectionConfigDTO](docs/Model/UserAuthInjectionConfigDTO.md)
- [Verification](docs/Model/Verification.md)
- [VerificationChannel](docs/Model/VerificationChannel.md)
- [VerificationCheck](docs/Model/VerificationCheck.md)
- [VerificationCheckRequest](docs/Model/VerificationCheckRequest.md)
- [VerificationFallback](docs/Model/VerificationFallback.md)
- [VerificationSendRequest](docs/Model/VerificationSendRequest.md)
- [VerificationStatus](docs/Model/VerificationStatus.md)
- [Voice](docs/Model/Voice.md)
- [VoicePage](docs/Model/VoicePage.md)
- [VoiceSendRequest](docs/Model/VoiceSendRequest.md)
- [WebhookEndpoint](docs/Model/WebhookEndpoint.md)
- [WebhookEndpointCreateRequest](docs/Model/WebhookEndpointCreateRequest.md)
- [WebhookEndpointPage](docs/Model/WebhookEndpointPage.md)
- [WebhookEndpointStatus](docs/Model/WebhookEndpointStatus.md)
- [WebhookEndpointUpdateRequest](docs/Model/WebhookEndpointUpdateRequest.md)
- [WhatsappApiError](docs/Model/WhatsappApiError.md)
- [WhatsappAuthIntlRateEligibilityCountry](docs/Model/WhatsappAuthIntlRateEligibilityCountry.md)
- [WhatsappAutomaticCreativeOptimizationEnrollStatus](docs/Model/WhatsappAutomaticCreativeOptimizationEnrollStatus.md)
- [WhatsappAutomaticCreativeOptimizationRetrieveResponse](docs/Model/WhatsappAutomaticCreativeOptimizationRetrieveResponse.md)
- [WhatsappAutomaticCreativeOptimizationUpdateRequest](docs/Model/WhatsappAutomaticCreativeOptimizationUpdateRequest.md)
- [WhatsappAutomaticCreativeOptimizationUpdateRequestCreativeOptimizationFeatures](docs/Model/WhatsappAutomaticCreativeOptimizationUpdateRequestCreativeOptimizationFeatures.md)
- [WhatsappAutomaticCreativeOptimizationUpdateResponse](docs/Model/WhatsappAutomaticCreativeOptimizationUpdateResponse.md)
- [WhatsappBusinessAccount](docs/Model/WhatsappBusinessAccount.md)
- [WhatsappBusinessAccountBanState](docs/Model/WhatsappBusinessAccountBanState.md)
- [WhatsappBusinessAccountPage](docs/Model/WhatsappBusinessAccountPage.md)
- [WhatsappBusinessAccountRestrictionInfo](docs/Model/WhatsappBusinessAccountRestrictionInfo.md)
- [WhatsappBusinessAccountReviewStatus](docs/Model/WhatsappBusinessAccountReviewStatus.md)
- [WhatsappBusinessAccountUpdateEventEnum](docs/Model/WhatsappBusinessAccountUpdateEventEnum.md)
- [WhatsappBusinessUsername](docs/Model/WhatsappBusinessUsername.md)
- [WhatsappBusinessUsernameDeleteResult](docs/Model/WhatsappBusinessUsernameDeleteResult.md)
- [WhatsappBusinessUsernameStatus](docs/Model/WhatsappBusinessUsernameStatus.md)
- [WhatsappBusinessUsernameSuggestions](docs/Model/WhatsappBusinessUsernameSuggestions.md)
- [WhatsappBusinessUsernameUpdateRequest](docs/Model/WhatsappBusinessUsernameUpdateRequest.md)
- [WhatsappCallingConnectRequest](docs/Model/WhatsappCallingConnectRequest.md)
- [WhatsappCallingPreAcceptRequest](docs/Model/WhatsappCallingPreAcceptRequest.md)
- [WhatsappCallingRequest](docs/Model/WhatsappCallingRequest.md)
- [WhatsappCallingResponse](docs/Model/WhatsappCallingResponse.md)
- [WhatsappCallingTerminateRequest](docs/Model/WhatsappCallingTerminateRequest.md)
- [WhatsappCommerceSettings](docs/Model/WhatsappCommerceSettings.md)
- [WhatsappCommerceSettingsUpdateRequest](docs/Model/WhatsappCommerceSettingsUpdateRequest.md)
- [WhatsappContactBookEntryDeleteResult](docs/Model/WhatsappContactBookEntryDeleteResult.md)
- [WhatsappConversation](docs/Model/WhatsappConversation.md)
- [WhatsappConversationOriginType](docs/Model/WhatsappConversationOriginType.md)
- [WhatsappConversationType](docs/Model/WhatsappConversationType.md)
- [WhatsappFlow](docs/Model/WhatsappFlow.md)
- [WhatsappFlowCategory](docs/Model/WhatsappFlowCategory.md)
- [WhatsappFlowCreate200Response](docs/Model/WhatsappFlowCreate200Response.md)
- [WhatsappFlowCreate400Response](docs/Model/WhatsappFlowCreate400Response.md)
- [WhatsappFlowCreateRequest](docs/Model/WhatsappFlowCreateRequest.md)
- [WhatsappFlowList200Response](docs/Model/WhatsappFlowList200Response.md)
- [WhatsappFlowPreviewUrl](docs/Model/WhatsappFlowPreviewUrl.md)
- [WhatsappFlowStatus](docs/Model/WhatsappFlowStatus.md)
- [WhatsappFlowUpdateMetadata200Response](docs/Model/WhatsappFlowUpdateMetadata200Response.md)
- [WhatsappFlowUpdateMetadataRequest](docs/Model/WhatsappFlowUpdateMetadataRequest.md)
- [WhatsappFlowValidationError](docs/Model/WhatsappFlowValidationError.md)
- [WhatsappFlowValidationErrorPointersInner](docs/Model/WhatsappFlowValidationErrorPointersInner.md)
- [WhatsappFlowWhatsappBusinessAccount](docs/Model/WhatsappFlowWhatsappBusinessAccount.md)
- [WhatsappGroup](docs/Model/WhatsappGroup.md)
- [WhatsappGroupAsyncResponse](docs/Model/WhatsappGroupAsyncResponse.md)
- [WhatsappGroupCreateRequest](docs/Model/WhatsappGroupCreateRequest.md)
- [WhatsappGroupCustomerProfile](docs/Model/WhatsappGroupCustomerProfile.md)
- [WhatsappGroupFailedJoinRequest](docs/Model/WhatsappGroupFailedJoinRequest.md)
- [WhatsappGroupInviteLink](docs/Model/WhatsappGroupInviteLink.md)
- [WhatsappGroupInviteLinkMessageRequest](docs/Model/WhatsappGroupInviteLinkMessageRequest.md)
- [WhatsappGroupJoinApprovalMode](docs/Model/WhatsappGroupJoinApprovalMode.md)
- [WhatsappGroupJoinRequest](docs/Model/WhatsappGroupJoinRequest.md)
- [WhatsappGroupJoinRequestActionRequest](docs/Model/WhatsappGroupJoinRequestActionRequest.md)
- [WhatsappGroupJoinRequestActionResponse](docs/Model/WhatsappGroupJoinRequestActionResponse.md)
- [WhatsappGroupJoinRequestListResponse](docs/Model/WhatsappGroupJoinRequestListResponse.md)
- [WhatsappGroupListItem](docs/Model/WhatsappGroupListItem.md)
- [WhatsappGroupListResponse](docs/Model/WhatsappGroupListResponse.md)
- [WhatsappGroupPaging](docs/Model/WhatsappGroupPaging.md)
- [WhatsappGroupParticipant](docs/Model/WhatsappGroupParticipant.md)
- [WhatsappGroupRemoveParticipant](docs/Model/WhatsappGroupRemoveParticipant.md)
- [WhatsappGroupRemoveParticipantsRequest](docs/Model/WhatsappGroupRemoveParticipantsRequest.md)
- [WhatsappGroupUpdateSettingsRequest](docs/Model/WhatsappGroupUpdateSettingsRequest.md)
- [WhatsappGroupWebhook](docs/Model/WhatsappGroupWebhook.md)
- [WhatsappGroupWebhookConversation](docs/Model/WhatsappGroupWebhookConversation.md)
- [WhatsappGroupWebhookConversationOrigin](docs/Model/WhatsappGroupWebhookConversationOrigin.md)
- [WhatsappGroupWebhookField](docs/Model/WhatsappGroupWebhookField.md)
- [WhatsappGroupWebhookMessageStatus](docs/Model/WhatsappGroupWebhookMessageStatus.md)
- [WhatsappGroupWebhookParticipant](docs/Model/WhatsappGroupWebhookParticipant.md)
- [WhatsappGroupWebhookPricing](docs/Model/WhatsappGroupWebhookPricing.md)
- [WhatsappGroupWebhookSetting](docs/Model/WhatsappGroupWebhookSetting.md)
- [WhatsappGroupWebhookStatus](docs/Model/WhatsappGroupWebhookStatus.md)
- [WhatsappGroupWebhookStatusContact](docs/Model/WhatsappGroupWebhookStatusContact.md)
- [WhatsappGroupWebhookType](docs/Model/WhatsappGroupWebhookType.md)
- [WhatsappInboundMessage](docs/Model/WhatsappInboundMessage.md)
- [WhatsappInboundMessageButton](docs/Model/WhatsappInboundMessageButton.md)
- [WhatsappInboundMessageContext](docs/Model/WhatsappInboundMessageContext.md)
- [WhatsappInboundMessageError](docs/Model/WhatsappInboundMessageError.md)
- [WhatsappInboundMessageInteractive](docs/Model/WhatsappInboundMessageInteractive.md)
- [WhatsappInboundMessageInteractiveButtonReply](docs/Model/WhatsappInboundMessageInteractiveButtonReply.md)
- [WhatsappInboundMessageInteractiveCallPermissionReply](docs/Model/WhatsappInboundMessageInteractiveCallPermissionReply.md)
- [WhatsappInboundMessageInteractiveListReply](docs/Model/WhatsappInboundMessageInteractiveListReply.md)
- [WhatsappInboundMessageInteractiveNfmReply](docs/Model/WhatsappInboundMessageInteractiveNfmReply.md)
- [WhatsappInboundMessageLocation](docs/Model/WhatsappInboundMessageLocation.md)
- [WhatsappInboundMessageMedia](docs/Model/WhatsappInboundMessageMedia.md)
- [WhatsappInboundMessageOrder](docs/Model/WhatsappInboundMessageOrder.md)
- [WhatsappInboundMessageOrderProductItem](docs/Model/WhatsappInboundMessageOrderProductItem.md)
- [WhatsappInboundMessageReferral](docs/Model/WhatsappInboundMessageReferral.md)
- [WhatsappInboundMessageReferredProduct](docs/Model/WhatsappInboundMessageReferredProduct.md)
- [WhatsappInboundMessageSystem](docs/Model/WhatsappInboundMessageSystem.md)
- [WhatsappInboundMessageText](docs/Model/WhatsappInboundMessageText.md)
- [WhatsappInboundMessageType](docs/Model/WhatsappInboundMessageType.md)
- [WhatsappInboundMessageTypingResponse](docs/Model/WhatsappInboundMessageTypingResponse.md)
- [WhatsappListFlowItem](docs/Model/WhatsappListFlowItem.md)
- [WhatsappMedia](docs/Model/WhatsappMedia.md)
- [WhatsappMediaUpload200Response](docs/Model/WhatsappMediaUpload200Response.md)
- [WhatsappMessage](docs/Model/WhatsappMessage.md)
- [WhatsappMessageContact](docs/Model/WhatsappMessageContact.md)
- [WhatsappMessageContactAddress](docs/Model/WhatsappMessageContactAddress.md)
- [WhatsappMessageContactEmail](docs/Model/WhatsappMessageContactEmail.md)
- [WhatsappMessageContactName](docs/Model/WhatsappMessageContactName.md)
- [WhatsappMessageContactOrg](docs/Model/WhatsappMessageContactOrg.md)
- [WhatsappMessageContactPhone](docs/Model/WhatsappMessageContactPhone.md)
- [WhatsappMessageContactUrl](docs/Model/WhatsappMessageContactUrl.md)
- [WhatsappMessageContext](docs/Model/WhatsappMessageContext.md)
- [WhatsappMessageInteractive](docs/Model/WhatsappMessageInteractive.md)
- [WhatsappMessageInteractiveAction](docs/Model/WhatsappMessageInteractiveAction.md)
- [WhatsappMessageInteractiveActionButton](docs/Model/WhatsappMessageInteractiveActionButton.md)
- [WhatsappMessageInteractiveActionButtonReply](docs/Model/WhatsappMessageInteractiveActionButtonReply.md)
- [WhatsappMessageInteractiveActionCard](docs/Model/WhatsappMessageInteractiveActionCard.md)
- [WhatsappMessageInteractiveActionCardAction](docs/Model/WhatsappMessageInteractiveActionCardAction.md)
- [WhatsappMessageInteractiveActionCardActionButton](docs/Model/WhatsappMessageInteractiveActionCardActionButton.md)
- [WhatsappMessageInteractiveActionCardActionButtonQuickReply](docs/Model/WhatsappMessageInteractiveActionCardActionButtonQuickReply.md)
- [WhatsappMessageInteractiveActionCardActionParameters](docs/Model/WhatsappMessageInteractiveActionCardActionParameters.md)
- [WhatsappMessageInteractiveActionCardBody](docs/Model/WhatsappMessageInteractiveActionCardBody.md)
- [WhatsappMessageInteractiveActionCardHeader](docs/Model/WhatsappMessageInteractiveActionCardHeader.md)
- [WhatsappMessageInteractiveActionParameters](docs/Model/WhatsappMessageInteractiveActionParameters.md)
- [WhatsappMessageInteractiveActionParametersFlowActionPayload](docs/Model/WhatsappMessageInteractiveActionParametersFlowActionPayload.md)
- [WhatsappMessageInteractiveActionSection](docs/Model/WhatsappMessageInteractiveActionSection.md)
- [WhatsappMessageInteractiveActionSectionProductItem](docs/Model/WhatsappMessageInteractiveActionSectionProductItem.md)
- [WhatsappMessageInteractiveActionSectionRow](docs/Model/WhatsappMessageInteractiveActionSectionRow.md)
- [WhatsappMessageInteractiveBody](docs/Model/WhatsappMessageInteractiveBody.md)
- [WhatsappMessageInteractiveFooter](docs/Model/WhatsappMessageInteractiveFooter.md)
- [WhatsappMessageInteractiveHeader](docs/Model/WhatsappMessageInteractiveHeader.md)
- [WhatsappMessageLocation](docs/Model/WhatsappMessageLocation.md)
- [WhatsappMessageMedia](docs/Model/WhatsappMessageMedia.md)
- [WhatsappMessageOrderAmount](docs/Model/WhatsappMessageOrderAmount.md)
- [WhatsappMessageOrderBeneficiary](docs/Model/WhatsappMessageOrderBeneficiary.md)
- [WhatsappMessageOrderDetails](docs/Model/WhatsappMessageOrderDetails.md)
- [WhatsappMessageOrderExpiration](docs/Model/WhatsappMessageOrderExpiration.md)
- [WhatsappMessageOrderInfo](docs/Model/WhatsappMessageOrderInfo.md)
- [WhatsappMessageOrderItem](docs/Model/WhatsappMessageOrderItem.md)
- [WhatsappMessageOrderPaymentGateway](docs/Model/WhatsappMessageOrderPaymentGateway.md)
- [WhatsappMessageOrderPaymentSetting](docs/Model/WhatsappMessageOrderPaymentSetting.md)
- [WhatsappMessageOrderPaymentSettingPaymentGatewayBilldesk](docs/Model/WhatsappMessageOrderPaymentSettingPaymentGatewayBilldesk.md)
- [WhatsappMessageOrderPaymentSettingPaymentGatewayPayu](docs/Model/WhatsappMessageOrderPaymentSettingPaymentGatewayPayu.md)
- [WhatsappMessageOrderPaymentSettingPaymentGatewayRazorpay](docs/Model/WhatsappMessageOrderPaymentSettingPaymentGatewayRazorpay.md)
- [WhatsappMessageOrderPaymentSettingPaymentGatewayZaakpay](docs/Model/WhatsappMessageOrderPaymentSettingPaymentGatewayZaakpay.md)
- [WhatsappMessageOrderStatus](docs/Model/WhatsappMessageOrderStatus.md)
- [WhatsappMessageOrderStatusEnum](docs/Model/WhatsappMessageOrderStatusEnum.md)
- [WhatsappMessageReaction](docs/Model/WhatsappMessageReaction.md)
- [WhatsappMessageSendRequest](docs/Model/WhatsappMessageSendRequest.md)
- [WhatsappMessageStatus](docs/Model/WhatsappMessageStatus.md)
- [WhatsappMessageTemplate](docs/Model/WhatsappMessageTemplate.md)
- [WhatsappMessageTemplateComponent](docs/Model/WhatsappMessageTemplateComponent.md)
- [WhatsappMessageTemplateComponentCard](docs/Model/WhatsappMessageTemplateComponentCard.md)
- [WhatsappMessageTemplateComponentCardComponent](docs/Model/WhatsappMessageTemplateComponentCardComponent.md)
- [WhatsappMessageTemplateComponentParameter](docs/Model/WhatsappMessageTemplateComponentParameter.md)
- [WhatsappMessageTemplateComponentParameterAction](docs/Model/WhatsappMessageTemplateComponentParameterAction.md)
- [WhatsappMessageTemplateComponentParameterActionSection](docs/Model/WhatsappMessageTemplateComponentParameterActionSection.md)
- [WhatsappMessageTemplateComponentParameterActionSectionProductItem](docs/Model/WhatsappMessageTemplateComponentParameterActionSectionProductItem.md)
- [WhatsappMessageTemplateComponentParameterLimitedTimeOffer](docs/Model/WhatsappMessageTemplateComponentParameterLimitedTimeOffer.md)
- [WhatsappMessageTemplateLanguage](docs/Model/WhatsappMessageTemplateLanguage.md)
- [WhatsappMessageText](docs/Model/WhatsappMessageText.md)
- [WhatsappMessageType](docs/Model/WhatsappMessageType.md)
- [WhatsappPayment](docs/Model/WhatsappPayment.md)
- [WhatsappPaymentStatus](docs/Model/WhatsappPaymentStatus.md)
- [WhatsappPaymentTransaction](docs/Model/WhatsappPaymentTransaction.md)
- [WhatsappPaymentTransactionError](docs/Model/WhatsappPaymentTransactionError.md)
- [WhatsappPhoneNameUpdateRequest](docs/Model/WhatsappPhoneNameUpdateRequest.md)
- [WhatsappPhoneNameUpdateResponse](docs/Model/WhatsappPhoneNameUpdateResponse.md)
- [WhatsappPhoneNumber](docs/Model/WhatsappPhoneNumber.md)
- [WhatsappPhoneNumberCodeVerificationStatus](docs/Model/WhatsappPhoneNumberCodeVerificationStatus.md)
- [WhatsappPhoneNumberNameStatus](docs/Model/WhatsappPhoneNumberNameStatus.md)
- [WhatsappPhoneNumberPage](docs/Model/WhatsappPhoneNumberPage.md)
- [WhatsappPhoneNumberProfile](docs/Model/WhatsappPhoneNumberProfile.md)
- [WhatsappPhoneNumberProfileUpdateRequest](docs/Model/WhatsappPhoneNumberProfileUpdateRequest.md)
- [WhatsappPhoneNumberProfileVertical](docs/Model/WhatsappPhoneNumberProfileVertical.md)
- [WhatsappPhoneNumberQualityRating](docs/Model/WhatsappPhoneNumberQualityRating.md)
- [WhatsappPhoneNumberQualityUpdateEventEnum](docs/Model/WhatsappPhoneNumberQualityUpdateEventEnum.md)
- [WhatsappPhoneNumberSettings](docs/Model/WhatsappPhoneNumberSettings.md)
- [WhatsappPhoneNumberSettingsCalling](docs/Model/WhatsappPhoneNumberSettingsCalling.md)
- [WhatsappPhoneNumberStatus](docs/Model/WhatsappPhoneNumberStatus.md)
- [WhatsappPricingCategory](docs/Model/WhatsappPricingCategory.md)
- [WhatsappPricingModel](docs/Model/WhatsappPricingModel.md)
- [WhatsappPricingType](docs/Model/WhatsappPricingType.md)
- [WhatsappProfile](docs/Model/WhatsappProfile.md)
- [WhatsappReviewDecision](docs/Model/WhatsappReviewDecision.md)
- [WhatsappTemplate](docs/Model/WhatsappTemplate.md)
- [WhatsappTemplateAnalytics](docs/Model/WhatsappTemplateAnalytics.md)
- [WhatsappTemplateAnalyticsButtonClick](docs/Model/WhatsappTemplateAnalyticsButtonClick.md)
- [WhatsappTemplateAnalyticsDataPoint](docs/Model/WhatsappTemplateAnalyticsDataPoint.md)
- [WhatsappTemplateAnalyticsRequest](docs/Model/WhatsappTemplateAnalyticsRequest.md)
- [WhatsappTemplateCategory](docs/Model/WhatsappTemplateCategory.md)
- [WhatsappTemplateComponent](docs/Model/WhatsappTemplateComponent.md)
- [WhatsappTemplateComponentButton](docs/Model/WhatsappTemplateComponentButton.md)
- [WhatsappTemplateComponentButtonAppDeepLink](docs/Model/WhatsappTemplateComponentButtonAppDeepLink.md)
- [WhatsappTemplateComponentButtonOtpSupportedApp](docs/Model/WhatsappTemplateComponentButtonOtpSupportedApp.md)
- [WhatsappTemplateComponentButtonOtpType](docs/Model/WhatsappTemplateComponentButtonOtpType.md)
- [WhatsappTemplateComponentButtonType](docs/Model/WhatsappTemplateComponentButtonType.md)
- [WhatsappTemplateComponentCard](docs/Model/WhatsappTemplateComponentCard.md)
- [WhatsappTemplateComponentCardComponent](docs/Model/WhatsappTemplateComponentCardComponent.md)
- [WhatsappTemplateComponentExample](docs/Model/WhatsappTemplateComponentExample.md)
- [WhatsappTemplateComponentLimitedTimeOffer](docs/Model/WhatsappTemplateComponentLimitedTimeOffer.md)
- [WhatsappTemplateCreateRequest](docs/Model/WhatsappTemplateCreateRequest.md)
- [WhatsappTemplateEditRequest](docs/Model/WhatsappTemplateEditRequest.md)
- [WhatsappTemplatePage](docs/Model/WhatsappTemplatePage.md)
- [WhatsappTemplateQualityRating](docs/Model/WhatsappTemplateQualityRating.md)
- [WhatsappTemplateStatus](docs/Model/WhatsappTemplateStatus.md)
- [WhatsappTemplateStatusUpdateEventEnum](docs/Model/WhatsappTemplateStatusUpdateEventEnum.md)
- [WhatsappTemplateSubCategory](docs/Model/WhatsappTemplateSubCategory.md)
- [WhatsappUserPreference](docs/Model/WhatsappUserPreference.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header
