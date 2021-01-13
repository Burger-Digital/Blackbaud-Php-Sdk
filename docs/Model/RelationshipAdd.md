# # RelationshipAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | The comment on the relationship. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the relationship. |
**end** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**is_organization_contact** | **bool** | Indicates whether the related individual represents the organization as a contact. Only applies to relationships between organizations and individuals. | [optional]
**is_primary_business** | **bool** | Indicates whether the related organization is the individual&#39;s primary business. Only applies to relationships between organizations and individuals. | [optional]
**is_spouse** | **bool** | Indicates whether the related constituent is the constituent&#39;s spouse. Only applies to relationships between individuals. | [optional]
**is_spouse_head_of_household** | **bool** | Indicates whether the spouse constituent is the head household. Only applies to spousal relationships between individuals. | [optional]
**is_constituent_head_of_household** | **bool** | Indicates whether the constituent is the head of household. Only applies to spousal relationships between individuals. | [optional]
**organization_contact_type** | **string** | Provides context for interactions with the related individual who represents the organization as a contact. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListOrganizationContactTypes\&quot;&gt;&lt;b&gt;Contact Types&lt;/b&gt;&lt;/a&gt; table. Only applies to relationships between organizations and individuals. | [optional]
**position** | **string** | The individual&#39;s position in the organization. Only applies to relationships between organizations and individuals. Character limit: 50. | [optional]
**reciprocal_type** | **string** | Describes the constituent&#39;s relationship to the related constituent. For example, in a relationship between a male constituent and a female sibling, the reciprocal relationship type would be brother. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\&quot;&gt;&lt;b&gt;Relationships&lt;/b&gt;&lt;/a&gt; table. | [optional]
**relation_id** | **string** | The immutable system record ID of the related individual or organization. | [optional]
**relation** | [**\BurgerDigital\BlackbaudPhpSdk\Model\NonConstituentAdd**](NonConstituentAdd.md) |  | [optional]
**start** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**type** | **string** | The type of relation that the relationship represents. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRelationshipTypes\&quot;&gt;&lt;b&gt;Relationships&lt;/b&gt;&lt;/a&gt; table. | [optional]
**do_not_reciprocate** | **bool** | When set to true, indicates that a reciprocal relationship should not be created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
