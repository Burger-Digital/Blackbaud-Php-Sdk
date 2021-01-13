# # ApiCollectionNoteRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The number of items available for retrieval into the collection after applying any request parameters. The &lt;b&gt;limit&lt;/b&gt; and &lt;b&gt;offset&lt;/b&gt; parameters do not affect the &lt;b&gt;count&lt;/b&gt;, but to facilitate paging, they may affect the number of items in the &lt;b&gt;value&lt;/b&gt; result set. | [optional]
**next_link** | **string** | For paginated responses, the URI for the next page of results. | [optional]
**value** | [**\BurgerDigital\BlackbaudPhpSdk\Model\NoteRead[]**](NoteRead.md) | The set of items included in the response. This may be a subset of the items in the collection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
