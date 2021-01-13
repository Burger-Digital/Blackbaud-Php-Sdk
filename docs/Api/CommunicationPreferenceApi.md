# BurgerDigital\BlackbaudPhpSdk\CommunicationPreferenceApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstituentCommunicationPreference()**](CommunicationPreferenceApi.md#createConstituentCommunicationPreference) | **POST** /communicationpreferences | Communication preference (Create)
[**deleteConstituentCommunicationPreference()**](CommunicationPreferenceApi.md#deleteConstituentCommunicationPreference) | **DELETE** /communicationpreferences/{communication_preference_id} | Communication preference (Delete)
[**editConstituentCommunicationPreference()**](CommunicationPreferenceApi.md#editConstituentCommunicationPreference) | **PATCH** /communicationpreferences/{communication_preference_id} | Communication preference (Edit)
[**listCommunicationPreferences()**](CommunicationPreferenceApi.md#listCommunicationPreferences) | **GET** /communicationpreferences | Communication preferences
[**listConstituentCommunicationPreferencesSingleConstituent()**](CommunicationPreferenceApi.md#listConstituentCommunicationPreferencesSingleConstituent) | **GET** /constituents/{constituent_id}/communicationpreferences | Communication preference list (Single constituent)


## `createConstituentCommunicationPreference()`

```php
createConstituentCommunicationPreference($communication_preference_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Communication preference (Create)

Creates a constituent communication preference. This endpoint will be deprecated in a future version of the Constituent API. Please reference the equivalent endpoint, <a href=\"https://developer.sky.blackbaud.com/docs/services/communication-preference/operations/CreateConstituentSolicitCode\">Constituent solicit code (Post)</a>, in the Communication Preference API instead.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\CommunicationPreferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_preference_add = new \BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceAdd | An object that represents the communication preference to create.

try {
    $result = $apiInstance->createConstituentCommunicationPreference($communication_preference_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationPreferenceApi->createConstituentCommunicationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_preference_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceAdd**](../Model/CommunicationPreferenceAdd.md)| An object that represents the communication preference to create. | [optional]

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

## `deleteConstituentCommunicationPreference()`

```php
deleteConstituentCommunicationPreference($communication_preference_id)
```

Communication preference (Delete)

Deletes a constituent communication preference. This endpoint will be deprecated in a future version of the Constituent API. Please reference the equivalent endpoint, <a href=\"https://developer.sky.blackbaud.com/docs/services/communication-preference/operations/DeleteConstituentSolicitCode\">Constituent solicit code (Delete)</a>, in the Communication Preference API instead.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\CommunicationPreferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_preference_id = 'communication_preference_id_example'; // string | The immutable system record ID of the communication preference to delete.

try {
    $apiInstance->deleteConstituentCommunicationPreference($communication_preference_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationPreferenceApi->deleteConstituentCommunicationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_preference_id** | **string**| The immutable system record ID of the communication preference to delete. |

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

## `editConstituentCommunicationPreference()`

```php
editConstituentCommunicationPreference($communication_preference_id, $communication_preference_edit)
```

Communication preference (Edit)

Edits a constituent communication preference. This endpoint will be deprecated in a future version of the Constituent API. Please reference the equivalent endpoint, <a href=\"https://developer.sky.blackbaud.com/docs/services/communication-preference/operations/EditConstituentSolicitCode\">Constituent solicit code (Patch)</a>, in the Communication Preference API instead.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\CommunicationPreferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_preference_id = 'communication_preference_id_example'; // string | The immutable system record ID of the communication preference to edit.
$communication_preference_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceEdit | An object that represents the properties of the communication preference to edit.

try {
    $apiInstance->editConstituentCommunicationPreference($communication_preference_id, $communication_preference_edit);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationPreferenceApi->editConstituentCommunicationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_preference_id** | **string**| The immutable system record ID of the communication preference to edit. |
 **communication_preference_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\CommunicationPreferenceEdit**](../Model/CommunicationPreferenceEdit.md)| An object that represents the properties of the communication preference to edit. | [optional]

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

## `listCommunicationPreferences()`

```php
listCommunicationPreferences(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Communication preferences

Returns a list of available communication preference types. This endpoint will be deprecated in a future version of the Constituent API. Please reference the equivalent endpoint, <a href=\"https://developer.sky.blackbaud.com/docs/services/communication-preference/operations/ListSolicitCodes\">Solicit codes (Get)</a>, in the Communication Preference API instead.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\CommunicationPreferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCommunicationPreferences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationPreferenceApi->listCommunicationPreferences: ', $e->getMessage(), PHP_EOL;
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

## `listConstituentCommunicationPreferencesSingleConstituent()`

```php
listConstituentCommunicationPreferencesSingleConstituent($constituent_id, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCommunicationPreferenceRead
```

Communication preference list (Single constituent)

Returns a list of communication preferences for a constituent. This endpoint will be deprecated in a future version of the Constituent API. Please reference the equivalent endpoint, <a href=\"https://developer.sky.blackbaud.com/docs/services/communication-preference/operations/ListConstituentSolicitCodesSingleConstituent\">Constituent solicit code list (Single constituent)</a>, in the Communication Preference API instead.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\CommunicationPreferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the communication preferences for.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituentCommunicationPreferencesSingleConstituent($constituent_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationPreferenceApi->listConstituentCommunicationPreferencesSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the communication preferences for. |
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCommunicationPreferenceRead**](../Model/ApiCollectionCommunicationPreferenceRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
