# # PhoneRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the phone. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the phone. | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | The date when the phone was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the phone was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**do_not_call** | **bool** | Indicates whether the constituent requests not to be contacted at this number. | [optional]
**inactive** | **bool** | Indicates whether the phone is inactive. | [optional]
**number** | **string** | The phone number. | [optional]
**primary** | **bool** | Indicates whether this is the constituent&#39;s primary phone. | [optional]
**type** | **string** | The phone type. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListPhoneTypes\&quot;&gt;&lt;b&gt;Phone Types&lt;/b&gt;&lt;/a&gt; table. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
