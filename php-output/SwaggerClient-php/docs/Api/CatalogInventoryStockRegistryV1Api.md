# Swagger\Client\CatalogInventoryStockRegistryV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogInventoryStockRegistryV1GetStockStatusBySkuGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetStockStatusBySkuGet) | **GET** /V1/stockStatuses/{productSku} | 


# **catalogInventoryStockRegistryV1GetStockStatusBySkuGet**
> \Swagger\Client\Model\CatalogInventoryDataStockStatusInterface catalogInventoryStockRegistryV1GetStockStatusBySkuGet($product_sku, $scope_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogInventoryStockRegistryV1Api();
$product_sku = "product_sku_example"; // string | 
$scope_id = 56; // int | 

try {
    $result = $api_instance->catalogInventoryStockRegistryV1GetStockStatusBySkuGet($product_sku, $scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetStockStatusBySkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku** | **string**|  |
 **scope_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogInventoryDataStockStatusInterface**](../Model/CatalogInventoryDataStockStatusInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

