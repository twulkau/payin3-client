# PayIn3\Client\PartnerCreditCheckApi

All URIs are relative to *http://capayable-api-test.tritac.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnerCreditCheckV2Post**](PartnerCreditCheckApi.md#partnerCreditCheckV2Post) | **POST** /v2/partner/creditcheck | 


# **partnerCreditCheckV2Post**
> \PayIn3\Client\Model\CreditCheckResult partnerCreditCheckV2Post($item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = PayIn3\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PayIn3\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new PayIn3\Client\Api\PartnerCreditCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = new \PayIn3\Client\Model\PartnerCreditCheckRequestV2Model(); // \PayIn3\Client\Model\PartnerCreditCheckRequestV2Model | 

try {
    $result = $apiInstance->partnerCreditCheckV2Post($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnerCreditCheckApi->partnerCreditCheckV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\PayIn3\Client\Model\PartnerCreditCheckRequestV2Model**](../Model/PartnerCreditCheckRequestV2Model.md)|  |

### Return type

[**\PayIn3\Client\Model\CreditCheckResult**](../Model/CreditCheckResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

