# Swagger\Client\CatalogProductAttributeOptionManagementV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeOptionManagementV1GetItemsGet**](CatalogProductAttributeOptionManagementV1Api.md#catalogProductAttributeOptionManagementV1GetItemsGet) | **GET** /V1/products/attributes/{attributeCode}/options | 


# **catalogProductAttributeOptionManagementV1GetItemsGet**
> \Swagger\Client\Model\EavDataAttributeOptionInterface[] catalogProductAttributeOptionManagementV1GetItemsGet($attribute_code)



Retrieve list of attribute options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeOptionManagementV1Api();
$attribute_code = "attribute_code_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeOptionManagementV1GetItemsGet($attribute_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeOptionManagementV1Api->catalogProductAttributeOptionManagementV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\EavDataAttributeOptionInterface[]**](../Model/EavDataAttributeOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

