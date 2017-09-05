# Swagger\Client\ConfigurableProductOptionRepositoryV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductOptionRepositoryV1GetGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetGet) | **GET** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetListGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetListGet) | **GET** /V1/configurable-products/{sku}/options/all | 


# **configurableProductOptionRepositoryV1GetGet**
> \Swagger\Client\Model\ConfigurableProductDataOptionInterface configurableProductOptionRepositoryV1GetGet($sku, $id)



Get option for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1GetGet($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ConfigurableProductDataOptionInterface**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetListGet**
> \Swagger\Client\Model\ConfigurableProductDataOptionInterface[] configurableProductOptionRepositoryV1GetListGet($sku)



Get all options for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConfigurableProductDataOptionInterface[]**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

