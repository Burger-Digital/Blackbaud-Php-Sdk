# GivingSummaryRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the gift. | [optional] 
**amount** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\Currency**](Currency.md) |  | [optional] 
**appeals** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\AppealRead[]**](AppealRead.md) | The set of immutable appeal system record IDs associated with the gift. | [optional] 
**campaigns** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\CampaignRead[]**](CampaignRead.md) | The set of immutable campaign system record IDs associated with the gift. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The gift date. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**funds** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FundRead[]**](FundRead.md) | The set of immutable fund system record IDs associated with the gift. | [optional] 
**type** | **string** | The gift type. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

