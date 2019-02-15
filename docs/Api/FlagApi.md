# EspadaV8\PHPFlagr\FlagApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlag**](FlagApi.md#createFlag) | **POST** /flags | 
[**deleteFlag**](FlagApi.md#deleteFlag) | **DELETE** /flags/{flagID} | 
[**findFlags**](FlagApi.md#findFlags) | **GET** /flags | 
[**getFlag**](FlagApi.md#getFlag) | **GET** /flags/{flagID} | 
[**getFlagSnapshots**](FlagApi.md#getFlagSnapshots) | **GET** /flags/{flagID}/snapshots | 
[**putFlag**](FlagApi.md#putFlag) | **PUT** /flags/{flagID} | 
[**setFlagEnabled**](FlagApi.md#setFlagEnabled) | **PUT** /flags/{flagID}/enabled | 


# **createFlag**
> \EspadaV8\PHPFlagr\Model\Flag createFlag($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \EspadaV8\PHPFlagr\Model\CreateFlagRequest(); // \EspadaV8\PHPFlagr\Model\CreateFlagRequest | create a flag

try {
    $result = $apiInstance->createFlag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->createFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EspadaV8\PHPFlagr\Model\CreateFlagRequest**](../Model/CreateFlagRequest.md)| create a flag |

### Return type

[**\EspadaV8\PHPFlagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlag**
> deleteFlag($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag

try {
    $apiInstance->deleteFlag($flagID);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFlags**
> \EspadaV8\PHPFlagr\Model\Flag[] findFlags()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findFlags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->findFlags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\EspadaV8\PHPFlagr\Model\Flag[]**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlag**
> \EspadaV8\PHPFlagr\Model\Flag getFlag($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlag($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\EspadaV8\PHPFlagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlagSnapshots**
> \EspadaV8\PHPFlagr\Model\FlagSnapshot[] getFlagSnapshots($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlagSnapshots($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |

### Return type

[**\EspadaV8\PHPFlagr\Model\FlagSnapshot[]**](../Model/FlagSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlag**
> \EspadaV8\PHPFlagr\Model\Flag putFlag($flagID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get
$body = new \EspadaV8\PHPFlagr\Model\PutFlagRequest(); // \EspadaV8\PHPFlagr\Model\PutFlagRequest | update a flag

try {
    $result = $apiInstance->putFlag($flagID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->putFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |
 **body** | [**\EspadaV8\PHPFlagr\Model\PutFlagRequest**](../Model/PutFlagRequest.md)| update a flag |

### Return type

[**\EspadaV8\PHPFlagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFlagEnabled**
> \EspadaV8\PHPFlagr\Model\Flag setFlagEnabled($flagID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag to get
$body = new \EspadaV8\PHPFlagr\Model\SetFlagEnabledRequest(); // \EspadaV8\PHPFlagr\Model\SetFlagEnabledRequest | set flag enabled state

try {
    $result = $apiInstance->setFlagEnabled($flagID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->setFlagEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag to get |
 **body** | [**\EspadaV8\PHPFlagr\Model\SetFlagEnabledRequest**](../Model/SetFlagEnabledRequest.md)| set flag enabled state |

### Return type

[**\EspadaV8\PHPFlagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
