# EspadaV8\PHPFlagr\DistributionApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findDistributions**](DistributionApi.md#findDistributions) | **GET** /flags/{flagID}/segments/{segmentID}/distributions | 
[**putDistributions**](DistributionApi.md#putDistributions) | **PUT** /flags/{flagID}/segments/{segmentID}/distributions | 


# **findDistributions**
> \EspadaV8\PHPFlagr\Model\Distribution[] findDistributions($flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->findDistributions($flagID, $segmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->findDistributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

[**\EspadaV8\PHPFlagr\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDistributions**
> \EspadaV8\PHPFlagr\Model\Distribution[] putDistributions($flagID, $segmentID, $body)



replace the distribution with the new setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$body = new \EspadaV8\PHPFlagr\Model\PutDistributionsRequest(); // \EspadaV8\PHPFlagr\Model\PutDistributionsRequest | array of distributions

try {
    $result = $apiInstance->putDistributions($flagID, $segmentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->putDistributions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **body** | [**\EspadaV8\PHPFlagr\Model\PutDistributionsRequest**](../Model/PutDistributionsRequest.md)| array of distributions |

### Return type

[**\EspadaV8\PHPFlagr\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
