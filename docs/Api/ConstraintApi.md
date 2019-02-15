# EspadaV8\PHPFlagr\ConstraintApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstraint**](ConstraintApi.md#createConstraint) | **POST** /flags/{flagID}/segments/{segmentID}/constraints | 
[**deleteConstraint**](ConstraintApi.md#deleteConstraint) | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
[**findConstraints**](ConstraintApi.md#findConstraints) | **GET** /flags/{flagID}/segments/{segmentID}/constraints | 
[**putConstraint**](ConstraintApi.md#putConstraint) | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 


# **createConstraint**
> \EspadaV8\PHPFlagr\Model\Constraint createConstraint($flagID, $segmentID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$body = new \EspadaV8\PHPFlagr\Model\CreateConstraintRequest(); // \EspadaV8\PHPFlagr\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->createConstraint($flagID, $segmentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **body** | [**\EspadaV8\PHPFlagr\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\EspadaV8\PHPFlagr\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConstraint**
> deleteConstraint($flagID, $segmentID, $constraintID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$constraintID = 789; // int | numeric ID of the constraint

try {
    $apiInstance->deleteConstraint($flagID, $segmentID, $constraintID);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->deleteConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **constraintID** | **int**| numeric ID of the constraint |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findConstraints**
> \EspadaV8\PHPFlagr\Model\Constraint[] findConstraints($flagID, $segmentID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->findConstraints($flagID, $segmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->findConstraints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |

### Return type

[**\EspadaV8\PHPFlagr\Model\Constraint[]**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConstraint**
> \EspadaV8\PHPFlagr\Model\Constraint putConstraint($flagID, $segmentID, $constraintID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$segmentID = 789; // int | numeric ID of the segment
$constraintID = 789; // int | numeric ID of the constraint
$body = new \EspadaV8\PHPFlagr\Model\CreateConstraintRequest(); // \EspadaV8\PHPFlagr\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->putConstraint($flagID, $segmentID, $constraintID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->putConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **segmentID** | **int**| numeric ID of the segment |
 **constraintID** | **int**| numeric ID of the constraint |
 **body** | [**\EspadaV8\PHPFlagr\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\EspadaV8\PHPFlagr\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
