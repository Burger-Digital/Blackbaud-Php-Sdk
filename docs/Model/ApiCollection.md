# # ApiCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The number of items available for retrieval into the collection after applying any request parameters. The &lt;b&gt;limit&lt;/b&gt; and &lt;b&gt;offset&lt;/b&gt; parameters do not affect the &lt;b&gt;count&lt;/b&gt;, but to facilitate paging, they may affect the number of items in the &lt;b&gt;value&lt;/b&gt; result set. | [optional]
**next_link** | **string** | For paginated responses, the URI for the next page of results. | [optional]
**value** | **object[]** | The result set of items after applying any request parameters. To facilitate paging, this may be a subset of all available items. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
