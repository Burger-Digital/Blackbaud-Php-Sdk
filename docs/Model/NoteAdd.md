# # NoteAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the note. |
**date** | [**\BurgerDigital\BlackbaudPhpSdk\Model\FuzzyDate**](FuzzyDate.md) |  |
**summary** | **string** | The note summary. Character limit: 50. | [optional]
**text** | **string** | The note&#39;s contents. | [optional]
**type** | **string** | The note type. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListNoteTypes\&quot;&gt;&lt;b&gt;Notepad Types&lt;/b&gt;&lt;/a&gt; table. |
**author** | **string** | The note author. If not supplied, will have a default set based on the user&#39;s account. Character limit: 50. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
