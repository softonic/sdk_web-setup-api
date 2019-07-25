# Softonic\WebSetupApiSdk\ProgramsPlatformsLanguagesApi

All URIs are relative to *web-setup-v1.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#createprogramplatformlanguage) | **POST** /programs/{id_program}/platforms/{id_platform}/languages | Creates a program configuration for a specific platform and language
[**deleteProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#deleteprogramplatformlanguage) | **DELETE** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Deletes a program configuration for a specific platform and language
[**findProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#findprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages | Finds a program configuration for a specific platform for all languages
[**readProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#readprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Reads a program configuration for a specific platform and language
[**replaceProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#replaceprogramplatformlanguage) | **PUT** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Replaces a program configuration for a specific platform and language
[**updateProgramPlatformLanguage**](ProgramsPlatformsLanguagesApi.md#updateprogramplatformlanguage) | **PATCH** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Updates a program configuration for a specific platform and language

# **createProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage createProgramPlatformLanguage($body, $id_program, $id_platform)

Creates a program configuration for a specific platform and language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\WebSetupApiSdk\Client\Model\null(); //  | ProgramPlatformLanguage config to be created
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier

try {
    $result = $apiInstance->createProgramPlatformLanguage($body, $id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->createProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguage config to be created |
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage deleteProgramPlatformLanguage($id_program, $id_platform, $id_language)

Deletes a program configuration for a specific platform and language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $result = $apiInstance->deleteProgramPlatformLanguage($id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->deleteProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_language** | **string**| Language identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage[] findProgramPlatformLanguage($id_program, $id_platform)

Finds a program configuration for a specific platform for all languages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier

try {
    $result = $apiInstance->findProgramPlatformLanguage($id_program, $id_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->findProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage[]**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage readProgramPlatformLanguage($id_program, $id_platform, $id_language)

Reads a program configuration for a specific platform and language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $result = $apiInstance->readProgramPlatformLanguage($id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->readProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_language** | **string**| Language identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage replaceProgramPlatformLanguage($body, $id_program, $id_platform, $id_language)

Replaces a program configuration for a specific platform and language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\WebSetupApiSdk\Client\Model\null(); //  | ProgramPlatformLanguage config to be replaced
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $result = $apiInstance->replaceProgramPlatformLanguage($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->replaceProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| ProgramPlatformLanguage config to be replaced |
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_language** | **string**| Language identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramPlatformLanguage**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage updateProgramPlatformLanguage($body, $id_program, $id_platform, $id_language)

Updates a program configuration for a specific platform and language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\ProgramsPlatformsLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage(); // \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage | ProgramPlatformLanguage config to be updated
$id_program = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_language = "id_language_example"; // string | Language identifier

try {
    $result = $apiInstance->updateProgramPlatformLanguage($body, $id_program, $id_platform, $id_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsPlatformsLanguagesApi->updateProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)| ProgramPlatformLanguage config to be updated |
 **id_program** | [**string**](../Model/.md)| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_language** | **string**| Language identifier |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

