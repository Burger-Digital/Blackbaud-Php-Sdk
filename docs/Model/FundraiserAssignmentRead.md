# FundraiserAssignmentRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the fundraiser assignment. | [optional] 
**amount** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\Currency**](Currency.md) |  | [optional] 
**appeal_id** | **string** | The immutable system record ID of the appeal the fundraiser should use to request gifts. | [optional] 
**campaign_id** | **string** | The immutable system record ID of the campaign to apply resulting gifts to. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent assigned to the fundraiser. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The fundraiser assignment end date. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2017-05-17T00:00:00&lt;/i&gt;. | [optional] 
**fund_id** | **string** | The immutable system record ID of the fund any resulting gifts should be applied to. If a restricted fund is selected, only campaigns and appeals associated with that fund may be selected. | [optional] 
**fundraiser_id** | **string** | The immutable system record ID of the fundraiser. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The fundraiser assignment start date. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2017-01-29T00:00:00&lt;/i&gt;. | [optional] 
**type** | **string** | The type of fundraiser. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58bdd6c8d7dcde06046081d7/operations/5ad64755a9db9517f8d9767e\&quot;&gt;&lt;b&gt;Solicitor Type&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

