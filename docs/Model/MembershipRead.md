# MembershipRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the membership. | [optional] 
**category** | **string** | The membership category. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the membership. | [optional] 
**date_added** | [**\DateTime**](\DateTime.md) | The date when the membership was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the membership was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**dues** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\Currency**](Currency.md) |  | [optional] 
**expires** | [**\DateTime**](\DateTime.md) | The date when the membership expires. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**joined** | [**\DateTime**](\DateTime.md) | The date when the membership becomes active. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**members** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\MembershipMemberRead[]**](MembershipMemberRead.md) | The set of members who belong to the membership. | [optional] 
**program** | **string** | The membership program. | [optional] 
**standing** | **string** | The membership status. Available values are &lt;i&gt;New&lt;/i&gt;, &lt;i&gt;Active&lt;/i&gt;, &lt;i&gt;Lapsed&lt;/i&gt;, and &lt;i&gt;Dropped&lt;/i&gt;. | [optional] 
**subcategory** | **string** | The membership subcategory. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

