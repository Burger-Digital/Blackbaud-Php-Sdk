# # NameFormatAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configuration_id** | **string** | The name format configuration identifier. Required when custom_format is false. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the name format. |
**custom_format** | **bool** | Whether the name format uses a custom format. Defaults to false. | [optional]
**formatted_name** | **string** | The name format formatted name. Required when custom_format is true. Character limit: 255. | [optional]
**type** | **string** | The name format type. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListNameFormatTypes\&quot;&gt;&lt;b&gt;Addr/Sal Types&lt;/b&gt;&lt;/a&gt; table. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
