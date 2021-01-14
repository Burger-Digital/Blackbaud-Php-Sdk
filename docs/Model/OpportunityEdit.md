# # OpportunityEdit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ask_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**ask_date** | [**\DateTime**](\DateTime.md) | The date when the solicitation was made. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**campaign_id** | **string** | The immutable system record ID of the campaign associated with the opportunity. The campaign sets the overall objectives for raising money. | [optional]
**deadline** | [**\DateTime**](\DateTime.md) | The goal date for the opportunity to result in a gift. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**expected_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**expected_date** | [**\DateTime**](\DateTime.md) | The date when the prospect is expected to give in response to the opportunity. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**fund_id** | **string** | The immutable system record ID of the fund associated with the opportunity. The fund designates the specific financial purpose of a gift and identifies the financial account for that gift. | [optional]
**funded_amount** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Currency**](Currency.md) |  | [optional]
**funded_date** | [**\DateTime**](\DateTime.md) | The date when the prospect gave in response to the opportunity. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot;&gt;ISO-8601 format: &lt;/a&gt;&lt;i&gt;2015-09-18T16:25:00&lt;/i&gt;. | [optional]
**fundraisers** | [**\BurgerDigital\BlackbaudPhpSdk\Model\Fundraiser[]**](Fundraiser.md) | The set of immutable constituent system record IDs for the fundraisers assigned to the opportunity. | [optional]
**inactive** | **bool** | Indicates whether the opportunity is inactive. | [optional]
**name** | **string** | The name that identifies the opportunity throughout the program, such as in lists or on constituent records. Character limit: 255. This property cannot be set to null. | [optional]
**purpose** | **string** | The intended use for any money raised as a result of the opportunity. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58e3b2597c1af25c58b9c4e3/operations/ListOpportunityPurposes\&quot;&gt;&lt;b&gt;Purposes&lt;/b&gt;&lt;/a&gt; table. This property cannot be set to null. | [optional]
**status** | **string** | The status that indicates where the opportunity is in the solicitation process. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/58e3b2597c1af25c58b9c4e3/operations/ListOpportunityStatuses\&quot;&gt;&lt;b&gt;Proposal Status&lt;/b&gt;&lt;/a&gt; table. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
