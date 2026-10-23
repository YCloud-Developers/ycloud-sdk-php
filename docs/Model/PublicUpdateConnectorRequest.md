# # PublicUpdateConnectorRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  |
**base_url** | **string** |  |
**auth_type** | **string** |  |
**auth_config** | [**\YCloud\Client\Model\ConnectorAuthConfigDTO**](ConnectorAuthConfigDTO.md) |  | [optional]
**user_auth_injection_config** | [**\YCloud\Client\Model\UserAuthInjectionConfigDTO**](UserAuthInjectionConfigDTO.md) |  | [optional]
**requires_certificate** | **bool** |  | [optional]
**connector_protocol** | **string** | Connector protocol. Omit on creation to use Meta’s HTTP default. The protocol cannot change after creation; omit on update to preserve it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
