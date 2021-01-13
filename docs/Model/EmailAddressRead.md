# EmailAddressRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the email address. | [optional] 
**address** | **string** | The email address. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the email address. | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date when the email address was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the email address was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**do_not_email** | **bool** | Indicates whether the constituent requests not to be contacted at this email address. | [optional] 
**inactive** | **bool** | Indicates whether the email address is inactive. | [optional] 
**primary** | **bool** | Indicates whether this is the constituent&#x27;s primary email address. | [optional] 
**type** | **string** | The type of email address. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEmailAddressTypes\&quot;&gt;&lt;b&gt;Phone Types&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

