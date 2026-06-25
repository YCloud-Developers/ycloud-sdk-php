# # WhatsappCallingConnectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The caller&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**to** | **string** | The callee&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. Required when &#x60;recipient&#x60; is not provided. | [optional]
**recipient** | **string** | The callee&#39;s WhatsApp Business-scoped user ID (BSUID) or parent BSUID. Required when &#x60;to&#x60; is not provided. | [optional]
**sdp_type** | **string** | The SDP type, must be \&quot;offer\&quot; for connection requests. |
**sdp** | **string** | The Session Description Protocol (SDP) offer information compliant with [RFC 8866](https://datatracker.ietf.org/doc/html/rfc8866). Contains media session parameters for establishing the WebRTC connection. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
