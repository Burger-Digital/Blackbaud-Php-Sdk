# # AddressAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_lines** | **string** | The address lines. Character limit: 150. | [optional]
**city** | **string** | The city of the address.  Do not use in combination with the &lt;code&gt;suburb&lt;/code&gt; property. Character limit: 50. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the address. |
**country** | **string** | The country of the address, can be the country&#39;s ID, name, or abbreviation. | [optional]
**county** | **string** | The county of the address. | [optional]
**do_not_mail** | **bool** | Indicates whether the constituent requests not to be contacted at this address. | [optional]
**end** | [**\DateTime**](\DateTime.md) | The date when the constituent ceased to reside at this address. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional]
**postal_code** | **string** | The postal code of the address. Character limit: 12. | [optional]
**preferred** | **bool** | Indicates whether this is the constituent&#39;s preferred address. | [optional]
**seasonal_end** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**seasonal_start** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**start** | [**\DateTime**](\DateTime.md) | The date when the constituent began residing at this address. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional]
**state** | **string** | The state of the address. | [optional]
**suburb** | **string** | The suburb of the address. Do not use in combination with the &lt;code&gt;city&lt;/code&gt; property. | [optional]
**type** | **string** | The address type. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListAddressTypes\&quot;&gt;&lt;b&gt;Address Types&lt;/b&gt;&lt;/a&gt; table. |
**information_source** | **string** | The information source for the address. | [optional]
**lot** | **string** | The Line of Travel (LOT) for the address. | [optional]
**cart** | **string** | The Carrier Route (CART) for the address. | [optional]
**dpc** | **string** | The Delivery Point Code (DPC) for the address. | [optional]
**region** | **string** | The region for the address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
