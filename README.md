# WebSetupApiSdk
API to setup a program on a website

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/softonic/web_setup_api_sdk.git"
    }
  ],
  "require": {
    "softonic/web_setup_api_sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/WebSetupApiSdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *web-setup-v1.sft.eu-west.sftapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProgramsPlatformsLanguagesApi* | [**createProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#createprogramplatformlanguage) | **POST** /programs/{id_program}/platforms/{id_platform}/languages | Creates a program configuration for a specific platform and language
*ProgramsPlatformsLanguagesApi* | [**deleteProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#deleteprogramplatformlanguage) | **DELETE** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Deletes a program configuration for a specific platform and language
*ProgramsPlatformsLanguagesApi* | [**findProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#findprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages | Finds a program configuration for a specific platform for all languages
*ProgramsPlatformsLanguagesApi* | [**readProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#readprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Reads a program configuration for a specific platform and language
*ProgramsPlatformsLanguagesApi* | [**replaceProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#replaceprogramplatformlanguage) | **PUT** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Replaces a program configuration for a specific platform and language
*ProgramsPlatformsLanguagesApi* | [**updateProgramPlatformLanguage**](docs/Api/ProgramsPlatformsLanguagesApi.md#updateprogramplatformlanguage) | **PATCH** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Updates a program configuration for a specific platform and language
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /search | Search a list of filters and returns the result

## Documentation For Models

 - [ProgramPlatformLanguage](docs/Model/ProgramPlatformLanguage.md)
 - [SearchRequest](docs/Model/SearchRequest.md)

## Documentation For Authorization


## softonic_auth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author

development@softonic.com

