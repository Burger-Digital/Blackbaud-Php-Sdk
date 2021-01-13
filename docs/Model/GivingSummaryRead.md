# # GivingSummaryRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the gift. | [optional]
**amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**appeals** | [**\BurgerDigital\BlackbaudPhpSdk\Model\AppealRead[]**](AppealRead.md) | The set of immutable appeal system record IDs associated with the gift. | [optional]
**campaigns** | [**\BurgerDigital\BlackbaudPhpSdk\Model\CampaignRead[]**](CampaignRead.md) | The set of immutable campaign system record IDs associated with the gift. | [optional]
**date** | [**\DateTime**](\DateTime.md) | The gift date. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional]
**funds** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FundRead[]**](FundRead.md) | The set of immutable fund system record IDs associated with the gift. | [optional]
**type** | **string** | The gift type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
