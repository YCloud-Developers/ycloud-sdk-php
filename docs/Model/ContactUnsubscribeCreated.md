# # ContactUnsubscribeCreated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | Unique Customer Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**source** | **string** | The source from which a customer initiates an unsubscribe. - &#x60;Whatsapp&#x60;: The customer initiated an unsubscribe on the whatsapp client. - &#x60;Inbox&#x60;:You added a customer to the unsubscribe list on the Inbox page of YCloud. - &#x60;Chatbot&#x60;: The message sent by the customer triggered the unsubscribe keyword configured by the Chatbot. - &#x60;API&#x60;: You add customers to the unsubscribe list through YCloud&#39;s OpenAPI. - &#x60;Manual&#x60;: You added a customer to the unsubscribe list on the Contact page of YCloud. | [optional]
**update_time** | **\DateTime** | The time when a customer initiates an unsubscribe, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-06-01T12:00:00.000Z&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
