# AttachmentRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the attachment. | [optional] 
**content_type** | **string** | The content type. For physical attachments only. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the attachment. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format:&lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional] 
**file_id** | **string** | The identifier of the file. | [optional] 
**file_name** | **string** | The file name. For physical attachments only. | [optional] 
**file_size** | **int** | The file size in bytes. For physical attachments only. | [optional] 
**name** | **string** | The name of the attachment. | [optional] 
**parent_id** | **string** | The parent object&#x27;s immutable system record ID. | [optional] 
**tags** | **string[]** | The tags associated with the attachment. Tags supplement the attachment’s name and description and identify it based on how an organization categorizes attachments. Available values are the entries in the &lt;b&gt;Document Tags&lt;/b&gt; table. | [optional] 
**thumbnail_id** | **string** | The identifier of the thumbnail. For physical attachments that are images only. | [optional] 
**thumbnail_url** | **string** | The URL for a thumbnail. For physical attachments that are images only. Contains a time-bound signature that limits access to 60 minutes. | [optional] 
**type** | **string** | The attachment type. Available values are &lt;i&gt;Link&lt;/i&gt; and &lt;i&gt;Physical&lt;/i&gt;. Physical attachments are uploaded files such as images, PDFs, or Word documents that are saved locally or on the network. They are stored and managed in the system. Link attachments are links to files such as images, blog posts, or YouTube videos that are online or in a cloud storage account. They are stored and managed externally. | [optional] 
**url** | **string** | The URL for the attachment. The URL for a physical attachment contains a time-bound signature that limits access to 60 minutes. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

