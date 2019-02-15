# EspadaV8\PHPFlagr\SegmentApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](SegmentApi.md#createSegment) | **POST** /flags/{flagID}/segments | 
[**deleteSegment**](SegmentApi.md#deleteSegment) | **DELETE** /flags/{flagID}/segments/{segmentID} | 
[**findSegments**](SegmentApi.md#findSegments) | **GET** /flags/{flagID}/segments | 
[**putSegment**](SegmentApi.md#putSegment) | **PUT** /flags/{flagID}/segments/{segmentID} | 
[**putSegmentsReorder**](SegmentApi.md#putSegmentsReorder) | **PUT** /flags/{flagID}/segments/reorder | 


# **createSegment**
> \EspadaV8\PHPFlagr\Model\Segment createSegment($flagID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get
$body = new \EspadaV8\PHPFlagr\Model\CreateSegmentRequest(); // \EspadaV8\PHPFlagr\Model\CreateSegmentRequest | create a segment under a flag

try {
    $result = $apiInstance->createSegment($flagID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |
 **body** | [**\EspadaV8\PHPFlagr\Model\CreateSegmentRequest**](../Model/CreateSegmentRequest.md)| create a segment under a flag |

### Return type

[**\EspadaV8\PHPFlagr\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSegment**
> deleteSegment($flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $apiInstance->deleteSegment($flagID, $segmentID);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSegments**
> \EspadaV8\PHPFlagr\Model\Segment[] findSegments($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->findSegments($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->findSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\EspadaV8\PHPFlagr\Model\Segment[]**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegment**
> \EspadaV8\PHPFlagr\Model\Segment putSegment($flagID, $segmentID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$body = new \EspadaV8\PHPFlagr\Model\PutSegmentRequest(); // \EspadaV8\PHPFlagr\Model\PutSegmentRequest | update a segment

try {
    $result = $apiInstance->putSegment($flagID, $segmentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **body** | [**\EspadaV8\PHPFlagr\Model\PutSegmentRequest**](../Model/PutSegmentRequest.md)| update a segment |

### Return type

[**\EspadaV8\PHPFlagr\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegmentsReorder**
> putSegmentsReorder($flagID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$body = new \EspadaV8\PHPFlagr\Model\PutSegmentReorderRequest(); // \EspadaV8\PHPFlagr\Model\PutSegmentReorderRequest | reorder segments

try {
    $apiInstance->putSegmentsReorder($flagID, $body);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegmentsReorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **body** | [**\EspadaV8\PHPFlagr\Model\PutSegmentReorderRequest**](../Model/PutSegmentReorderRequest.md)| reorder segments |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
