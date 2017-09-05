# Swagger\Client\CatalogProductTierPriceManagementV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductTierPriceManagementV1GetListGet**](CatalogProductTierPriceManagementV1Api.md#catalogProductTierPriceManagementV1GetListGet) | **GET** /V1/products/{sku}/group-prices/{customerGroupId}/tiers | 


# **catalogProductTierPriceManagementV1GetListGet**
> \Swagger\Client\Model\CatalogDataProductTierPriceInterface[] catalogProductTierPriceManagementV1GetListGet($sku, $customer_group_id)



Get tier price of product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductTierPriceManagementV1Api();
$sku = "sku_example"; // string | 
$customer_group_id = "customer_group_id_example"; // string | 'all' can be used to specify 'ALL GROUPS'

try {
    $result = $api_instance->catalogProductTierPriceManagementV1GetListGet($sku, $customer_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductTierPriceManagementV1Api->catalogProductTierPriceManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **customer_group_id** | **string**| &#39;all&#39; can be used to specify &#39;ALL GROUPS&#39; |

### Return type

[**\Swagger\Client\Model\CatalogDataProductTierPriceInterface[]**](../Model/CatalogDataProductTierPriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

