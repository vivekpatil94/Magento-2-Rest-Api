# Swagger\Client\CatalogProductLinkManagementV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkManagementV1GetLinkedItemsByTypeGet**](CatalogProductLinkManagementV1Api.md#catalogProductLinkManagementV1GetLinkedItemsByTypeGet) | **GET** /V1/products/{sku}/links/{type} | 


# **catalogProductLinkManagementV1GetLinkedItemsByTypeGet**
> \Swagger\Client\Model\CatalogDataProductLinkInterface[] catalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type)



Provide the list of links for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductLinkManagementV1Api();
$sku = "sku_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $api_instance->catalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkManagementV1Api->catalogProductLinkManagementV1GetLinkedItemsByTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **type** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductLinkInterface[]**](../Model/CatalogDataProductLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

