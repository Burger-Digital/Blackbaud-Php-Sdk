# RatingRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the rating. | [optional] 
**category** | **string** | The category of the rating. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListRatingCategories\&quot;&gt;&lt;b&gt;Rating Categories&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**comment** | **string** | A comment about the rating. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the rating. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the rating. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**inactive** | **bool** | This computed field indicates that the rating is active if the &lt;code&gt;category&lt;/code&gt; is active. | [optional] 
**source** | **string** | The source of the rating. | [optional] 
**type** | **string** | This computed field indicates the type of data that the rating represents based on the &lt;code&gt;category&lt;/code&gt; property. Available values &lt;a href&#x3D;\&quot;#RatingTypes\&quot;&gt;are listed below&lt;/a&gt;. | [optional] 
**value** | **object** | The value of the rating. The &lt;code&gt;type&lt;/code&gt; property determines the format. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

