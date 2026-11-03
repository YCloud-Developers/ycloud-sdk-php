# # WhatsappTemplateBidSpecResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_bid** | **string** | Base maximum price per delivered marketing message, in your YCloud billing currency, before country and per-message multipliers. Must be greater than 0, with at most 4 decimal places. This is a price ceiling, not a fixed charge. |
**country_price_adjustments** | [**\YCloud\Client\Model\WhatsappCountryPriceAdjustment[]**](WhatsappCountryPriceAdjustment.md) | Complete list of overrides for up to 50 distinct countries. Unlisted countries use a multiplier of 1. The submitted list replaces the locally stored list; omitting it or sending an empty list does not explicitly clear country overrides already stored by Meta. To remove all bidding settings, edit the template with bidSpec: {}. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
