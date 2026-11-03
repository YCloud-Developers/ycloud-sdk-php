# # WebsiteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Website resource ID. |
**url** | **string** | Source website URL. |
**crawl_status** | **string** | Current Meta crawl state. | [optional]
**pages_crawled** | **int** | Number of pages Meta has processed. | [optional]
**last_crawled_at** | **int** | Most recent crawl timestamp. | [optional]
**created_at** | **int** | Resource creation timestamp. | [optional]
**included_sub_domains** | **string[]** | Subdomains included in the website crawl, when returned by Meta. | [optional]
**included_url_patterns** | **string[]** | URL patterns included in the website crawl, when returned by Meta. | [optional]
**excluded_sub_domains** | **string[]** | Subdomains excluded from the website crawl, when returned by Meta. | [optional]
**excluded_url_patterns** | **string[]** | URL patterns excluded from the website crawl, when returned by Meta. | [optional]
**single_urls** | **string[]** | Individual URLs included in the website source, when returned by Meta. | [optional]
**crawl_error** | **string** | Optional crawl error reported by Meta; an empty string is preserved. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
