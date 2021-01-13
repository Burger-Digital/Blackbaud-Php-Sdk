# # PrimaryNameFormatAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**configuration_id** | **string** | The primary name format configuration identifier. Required when custom_format is false. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the primary name format. |
**custom_format** | **bool** | Whether the primary name format uses a custom format. Defaults to false. | [optional]
**formatted_name** | **string** | The primary name format formatted name. Required when custom_format is true. Character limit: 255. | [optional]
**primary_type** | **string** | The primary name format type. Available values are &lt;i&gt;Addressee&lt;/i&gt; and &lt;i&gt;Salutation&lt;/i&gt;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
