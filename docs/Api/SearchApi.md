# Softonic\WebSetupApiSdk\SearchApi

All URIs are relative to *web-setup-v1.sft.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **POST** /search | Search a list of filters and returns the result

# **search**
> \Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage[] search($body)

Search a list of filters and returns the result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic_auth
$config = Softonic\WebSetupApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\WebSetupApiSdk\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Softonic\WebSetupApiSdk\Client\Model\SearchRequest()); // \Softonic\WebSetupApiSdk\Client\Model\SearchRequest[] | 

try {
    $result = $apiInstance->search($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\WebSetupApiSdk\Client\Model\SearchRequest[]**](../Model/SearchRequest.md)|  |

### Return type

[**\Softonic\WebSetupApiSdk\Client\Model\ProgramPlatformLanguage[]**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic_auth](../../README.md#softonic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

