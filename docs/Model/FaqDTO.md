# # FaqDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | FAQ resource ID. |
**question** | **string** | Customer question written in natural language. |
**answer** | **string** | Factual answer the agent should use. |
**created_at** | **int** | Meta timestamp. When an update changes the FAQ ID, this resets to the update time. | [optional]
**metadata** | **array<string,string>** | String metadata retained with the FAQ. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
