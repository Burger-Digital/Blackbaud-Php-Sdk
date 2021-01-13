# EducationAdd

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campus** | **string** | The campus. Character limit: 50. | [optional] 
**class_of** | **string** | The year the constituent graduated. | [optional] 
**class_of_degree** | **string** | The class of degree. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegreeClasses\&quot;&gt;&lt;b&gt;Class of Degree&lt;/b&gt;&lt;/a&gt; table. For the UK only. | [optional] 
**constituent_id** | **string** | The immutable system record ID of the constituent associated with the education. | 
**date_entered** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**date_graduated** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**date_left** | [**\BurgerDigital\BlackbaudPhpSdk\BurgerDigital\BlackbaudPhpSdk\Models\FuzzyDate**](FuzzyDate.md) |  | [optional] 
**degree** | **string** | The degree received. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDegrees\&quot;&gt;&lt;b&gt;Degrees&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**department** | **string** | The name of the education department. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationDepartments\&quot;&gt;&lt;b&gt;Departments&lt;/b&gt;&lt;/a&gt; table. For the UK only. | [optional] 
**faculty** | **string** | The name of the faculty. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationFaculties\&quot;&gt;&lt;b&gt;Faculties&lt;/b&gt;&lt;/a&gt; table. For the UK only. | [optional] 
**gpa** | **double** | The grade point average. | [optional] 
**known_name** | **string** | The known name. Character limit: 50. | [optional] 
**majors** | **string[]** | The major courses of study. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\&quot;&gt;&lt;b&gt;Major/Minor&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**minors** | **string[]** | The minor courses of study. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\&quot;&gt;&lt;b&gt;Major/Minor&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**primary** | **bool** | Indicates whether this is the constituent&#x27;s primary school association. | [optional] 
**registration_number** | **string** | The registration number. For the UK only. Character limit: 50. | [optional] 
**school** | **string** | The school name. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\&quot;&gt;&lt;b&gt;Schools&lt;/b&gt;&lt;/a&gt; table. For the UK, this property is for the establishment name, and available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSchools\&quot;&gt;&lt;b&gt;Establishments&lt;/b&gt;&lt;/a&gt; table. | 
**social_organization** | **string** | The social organization. Character limit: 50. | [optional] 
**status** | **string** | The status of the education. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationStatuses\&quot;&gt;&lt;b&gt;Education Status&lt;/b&gt;&lt;/a&gt; table. | [optional] 
**subject_of_study** | **string** | The subject of study. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationSubjects\&quot;&gt;&lt;b&gt;Subject of Study&lt;/b&gt;&lt;/a&gt; table. For the UK only. | [optional] 
**type** | **string** | The type of education. Available values are the entries in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/56b76470069a0509c8f1c5b3/operations/ListEducationTypes\&quot;&gt;&lt;b&gt;School Types&lt;/b&gt;&lt;/a&gt; table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

