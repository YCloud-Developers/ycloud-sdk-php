# # WhatsappBusinessUsername

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Phone number ID. | [optional]
**waba_id** | **string** | WhatsApp Business Account ID. | [optional]
**phone_number** | **string** | Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. | [optional]
**display_phone_number** | **string** | Display phone number. | [optional]
**business_username** | **string** | Active Business Username. The value is a plain username without &#x60;@&#x60;. | [optional]
**business_username_status** | [**\YCloud\Client\Model\WhatsappBusinessUsernameStatus**](WhatsappBusinessUsernameStatus.md) |  | [optional]
**requested_business_username** | **string** | Last requested Business Username that is still under review. This value can coexist with an active &#x60;businessUsername&#x60; while the new request is pending. | [optional]
**business_username_updated_at** | **\DateTime** | The time when the Business Username state was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
