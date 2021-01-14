# # OpportunityRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable system record ID of the opportunity. | [optional]
**ask_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**ask_date** | [**\DateTime**](\DateTime.md) | The date when the solicitation was made. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**campaign_id** | **string** | The immutable system record ID of the campaign associated with the opportunity. The campaign sets the overall objectives for raising money. | [optional]
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the opportunity. | [optional]
**date_added** | [**\DateTime**](\DateTime.md) | The date when the opportunity was created. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | The date when the opportunity was last modified. Includes an offset from UTC in &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;1969-11-21T10:29:43-04:00&lt;/i&gt;. | [optional]
**deadline** | [**\DateTime**](\DateTime.md) | The goal date for the opportunity to result in a gift. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**expected_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**expected_date** | [**\DateTime**](\DateTime.md) | The date when the prospect is expected to give in response to the opportunity. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**fund_id** | **string** | The immutable system record ID of the fund associated with the opportunity. The fund designates the specific financial purpose of a gift and identifies the financial account for that gift. | [optional]
**funded_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**funded_date** | [**\DateTime**](\DateTime.md) | The date when the prospect gave in response to the opportunity. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**fundraisers** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Fundraiser[]**](Fundraiser.md) | The set of immutable constituent system record IDs for the fundraisers assigned to the opportunity. | [optional]
**inactive** | **bool** | Indicates whether the opportunity is inactive. | [optional]
**linked_gifts** | **string[]** | The  immutable system record IDs of the gifts related to the opportunity. | [optional]
**name** | **string** | The name that identifies the opportunity throughout the program, such as in lists or on constituent records. | [optional]
**purpose** | **string** | The intended use for any money raised as a result of the opportunity. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58e3b2597c1af25c58b9c4e3/operations/ListOpportunityPurposes\&quot;&gt;&lt;b&gt;Purposes&lt;/b&gt;&lt;/a&gt; table. | [optional]
**status** | **string** | The status that indicates where the opportunity is in the solicitation process. This property can experience a data latency of about 10 minutes on the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58e3b2597c1af25c58b9c4e3/operations/58e3b27ba9db950fa048c8a9\&quot;&gt;Opportunity (Get) endpoint&lt;/a&gt;. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58e3b2597c1af25c58b9c4e3/operations/ListOpportunityStatuses\&quot;&gt;&lt;b&gt;Proposal Status&lt;/b&gt;&lt;/a&gt; table. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
