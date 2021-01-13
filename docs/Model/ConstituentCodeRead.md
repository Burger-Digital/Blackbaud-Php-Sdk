# ConstituentCodeRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the constituent code. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the constituent code. | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date when the constituent code was created. The date includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the constituent code was last modified. The date includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**description** | **string** | The description of the constituent code. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListConstituentCodeTypes\&quot;&gt;&lt;b&gt;Constituent Codes&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**end** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**inactive** | **bool** | This computed field indicates that the constituent code is active if the current date is after any &lt;code&gt;start&lt;/code&gt; date and before any &lt;code&gt;end&lt;/code&gt; date. | [optional] 
**start** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**sequence** | **int** | The numeric sequence associated with the constituent code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

