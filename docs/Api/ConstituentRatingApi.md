# BurgerDigital\BlackbaudPhpSdk\ConstituentRatingApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstituentRating()**](ConstituentRatingApi.md#createConstituentRating) | **POST** /ratings | Rating (Create)
[**deleteConstituentRating()**](ConstituentRatingApi.md#deleteConstituentRating) | **DELETE** /ratings/{rating_id} | Rating (Delete)
[**editConstituentRating()**](ConstituentRatingApi.md#editConstituentRating) | **PATCH** /ratings/{rating_id} | Rating (Edit)
[**listConstituentRatingsSingleConstituent()**](ConstituentRatingApi.md#listConstituentRatingsSingleConstituent) | **GET** /constituents/{constituent_id}/ratings | Rating list (Single constituent)
[**listRatingCategories()**](ConstituentRatingApi.md#listRatingCategories) | **GET** /ratings/categories | Rating categories
[**listRatingCategoryValues()**](ConstituentRatingApi.md#listRatingCategoryValues) | **GET** /ratings/categories/values | Rating category values
[**listRatingSources()**](ConstituentRatingApi.md#listRatingSources) | **GET** /ratings/sources | Rating sources


## `createConstituentRating()`

```php
createConstituentRating($rating_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Rating (Create)

Creates a constituent rating.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_add = new \BurgerDigital\BlackbaudPhpSdk\Model\RatingAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\RatingAdd | An object that represents the rating to create.

try {
    $result = $apiInstance->createConstituentRating($rating_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->createConstituentRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\RatingAdd**](../Model/RatingAdd.md)| An object that represents the rating to create. | [optional]

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

## `deleteConstituentRating()`

```php
deleteConstituentRating($rating_id)
```

Rating (Delete)

Deletes a constituent rating.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 'rating_id_example'; // string | The immutable system record ID of the rating to delete.

try {
    $apiInstance->deleteConstituentRating($rating_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->deleteConstituentRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**| The immutable system record ID of the rating to delete. |

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

## `editConstituentRating()`

```php
editConstituentRating($rating_id, $rating_edit)
```

Rating (Edit)

Edits a constituent rating.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_id = 'rating_id_example'; // string | The immutable system record ID of the rating to edit.
$rating_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\RatingEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\RatingEdit | An object that represents updated properties of the rating to edit.

try {
    $apiInstance->editConstituentRating($rating_id, $rating_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->editConstituentRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating_id** | **string**| The immutable system record ID of the rating to edit. |
 **rating_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\RatingEdit**](../Model/RatingEdit.md)| An object that represents updated properties of the rating to edit. | [optional]

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

## `listConstituentRatingsSingleConstituent()`

```php
listConstituentRatingsSingleConstituent($constituent_id, $include_inactive, $most_recent_only): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingRead
```

Rating list (Single constituent)

Returns a list of ratings for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the ratings for.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive ratings in the response.
$most_recent_only = True; // bool | Set this parameter to \"true\" to include only the most recent ratings

try {
    $result = $apiInstance->listConstituentRatingsSingleConstituent($constituent_id, $include_inactive, $most_recent_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->listConstituentRatingsSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the ratings for. |
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive ratings in the response. | [optional]
 **most_recent_only** | **bool**| Set this parameter to \&quot;true\&quot; to include only the most recent ratings | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingRead**](../Model/ApiCollectionRatingRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRatingCategories()`

```php
listRatingCategories($include_inactive, $source_name): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingCategoryRead
```

Rating categories

Returns a list of all available rating categories.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive categories in the response.
$source_name = 'source_name_example'; // string | The source to retrieve categories for. To return all categories, do not include <code>source_name</code>. To return all categories that do not have a source, include <code>source_name</code> in the request URL with an empty value.

try {
    $result = $apiInstance->listRatingCategories($include_inactive, $source_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->listRatingCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive categories in the response. | [optional]
 **source_name** | **string**| The source to retrieve categories for. To return all categories, do not include &lt;code&gt;source_name&lt;/code&gt;. To return all categories that do not have a source, include &lt;code&gt;source_name&lt;/code&gt; in the request URL with an empty value. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingCategoryRead**](../Model/ApiCollectionRatingCategoryRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRatingCategoryValues()`

```php
listRatingCategoryValues($category_name, $source_name): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Rating category values

Returns a list of rating values for code table categories.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_name = 'category_name_example'; // string | The name of the code table category to return values for.
$source_name = 'source_name_example'; // string | Required when the rating category has a source. The name of the rating source for the category.

try {
    $result = $apiInstance->listRatingCategoryValues($category_name, $source_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->listRatingCategoryValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_name** | **string**| The name of the code table category to return values for. | [optional]
 **source_name** | **string**| Required when the rating category has a source. The name of the rating source for the category. | [optional]

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

## `listRatingSources()`

```php
listRatingSources($include_inactive): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingSourceRead
```

Rating sources

Returns a list of all available rating sources.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive sources in the response.

try {
    $result = $apiInstance->listRatingSources($include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentRatingApi->listRatingSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive sources in the response. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionRatingSourceRead**](../Model/ApiCollectionRatingSourceRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
