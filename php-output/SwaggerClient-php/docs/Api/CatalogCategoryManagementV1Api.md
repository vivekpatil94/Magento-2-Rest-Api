# Swagger\Client\CatalogCategoryManagementV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryManagementV1GetTreeGet**](CatalogCategoryManagementV1Api.md#catalogCategoryManagementV1GetTreeGet) | **GET** /V1/categories | 


# **catalogCategoryManagementV1GetTreeGet**
> \Swagger\Client\Model\CatalogDataCategoryTreeInterface catalogCategoryManagementV1GetTreeGet($root_category_id, $depth)



Retrieve list of categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogCategoryManagementV1Api();
$root_category_id = 56; // int | 
$depth = 56; // int | 

try {
    $result = $api_instance->catalogCategoryManagementV1GetTreeGet($root_category_id, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryManagementV1Api->catalogCategoryManagementV1GetTreeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root_category_id** | **int**|  | [optional]
 **depth** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataCategoryTreeInterface**](../Model/CatalogDataCategoryTreeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

