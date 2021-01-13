# # ConstituentListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID for the constituent. This is not the same as the user-definable constituent identifier, which is stored in the &lt;code&gt;lookup_id&lt;/code&gt;. | [optional]
**address** | [**\BurgerDigital\BlackbaudPhpSdk\Model\AddressRead**](AddressRead.md) |  | [optional]
**age** | **int** | This computed field calculates the constituent&#39;s age based on the &lt;code&gt;birthdate&lt;/code&gt; property. For individuals only. | [optional]
**birthdate** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | The date when the constituent was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the constituent was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**deceased** | **bool** | Indicates whether the constituent is deceased. For individuals only. | [optional]
**deceased_date** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**email** | [**\BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressRead**](EmailAddressRead.md) |  | [optional]
**first** | **string** | The constituent&#39;s first name. For individuals only. | [optional]
**former_name** | **string** | The constituent&#39;s former name. For individuals only. | [optional]
**fundraiser_status** | **string** | Indicates whether the constituent is a fundraiser. For individuals only. | [optional]
**gender** | **string** | The constituent&#39;s gender. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListGenders\&quot;&gt;&lt;b&gt;Gender&lt;/b&gt;&lt;/a&gt; table. This property defaults to &lt;i&gt;unknown&lt;/i&gt; if no value is provided. For individuals only. | [optional]
**gives_anonymously** | **bool** | Indicates whether the constituent gives anonymously. | [optional]
**inactive** | **bool** | Indicates whether the constituent is inactive. | [optional]
**last** | **string** | The constituent&#39;s last name. For individuals only. | [optional]
**lookup_id** | **string** | The user-defined identifier for the constituent. | [optional]
**marital_status** | **string** | The constituent&#39;s marital status. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListMaritalStatuses\&quot;&gt;&lt;b&gt;Marital Status&lt;/b&gt;&lt;/a&gt; table.  For individuals only. | [optional]
**middle** | **string** | The constituent&#39;s middle name. For individuals only. | [optional]
**name** | **string** | If the constituent&#39;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this computed field indicates the full name of the constituent based on the target organization’s display name settings. If the &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Organization&lt;/i&gt;, this is the organization&#39;s name. | [optional]
**online_presence** | [**\BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceRead**](OnlinePresenceRead.md) |  | [optional]
**phone** | [**\BurgerDigital\BlackbaudPhpSdk\Model\PhoneRead**](PhoneRead.md) |  | [optional]
**preferred_name** | **string** | The constituent&#39;s preferred name. For individuals only. | [optional]
**spouse** | [**\BurgerDigital\BlackbaudPhpSdk\Model\SpouseRead**](SpouseRead.md) |  | [optional]
**suffix** | **string** | The constituent&#39;s primary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**suffix_2** | **string** | The constituent&#39;s secondary suffix. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListSuffixes\&quot;&gt;&lt;b&gt;Suffixes&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**title** | **string** | The constituent&#39;s primary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**title_2** | **string** | The constituent&#39;s secondary title. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListTitles\&quot;&gt;&lt;b&gt;Titles&lt;/b&gt;&lt;/a&gt; table. For individuals only. | [optional]
**type** | **string** | The type of constituent. Available values are &lt;i&gt;Individual&lt;/i&gt; and &lt;i&gt;Organization&lt;/i&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
