# # ContactNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique 24-character ObjectId for the contact note. IDs remain unchanged after storage migration. |
**contact_id** | **string** | Unique ID of the contact that owns this note. |
**content** | **string** | Note content. |
**operator_id** | **string** | ID of the actor who created the note. | [optional]
**update_operator_id** | **string** | ID of the actor who last updated the note. | [optional]
**create_time** | **\DateTime** | The time at which the note was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which the note was last updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
