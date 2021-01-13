# BurgerDigital\BlackbaudPhpSdk\ConstituentApi

All URIs are relative to https://api.sky.blackbaud.com/constituent/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstituent()**](ConstituentApi.md#createConstituent) | **POST** /constituents | Constituent (Create)
[**createConstituentAttachment()**](ConstituentApi.md#createConstituentAttachment) | **POST** /constituents/attachments | Constituent attachment (Create)
[**createConstituentCode()**](ConstituentApi.md#createConstituentCode) | **POST** /constituentcodes | Constituent code (Create)
[**createConstituentCustomField()**](ConstituentApi.md#createConstituentCustomField) | **POST** /constituents/customfields | Constituent custom field (Create)
[**createDocument()**](ConstituentApi.md#createDocument) | **POST** /documents | Document (Create)
[**deleteConstituentAttachment()**](ConstituentApi.md#deleteConstituentAttachment) | **DELETE** /constituents/attachments/{attachment_id} | Constituent attachment (Delete)
[**deleteConstituentCode()**](ConstituentApi.md#deleteConstituentCode) | **DELETE** /constituentcodes/{constituent_code_id} | Constituent code (Delete)
[**deleteConstituentCustomField()**](ConstituentApi.md#deleteConstituentCustomField) | **DELETE** /constituents/customfields/{custom_field_id} | Constituent custom field (Delete)
[**editConstituent()**](ConstituentApi.md#editConstituent) | **PATCH** /constituents/{constituent_id} | Constituent (Edit)
[**editConstituentAttachment()**](ConstituentApi.md#editConstituentAttachment) | **PATCH** /constituents/attachments/{attachment_id} | Constituent attachment (Edit)
[**editConstituentCode()**](ConstituentApi.md#editConstituentCode) | **PATCH** /constituentcodes/{constituent_code_id} | Constituent code (Edit)
[**editConstituentCustomField()**](ConstituentApi.md#editConstituentCustomField) | **PATCH** /constituents/customfields/{custom_field_id} | Constituent custom field (Edit)
[**getConstituent()**](ConstituentApi.md#getConstituent) | **GET** /constituents/{constituent_id} | Constituent (Get)
[**getConstituentCode()**](ConstituentApi.md#getConstituentCode) | **GET** /constituents/constituentcodes/{constituent_code_id} | Constituent code (Get)
[**getConstituentProfilePicture()**](ConstituentApi.md#getConstituentProfilePicture) | **GET** /constituents/{constituent_id}/profilepicture | Profile picture (Get)
[**getCurrencyConfiguration()**](ConstituentApi.md#getCurrencyConfiguration) | **GET** /currencyconfiguration | Currency configuration (Get)
[**listAttachmentTags()**](ConstituentApi.md#listAttachmentTags) | **GET** /attachmenttags | Attachment tags
[**listConstituentAttachmentsSingleConstituent()**](ConstituentApi.md#listConstituentAttachmentsSingleConstituent) | **GET** /constituents/{constituent_id}/attachments | Constituent attachment list (Single constituent)
[**listConstituentCodeTypes()**](ConstituentApi.md#listConstituentCodeTypes) | **GET** /constituentcodetypes | Constituent code types
[**listConstituentCodesAllConstituents()**](ConstituentApi.md#listConstituentCodesAllConstituents) | **GET** /constituents/constituentcodes | Constituent code list (All constituents)
[**listConstituentCodesSingleConstituent()**](ConstituentApi.md#listConstituentCodesSingleConstituent) | **GET** /constituents/{constituent_id}/constituentcodes | Constituent code list (Single constituent)
[**listConstituentCustomFieldCategories()**](ConstituentApi.md#listConstituentCustomFieldCategories) | **GET** /constituents/customfields/categories | Constituent custom field categories
[**listConstituentCustomFieldCategoryDetails()**](ConstituentApi.md#listConstituentCustomFieldCategoryDetails) | **GET** /constituents/customfields/categories/details | Constituent custom field category details
[**listConstituentCustomFieldCategoryValues()**](ConstituentApi.md#listConstituentCustomFieldCategoryValues) | **GET** /constituents/customfields/categories/values | Constituent custom field category values
[**listConstituentCustomFieldsAllConstituents()**](ConstituentApi.md#listConstituentCustomFieldsAllConstituents) | **GET** /constituents/customfields | Constituent custom field list (All constituents)
[**listConstituentCustomFieldsSingleConstituent()**](ConstituentApi.md#listConstituentCustomFieldsSingleConstituent) | **GET** /constituents/{constituent_id}/customfields | Constituent custom field list (Single constituent)
[**listConstituentFundraiserAssignmentsSingleConstituent()**](ConstituentApi.md#listConstituentFundraiserAssignmentsSingleConstituent) | **GET** /constituents/{constituent_id}/fundraiserassignments | Fundraiser assignment list (Single constituent)
[**listConstituentFundraisersSingleConstituent()**](ConstituentApi.md#listConstituentFundraisersSingleConstituent) | **GET** /constituents/{constituent_id}/fundraisers | Fundraiser list (Single constituent)
[**listConstituents()**](ConstituentApi.md#listConstituents) | **GET** /constituents | Constituent list
[**listGenders()**](ConstituentApi.md#listGenders) | **GET** /genders | Genders
[**listMaritalStatuses()**](ConstituentApi.md#listMaritalStatuses) | **GET** /maritalstatuses | Marital statuses
[**listSuffixes()**](ConstituentApi.md#listSuffixes) | **GET** /suffixes | Suffixes
[**listTitles()**](ConstituentApi.md#listTitles) | **GET** /titles | Titles
[**patchConstituentProfilePicture()**](ConstituentApi.md#patchConstituentProfilePicture) | **PATCH** /constituents/{constituent_id}/profilepicture | Profile picture
[**searchConstituent()**](ConstituentApi.md#searchConstituent) | **GET** /constituents/search | Constituent (Search)


## `createConstituent()`

```php
createConstituent($constituent_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Constituent (Create)

Creates a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_add = new \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentAdd | An object that represents the constituent to create.

try {
    $result = $apiInstance->createConstituent($constituent_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentAdd**](../Model/ConstituentAdd.md)| An object that represents the constituent to create. | [optional]

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

## `createConstituentAttachment()`

```php
createConstituentAttachment($attachment_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Constituent attachment (Create)

Creates a constituent attachment.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_add = new \BurgerDigital\BlackbaudPhpSdk\Model\AttachmentAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\AttachmentAdd | An object that represents the attachment to create.

try {
    $result = $apiInstance->createConstituentAttachment($attachment_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createConstituentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\AttachmentAdd**](../Model/AttachmentAdd.md)| An object that represents the attachment to create. | [optional]

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

## `createConstituentCode()`

```php
createConstituentCode($constituent_code_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Constituent code (Create)

Creates a constituent code for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_code_add = new \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeAdd | An object that represents the constituent code to create.

try {
    $result = $apiInstance->createConstituentCode($constituent_code_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createConstituentCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_code_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeAdd**](../Model/ConstituentCodeAdd.md)| An object that represents the constituent code to create. | [optional]

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

## `createConstituentCustomField()`

```php
createConstituentCustomField($custom_field_add): \BurgerDigital\BlackbaudPhpSdk\Model\PostResponse
```

Constituent custom field (Create)

Creates a constituent custom field.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_add = new \BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldAdd | An object that represents the custom field to create.

try {
    $result = $apiInstance->createConstituentCustomField($custom_field_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createConstituentCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field_add** | [**\BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldAdd**](../Model/CustomFieldAdd.md)| An object that represents the custom field to create. | [optional]

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

## `createDocument()`

```php
createDocument($new_document_info): \BurgerDigital\BlackbaudPhpSdk\Model\FileDefinition
```

Document (Create)

Creates a document upload location and unique document identifier for physical attachments.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_document_info = new \BurgerDigital\BlackbaudPhpSdk\Model\NewDocumentInfo(); // \BurgerDigital\BlackbaudPhpSdk\Model\NewDocumentInfo | An object that represents the document to upload.

try {
    $result = $apiInstance->createDocument($new_document_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_document_info** | [**\BurgerDigital\BlackbaudPhpSdk\Model\NewDocumentInfo**](../Model/NewDocumentInfo.md)| An object that represents the document to upload. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\FileDefinition**](../Model/FileDefinition.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConstituentAttachment()`

```php
deleteConstituentAttachment($attachment_id)
```

Constituent attachment (Delete)

Deletes a constituent attachment.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The immutable system record ID of the attachment to delete.

try {
    $apiInstance->deleteConstituentAttachment($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->deleteConstituentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The immutable system record ID of the attachment to delete. |

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

## `deleteConstituentCode()`

```php
deleteConstituentCode($constituent_code_id)
```

Constituent code (Delete)

Deletes a constituent code.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_code_id = 'constituent_code_id_example'; // string | The immutable system record ID of the constituent code to delete.

try {
    $apiInstance->deleteConstituentCode($constituent_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->deleteConstituentCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_code_id** | **string**| The immutable system record ID of the constituent code to delete. |

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

## `deleteConstituentCustomField()`

```php
deleteConstituentCustomField($custom_field_id)
```

Constituent custom field (Delete)

Deletes a constituent custom field.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string | The immutable system record ID of the custom field to delete.

try {
    $apiInstance->deleteConstituentCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->deleteConstituentCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field_id** | **string**| The immutable system record ID of the custom field to delete. |

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

## `editConstituent()`

```php
editConstituent($constituent_id, $constituent_edit)
```

Constituent (Edit)

Edits a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to edit.
$constituent_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentEdit | An object that represents the properties of the constituent to edit.

try {
    $apiInstance->editConstituent($constituent_id, $constituent_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->editConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to edit. |
 **constituent_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentEdit**](../Model/ConstituentEdit.md)| An object that represents the properties of the constituent to edit. | [optional]

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

## `editConstituentAttachment()`

```php
editConstituentAttachment($attachment_id, $attachment_edit)
```

Constituent attachment (Edit)

Edits a constituent attachment.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | The immutable system record ID of the attachment to edit.
$attachment_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\AttachmentEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\AttachmentEdit | An object that represents the properties of the attachment to edit.

try {
    $apiInstance->editConstituentAttachment($attachment_id, $attachment_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->editConstituentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The immutable system record ID of the attachment to edit. |
 **attachment_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\AttachmentEdit**](../Model/AttachmentEdit.md)| An object that represents the properties of the attachment to edit. | [optional]

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

## `editConstituentCode()`

```php
editConstituentCode($constituent_code_id, $constituent_code_edit)
```

Constituent code (Edit)

Edits a constituent code.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_code_id = 'constituent_code_id_example'; // string | The immutable system record ID of the constituent code to edit.
$constituent_code_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeEdit | An object that represents the properties of the constituent code to edit.

try {
    $apiInstance->editConstituentCode($constituent_code_id, $constituent_code_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->editConstituentCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_code_id** | **string**| The immutable system record ID of the constituent code to edit. |
 **constituent_code_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeEdit**](../Model/ConstituentCodeEdit.md)| An object that represents the properties of the constituent code to edit. | [optional]

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

## `editConstituentCustomField()`

```php
editConstituentCustomField($custom_field_id, $custom_field_edit)
```

Constituent custom field (Edit)

Edits a constituent custom field.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string | The immutable system record ID of the custom field to edit.
$custom_field_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldEdit | An object that represents the properties of the custom field to edit.

try {
    $apiInstance->editConstituentCustomField($custom_field_id, $custom_field_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->editConstituentCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field_id** | **string**| The immutable system record ID of the custom field to edit. |
 **custom_field_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\CustomFieldEdit**](../Model/CustomFieldEdit.md)| An object that represents the properties of the custom field to edit. | [optional]

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

## `getConstituent()`

```php
getConstituent($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentRead
```

Constituent (Get)

Returns information about a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent for whom information is to be retrieved.

try {
    $result = $apiInstance->getConstituent($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent for whom information is to be retrieved. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentRead**](../Model/ConstituentRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentCode()`

```php
getConstituentCode($constituent_code_id): \BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeRead
```

Constituent code (Get)

Returns a constituent code.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_code_id = 'constituent_code_id_example'; // string | The immutable system record ID of the constituent code to retrieve.

try {
    $result = $apiInstance->getConstituentCode($constituent_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituentCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_code_id** | **string**| The immutable system record ID of the constituent code to retrieve. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ConstituentCodeRead**](../Model/ConstituentCodeRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentProfilePicture()`

```php
getConstituentProfilePicture($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ProfilePictureRead
```

Profile picture (Get)

Returns the current profile picture for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the current profile picture for.

try {
    $result = $apiInstance->getConstituentProfilePicture($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituentProfilePicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the current profile picture for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ProfilePictureRead**](../Model/ProfilePictureRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyConfiguration()`

```php
getCurrencyConfiguration(): \BurgerDigital\BlackbaudPhpSdk\Model\CurrencyConfigurationRead
```

Currency configuration (Get)

Returns the currency configuration settings for the tenant's default country.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrencyConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getCurrencyConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\CurrencyConfigurationRead**](../Model/CurrencyConfigurationRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAttachmentTags()`

```php
listAttachmentTags(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Attachment tags

Returns a list of available attachment tags.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAttachmentTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listAttachmentTags: ', $e->getMessage(), PHP_EOL;
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

## `listConstituentAttachmentsSingleConstituent()`

```php
listConstituentAttachmentsSingleConstituent($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionAttachmentRead
```

Constituent attachment list (Single constituent)

Returns a list of attachments for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the attachments for.

try {
    $result = $apiInstance->listConstituentAttachmentsSingleConstituent($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentAttachmentsSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the attachments for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionAttachmentRead**](../Model/ApiCollectionAttachmentRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentCodeTypes()`

```php
listConstituentCodeTypes(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Constituent code types

Returns a list of all constituent code types.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listConstituentCodeTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCodeTypes: ', $e->getMessage(), PHP_EOL;
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

## `listConstituentCodesAllConstituents()`

```php
listConstituentCodesAllConstituents($include_inactive, $date_added, $last_modified, $sort_token, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentCodeRead
```

Constituent code list (All constituents)

Returns a paginated list of constituent codes.  <p />  The default sorting behavior is to list constituent codes in ascending order based on when they were created.  <p />  However, the <code>last_modified</code> parameter overrides the default sorting behavior to list constituent codes in ascending order based on when they were last modified. The <code>last_modified</code> and <code>date_added</code> parameters also add the <code>sort_token</code> parameter to the <code>next_link</code> URL to ensure that constituent codes are stably sorted and that order persists when changes occur while working through a paginated list.  <p />  If the <code>last_modified</code> and <code>date_added</code> parameters are both specified, the sorting behavior is to list constituent codes based on when they were last modified.  <p /><b>Note:</b> This endpoint returns data with an average latency of about 30 minutes. In addition, historic records have a default <code>date_added</code> timestamp of 1600-01-01 00:00:00.000 +00:00. The timestamp for newer records reflects when the records were added.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive constituent codes in the response.
$date_added = 'date_added_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for constituent codes created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$last_modified = 'last_modified_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for constituent codes modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$sort_token = 'sort_token_example'; // string | Represents a token filter to provide the next stable-sorted list of constituent codes. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituentCodesAllConstituents($include_inactive, $date_added, $last_modified, $sort_token, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCodesAllConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive constituent codes in the response. | [optional]
 **date_added** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for constituent codes created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **last_modified** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for constituent codes modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **sort_token** | **string**| Represents a token filter to provide the next stable-sorted list of constituent codes. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentCodeRead**](../Model/ApiCollectionConstituentCodeRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentCodesSingleConstituent()`

```php
listConstituentCodesSingleConstituent($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentCodeRead
```

Constituent code list (Single constituent)

Returns a list of constituent codes for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the constituent codes for.

try {
    $result = $apiInstance->listConstituentCodesSingleConstituent($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCodesSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the constituent codes for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentCodeRead**](../Model/ApiCollectionConstituentCodeRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentCustomFieldCategories()`

```php
listConstituentCustomFieldCategories(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Constituent custom field categories

Returns a list of custom field categories. <bb-alert bb-alert-type=\"warning\" bb-alert-closeable=\"false\"><b>This endpoint is deprecated. For more detailed custom field category information, use the <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListConstituentCustomFieldCategoryDetails\">Custom field category details</a> endpoint instead.</b></bb-alert>

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listConstituentCustomFieldCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCustomFieldCategories: ', $e->getMessage(), PHP_EOL;
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

## `listConstituentCustomFieldCategoryDetails()`

```php
listConstituentCustomFieldCategoryDetails(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldCategoryRead
```

Constituent custom field category details

Returns a list of custom field category details.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listConstituentCustomFieldCategoryDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCustomFieldCategoryDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldCategoryRead**](../Model/ApiCollectionCustomFieldCategoryRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentCustomFieldCategoryValues()`

```php
listConstituentCustomFieldCategoryValues($category_name): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Constituent custom field category values

Returns a list of custom field category values.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_name = 'category_name_example'; // string | The name of the category to return values for.

try {
    $result = $apiInstance->listConstituentCustomFieldCategoryValues($category_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCustomFieldCategoryValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_name** | **string**| The name of the category to return values for. | [optional]

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

## `listConstituentCustomFieldsAllConstituents()`

```php
listConstituentCustomFieldsAllConstituents($date_added, $last_modified, $sort_token, $category, $value, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldRead
```

Constituent custom field list (All constituents)

Returns a paginated list of constituent custom fields.  <p />  The default sorting behavior is to list constituent custom fields in ascending order based on when they were created.  <p />  However, the <code>last_modified</code> parameter overrides the default sorting behavior to list constituent custom fields in ascending order based on when they were last modified. The <code>last_modified</code> parameter also adds the <code>sort_token</code> parameter to the <code>next_link</code> URL to ensure that constituent custom fields are stably sorted and that order persists when changes occur while working through a paginated list.  <p />  If the <code>last_modified</code> and <code>date_added</code> parameters are both specified, the sorting behavior is to list constituent custom fields based on when they were last modified.  <p /><b>Note:</b> This endpoint returns data with an average latency of about 30 minutes. In addition, historic records have a default <code>date_added</code> timestamp of 1600-01-01 00:00:00.000 +00:00. The timestamp for newer records reflects when the records were added.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_added = 'date_added_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for constituent custom fields created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$last_modified = 'last_modified_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for constituent custom fields modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$sort_token = 'sort_token_example'; // string | Represents a token filter to provide the next stable-sorted list of constituent custom fields. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request.
$category = 'category_example'; // string | Represents a filter for custom field categories. Returns any custom fields that match the specified category. For example, <i>category=Interests</i> returns custom fields with the <i>Interests</i> category.
$value = 'value_example'; // string | Represents a filter for custom field values. Must be used in conjunction with the <code>category</code> filter. Returns any custom fields in the specified category that match any of the specified values. For example, <i>category=Interests&amp;value=Baseball&amp;value=Tennis</i> returns <i>Interests</i> custom fields with the <i>Baseball</i> or <i>Tennis</i> values. Filtering by fuzzy date values must be in one of the following formats: <i>YYYYMMDD</i>, <i>YYYY</i>, <i>YYYYMM</i>, or <i>MMDD</i>.  Any four digit value that starts with 13 or higher will be considered a year.  Any four digit value that starts with 01-12 will be considered to be in <i>MMDD</i> format.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituentCustomFieldsAllConstituents($date_added, $last_modified, $sort_token, $category, $value, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCustomFieldsAllConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_added** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for constituent custom fields created on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **last_modified** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for constituent custom fields modified on or after the specified date. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **sort_token** | **string**| Represents a token filter to provide the next stable-sorted list of constituent custom fields. This will be provided on the next_link collection response property when last_modified or sort_token filters are specified on the request. | [optional]
 **category** | **string**| Represents a filter for custom field categories. Returns any custom fields that match the specified category. For example, &lt;i&gt;category&#x3D;Interests&lt;/i&gt; returns custom fields with the &lt;i&gt;Interests&lt;/i&gt; category. | [optional]
 **value** | **string**| Represents a filter for custom field values. Must be used in conjunction with the &lt;code&gt;category&lt;/code&gt; filter. Returns any custom fields in the specified category that match any of the specified values. For example, &lt;i&gt;category&#x3D;Interests&amp;amp;value&#x3D;Baseball&amp;amp;value&#x3D;Tennis&lt;/i&gt; returns &lt;i&gt;Interests&lt;/i&gt; custom fields with the &lt;i&gt;Baseball&lt;/i&gt; or &lt;i&gt;Tennis&lt;/i&gt; values. Filtering by fuzzy date values must be in one of the following formats: &lt;i&gt;YYYYMMDD&lt;/i&gt;, &lt;i&gt;YYYY&lt;/i&gt;, &lt;i&gt;YYYYMM&lt;/i&gt;, or &lt;i&gt;MMDD&lt;/i&gt;.  Any four digit value that starts with 13 or higher will be considered a year.  Any four digit value that starts with 01-12 will be considered to be in &lt;i&gt;MMDD&lt;/i&gt; format. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldRead**](../Model/ApiCollectionCustomFieldRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentCustomFieldsSingleConstituent()`

```php
listConstituentCustomFieldsSingleConstituent($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldRead
```

Constituent custom field list (Single constituent)

Returns a list of custom fields for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the custom fields for.

try {
    $result = $apiInstance->listConstituentCustomFieldsSingleConstituent($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentCustomFieldsSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the custom fields for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionCustomFieldRead**](../Model/ApiCollectionCustomFieldRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentFundraiserAssignmentsSingleConstituent()`

```php
listConstituentFundraiserAssignmentsSingleConstituent($constituent_id, $include_inactive): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionFundraiserAssignmentRead
```

Fundraiser assignment list (Single constituent)

Returns a list of fundraiser assignments for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the fundraiser assignments for.
$include_inactive = True; // bool | Set this parameter to \"false\" to exclude inactive fundraiser assignments in the response.

try {
    $result = $apiInstance->listConstituentFundraiserAssignmentsSingleConstituent($constituent_id, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentFundraiserAssignmentsSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the fundraiser assignments for. |
 **include_inactive** | **bool**| Set this parameter to \&quot;false\&quot; to exclude inactive fundraiser assignments in the response. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionFundraiserAssignmentRead**](../Model/ApiCollectionFundraiserAssignmentRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituentFundraisersSingleConstituent()`

```php
listConstituentFundraisersSingleConstituent($constituent_id): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentFundraiserRead
```

Fundraiser list (Single constituent)

Returns a list of fundraisers for a constituent. <bb-alert bb-alert-type=\"warning\" bb-alert-closeable=\"false\"><b>This endpoint is deprecated. Use the new <a href=\"https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListConstituentFundraiserAssignmentsSingleConstituent/\">Fundraiser assignment list (Single constituent)</a> endpoint instead.</b></bb-alert>

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to retrieve the fundraisers for.

try {
    $result = $apiInstance->listConstituentFundraisersSingleConstituent($constituent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituentFundraisersSingleConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to retrieve the fundraisers for. |

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentFundraiserRead**](../Model/ApiCollectionConstituentFundraiserRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConstituents()`

```php
listConstituents($constituent_code, $constituent_id, $custom_field_category, $fields, $fundraiser_status, $include_deceased, $include_inactive, $list_id, $postal_code, $date_added, $last_modified, $sort_token, $sort, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentListItem
```

Constituent list

Returns a paginated list of constituents.  <p />  The default sorting behavior is to list constituents in ascending alphabetical order based on the full name of organizations and the last name of individuals. However, some parameters override the default sorting behavior. The <code>sort</code> parameter sorts based on the fields that it specifies, and the <code>sort_token</code> parameter sorts based on the next stable-sorted list of results. (These parameters cannot be provided together.) If the <code>sort</code> and <code>sort_token</code> parameters are not provided, then the <code>last_modified</code> parameter sorts constituents in ascending order based on when they were last modified and the <code>date_added</code> parameter sorts constituents in ascending order based on when they were created. (If the <code>last_modified</code> and <code>date_added</code> parameters are both specified, sorting is based on the last-modified date.)  <p />  Some parameters also add the <code>sort_token</code> parameter to the <code>next_link</code> URL to ensure that constituents are stably sorted and that the order persists even if changes occur while working through a paginated list. The <code>last_modified</code>, <code>date_added</code>, and <code>sort</code> parameters all add the <code>sort_token</code> parameter to the <code>next_link</code> URL, although the <code>sort</code> parameter only adds the <code>sort_token</code> parameter when it sorts by just the <code>date_added</code> field or just the <code>date_modified</code> field.  <p /><b>Note:</b> This endpoint returns data with an average latency of about 30 minutes.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_code = 'constituent_code_example'; // string | Represents a list of constituent codes. Returns constituents if any of the specified constituent codes match any of their active constituent codes. For example, \"constituent_code=Board Member&amp;constituent_code=Volunteer\" returns constituents with either \"Board Member\" or \"Volunteer\" constituent codes.
$constituent_id = 'constituent_id_example'; // string | Represents a list of constituent identifiers. Returns constituents if any of the specified constituent identifiers match any of their constituents. For example, \"constituent_id=280&amp;constituent_id=1232\" returns constituents with either \"280\" or \"1232\" constituent identifiers.
$custom_field_category = 'custom_field_category_example'; // string | Represents a list of custom field categories. Returns constituents if any of the specified custom field categories match any of their active custom fields. For example, \"custom_field_category=Interests&amp;custom_field_category=Anniversary\" returns constituents with either \"Interests\" or \"Anniversary\" custom fields.
$fields = 'fields_example'; // string | Represents the fields to include on the returned records. For example, \"fields=id,first,last,deceased_date\". The <code>id</code> field will always be returned.
$fundraiser_status = 'fundraiser_status_example'; // string | Represents a comma-separated list of fundraiser statuses. Returns constituents if any of the specified fundraiser statuses match the constituent's fundraiser status. For example, \"fundraiser_status=Active,None\" returns constituents whose fundraiser status that matches Active or None.  Valid values for this filter are Active, Inactive, and None.
$include_deceased = True; // bool | Set this parameter to \"true\" to include deceased constituents in the response.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive constituents in the response.
$list_id = 'list_id_example'; // string | Defines a list identifier used to filter the set of constituents to those included in the specified list. If this value is set, other specified filters will be ignored.
$postal_code = 'postal_code_example'; // string | Represents a comma-separated list of postal codes. Returns constituents if any of the specified postal codes match the postal code for their preferred address. For example, \"postal_code=99577,14623\" returns constituents whose preferred address has a postal code that matches or starts with 99577 or 14623, such as 99577, 14623, or 99577-0727.
$date_added = 'date_added_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for results created on or after the specified date. Adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$last_modified = 'last_modified_example'; // string | Format - date-time (as date-time in RFC3339). Represents a filter for results modified on or after the specified date. Adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00.
$sort_token = 'sort_token_example'; // string | Represents a token filter to provide the next stable-sorted list of results and to ensure that the order persists even if changes occur while working through a paginated list. The token is provided on the next_link collection response property when the request specifies the sort_token filter. The last_modified, date_added, and sort parameters also add the token to the next_link URL, although the sort parameter only adds the token when it sorts by just the date_added field or just the date_modified field.
$sort = 'sort_example'; // string | Represents a list of fields to sort the results by. Returns a list that sorts constituents based on the supplied fields. Results are in ascending order by default, and a '-' sign denotes descending order. For example, \"sort=date_added,-last\" sorts constituents by the \"date_added\" field in ascending order and then by the \"last\" field in descending order.  If only the date_modified field or only the date_added field is provided, then this adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->listConstituents($constituent_code, $constituent_id, $custom_field_category, $fields, $fundraiser_status, $include_deceased, $include_inactive, $list_id, $postal_code, $date_added, $last_modified, $sort_token, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_code** | **string**| Represents a list of constituent codes. Returns constituents if any of the specified constituent codes match any of their active constituent codes. For example, \&quot;constituent_code&#x3D;Board Member&amp;amp;constituent_code&#x3D;Volunteer\&quot; returns constituents with either \&quot;Board Member\&quot; or \&quot;Volunteer\&quot; constituent codes. | [optional]
 **constituent_id** | **string**| Represents a list of constituent identifiers. Returns constituents if any of the specified constituent identifiers match any of their constituents. For example, \&quot;constituent_id&#x3D;280&amp;amp;constituent_id&#x3D;1232\&quot; returns constituents with either \&quot;280\&quot; or \&quot;1232\&quot; constituent identifiers. | [optional]
 **custom_field_category** | **string**| Represents a list of custom field categories. Returns constituents if any of the specified custom field categories match any of their active custom fields. For example, \&quot;custom_field_category&#x3D;Interests&amp;amp;custom_field_category&#x3D;Anniversary\&quot; returns constituents with either \&quot;Interests\&quot; or \&quot;Anniversary\&quot; custom fields. | [optional]
 **fields** | **string**| Represents the fields to include on the returned records. For example, \&quot;fields&#x3D;id,first,last,deceased_date\&quot;. The &lt;code&gt;id&lt;/code&gt; field will always be returned. | [optional]
 **fundraiser_status** | **string**| Represents a comma-separated list of fundraiser statuses. Returns constituents if any of the specified fundraiser statuses match the constituent&#39;s fundraiser status. For example, \&quot;fundraiser_status&#x3D;Active,None\&quot; returns constituents whose fundraiser status that matches Active or None.  Valid values for this filter are Active, Inactive, and None. | [optional]
 **include_deceased** | **bool**| Set this parameter to \&quot;true\&quot; to include deceased constituents in the response. | [optional]
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive constituents in the response. | [optional]
 **list_id** | **string**| Defines a list identifier used to filter the set of constituents to those included in the specified list. If this value is set, other specified filters will be ignored. | [optional]
 **postal_code** | **string**| Represents a comma-separated list of postal codes. Returns constituents if any of the specified postal codes match the postal code for their preferred address. For example, \&quot;postal_code&#x3D;99577,14623\&quot; returns constituents whose preferred address has a postal code that matches or starts with 99577 or 14623, such as 99577, 14623, or 99577-0727. | [optional]
 **date_added** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for results created on or after the specified date. Adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **last_modified** | **string**| Format - date-time (as date-time in RFC3339). Represents a filter for results modified on or after the specified date. Adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted. The filter respects time offsets from UTC per the ISO-8601 format: 2016-05-05T17:59:31.1600745-04:00. | [optional]
 **sort_token** | **string**| Represents a token filter to provide the next stable-sorted list of results and to ensure that the order persists even if changes occur while working through a paginated list. The token is provided on the next_link collection response property when the request specifies the sort_token filter. The last_modified, date_added, and sort parameters also add the token to the next_link URL, although the sort parameter only adds the token when it sorts by just the date_added field or just the date_modified field. | [optional]
 **sort** | **string**| Represents a list of fields to sort the results by. Returns a list that sorts constituents based on the supplied fields. Results are in ascending order by default, and a &#39;-&#39; sign denotes descending order. For example, \&quot;sort&#x3D;date_added,-last\&quot; sorts constituents by the \&quot;date_added\&quot; field in ascending order and then by the \&quot;last\&quot; field in descending order.  If only the date_modified field or only the date_added field is provided, then this adds the sort_token parameter to the next_link URL to ensure that constituents are stably sorted. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionConstituentListItem**](../Model/ApiCollectionConstituentListItem.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGenders()`

```php
listGenders(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Genders

Returns a list of available constituent genders.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listGenders: ', $e->getMessage(), PHP_EOL;
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

## `listMaritalStatuses()`

```php
listMaritalStatuses(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Marital statuses

Returns a list of available constituent marital status types.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMaritalStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listMaritalStatuses: ', $e->getMessage(), PHP_EOL;
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

## `listSuffixes()`

```php
listSuffixes(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Suffixes

Returns a list of available constituent suffix types.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSuffixes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listSuffixes: ', $e->getMessage(), PHP_EOL;
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

## `listTitles()`

```php
listTitles(): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionString
```

Titles

Returns a list of available constituent title types.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTitles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->listTitles: ', $e->getMessage(), PHP_EOL;
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

## `patchConstituentProfilePicture()`

```php
patchConstituentProfilePicture($constituent_id, $profile_picture_edit)
```

Profile picture

Updates the current profile picture for a constituent.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituent_id = 'constituent_id_example'; // string | The immutable system record ID of the constituent to update for the current profile picture.
$profile_picture_edit = new \BurgerDigital\BlackbaudPhpSdk\Model\ProfilePictureEdit(); // \BurgerDigital\BlackbaudPhpSdk\Model\ProfilePictureEdit | An object that represents the properties for the constituent picture to update.

try {
    $apiInstance->patchConstituentProfilePicture($constituent_id, $profile_picture_edit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->patchConstituentProfilePicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constituent_id** | **string**| The immutable system record ID of the constituent to update for the current profile picture. |
 **profile_picture_edit** | [**\BurgerDigital\BlackbaudPhpSdk\Model\ProfilePictureEdit**](../Model/ProfilePictureEdit.md)| An object that represents the properties for the constituent picture to update. | [optional]

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

## `searchConstituent()`

```php
searchConstituent($search_text, $fundraiser_status, $include_inactive, $search_field, $strict_search, $limit, $offset): \BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionSearchResultRead
```

Constituent (Search)

Performs a constituent search based on the provided search text. Supports first name, last name, preferred name, former name, alias, email address, phone number, address, or lookup ID. Name combinations, such as first name and last name or preferred name and last name, are valid, but otherwise search only supports one parameter at a time.  <p />  By default, searches include results that sound similar to your criteria. For example, searches for \"Smith\" include matches for \"Smyth\" and other alternative spellings.   <p />  Searching by phone number requires a minimum of 7 digits with no spaces or special characters. This search does not support wildcard characters — such as * or ? — used to search in the database view.   <p />  If searching on a lookup id, the <code>search_field</code> property should be set to 'lookup_id'. This will allow the search results to be returned quicker.  <p />  Search results are limited to 500 records.

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = 'search_text_example'; // string | The text to search for. If the search_text is a lookup_id, set the search_field to \"lookup_id\".
$fundraiser_status = 'fundraiser_status_example'; // string | Represents a comma-separated list of fundraiser statuses. Returns constituents if any of the specified fundraiser statuses match the constituent's fundraiser status. For example, \"fundraiser_status=Active,None\" returns constituents whose fundraiser status that matches Active or None.  Valid values for this filter are Active, Inactive, and None.
$include_inactive = True; // bool | Set this parameter to \"true\" to include inactive constituents in the response.
$search_field = 'search_field_example'; // string | Represents a field to search on. Currently, it only supports lookup_id. If it is provided with search_text, a constituent with lookup_id that matches the search_text will be returned.
$strict_search = True; // bool | Set this parameter to \"true\" to exclude constituents whose names sound like the search text but are spelled differently.
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000.
$offset = 56; // int | Format - int32. Represents the number of records to skip. For use with pagination.

try {
    $result = $apiInstance->searchConstituent($search_text, $fundraiser_status, $include_inactive, $search_field, $strict_search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->searchConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| The text to search for. If the search_text is a lookup_id, set the search_field to \&quot;lookup_id\&quot;. |
 **fundraiser_status** | **string**| Represents a comma-separated list of fundraiser statuses. Returns constituents if any of the specified fundraiser statuses match the constituent&#39;s fundraiser status. For example, \&quot;fundraiser_status&#x3D;Active,None\&quot; returns constituents whose fundraiser status that matches Active or None.  Valid values for this filter are Active, Inactive, and None. | [optional]
 **include_inactive** | **bool**| Set this parameter to \&quot;true\&quot; to include inactive constituents in the response. | [optional]
 **search_field** | **string**| Represents a field to search on. Currently, it only supports lookup_id. If it is provided with search_text, a constituent with lookup_id that matches the search_text will be returned. | [optional]
 **strict_search** | **bool**| Set this parameter to \&quot;true\&quot; to exclude constituents whose names sound like the search text but are spelled differently. | [optional]
 **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 5000. | [optional]
 **offset** | **int**| Format - int32. Represents the number of records to skip. For use with pagination. | [optional]

### Return type

[**\BurgerDigital\BlackbaudPhpSdk\Model\ApiCollectionSearchResultRead**](../Model/ApiCollectionSearchResultRead.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery), [oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode), [oauth2Blackbaud OAuth 2.0 ServiceImplicit](../../README.md#oauth2Blackbaud OAuth 2.0 ServiceImplicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
