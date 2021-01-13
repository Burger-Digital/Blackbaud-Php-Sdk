# # ConstituentEdit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**birthdate** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**deceased** | **bool** | Indicates whether the constituent is deceased. For individuals only. | [optional]
**deceased_date** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**first** | **string** | The constituent&#39;s first name. For individuals only. Character limit: 50. | [optional]
**former_name** | **string** | The constituent&#39;s former name. For individuals only. Character limit: 100. | [optional]
**gender** | **string** | The constituent&#39;s gender. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListGenders\&quot;&gt;&lt;b&gt;Gender&lt;/b&gt;&lt;/a&gt; table. This property defaults to &lt;i&gt;Unknown&lt;/i&gt; if no value is provided. For individuals only. | [optional]
**gives_anonymously** | **bool** | Indicates whether the constituent gives anonymously. | [optional]
**inactive** | **bool** | Indicates whether the constituent is inactive. | [optional]
**last** | **string** | The constituent&#39;s last name. For individuals only. Character limit: 100. | [optional]
**lookup_id** | **string** | The user-defined identifier for the constituent. | [optional]
**marital_status** | **string** | The constituent&#39;s marital status. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListMaritalStatuses\&quot;&gt;&lt;b&gt;Marital Status&lt;/b&gt;&lt;/a&gt; table.  For individuals only. | [optional]
**middle** | **string** | The constituent&#39;s middle name. For individuals only. Character limit: 50. | [optional]
**name** | **string** | If the constituent&#39;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this is a computed field that does not apply to edit operations. If the &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Organization&lt;/i&gt;, this field cannot be changed to null and represents the organization&#39;s name. Character limit: 60. | [optional]
**preferred_name** | **string** | The constituent&#39;s preferred name. For individuals only. Character limit: 50. | [optional]
**suffix** | **string** | The constituent&#39;s primary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**suffix_2** | **string** | The constituent&#39;s secondary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**title** | **string** | The constituent&#39;s primary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**title_2** | **string** | The constituent&#39;s secondary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**birthplace** | **string** | The birthplace of the constituent. For individuals only. | [optional]
**ethnicity** | **string** | The ethnicity of the constituent. For individuals only. | [optional]
**income** | **string** | The income for the constituent. For individuals only. | [optional]
**religion** | **string** | The religion of the constituent. For individuals only. | [optional]
**industry** | **string** | The industry of the constituent. For organizations only. | [optional]
**matches_gifts** | **bool** | Indicates if the constituent matches gifts. For organizations only. | [optional]
**matching_gift_per_gift_min** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**matching_gift_per_gift_max** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**matching_gift_total_min** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**matching_gift_total_max** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**matching_gift_factor** | **double** | The matching gift factor for the constituent. For organizations only. | [optional]
**matching_gift_notes** | **string** | The matching gift notes for the constituent. For organizations only. | [optional]
**num_employees** | **int** | The number of employees for the constituent. For organizations only. | [optional]
**is_memorial** | **bool** | Indicates whether the constituent is for honor/memorial. | [optional]
**is_solicitor** | **bool** | Indicates whether the constituent is a solicitor. | [optional]
**no_valid_address** | **bool** | Indicates whether the constituent does not have a valid address. | [optional]
**receipt_type** | **string** | The receipt type of the constituent. | [optional]
**target** | **string** | The target of the constituent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
