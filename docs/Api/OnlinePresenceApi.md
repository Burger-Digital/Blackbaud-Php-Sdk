# BurgerDigital\BlackbaudPhpSdk\OnlinePresenceApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstituentOnlinePresence()**](OnlinePresenceApi.md#createConstituentOnlinePresence) | **POST** /onlinepresences | Online presence (Create)
[**deleteConstituentOnlinePresence()**](OnlinePresenceApi.md#deleteConstituentOnlinePresence) | **DELETE** /onlinepresences/{online_presence_id} | Online presence (Delete)
[**editConstituentOnlinePresence()**](OnlinePresenceApi.md#editConstituentOnlinePresence) | **PATCH** /onlinepresences/{online_presence_id} | Online presence (Edit)
[**listConstituentOnlinePresencesAllConstituents()**](OnlinePresenceApi.md#listConstituentOnlinePresencesAllConstituents) | **GET** /onlinepresences | Online presence list (All constituents)
[**listConstituentOnlinePresencesSingleConstituent()**](OnlinePresenceApi.md#listConstituentOnlinePresencesSingleConstituent) | **GET** /constituents/{constituent_id}/onlinepresences | Online presence list (Single constituent)
[**listOnlinePresenceTypes()**](OnlinePresenceApi.md#listOnlinePresenceTypes) | **GET** /onlinepresencetypes | Online presence types


## `createConstituentOnlinePresence()`

```php
createConstituentOnlinePresence($online_presence_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Online presence (Create)

Creates a constituent online presence.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$online_presence_add = new \BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceAdd | An object that represents the online presence to create.

try {
    $result = $apiInstance->createConstituentOnlinePresence($online_presence_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->createConstituentOnlinePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **online_presence_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceAdd**](../Model/OnlinePresenceAdd.md)| An object that represents the online presence to create. | [optional]

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

## `deleteConstituentOnlinePresence()`

```php
deleteConstituentOnlinePresence($online_presence_id)
```

Online presence (Delete)

Deletes a constituent online presence.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$online_presence_id = 'online_presence_id_example'; // string | The immutable system record ID of the constituent online presence to delete.

try {
    $apiInstance->deleteConstituentOnlinePresence($online_presence_id);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->deleteConstituentOnlinePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **online_presence_id** | **string**| The immutable system record ID of the constituent online presence to delete. |

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

## `editConstituentOnlinePresence()`

```php
editConstituentOnlinePresence($online_presence_id, $online_presence_edit)
```

Online presence (Edit)

Edits a constituent online presence.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$online_presence_id = 'online_presence_id_example'; // string | The immutable system record ID of the online presence to edit.
$online_presence_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceEdit | An object that represents the properties of the online presence to edit.

try {
    $apiInstance->editConstituentOnlinePresence($online_presence_id, $online_presence_edit);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->editConstituentOnlinePresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **online_presence_id** | **string**| The immutable system record ID of the online presence to edit. |
 **online_presence_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\OnlinePresenceEdit**](../Model/OnlinePresenceEdit.md)| An object that represents the properties of the online presence to edit. | [optional]

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

## `listConstituentOnlinePresencesAllConstituents()`

```php
listConstituentOnlinePresencesAllConstituents($date_added, $last_modified, $include_inactive, $sort_token, $constituent_id, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionOnlinePresenceRead
```

Online presence list (All constituents)

Returns a paginated list of online presences.  <p />  The default sorting behavior is to list online presences in ascending order based on when they were created.  <p />  However, the <code>last_modified</code> parameter overrides the default sorting behavior to list online presences in ascending order based on when they were last modified. The <code>last_modified</code> parameter also adds the <code>sort_token</code> parameter to the <code>next_link</code> URL to ensure that online presences are stably sorted and that order persists when changes occur while working through a paginated list.  <p />  If the <code>last_modified</code> and <code>date_added</code> parameters are both specified, the sorting behavior is to list online presences based on when they were last modified.  <p /><b>Note:</b> This endpoint returns data with an average latency of about 30 minutes. In addition, historic records have a default <code>date_added</code> timestamp of 1600-01-01 00:00:00.000 +00:00. The timestamp for newer records reflects when the records were added.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_added = 'date_added_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for online presences created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$last_modified = 'last_modified_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for online presences modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive online presences in the response.
$sort_token = 'sort_token_example'; // string | Represents a token filter to provide the next stable-sorted list of online presences. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request.
$constituent_id = 'constituent_id_example'; // string | Represents a list of constituent identifiers. Returns online presences if any of the specified constituent identifiers match any of the online presences' associated constituents. For example, \"constituent_id=280&amp;constituent_id=1232\" returns online presences with either \"280\" or \"1232\" constituent identifiers.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituentOnlinePresencesAllConstituents($date_added, $last_modified, $include_inactive, $sort_token, $constituent_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->listConstituentOnlinePresencesAllConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_added** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for online presences created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **last_modified** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for online presences modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive online presences in the response. | [optional]
 **sort_token** | **string**| Represents a token filter to provide the next stable-sorted list of online presences. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. | [optional]
 **constituent_id** | **string**| Represents a list of constituent identifiers. Returns online presences if any of the specified constituent identifiers match any of the online presences&#39; associated constituents. For example, \&quot;constituent_id&#x3D;280&amp;amp;constituent_id&#x3D;1232\&quot; returns online presences with either \&quot;280\&quot; or \&quot;1232\&quot; constituent identifiers. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionOnlinePresenceRead**](../Model/ApiCollectionOnlinePresenceRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentOnlinePresencesSingleConstituent()`

```php
listConstituentOnlinePresencesSingleConstituent($constituent_id, $include_inactive): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionOnlinePresenceRead
```

Online presence list (Single constituent)

Returns a list of online presences for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the online presences for.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive online presences in the response.

try {
    $result = $apiInstance->listConstituentOnlinePresencesSingleConstituent($constituent_id, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->listConstituentOnlinePresencesSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the online presences for. |
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive online presences in the response. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionOnlinePresenceRead**](../Model/ApiCollectionOnlinePresenceRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOnlinePresenceTypes()`

```php
listOnlinePresenceTypes(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Online presence types

Returns a list of active online presence types.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\OnlinePresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listOnlinePresenceTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlinePresenceApi->listOnlinePresenceTypes: ', $e->getMessage(), PHP_EOL;
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
