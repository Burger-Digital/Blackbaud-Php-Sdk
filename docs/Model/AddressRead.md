# AddressRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the address. | [optional] 
**address_lines** | **string** | The address lines. | [optional] 
**city** | **string** | The city of the address. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the address. | [optional] 
**country** | **string** | The country of the address. | [optional] 
**county** | **string** | The county of the address. | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date when the address was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the address was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**do_not_mail** | **bool** | Indicates whether the constituent requests not to be contacted at this address. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The date when the constituent ceased to reside at this address. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**formatted_address** | **string** | This computed field retrieves the formatted address in the configured format of the country. | [optional] 
**inactive** | **bool** | This computed field indicates that the address is active if the current date is before any &lt;code&gt;end&lt;/code&gt; date. | [optional] 
**postal_code** | **string** | The postal code of the address. | [optional] 
**preferred** | **bool** | Indicates whether this is the constituent&#x27;s preferred address. | [optional] 
**seasonal_end** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**seasonal_start** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The date when the constituent began residing at this address. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**state** | **string** | The state of the address. | [optional] 
**suburb** | **string** | The suburb of the address. | [optional] 
**type** | **string** | The address type. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListAddressTypes\&quot;&gt;&lt;b&gt;Address Types&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

