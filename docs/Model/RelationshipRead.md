# RelationshipRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the relationship. | [optional] 
**comment** | **string** | The comment on the relationship. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the relationship. | 
**date_added** | [**\DateTime**](\DateTime.md) | The date when the relationship was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the relationship was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**end** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**is_organization_contact** | **bool** | Indicates whether the related individual represents the organization as a contact. Only applies to relationships between organizations and individuals. | [optional] 
**is_primary_business** | **bool** | Indicates whether the related organization is the individual&#x27;s primary business. Only applies to relationships between organizations and individuals. | [optional] 
**is_spouse** | **bool** | Indicates whether the related constituent is the constituent&#x27;s spouse. Only applies to relationships between individuals. | [optional] 
**is_spouse_head_of_household** | **bool** | Indicates whether the spouse constituent is the head household. Only applies to spousal relationships between individuals. | [optional] 
**is_constituent_head_of_household** | **bool** | Indicates whether the constituent is the head of household. Only applies to spousal relationships between individuals. | [optional] 
**name** | **string** | The name of the related constituent. If the constituent&#x27;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this computed field indicates the full name of the constituent based on the target organization’s display name settings. | [optional] 
**organization_contact_type** | **string** | Provides context for interactions with the related individual who represents the organization as a contact. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListOrganizationContactTypes\&quot;&gt;&lt;b&gt;Contact Types&lt;/b&gt;&lt;/a&gt; table. Only applies to relationships between organizations and individuals. | [optional] 
**position** | **string** | The individual&#x27;s position in the organization. Only applies to relationships between organizations and individuals. | [optional] 
**reciprocal_relationship_id** | **string** | The identifier for the reciprocal relationship record. This value is read-only and is automatically generated when the relationship is created. Changes made to this record will also be reflected on the reciprocal, with the exception of the comments property. | [optional] 
**reciprocal_type** | **string** | Describes the constituent&#x27;s relationship to the related constituent. For example, in a relationship between a male constituent and a female sibling, the reciprocal relationship type would be brother. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\&quot;&gt;&lt;b&gt;Relationships&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**relation_id** | **string** | The immutable system record ID of the related individual or organization. | [optional] 
**start** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**type** | **string** | The type of relation that the relationship represents. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\&quot;&gt;&lt;b&gt;Relationships&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

