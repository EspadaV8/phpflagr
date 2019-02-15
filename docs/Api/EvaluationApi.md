# EspadaV8\PHPFlagr\EvaluationApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postEvaluation**](EvaluationApi.md#postEvaluation) | **POST** /evaluation | 
[**postEvaluationBatch**](EvaluationApi.md#postEvaluationBatch) | **POST** /evaluation/batch | 


# **postEvaluation**
> \EspadaV8\PHPFlagr\Model\EvalResult postEvaluation($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EspadaV8\PHPFlagr\Model\EvalContext(); // \EspadaV8\PHPFlagr\Model\EvalContext | evalution context

try {
    $result = $apiInstance->postEvaluation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EspadaV8\PHPFlagr\Model\EvalContext**](../Model/EvalContext.md)| evalution context |

### Return type

[**\EspadaV8\PHPFlagr\Model\EvalResult**](../Model/EvalResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEvaluationBatch**
> \EspadaV8\PHPFlagr\Model\EvaluationBatchResponse postEvaluationBatch($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EspadaV8\PHPFlagr\Model\EvaluationBatchRequest(); // \EspadaV8\PHPFlagr\Model\EvaluationBatchRequest | evalution batch request

try {
    $result = $apiInstance->postEvaluationBatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluationBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EspadaV8\PHPFlagr\Model\EvaluationBatchRequest**](../Model/EvaluationBatchRequest.md)| evalution batch request |

### Return type

[**\EspadaV8\PHPFlagr\Model\EvaluationBatchResponse**](../Model/EvaluationBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
