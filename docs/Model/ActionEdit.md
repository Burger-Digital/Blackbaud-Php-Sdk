# ActionEdit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The channel or intent of the constituent interaction. Available values are &lt;i&gt;Phone Call&lt;/i&gt;, &lt;i&gt;Meeting&lt;/i&gt;, &lt;i&gt;Mailing&lt;/i&gt;, &lt;i&gt;Email&lt;/i&gt;, and &lt;i&gt;Task/Other&lt;/i&gt;. This property cannot be set to null. | [optional] 
**completed** | **bool** | Indicates whether the action is complete. If the system is configured to use custom action statuses, this value is based on the action status value. This property defaults to &lt;i&gt;false&lt;/i&gt; if no value is provided. | [optional] 
**completed_date** | [**\DateTime**](\DateTime.md) | The date when the action was completed. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The action date. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43&lt;/i&gt;. This property cannot be set to null. | [optional] 
**description** | **string** | The detailed explanation that elaborates on the action summary. | [optional] 
**direction** | **string** | The direction of the action. Available values are &lt;i&gt;Inbound&lt;/i&gt; and &lt;i&gt;Outbound&lt;/i&gt;. | [optional] 
**end_time** | **string** | The end time of the action. Uses 24-hour time in the &lt;i&gt;HH:mm&lt;/i&gt; format. For example, 17:30 represents 5:30 p.m. | [optional] 
**fundraisers** | **string[]** | The set of immutable constituent system record IDs for the fundraisers associated with the action. | [optional] 
**location** | **string** | The location of the action. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListActionLocations\&quot;&gt;&lt;b&gt;Action Locations&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**opportunity_id** | **string** | The immutable system record ID of the opportunity associated with the action. | [optional] 
**outcome** | **string** | The outcome of the action. Available values are &lt;i&gt;Successful&lt;/i&gt; and &lt;i&gt;Unsuccessful&lt;/i&gt;. | [optional] 
**priority** | **string** | The priority of the action. Available values are &lt;i&gt;Normal&lt;/i&gt;, &lt;i&gt;High&lt;/i&gt;, and &lt;i&gt;Low&lt;/i&gt;. The default is &lt;i&gt;Normal&lt;/i&gt;. | [optional] 
**start_time** | **string** | The start time of the action. Uses 24-hour time in the &lt;i&gt;HH:mm&lt;/i&gt; format. For example, 17:30 represents 5:30 p.m. | [optional] 
**status** | **string** | The action status. If the system is configured to use custom action statuses, available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListActionStatusTypes\&quot;&gt;&lt;b&gt;Action Status&lt;/b&gt;&lt;/a&gt; table. If not, this field computes the status based on the &lt;code&gt;completed&lt;/code&gt; and &lt;code&gt;date&lt;/code&gt; properties: If an action is not completed and has a current or future date, the status is Open; if an action is not completed and has a past date, the status is Past due; and if an action is completed, the status is Completed. | [optional] 
**summary** | **string** | The short description of the action that appears at the top of the record. Character limit: 255. | [optional] 
**type** | **string** | Additional description of the action to complement the category. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListActionTypes\&quot;&gt;&lt;b&gt;Actions&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

