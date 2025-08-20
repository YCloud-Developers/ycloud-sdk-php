# # WhatsappCallingPreAcceptRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_id** | **string** | The WhatsApp Business phone number ID. |
**wacid** | **string** | The WhatsApp call ID. Required for inbound call operations. This ID is received from the Call Connect webhook when a WhatsApp user initiates the call. |
**sdp_type** | **string** | The SDP type for pre-accept operations. Must be \&quot;answer\&quot;. |
**sdp** | **string** | The Session Description Protocol (SDP) information compliant with [RFC 8866](https://datatracker.ietf.org/doc/html/rfc8866). Contains media session parameters for the WebRTC connection. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
