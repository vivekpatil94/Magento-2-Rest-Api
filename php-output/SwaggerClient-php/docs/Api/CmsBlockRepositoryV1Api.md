# Swagger\Client\CmsBlockRepositoryV1Api

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cmsBlockRepositoryV1GetByIdGet**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1GetByIdGet) | **GET** /V1/cmsBlock/{blockId} | 


# **cmsBlockRepositoryV1GetByIdGet**
> \Swagger\Client\Model\CmsDataBlockInterface cmsBlockRepositoryV1GetByIdGet($block_id)



Retrieve block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CmsBlockRepositoryV1Api();
$block_id = 56; // int | 

try {
    $result = $api_instance->cmsBlockRepositoryV1GetByIdGet($block_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

