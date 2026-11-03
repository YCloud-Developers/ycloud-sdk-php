# # PublicCreateWebsiteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  |
**included_sub_domains** | **string[]** | Subdomains to include in the website crawl. Omit this field to leave it unspecified. Send &#x60;[]&#x60; to clear it. | [optional]
**included_url_patterns** | **string[]** | URL patterns to include in the website crawl. Omit this field to leave it unspecified. Send &#x60;[]&#x60; to clear it. | [optional]
**excluded_sub_domains** | **string[]** | Subdomains to exclude from the website crawl. Omit this field to leave it unspecified. Send &#x60;[]&#x60; to clear it. | [optional]
**excluded_url_patterns** | **string[]** | URL patterns to exclude from the website crawl. Omit this field to leave it unspecified. Send &#x60;[]&#x60; to clear it. | [optional]
**single_urls** | **string[]** | Individual URLs to include in the website source. Omit this field to leave it unspecified. Send &#x60;[]&#x60; to clear it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
