# PayIn3\Client\RegistrationCheckApi

All URIs are relative to *http://capayable-api-test.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationCheckV2Post**](RegistrationCheckApi.md#registrationCheckV2Post) | **POST** /v2/registrationcheck | # Chamber of Commerce registration check  If you sell to businesses, the shop can do a registration check of the corporation’s chamber of commerce number. The API will return the address data if the number is found.  This option may or may not be available, dependent on your contract with Capayable, as it entails an extra cost.     Note: the CoC check on the live environment may take a while, so be sure to set longer timeouts (max 2 minutes).    Supported countries:  - Test environment: NL  - Live environment: NL


# **registrationCheckV2Post**
> \PayIn3\Client\Model\RegistrationCheckResultViewModel registrationCheckV2Post($model)

# Chamber of Commerce registration check  If you sell to businesses, the shop can do a registration check of the corporation’s chamber of commerce number. The API will return the address data if the number is found.  This option may or may not be available, dependent on your contract with Capayable, as it entails an extra cost.     Note: the CoC check on the live environment may take a while, so be sure to set longer timeouts (max 2 minutes).    Supported countries:  - Test environment: NL  - Live environment: NL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = PayIn3\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PayIn3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new PayIn3\Client\Api\RegistrationCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \PayIn3\Client\Model\RegistrationCheckRequestV2Model(); // \PayIn3\Client\Model\RegistrationCheckRequestV2Model | 

try {
    $result = $apiInstance->registrationCheckV2Post($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationCheckApi->registrationCheckV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\PayIn3\Client\Model\RegistrationCheckRequestV2Model**](../Model/RegistrationCheckRequestV2Model.md)|  |

### Return type

[**\PayIn3\Client\Model\RegistrationCheckResultViewModel**](../Model/RegistrationCheckResultViewModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

