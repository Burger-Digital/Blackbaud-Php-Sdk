# # CustomFieldRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the custom field. | [optional]
**category** | **string** | The custom field category. Available values are the entries in the &lt;b&gt;Custom Field Categories&lt;/b&gt; table of the parent object. | [optional]
**comment** | **string** | The comment on the custom field. | [optional]
**date** | [**\DateTime**](\DateTime.md) | The date on the custom field. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format:&lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | The date when the custom field was created. The date includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format:&lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the custom field was last modified. The date includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format:&lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**parent_id** | **string** | The parent object&#39;s immutable system record ID. | [optional]
**type** | **string** | The type of data that the custom field represents. Available values are listed below. | [optional]
**value** | **object** | The value of the custom field. The &lt;code&gt;type&lt;/code&gt; property determines the format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
