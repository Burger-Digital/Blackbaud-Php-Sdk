# BurgerDigital\BlackbaudPhpSdk\EmailAddressApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstituentEmailAddress()**](EmailAddressApi.md#createConstituentEmailAddress) | **POST** /emailaddresses | Email address (Create)
[**deleteConstituentEmailAddress()**](EmailAddressApi.md#deleteConstituentEmailAddress) | **DELETE** /emailaddresses/{email_address_id} | Email address (Delete)
[**editConstituentEmailAddress()**](EmailAddressApi.md#editConstituentEmailAddress) | **PATCH** /emailaddresses/{email_address_id} | Email address (Edit)
[**listConstituentEmailAddressesAllConstituents()**](EmailAddressApi.md#listConstituentEmailAddressesAllConstituents) | **GET** /emailaddresses | Email address list (All constituents)
[**listConstituentEmailAddressesSingleConstituent()**](EmailAddressApi.md#listConstituentEmailAddressesSingleConstituent) | **GET** /constituents/{constituent_id}/emailaddresses | Email address list (Single constituent)
[**listEmailAddressTypes()**](EmailAddressApi.md#listEmailAddressTypes) | **GET** /emailaddresstypes | Email address types


## `createConstituentEmailAddress()`

```php
createConstituentEmailAddress($email_address_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Email address (Create)

Creates a constituent email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_add = new \BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressAdd | An object that represents the email address to create.

try {
    $result = $apiInstance->createConstituentEmailAddress($email_address_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->createConstituentEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressAdd**](../Model/EmailAddressAdd.md)| An object that represents the email address to create. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\PostResponse**](../Model/PostResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConstituentEmailAddress()`

```php
deleteConstituentEmailAddress($email_address_id)
```

Email address (Delete)

Deletes a constituent email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 'email_address_id_example'; // string | The immutable system record ID of the email address to delete.

try {
    $apiInstance->deleteConstituentEmailAddress($email_address_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->deleteConstituentEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **string**| The immutable system record ID of the email address to delete. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editConstituentEmailAddress()`

```php
editConstituentEmailAddress($email_address_id, $email_address_edit)
```

Email address (Edit)

Edits a constituent email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address_id = 'email_address_id_example'; // string | The immutable system record ID of the email address to edit.
$email_address_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressEdit | An object that represents the properties of the email address to edit.

try {
    $apiInstance->editConstituentEmailAddress($email_address_id, $email_address_edit);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->editConstituentEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address_id** | **string**| The immutable system record ID of the email address to edit. |
 **email_address_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\EmailAddressEdit**](../Model/EmailAddressEdit.md)| An object that represents the properties of the email address to edit. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentEmailAddressesAllConstituents()`

```php
listConstituentEmailAddressesAllConstituents($date_added, $last_modified, $include_inactive, $sort_token, $constituent_id, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionEmailAddressRead
```

Email address list (All constituents)

Returns a paginated list of email addresses.  <p />  The default sorting behavior is to list email addresses in ascending order based on when they were created.  <p />  However, the <code>last_modified</code> parameter overrides the default sorting behavior to list email addresses in ascending order based on when they were last modified. The <code>last_modified</code> parameter also adds the <code>sort_token</code> parameter to the <code>next_link</code> URL to ensure that email addresses are stably sorted and that order persists when changes occur while working through a paginated list.  <p />  If the <code>last_modified</code> and <code>date_added</code> parameters are both specified, the sorting behavior is to list email addresses based on when they were last modified.  <p /><b>Note:</b> This endpoint returns data with an average latency of about 30 minutes. In addition, historic records have a default <code>date_added</code> timestamp of 1600-01-01 00:00:00.000 +00:00. The timestamp for newer records reflects when the records were added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_added = 'date_added_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for email addresses created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$last_modified = 'last_modified_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for email addresses modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive email addresses in the response.
$sort_token = 'sort_token_example'; // string | Represents a token filter to provide the next stable-sorted list of email addresses. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request.
$constituent_id = 'constituent_id_example'; // string | Represents a list of constituent identifiers. Returns email addresses if any of the specified constituent identifiers match any of the email addresses' associated constituents. For example, \"constituent_id=280&amp;constituent_id=1232\" returns email addresses with either \"280\" or \"1232\" constituent identifiers.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituentEmailAddressesAllConstituents($date_added, $last_modified, $include_inactive, $sort_token, $constituent_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->listConstituentEmailAddressesAllConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_added** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for email addresses created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **last_modified** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for email addresses modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive email addresses in the response. | [optional]
 **sort_token** | **string**| Represents a token filter to provide the next stable-sorted list of email addresses. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. | [optional]
 **constituent_id** | **string**| Represents a list of constituent identifiers. Returns email addresses if any of the specified constituent identifiers match any of the email addresses&#39; associated constituents. For example, \&quot;constituent_id&#x3D;280&amp;amp;constituent_id&#x3D;1232\&quot; returns email addresses with either \&quot;280\&quot; or \&quot;1232\&quot; constituent identifiers. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionEmailAddressRead**](../Model/ApiCollectionEmailAddressRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentEmailAddressesSingleConstituent()`

```php
listConstituentEmailAddressesSingleConstituent($constituent_id, $include_inactive): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionEmailAddressRead
```

Email address list (Single constituent)

Returns a list of email addresses for the constituent with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the email addresses for.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive email addresses in the response.

try {
    $result = $apiInstance->listConstituentEmailAddressesSingleConstituent($constituent_id, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->listConstituentEmailAddressesSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the email addresses for. |
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive email addresses in the response. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionEmailAddressRead**](../Model/ApiCollectionEmailAddressRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailAddressTypes()`

```php
listEmailAddressTypes(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Email address types

Returns a list of active email address types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2Blackbaud OAuth 2.0 ServiceImplicit
$config = BurgerDigital\BlackbaudPhpSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listEmailAddressTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->listEmailAddressTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString**](../Model/ApiCollectionString.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
