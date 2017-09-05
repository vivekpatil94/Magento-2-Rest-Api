# Swagger\Client\CatalogProductCustomOptionRepositoryV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductCustomOptionRepositoryV1GetGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetGet) | **GET** /V1/products/{sku}/options/{optionId} | 
[**catalogProductCustomOptionRepositoryV1GetListGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetListGet) | **GET** /V1/products/{sku}/options | 


# **catalogProductCustomOptionRepositoryV1GetGet**
> \Swagger\Client\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1GetGet($sku, $option_id)



Get custom option for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductCustomOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$option_id = 56; // int | 

try {
    $result = $api_instance->catalogProductCustomOptionRepositoryV1GetGet($sku, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **option_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1GetListGet**
> \Swagger\Client\Model\CatalogDataProductCustomOptionInterface[] catalogProductCustomOptionRepositoryV1GetListGet($sku)



Get the list of custom options for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductCustomOptionRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->catalogProductCustomOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductCustomOptionInterface[]**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

