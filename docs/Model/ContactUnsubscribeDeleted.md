# # ContactUnsubscribeDeleted

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | Unique Customer Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**source** | **string** | The source from which a customer resumed their subscription - &#x60;Whatsapp&#x60;: The customer resumed their subscription on the whatsapp client - &#x60;API&#x60;: You remove the customer from the unsubscribe list through the OpenAPI of YCloud - &#x60;Manual&#x60;: You remove the customer from the unsubscribe list on the Contact page of YCloud. | [optional]
**update_time** | **\DateTime** | The time when customers cancel unsubscribe, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
