# # ContactNoteWebhookPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique 24-character ObjectId for the contact note. IDs remain unchanged after storage migration. |
**contact_id** | **string** | Unique ID of the contact that owns this note. |
**username** | **string** | Username of the contact that owns this note, without the leading &#x60;@&#x60;. |
**phone_number** | **string** | Phone number of the contact that owns this note in E.164 format. |
**content** | **string** | Note content. |
**create_time** | **\DateTime** | The time at which the note was created, formatted in RFC 3339. |
**update_time** | **\DateTime** | The time at which the note was last updated, formatted in RFC 3339. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
