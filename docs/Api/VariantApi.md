# EspadaV8\PHPFlagr\VariantApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariant**](VariantApi.md#createVariant) | **POST** /flags/{flagID}/variants | 
[**deleteVariant**](VariantApi.md#deleteVariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
[**findVariants**](VariantApi.md#findVariants) | **GET** /flags/{flagID}/variants | 
[**putVariant**](VariantApi.md#putVariant) | **PUT** /flags/{flagID}/variants/{variantID} | 


# **createVariant**
> \EspadaV8\PHPFlagr\Model\Variant createVariant($flagID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$body = new \EspadaV8\PHPFlagr\Model\CreateVariantRequest(); // \EspadaV8\PHPFlagr\Model\CreateVariantRequest | create a variant

try {
    $result = $apiInstance->createVariant($flagID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->createVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **body** | [**\EspadaV8\PHPFlagr\Model\CreateVariantRequest**](../Model/CreateVariantRequest.md)| create a variant |

### Return type

[**\EspadaV8\PHPFlagr\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariant**
> deleteVariant($flagID, $variantID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$variantID = 789; // int | numeric ID of the variant

try {
    $apiInstance->deleteVariant($flagID, $variantID);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->deleteVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **variantID** | **int**| numeric ID of the variant |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findVariants**
> \EspadaV8\PHPFlagr\Model\Variant[] findVariants($flagID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findVariants($flagID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->findVariants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |

### Return type

[**\EspadaV8\PHPFlagr\Model\Variant[]**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVariant**
> \EspadaV8\PHPFlagr\Model\Variant putVariant($flagID, $variantID, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EspadaV8\PHPFlagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flagID = 789; // int | numeric ID of the flag
$variantID = 789; // int | numeric ID of the variant
$body = new \EspadaV8\PHPFlagr\Model\PutVariantRequest(); // \EspadaV8\PHPFlagr\Model\PutVariantRequest | update a variant

try {
    $result = $apiInstance->putVariant($flagID, $variantID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->putVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flagID** | **int**| numeric ID of the flag |
 **variantID** | **int**| numeric ID of the variant |
 **body** | [**\EspadaV8\PHPFlagr\Model\PutVariantRequest**](../Model/PutVariantRequest.md)| update a variant |

### Return type

[**\EspadaV8\PHPFlagr\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
