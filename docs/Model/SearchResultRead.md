# SearchResultRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the constituent. | [optional] 
**address** | **string** | The constituent&#x27;s preferred address. | [optional] 
**deceased** | **bool** | Indicates whether the constituent is deceased. | [optional] 
**email** | **string** | The constituent&#x27;s email address. | [optional] 
**fundraiser_status** | **string** | The constituent&#x27;s fundraiser status. If the constituent&#x27;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this computed field indicates the whether the constituent is &lt;i&gt;Active&lt;/i&gt;, &lt;i&gt;Inactive&lt;/i&gt;, or &lt;i&gt;None&lt;/i&gt;.  If the constituent&#x27;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Organization&lt;/i&gt;, this value will always be &lt;i&gt;None&lt;/i&gt;. | [optional] 
**inactive** | **bool** | Indicates whether the constituent is inactive. | [optional] 
**lookup_id** | **string** | The user-defined identifier for the constituent. | [optional] 
**name** | **string** | The constituent name. If the constituent&#x27;s &lt;code&gt;type&lt;/code&gt; is &lt;i&gt;Individual&lt;/i&gt;, this computed field indicates the full name of the constituent based on the target organization’s display name settings. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

