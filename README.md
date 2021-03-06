# Blackbaud Php Sdk

This API manages constituent information and related entities such as addresses, phones, emails, and notes.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/burger-digital/blackbaud-php-sdk.git"
    }
  ],
  "require": {
    "burger-digital/blackbaud-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Blackbaud Php Sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new BurgerDigital\BlackbaudPhpSdk\Api\ActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_add = new \BurgerDigital\BlackbaudPhpSdk\Model\ActionAdd(); // \BurgerDigital\BlackbaudPhpSdk\Model\ActionAdd | An object that represents the action to create.

try {
    $result = $apiInstance->createAction($action_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionApi->createAction: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/constituent/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActionApi* | [**createAction**](docs/Api/ActionApi.md#createaction) | **POST** /actions | Action (Create)
*ActionApi* | [**createActionAttachment**](docs/Api/ActionApi.md#createactionattachment) | **POST** /actions/attachments | Action attachment (Create)
*ActionApi* | [**createActionCustomField**](docs/Api/ActionApi.md#createactioncustomfield) | **POST** /actions/customfields | Action custom field (Create)
*ActionApi* | [**deleteAction**](docs/Api/ActionApi.md#deleteaction) | **DELETE** /actions/{action_id} | Action (Delete)
*ActionApi* | [**deleteActionAttachment**](docs/Api/ActionApi.md#deleteactionattachment) | **DELETE** /actions/attachments/{attachment_id} | Action attachment (Delete)
*ActionApi* | [**deleteActionCustomField**](docs/Api/ActionApi.md#deleteactioncustomfield) | **DELETE** /actions/customfields/{custom_field_id} | Action custom field (Delete)
*ActionApi* | [**editAction**](docs/Api/ActionApi.md#editaction) | **PATCH** /actions/{action_id} | Action (Edit)
*ActionApi* | [**editActionAttachment**](docs/Api/ActionApi.md#editactionattachment) | **PATCH** /actions/attachments/{attachment_id} | Action attachment (Edit)
*ActionApi* | [**editActionCustomField**](docs/Api/ActionApi.md#editactioncustomfield) | **PATCH** /actions/customfields/{custom_field_id} | Action custom field (Edit)
*ActionApi* | [**getAction**](docs/Api/ActionApi.md#getaction) | **GET** /actions/{action_id} | Action (Get)
*ActionApi* | [**listActionAttachmentsSingleAction**](docs/Api/ActionApi.md#listactionattachmentssingleaction) | **GET** /actions/{action_id}/attachments | Action attachment list (Single action)
*ActionApi* | [**listActionCustomFieldCategories**](docs/Api/ActionApi.md#listactioncustomfieldcategories) | **GET** /actions/customfields/categories | Action custom field categories
*ActionApi* | [**listActionCustomFieldCategoryDetails**](docs/Api/ActionApi.md#listactioncustomfieldcategorydetails) | **GET** /actions/customfields/categories/details | Action custom field category details
*ActionApi* | [**listActionCustomFieldCategoryValues**](docs/Api/ActionApi.md#listactioncustomfieldcategoryvalues) | **GET** /actions/customfields/categories/values | Action custom field category values
*ActionApi* | [**listActionCustomFieldsSingleAction**](docs/Api/ActionApi.md#listactioncustomfieldssingleaction) | **GET** /actions/{action_id}/customfields | Action custom field list (Single action)
*ActionApi* | [**listActionLocations**](docs/Api/ActionApi.md#listactionlocations) | **GET** /actionlocations | Action locations
*ActionApi* | [**listActionStatusTypes**](docs/Api/ActionApi.md#listactionstatustypes) | **GET** /actionstatustypes | Action status types
*ActionApi* | [**listActionTypes**](docs/Api/ActionApi.md#listactiontypes) | **GET** /actiontypes | Action types
*ActionApi* | [**listActionsAllConstituents**](docs/Api/ActionApi.md#listactionsallconstituents) | **GET** /actions | Action list (All constituents)
*ActionApi* | [**listActionsSingleConstituent**](docs/Api/ActionApi.md#listactionssingleconstituent) | **GET** /constituents/{constituent_id}/actions | Action list (Single constituent)
*AddressApi* | [**createConstituentAddress**](docs/Api/AddressApi.md#createconstituentaddress) | **POST** /addresses | Address (Create)
*AddressApi* | [**deleteConstituentAddress**](docs/Api/AddressApi.md#deleteconstituentaddress) | **DELETE** /addresses/{address_id} | Address (Delete)
*AddressApi* | [**editConstituentAddress**](docs/Api/AddressApi.md#editconstituentaddress) | **PATCH** /addresses/{address_id} | Address (Edit)
*AddressApi* | [**getConstituentAddress**](docs/Api/AddressApi.md#getconstituentaddress) | **GET** /constituents/addresses/{address_id} | Address
*AddressApi* | [**listAddressTypes**](docs/Api/AddressApi.md#listaddresstypes) | **GET** /addresstypes | Address types
*AddressApi* | [**listConstituentAddressesAllConstituents**](docs/Api/AddressApi.md#listconstituentaddressesallconstituents) | **GET** /addresses | Address list (All constituents)
*AddressApi* | [**listConstituentAddressesSingleConstituent**](docs/Api/AddressApi.md#listconstituentaddressessingleconstituent) | **GET** /constituents/{constituent_id}/addresses | Address list (Single constituent)
*AddressApi* | [**listCountries**](docs/Api/AddressApi.md#listcountries) | **GET** /countries | Countries
*AliasApi* | [**createConstituentAlias**](docs/Api/AliasApi.md#createconstituentalias) | **POST** /aliases | Alias (Create)
*AliasApi* | [**deleteConstituentAlias**](docs/Api/AliasApi.md#deleteconstituentalias) | **DELETE** /aliases/{alias_id} | Alias (Delete)
*AliasApi* | [**editConstituentAlias**](docs/Api/AliasApi.md#editconstituentalias) | **PATCH** /aliases/{alias_id} | Alias (Edit)
*AliasApi* | [**listAliasTypes**](docs/Api/AliasApi.md#listaliastypes) | **GET** /aliastypes | Alias types
*AliasApi* | [**listConstituentAliasesSingleConstituent**](docs/Api/AliasApi.md#listconstituentaliasessingleconstituent) | **GET** /constituents/{constituent_id}/aliases | Alias list (Single constituent)
*CommunicationPreferenceApi* | [**createConstituentCommunicationPreference**](docs/Api/CommunicationPreferenceApi.md#createconstituentcommunicationpreference) | **POST** /communicationpreferences | Communication preference (Create)
*CommunicationPreferenceApi* | [**deleteConstituentCommunicationPreference**](docs/Api/CommunicationPreferenceApi.md#deleteconstituentcommunicationpreference) | **DELETE** /communicationpreferences/{communication_preference_id} | Communication preference (Delete)
*CommunicationPreferenceApi* | [**editConstituentCommunicationPreference**](docs/Api/CommunicationPreferenceApi.md#editconstituentcommunicationpreference) | **PATCH** /communicationpreferences/{communication_preference_id} | Communication preference (Edit)
*CommunicationPreferenceApi* | [**listCommunicationPreferences**](docs/Api/CommunicationPreferenceApi.md#listcommunicationpreferences) | **GET** /communicationpreferences | Communication preferences
*CommunicationPreferenceApi* | [**listConstituentCommunicationPreferencesSingleConstituent**](docs/Api/CommunicationPreferenceApi.md#listconstituentcommunicationpreferencessingleconstituent) | **GET** /constituents/{constituent_id}/communicationpreferences | Communication preference list (Single constituent)
*ConstituentApi* | [**createConstituent**](docs/Api/ConstituentApi.md#createconstituent) | **POST** /constituents | Constituent (Create)
*ConstituentApi* | [**createConstituentAttachment**](docs/Api/ConstituentApi.md#createconstituentattachment) | **POST** /constituents/attachments | Constituent attachment (Create)
*ConstituentApi* | [**createConstituentCode**](docs/Api/ConstituentApi.md#createconstituentcode) | **POST** /constituentcodes | Constituent code (Create)
*ConstituentApi* | [**createConstituentCustomField**](docs/Api/ConstituentApi.md#createconstituentcustomfield) | **POST** /constituents/customfields | Constituent custom field (Create)
*ConstituentApi* | [**createDocument**](docs/Api/ConstituentApi.md#createdocument) | **POST** /documents | Document (Create)
*ConstituentApi* | [**deleteConstituentAttachment**](docs/Api/ConstituentApi.md#deleteconstituentattachment) | **DELETE** /constituents/attachments/{attachment_id} | Constituent attachment (Delete)
*ConstituentApi* | [**deleteConstituentCode**](docs/Api/ConstituentApi.md#deleteconstituentcode) | **DELETE** /constituentcodes/{constituent_code_id} | Constituent code (Delete)
*ConstituentApi* | [**deleteConstituentCustomField**](docs/Api/ConstituentApi.md#deleteconstituentcustomfield) | **DELETE** /constituents/customfields/{custom_field_id} | Constituent custom field (Delete)
*ConstituentApi* | [**editConstituent**](docs/Api/ConstituentApi.md#editconstituent) | **PATCH** /constituents/{constituent_id} | Constituent (Edit)
*ConstituentApi* | [**editConstituentAttachment**](docs/Api/ConstituentApi.md#editconstituentattachment) | **PATCH** /constituents/attachments/{attachment_id} | Constituent attachment (Edit)
*ConstituentApi* | [**editConstituentCode**](docs/Api/ConstituentApi.md#editconstituentcode) | **PATCH** /constituentcodes/{constituent_code_id} | Constituent code (Edit)
*ConstituentApi* | [**editConstituentCustomField**](docs/Api/ConstituentApi.md#editconstituentcustomfield) | **PATCH** /constituents/customfields/{custom_field_id} | Constituent custom field (Edit)
*ConstituentApi* | [**getConstituent**](docs/Api/ConstituentApi.md#getconstituent) | **GET** /constituents/{constituent_id} | Constituent (Get)
*ConstituentApi* | [**getConstituentCode**](docs/Api/ConstituentApi.md#getconstituentcode) | **GET** /constituents/constituentcodes/{constituent_code_id} | Constituent code (Get)
*ConstituentApi* | [**getConstituentProfilePicture**](docs/Api/ConstituentApi.md#getconstituentprofilepicture) | **GET** /constituents/{constituent_id}/profilepicture | Profile picture (Get)
*ConstituentApi* | [**getCurrencyConfiguration**](docs/Api/ConstituentApi.md#getcurrencyconfiguration) | **GET** /currencyconfiguration | Currency configuration (Get)
*ConstituentApi* | [**listAttachmentTags**](docs/Api/ConstituentApi.md#listattachmenttags) | **GET** /attachmenttags | Attachment tags
*ConstituentApi* | [**listConstituentAttachmentsSingleConstituent**](docs/Api/ConstituentApi.md#listconstituentattachmentssingleconstituent) | **GET** /constituents/{constituent_id}/attachments | Constituent attachment list (Single constituent)
*ConstituentApi* | [**listConstituentCodeTypes**](docs/Api/ConstituentApi.md#listconstituentcodetypes) | **GET** /constituentcodetypes | Constituent code types
*ConstituentApi* | [**listConstituentCodesAllConstituents**](docs/Api/ConstituentApi.md#listconstituentcodesallconstituents) | **GET** /constituents/constituentcodes | Constituent code list (All constituents)
*ConstituentApi* | [**listConstituentCodesSingleConstituent**](docs/Api/ConstituentApi.md#listconstituentcodessingleconstituent) | **GET** /constituents/{constituent_id}/constituentcodes | Constituent code list (Single constituent)
*ConstituentApi* | [**listConstituentCustomFieldCategories**](docs/Api/ConstituentApi.md#listconstituentcustomfieldcategories) | **GET** /constituents/customfields/categories | Constituent custom field categories
*ConstituentApi* | [**listConstituentCustomFieldCategoryDetails**](docs/Api/ConstituentApi.md#listconstituentcustomfieldcategorydetails) | **GET** /constituents/customfields/categories/details | Constituent custom field category details
*ConstituentApi* | [**listConstituentCustomFieldCategoryValues**](docs/Api/ConstituentApi.md#listconstituentcustomfieldcategoryvalues) | **GET** /constituents/customfields/categories/values | Constituent custom field category values
*ConstituentApi* | [**listConstituentCustomFieldsAllConstituents**](docs/Api/ConstituentApi.md#listconstituentcustomfieldsallconstituents) | **GET** /constituents/customfields | Constituent custom field list (All constituents)
*ConstituentApi* | [**listConstituentCustomFieldsSingleConstituent**](docs/Api/ConstituentApi.md#listconstituentcustomfieldssingleconstituent) | **GET** /constituents/{constituent_id}/customfields | Constituent custom field list (Single constituent)
*ConstituentApi* | [**listConstituentFundraiserAssignmentsSingleConstituent**](docs/Api/ConstituentApi.md#listconstituentfundraiserassignmentssingleconstituent) | **GET** /constituents/{constituent_id}/fundraiserassignments | Fundraiser assignment list (Single constituent)
*ConstituentApi* | [**listConstituentFundraisersSingleConstituent**](docs/Api/ConstituentApi.md#listconstituentfundraiserssingleconstituent) | **GET** /constituents/{constituent_id}/fundraisers | Fundraiser list (Single constituent)
*ConstituentApi* | [**listConstituents**](docs/Api/ConstituentApi.md#listconstituents) | **GET** /constituents | Constituent list
*ConstituentApi* | [**listGenders**](docs/Api/ConstituentApi.md#listgenders) | **GET** /genders | Genders
*ConstituentApi* | [**listMaritalStatuses**](docs/Api/ConstituentApi.md#listmaritalstatuses) | **GET** /maritalstatuses | Marital statuses
*ConstituentApi* | [**listSuffixes**](docs/Api/ConstituentApi.md#listsuffixes) | **GET** /suffixes | Suffixes
*ConstituentApi* | [**listTitles**](docs/Api/ConstituentApi.md#listtitles) | **GET** /titles | Titles
*ConstituentApi* | [**patchConstituentProfilePicture**](docs/Api/ConstituentApi.md#patchconstituentprofilepicture) | **PATCH** /constituents/{constituent_id}/profilepicture | Profile picture
*ConstituentApi* | [**searchConstituent**](docs/Api/ConstituentApi.md#searchconstituent) | **GET** /constituents/search | Constituent (Search)
*ConstituentAppealApi* | [**listConstituentAppealsSingleConstituent**](docs/Api/ConstituentAppealApi.md#listconstituentappealssingleconstituent) | **GET** /constituents/{constituent_id}/appeals | Constituent appeal list (Single constituent)
*ConstituentEducationApi* | [**createConstituentEducation**](docs/Api/ConstituentEducationApi.md#createconstituenteducation) | **POST** /educations | Education (Create)
*ConstituentEducationApi* | [**deleteConstituentEducation**](docs/Api/ConstituentEducationApi.md#deleteconstituenteducation) | **DELETE** /educations/{education_id} | Education (Delete)
*ConstituentEducationApi* | [**editConstituentEducation**](docs/Api/ConstituentEducationApi.md#editconstituenteducation) | **PATCH** /educations/{education_id} | Education (Edit)
*ConstituentEducationApi* | [**getConstituentEducation**](docs/Api/ConstituentEducationApi.md#getconstituenteducation) | **GET** /constituents/educations/{education_id} | Education (Get)
*ConstituentEducationApi* | [**listConstituentEducationsAllConstituents**](docs/Api/ConstituentEducationApi.md#listconstituenteducationsallconstituents) | **GET** /educations | Education list (All constituents)
*ConstituentEducationApi* | [**listConstituentEducationsSingleConstituent**](docs/Api/ConstituentEducationApi.md#listconstituenteducationssingleconstituent) | **GET** /constituents/{constituent_id}/educations | Education list (Single constituent)
*ConstituentEducationApi* | [**listEducationDegreeClasses**](docs/Api/ConstituentEducationApi.md#listeducationdegreeclasses) | **GET** /educations/degreeclasses | Education degree classes
*ConstituentEducationApi* | [**listEducationDegrees**](docs/Api/ConstituentEducationApi.md#listeducationdegrees) | **GET** /educations/degrees | Education degrees
*ConstituentEducationApi* | [**listEducationDepartments**](docs/Api/ConstituentEducationApi.md#listeducationdepartments) | **GET** /educations/departments | Education departments
*ConstituentEducationApi* | [**listEducationFaculties**](docs/Api/ConstituentEducationApi.md#listeducationfaculties) | **GET** /educations/faculties | Education faculties
*ConstituentEducationApi* | [**listEducationSchools**](docs/Api/ConstituentEducationApi.md#listeducationschools) | **GET** /educations/schools | Education schools
*ConstituentEducationApi* | [**listEducationStatuses**](docs/Api/ConstituentEducationApi.md#listeducationstatuses) | **GET** /educations/statuses | Education statuses
*ConstituentEducationApi* | [**listEducationSubjects**](docs/Api/ConstituentEducationApi.md#listeducationsubjects) | **GET** /educations/subjects | Education subjects
*ConstituentEducationApi* | [**listEducationTypes**](docs/Api/ConstituentEducationApi.md#listeducationtypes) | **GET** /educations/types | Education types
*ConstituentMembershipApi* | [**listConstituentMembershipsSingleConstituent**](docs/Api/ConstituentMembershipApi.md#listconstituentmembershipssingleconstituent) | **GET** /constituents/{constituent_id}/memberships | Membership list (Single constituent)
*ConstituentMembershipApi* | [**listMemberships**](docs/Api/ConstituentMembershipApi.md#listmemberships) | **GET** /memberships | Membership list (All constituents)
*ConstituentRatingApi* | [**createConstituentRating**](docs/Api/ConstituentRatingApi.md#createconstituentrating) | **POST** /ratings | Rating (Create)
*ConstituentRatingApi* | [**deleteConstituentRating**](docs/Api/ConstituentRatingApi.md#deleteconstituentrating) | **DELETE** /ratings/{rating_id} | Rating (Delete)
*ConstituentRatingApi* | [**editConstituentRating**](docs/Api/ConstituentRatingApi.md#editconstituentrating) | **PATCH** /ratings/{rating_id} | Rating (Edit)
*ConstituentRatingApi* | [**listConstituentRatingsSingleConstituent**](docs/Api/ConstituentRatingApi.md#listconstituentratingssingleconstituent) | **GET** /constituents/{constituent_id}/ratings | Rating list (Single constituent)
*ConstituentRatingApi* | [**listRatingCategories**](docs/Api/ConstituentRatingApi.md#listratingcategories) | **GET** /ratings/categories | Rating categories
*ConstituentRatingApi* | [**listRatingCategoryValues**](docs/Api/ConstituentRatingApi.md#listratingcategoryvalues) | **GET** /ratings/categories/values | Rating category values
*ConstituentRatingApi* | [**listRatingSources**](docs/Api/ConstituentRatingApi.md#listratingsources) | **GET** /ratings/sources | Rating sources
*ConstituentRelationshipApi* | [**createConstituentRelationship**](docs/Api/ConstituentRelationshipApi.md#createconstituentrelationship) | **POST** /relationships | Relationship (Create)
*ConstituentRelationshipApi* | [**deleteConstituentRelationship**](docs/Api/ConstituentRelationshipApi.md#deleteconstituentrelationship) | **DELETE** /relationships/{relationship_id} | Relationship (Delete)
*ConstituentRelationshipApi* | [**editConstituentRelationship**](docs/Api/ConstituentRelationshipApi.md#editconstituentrelationship) | **PATCH** /relationships/{relationship_id} | Relationship (Edit)
*ConstituentRelationshipApi* | [**getConstituentRelationship**](docs/Api/ConstituentRelationshipApi.md#getconstituentrelationship) | **GET** /constituents/relationships/{relationship_id} | Relationship (Get)
*ConstituentRelationshipApi* | [**listConstituentRelationshipsAllConstituents**](docs/Api/ConstituentRelationshipApi.md#listconstituentrelationshipsallconstituents) | **GET** /relationships | Relationship list (All constituents)
*ConstituentRelationshipApi* | [**listConstituentRelationshipsSingleConstituent**](docs/Api/ConstituentRelationshipApi.md#listconstituentrelationshipssingleconstituent) | **GET** /constituents/{constituent_id}/relationships | Relationship list (Single constituent)
*ConstituentRelationshipApi* | [**listOrganizationContactTypes**](docs/Api/ConstituentRelationshipApi.md#listorganizationcontacttypes) | **GET** /organizationcontacttypes | Organization contact types
*ConstituentRelationshipApi* | [**listRelationshipTypes**](docs/Api/ConstituentRelationshipApi.md#listrelationshiptypes) | **GET** /relationshiptypes | Relationship types
*EmailAddressApi* | [**createConstituentEmailAddress**](docs/Api/EmailAddressApi.md#createconstituentemailaddress) | **POST** /emailaddresses | Email address (Create)
*EmailAddressApi* | [**deleteConstituentEmailAddress**](docs/Api/EmailAddressApi.md#deleteconstituentemailaddress) | **DELETE** /emailaddresses/{email_address_id} | Email address (Delete)
*EmailAddressApi* | [**editConstituentEmailAddress**](docs/Api/EmailAddressApi.md#editconstituentemailaddress) | **PATCH** /emailaddresses/{email_address_id} | Email address (Edit)
*EmailAddressApi* | [**listConstituentEmailAddressesAllConstituents**](docs/Api/EmailAddressApi.md#listconstituentemailaddressesallconstituents) | **GET** /emailaddresses | Email address list (All constituents)
*EmailAddressApi* | [**listConstituentEmailAddressesSingleConstituent**](docs/Api/EmailAddressApi.md#listconstituentemailaddressessingleconstituent) | **GET** /constituents/{constituent_id}/emailaddresses | Email address list (Single constituent)
*EmailAddressApi* | [**listEmailAddressTypes**](docs/Api/EmailAddressApi.md#listemailaddresstypes) | **GET** /emailaddresstypes | Email address types
*GiftApi* | [**getConstituentGiftFirst**](docs/Api/GiftApi.md#getconstituentgiftfirst) | **GET** /constituents/{constituent_id}/givingsummary/first | First gift (Get)
*GiftApi* | [**getConstituentGiftGreatest**](docs/Api/GiftApi.md#getconstituentgiftgreatest) | **GET** /constituents/{constituent_id}/givingsummary/greatest | Greatest gift (Get)
*GiftApi* | [**getConstituentGiftLatest**](docs/Api/GiftApi.md#getconstituentgiftlatest) | **GET** /constituents/{constituent_id}/givingsummary/latest | Latest gift (Get)
*GiftApi* | [**getConstituentGivingSummaryLifetime**](docs/Api/GiftApi.md#getconstituentgivingsummarylifetime) | **GET** /constituents/{constituent_id}/givingsummary/lifetimegiving | Lifetime giving (Get)
*NameFormatApi* | [**createConstituentNameFormat**](docs/Api/NameFormatApi.md#createconstituentnameformat) | **POST** /nameformats | Name format (Create)
*NameFormatApi* | [**createConstituentPrimaryNameFormat**](docs/Api/NameFormatApi.md#createconstituentprimarynameformat) | **POST** /primarynameformats | Primary name format (Create)
*NameFormatApi* | [**deleteConstituentNameFormat**](docs/Api/NameFormatApi.md#deleteconstituentnameformat) | **DELETE** /nameformats/{name_format_id} | Name format (Delete)
*NameFormatApi* | [**deleteConstituentPrimaryNameFormat**](docs/Api/NameFormatApi.md#deleteconstituentprimarynameformat) | **DELETE** /primarynameformats/{primary_name_format_id} | Primary name format (Delete)
*NameFormatApi* | [**editConstituentNameFormat**](docs/Api/NameFormatApi.md#editconstituentnameformat) | **PATCH** /nameformats/{name_format_id} | Name format (Edit)
*NameFormatApi* | [**editConstituentPrimaryNameFormat**](docs/Api/NameFormatApi.md#editconstituentprimarynameformat) | **PATCH** /primarynameformats/{primary_name_format_id} | Primary name format (Edit)
*NameFormatApi* | [**getConstituentNameFormat**](docs/Api/NameFormatApi.md#getconstituentnameformat) | **GET** /constituents/nameformats/{name_format_id} | Name format (Get)
*NameFormatApi* | [**getConstituentNameFormatSummary**](docs/Api/NameFormatApi.md#getconstituentnameformatsummary) | **GET** /constituents/{constituent_id}/nameformats/summary | Name format summary (Get)
*NameFormatApi* | [**listNameFormatConfigurations**](docs/Api/NameFormatApi.md#listnameformatconfigurations) | **GET** /nameformatconfigurations | Name format configuration list
*NameFormatApi* | [**listNameFormatTypes**](docs/Api/NameFormatApi.md#listnameformattypes) | **GET** /nameformattypes | Name format types
*NoteApi* | [**createConstituentNote**](docs/Api/NoteApi.md#createconstituentnote) | **POST** /notes | Note (Create)
*NoteApi* | [**deleteConstituentNote**](docs/Api/NoteApi.md#deleteconstituentnote) | **DELETE** /notes/{note_id} | Note (Delete)
*NoteApi* | [**editConstituentNote**](docs/Api/NoteApi.md#editconstituentnote) | **PATCH** /notes/{note_id} | Note (Edit)
*NoteApi* | [**getConstituentNote**](docs/Api/NoteApi.md#getconstituentnote) | **GET** /notes/{note_id} | Note (Get)
*NoteApi* | [**listConstituentNotesAllConstituents**](docs/Api/NoteApi.md#listconstituentnotesallconstituents) | **GET** /notes | Note list (All constituents)
*NoteApi* | [**listConstituentNotesSingleConstituent**](docs/Api/NoteApi.md#listconstituentnotessingleconstituent) | **GET** /constituents/{constituent_id}/notes | Note list (Single constituent)
*NoteApi* | [**listNoteTypes**](docs/Api/NoteApi.md#listnotetypes) | **GET** /notetypes | Note types
*OnlinePresenceApi* | [**createConstituentOnlinePresence**](docs/Api/OnlinePresenceApi.md#createconstituentonlinepresence) | **POST** /onlinepresences | Online presence (Create)
*OnlinePresenceApi* | [**deleteConstituentOnlinePresence**](docs/Api/OnlinePresenceApi.md#deleteconstituentonlinepresence) | **DELETE** /onlinepresences/{online_presence_id} | Online presence (Delete)
*OnlinePresenceApi* | [**editConstituentOnlinePresence**](docs/Api/OnlinePresenceApi.md#editconstituentonlinepresence) | **PATCH** /onlinepresences/{online_presence_id} | Online presence (Edit)
*OnlinePresenceApi* | [**listConstituentOnlinePresencesAllConstituents**](docs/Api/OnlinePresenceApi.md#listconstituentonlinepresencesallconstituents) | **GET** /onlinepresences | Online presence list (All constituents)
*OnlinePresenceApi* | [**listConstituentOnlinePresencesSingleConstituent**](docs/Api/OnlinePresenceApi.md#listconstituentonlinepresencessingleconstituent) | **GET** /constituents/{constituent_id}/onlinepresences | Online presence list (Single constituent)
*OnlinePresenceApi* | [**listOnlinePresenceTypes**](docs/Api/OnlinePresenceApi.md#listonlinepresencetypes) | **GET** /onlinepresencetypes | Online presence types
*PhoneApi* | [**createConstituentPhone**](docs/Api/PhoneApi.md#createconstituentphone) | **POST** /phones | Phone (Create)
*PhoneApi* | [**deleteConstituentPhone**](docs/Api/PhoneApi.md#deleteconstituentphone) | **DELETE** /phones/{phone_id} | Phone (Delete)
*PhoneApi* | [**editConstituentPhone**](docs/Api/PhoneApi.md#editconstituentphone) | **PATCH** /phones/{phone_id} | Phone (Edit)
*PhoneApi* | [**getConstituentPhone**](docs/Api/PhoneApi.md#getconstituentphone) | **GET** /constituents/phones/{phone_id} | Phone (Get)
*PhoneApi* | [**listConstituentPhonesAllConstituents**](docs/Api/PhoneApi.md#listconstituentphonesallconstituents) | **GET** /phones | Phone list (All constituents)
*PhoneApi* | [**listConstituentPhonesSingleConstituent**](docs/Api/PhoneApi.md#listconstituentphonessingleconstituent) | **GET** /constituents/{constituent_id}/phones | Phone list (Single constituent)
*PhoneApi* | [**listPhoneTypes**](docs/Api/PhoneApi.md#listphonetypes) | **GET** /phonetypes | Phone types
*ProspectStatusApi* | [**getConstituentProspectStatus**](docs/Api/ProspectStatusApi.md#getconstituentprospectstatus) | **GET** /constituents/{constituent_id}/prospectstatus | Prospect status (Get)

## Models

- [ActionAdd](docs/Model/ActionAdd.md)
- [ActionEdit](docs/Model/ActionEdit.md)
- [ActionRead](docs/Model/ActionRead.md)
- [AddressAdd](docs/Model/AddressAdd.md)
- [AddressEdit](docs/Model/AddressEdit.md)
- [AddressRead](docs/Model/AddressRead.md)
- [AddressReadExtended](docs/Model/AddressReadExtended.md)
- [AliasAdd](docs/Model/AliasAdd.md)
- [AliasEdit](docs/Model/AliasEdit.md)
- [AliasRead](docs/Model/AliasRead.md)
- [ApiCollection](docs/Model/ApiCollection.md)
- [ApiCollectionActionRead](docs/Model/ApiCollectionActionRead.md)
- [ApiCollectionAddressRead](docs/Model/ApiCollectionAddressRead.md)
- [ApiCollectionAddressReadExtended](docs/Model/ApiCollectionAddressReadExtended.md)
- [ApiCollectionAliasRead](docs/Model/ApiCollectionAliasRead.md)
- [ApiCollectionAttachmentRead](docs/Model/ApiCollectionAttachmentRead.md)
- [ApiCollectionCommunicationPreferenceRead](docs/Model/ApiCollectionCommunicationPreferenceRead.md)
- [ApiCollectionConstituentAppealRead](docs/Model/ApiCollectionConstituentAppealRead.md)
- [ApiCollectionConstituentCodeRead](docs/Model/ApiCollectionConstituentCodeRead.md)
- [ApiCollectionConstituentFundraiserRead](docs/Model/ApiCollectionConstituentFundraiserRead.md)
- [ApiCollectionConstituentListItem](docs/Model/ApiCollectionConstituentListItem.md)
- [ApiCollectionCountryRead](docs/Model/ApiCollectionCountryRead.md)
- [ApiCollectionCustomFieldCategoryRead](docs/Model/ApiCollectionCustomFieldCategoryRead.md)
- [ApiCollectionCustomFieldRead](docs/Model/ApiCollectionCustomFieldRead.md)
- [ApiCollectionEducationRead](docs/Model/ApiCollectionEducationRead.md)
- [ApiCollectionEmailAddressRead](docs/Model/ApiCollectionEmailAddressRead.md)
- [ApiCollectionFundraiserAssignmentRead](docs/Model/ApiCollectionFundraiserAssignmentRead.md)
- [ApiCollectionMembershipRead](docs/Model/ApiCollectionMembershipRead.md)
- [ApiCollectionNameFormatConfigurationRead](docs/Model/ApiCollectionNameFormatConfigurationRead.md)
- [ApiCollectionNoteRead](docs/Model/ApiCollectionNoteRead.md)
- [ApiCollectionOnlinePresenceRead](docs/Model/ApiCollectionOnlinePresenceRead.md)
- [ApiCollectionPhoneRead](docs/Model/ApiCollectionPhoneRead.md)
- [ApiCollectionRatingCategoryRead](docs/Model/ApiCollectionRatingCategoryRead.md)
- [ApiCollectionRatingRead](docs/Model/ApiCollectionRatingRead.md)
- [ApiCollectionRatingSourceRead](docs/Model/ApiCollectionRatingSourceRead.md)
- [ApiCollectionRelationshipRead](docs/Model/ApiCollectionRelationshipRead.md)
- [ApiCollectionSearchResultRead](docs/Model/ApiCollectionSearchResultRead.md)
- [ApiCollectionString](docs/Model/ApiCollectionString.md)
- [AppealCategoryRead](docs/Model/AppealCategoryRead.md)
- [AppealRead](docs/Model/AppealRead.md)
- [AttachmentAdd](docs/Model/AttachmentAdd.md)
- [AttachmentEdit](docs/Model/AttachmentEdit.md)
- [AttachmentRead](docs/Model/AttachmentRead.md)
- [CampaignRead](docs/Model/CampaignRead.md)
- [CommunicationPreferenceAdd](docs/Model/CommunicationPreferenceAdd.md)
- [CommunicationPreferenceEdit](docs/Model/CommunicationPreferenceEdit.md)
- [CommunicationPreferenceRead](docs/Model/CommunicationPreferenceRead.md)
- [ConstituentAdd](docs/Model/ConstituentAdd.md)
- [ConstituentAddressAdd](docs/Model/ConstituentAddressAdd.md)
- [ConstituentAppealRead](docs/Model/ConstituentAppealRead.md)
- [ConstituentCodeAdd](docs/Model/ConstituentCodeAdd.md)
- [ConstituentCodeEdit](docs/Model/ConstituentCodeEdit.md)
- [ConstituentCodeRead](docs/Model/ConstituentCodeRead.md)
- [ConstituentEdit](docs/Model/ConstituentEdit.md)
- [ConstituentEmailAddressAdd](docs/Model/ConstituentEmailAddressAdd.md)
- [ConstituentFundraiserRead](docs/Model/ConstituentFundraiserRead.md)
- [ConstituentListItem](docs/Model/ConstituentListItem.md)
- [ConstituentOnlinePresenceAdd](docs/Model/ConstituentOnlinePresenceAdd.md)
- [ConstituentPhoneAdd](docs/Model/ConstituentPhoneAdd.md)
- [ConstituentRead](docs/Model/ConstituentRead.md)
- [CountryRead](docs/Model/CountryRead.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyConfigurationRead](docs/Model/CurrencyConfigurationRead.md)
- [CustomFieldAdd](docs/Model/CustomFieldAdd.md)
- [CustomFieldCategoryRead](docs/Model/CustomFieldCategoryRead.md)
- [CustomFieldEdit](docs/Model/CustomFieldEdit.md)
- [CustomFieldRead](docs/Model/CustomFieldRead.md)
- [EducationAdd](docs/Model/EducationAdd.md)
- [EducationEdit](docs/Model/EducationEdit.md)
- [EducationRead](docs/Model/EducationRead.md)
- [EmailAddressAdd](docs/Model/EmailAddressAdd.md)
- [EmailAddressEdit](docs/Model/EmailAddressEdit.md)
- [EmailAddressRead](docs/Model/EmailAddressRead.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [FileDefinition](docs/Model/FileDefinition.md)
- [FundRead](docs/Model/FundRead.md)
- [FundraiserAssignmentRead](docs/Model/FundraiserAssignmentRead.md)
- [FuzzyDate](docs/Model/FuzzyDate.md)
- [GivingSummaryRead](docs/Model/GivingSummaryRead.md)
- [Header](docs/Model/Header.md)
- [LifetimeGivingRead](docs/Model/LifetimeGivingRead.md)
- [MembershipMemberRead](docs/Model/MembershipMemberRead.md)
- [MembershipRead](docs/Model/MembershipRead.md)
- [NameFormatAdd](docs/Model/NameFormatAdd.md)
- [NameFormatConfigurationRead](docs/Model/NameFormatConfigurationRead.md)
- [NameFormatEdit](docs/Model/NameFormatEdit.md)
- [NameFormatRead](docs/Model/NameFormatRead.md)
- [NameFormatSummaryRead](docs/Model/NameFormatSummaryRead.md)
- [NewDocumentInfo](docs/Model/NewDocumentInfo.md)
- [NonConstituentAdd](docs/Model/NonConstituentAdd.md)
- [NoteAdd](docs/Model/NoteAdd.md)
- [NoteEdit](docs/Model/NoteEdit.md)
- [NoteRead](docs/Model/NoteRead.md)
- [OnlinePresenceAdd](docs/Model/OnlinePresenceAdd.md)
- [OnlinePresenceEdit](docs/Model/OnlinePresenceEdit.md)
- [OnlinePresenceRead](docs/Model/OnlinePresenceRead.md)
- [PackageRead](docs/Model/PackageRead.md)
- [PhoneAdd](docs/Model/PhoneAdd.md)
- [PhoneEdit](docs/Model/PhoneEdit.md)
- [PhoneRead](docs/Model/PhoneRead.md)
- [PostResponse](docs/Model/PostResponse.md)
- [PrimaryNameFormatAdd](docs/Model/PrimaryNameFormatAdd.md)
- [PrimaryNameFormatEdit](docs/Model/PrimaryNameFormatEdit.md)
- [PrimaryNameFormatRead](docs/Model/PrimaryNameFormatRead.md)
- [ProfilePictureEdit](docs/Model/ProfilePictureEdit.md)
- [ProfilePictureRead](docs/Model/ProfilePictureRead.md)
- [ProspectStatusRead](docs/Model/ProspectStatusRead.md)
- [RatingAdd](docs/Model/RatingAdd.md)
- [RatingCategoryRead](docs/Model/RatingCategoryRead.md)
- [RatingEdit](docs/Model/RatingEdit.md)
- [RatingRead](docs/Model/RatingRead.md)
- [RatingSourceRead](docs/Model/RatingSourceRead.md)
- [RelationshipAdd](docs/Model/RelationshipAdd.md)
- [RelationshipEdit](docs/Model/RelationshipEdit.md)
- [RelationshipRead](docs/Model/RelationshipRead.md)
- [RequestMetaData](docs/Model/RequestMetaData.md)
- [SearchResultRead](docs/Model/SearchResultRead.md)
- [SpouseRead](docs/Model/SpouseRead.md)

## Authorization

### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Bb-Api-Subscription-Key
- **Location**: HTTP header



### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string



### oauth2Blackbaud OAuth 2.0 ServiceAuthorizationCode

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://oauth2.sky.blackbaud.com/authorization`
- **Scopes**: N/A


### oauth2Blackbaud OAuth 2.0 ServiceImplicit

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://oauth2.sky.blackbaud.com/authorization`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
