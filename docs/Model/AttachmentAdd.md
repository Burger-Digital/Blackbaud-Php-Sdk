# # AttachmentAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | The date of the attachment. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format:&lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. This property defaults to the current date and time if not supplied. | [optional]
**file_id** | **string** | The identifier of the file. Character limit: 36. For physical attachments only. | [optional]
**file_name** | **string** | The name of the file. For physical attachments only. | [optional]
**name** | **string** | The name of the attachment. Character limit: 150. | [optional]
**parent_id** | **string** | The parent object&#39;s immutable system record ID. |
**tags** | **string[]** | The tags associated with the attachment. Tags supplement the attachment’s name and description and identify it based on how an organization categorizes attachments. Available values are the entries in the &lt;b&gt;Document Tags&lt;/b&gt; table. Character limit: 100. | [optional]
**thumbnail_id** | **string** | The identifier of the thumbnail. Character limit: 36. For physical attachments only. | [optional]
**type** | **string** | The attachment type. Available values are &lt;i&gt;Link&lt;/i&gt; and &lt;i&gt;Physical&lt;/i&gt;. Physical attachments are uploaded files such as images, PDFs, or Word documents that are saved locally or on the network. They are stored and managed in the system. Link attachments are links to files such as images, blog posts, or YouTube videos that are online or in a cloud storage account. They are stored and managed externally. |
**url** | **string** | The URL for the attachment. This is required for link attachments but does not apply to physical attachments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
