# Swagger\Client\CatalogCategoryRepositoryV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryRepositoryV1GetGet**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1GetGet) | **GET** /V1/categories/{categoryId} | 


# **catalogCategoryRepositoryV1GetGet**
> \Swagger\Client\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1GetGet($category_id, $store_id)



Get info about category by category id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogCategoryRepositoryV1Api();
$category_id = 56; // int | 
$store_id = 56; // int | 

try {
    $result = $api_instance->catalogCategoryRepositoryV1GetGet($category_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**|  |
 **store_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

