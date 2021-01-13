# RatingAdd

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category of the rating. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRatingCategories\&quot;&gt;&lt;b&gt;Rating Categories&lt;/b&gt;&lt;/a&gt; table. | 
**comment** | **string** | A comment about the rating. Character limit: 255. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the rating. | 
**date** | [**\DateTime**](\DateTime.md) | The date of the rating. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | 
**source** | **string** | Required when the rating category has a source. The source of the new rating. | [optional] 
**value** | **object** | The value of the rating. The &lt;code&gt;type&lt;/code&gt; property determines the format and the character limit. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

