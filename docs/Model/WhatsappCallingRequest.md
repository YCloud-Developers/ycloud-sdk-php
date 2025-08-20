# # WhatsappCallingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_id** | **string** | The WhatsApp Business phone number ID. | [optional]
**from** | **string** | The caller&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. Required for connect operations when phoneId is empty. | [optional]
**to** | **string** | The callee&#39;s phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. Required for outbound call connections. | [optional]
**wacid** | **string** | The WhatsApp call ID. Required for inbound call operations. This ID is received from the Call Connect webhook when a WhatsApp user initiates the call. | [optional]
**sdp_type** | **string** | The SDP type. For pre-accept and accept operations, must be \&quot;answer\&quot;. | [optional]
**sdp** | **string** | The Session Description Protocol (SDP) information compliant with [RFC 8866](https://datatracker.ietf.org/doc/html/rfc8866). Required for pre-accept and accept operations. Contains media session parameters for the WebRTC connection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
