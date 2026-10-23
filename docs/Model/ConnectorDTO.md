# # ConnectorDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**base_url** | **string** |  | [optional]
**auth_type** | **string** |  | [optional]
**auth_config** | [**\YCloud\Client\Model\ConnectorAuthConfigDTO**](ConnectorAuthConfigDTO.md) |  | [optional]
**mtls_config** | [**\YCloud\Client\Model\MtlsConfigDTO**](MtlsConfigDTO.md) |  | [optional]
**connection_status** | [**\YCloud\Client\Model\ConnectionStatusDTO**](ConnectionStatusDTO.md) |  | [optional]
**user_auth_injection_config** | [**\YCloud\Client\Model\UserAuthInjectionConfigDTO**](UserAuthInjectionConfigDTO.md) |  | [optional]
**connector_protocol** | **string** | Connector protocol. Omit on creation to use Meta’s HTTP default. The protocol cannot change after creation; omit on update to preserve it. | [optional]
**mcp_tool_sync** | [**\YCloud\Client\Model\ConnectorMcpToolSyncDTO**](ConnectorMcpToolSyncDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
