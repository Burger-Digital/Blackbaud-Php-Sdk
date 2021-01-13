# NonConstituentAdd

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**birthdate** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**deceased** | **bool** | Indicates whether the constituent is deceased. For individuals only. | [optional] 
**deceased_date** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**first** | **string** | The constituent&#x27;s first name. For individuals only. Character limit: 50. | [optional] 
**former_name** | **string** | The constituent&#x27;s former name. For individuals only. Character limit: 100. | [optional] 
**gender** | **string** | The constituent&#x27;s gender. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListGenders\&quot;&gt;&lt;b&gt;Gender&lt;/b&gt;&lt;/a&gt; table. This property defaults to &lt;i&gt;Unknown&lt;/i&gt; if no value is provided. For individuals only. | [optional] 
**last** | **string** | The constituent&#x27;s last name. For individuals only (required). Character limit: 100. | [optional] 
**middle** | **string** | The constituent&#x27;s middle name. For individuals only. Character limit: 50. | [optional] 
**name** | **string** | If the constituent&#x27;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this is a computed field that does not apply to add operations. If the &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Organization&lt;/i&gt;, this field is required and represents the organization&#x27;s name. Character limit: 60. | [optional] 
**preferred_name** | **string** | The constituent&#x27;s preferred name. For individuals only. Character limit: 50. | [optional] 
**suffix** | **string** | The constituent&#x27;s primary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional] 
**suffix_2** | **string** | The constituent&#x27;s secondary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional] 
**title** | **string** | The constituent&#x27;s primary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional] 
**title_2** | **string** | The constituent&#x27;s secondary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional] 
**type** | **string** | The type of constituent. Available values are &lt;i&gt;Individual&lt;/i&gt; and &lt;i&gt;Organization&lt;/i&gt;. | 
**primary_addressee** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\PrimaryNameFormatEdit**](PrimaryNameFormatEdit.md) |  | [optional] 
**primary_salutation** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\PrimaryNameFormatEdit**](PrimaryNameFormatEdit.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

