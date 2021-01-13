# BurgerDigital\BlackbaudPhpSdk\GiftApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConstituentGiftFirst()**](GiftApi.md#getConstituentGiftFirst) | **GET** /constituents/{constituent_id}/givingsummary/first | First gift (Get)
[**getConstituentGiftGreatest()**](GiftApi.md#getConstituentGiftGreatest) | **GET** /constituents/{constituent_id}/givingsummary/greatest | Greatest gift (Get)
[**getConstituentGiftLatest()**](GiftApi.md#getConstituentGiftLatest) | **GET** /constituents/{constituent_id}/givingsummary/latest | Latest gift (Get)
[**getConstituentGivingSummaryLifetime()**](GiftApi.md#getConstituentGivingSummaryLifetime) | **GET** /constituents/{constituent_id}/givingsummary/lifetimegiving | Lifetime giving (Get)


## `getConstituentGiftFirst()`

```php
getConstituentGiftFirst($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead
```

First gift (Get)

Returns the first gift recorded for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the first gift for.

try {
    $result = $apiInstance->getConstituentGiftFirst($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getConstituentGiftFirst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the first gift for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead**](../Model/GivingSummaryRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentGiftGreatest()`

```php
getConstituentGiftGreatest($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead
```

Greatest gift (Get)

Returns the greatest gift recorded for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the greatest gift for.

try {
    $result = $apiInstance->getConstituentGiftGreatest($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getConstituentGiftGreatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the greatest gift for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead**](../Model/GivingSummaryRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentGiftLatest()`

```php
getConstituentGiftLatest($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead
```

Latest gift (Get)

Returns the latest gift recorded for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the latest gift for.

try {
    $result = $apiInstance->getConstituentGiftLatest($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getConstituentGiftLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the latest gift for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\GivingSummaryRead**](../Model/GivingSummaryRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentGivingSummaryLifetime()`

```php
getConstituentGivingSummaryLifetime($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\LifetimeGivingRead
```

Lifetime giving (Get)

Returns the lifetime giving information for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the lifetime giving information for.

try {
    $result = $apiInstance->getConstituentGivingSummaryLifetime($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getConstituentGivingSummaryLifetime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the lifetime giving information for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\LifetimeGivingRead**](../Model/LifetimeGivingRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
