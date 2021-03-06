# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogAttributeSetRepositoryV1Api();
$attribute_set_id = 56; // int | 

try {
    $result = $api_instance->catalogAttributeSetRepositoryV1GetGet($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://bzm-demo1.cloudapp.net/magento2/rest/all*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CatalogAttributeSetRepositoryV1Api* | [**catalogAttributeSetRepositoryV1GetGet**](docs/Api/CatalogAttributeSetRepositoryV1Api.md#catalogattributesetrepositoryv1getget) | **GET** /V1/products/attribute-sets/{attributeSetId} | 
*CatalogAttributeSetRepositoryV1Api* | [**catalogAttributeSetRepositoryV1GetListGet**](docs/Api/CatalogAttributeSetRepositoryV1Api.md#catalogattributesetrepositoryv1getlistget) | **GET** /V1/products/attribute-sets/sets/list | 
*CatalogCategoryLinkManagementV1Api* | [**catalogCategoryLinkManagementV1GetAssignedProductsGet**](docs/Api/CatalogCategoryLinkManagementV1Api.md#catalogcategorylinkmanagementv1getassignedproductsget) | **GET** /V1/categories/{categoryId}/products | 
*CatalogCategoryManagementV1Api* | [**catalogCategoryManagementV1GetTreeGet**](docs/Api/CatalogCategoryManagementV1Api.md#catalogcategorymanagementv1gettreeget) | **GET** /V1/categories | 
*CatalogCategoryRepositoryV1Api* | [**catalogCategoryRepositoryV1GetGet**](docs/Api/CatalogCategoryRepositoryV1Api.md#catalogcategoryrepositoryv1getget) | **GET** /V1/categories/{categoryId} | 
*CatalogInventoryStockRegistryV1Api* | [**catalogInventoryStockRegistryV1GetStockStatusBySkuGet**](docs/Api/CatalogInventoryStockRegistryV1Api.md#cataloginventorystockregistryv1getstockstatusbyskuget) | **GET** /V1/stockStatuses/{productSku} | 
*CatalogProductAttributeGroupRepositoryV1Api* | [**catalogProductAttributeGroupRepositoryV1GetListGet**](docs/Api/CatalogProductAttributeGroupRepositoryV1Api.md#catalogproductattributegrouprepositoryv1getlistget) | **GET** /V1/products/attribute-sets/groups/list | 
*CatalogProductAttributeManagementV1Api* | [**catalogProductAttributeManagementV1GetAttributesGet**](docs/Api/CatalogProductAttributeManagementV1Api.md#catalogproductattributemanagementv1getattributesget) | **GET** /V1/products/attribute-sets/{attributeSetId}/attributes | 
*CatalogProductAttributeMediaGalleryManagementV1Api* | [**catalogProductAttributeMediaGalleryManagementV1GetGet**](docs/Api/CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogproductattributemediagallerymanagementv1getget) | **GET** /V1/products/{sku}/media/{entryId} | 
*CatalogProductAttributeMediaGalleryManagementV1Api* | [**catalogProductAttributeMediaGalleryManagementV1GetListGet**](docs/Api/CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogproductattributemediagallerymanagementv1getlistget) | **GET** /V1/products/{sku}/media | 
*CatalogProductAttributeOptionManagementV1Api* | [**catalogProductAttributeOptionManagementV1GetItemsGet**](docs/Api/CatalogProductAttributeOptionManagementV1Api.md#catalogproductattributeoptionmanagementv1getitemsget) | **GET** /V1/products/attributes/{attributeCode}/options | 
*CatalogProductAttributeRepositoryV1Api* | [**catalogProductAttributeRepositoryV1GetGet**](docs/Api/CatalogProductAttributeRepositoryV1Api.md#catalogproductattributerepositoryv1getget) | **GET** /V1/products/attributes/{attributeCode} | 
*CatalogProductCustomOptionRepositoryV1Api* | [**catalogProductCustomOptionRepositoryV1GetGet**](docs/Api/CatalogProductCustomOptionRepositoryV1Api.md#catalogproductcustomoptionrepositoryv1getget) | **GET** /V1/products/{sku}/options/{optionId} | 
*CatalogProductCustomOptionRepositoryV1Api* | [**catalogProductCustomOptionRepositoryV1GetListGet**](docs/Api/CatalogProductCustomOptionRepositoryV1Api.md#catalogproductcustomoptionrepositoryv1getlistget) | **GET** /V1/products/{sku}/options | 
*CatalogProductLinkManagementV1Api* | [**catalogProductLinkManagementV1GetLinkedItemsByTypeGet**](docs/Api/CatalogProductLinkManagementV1Api.md#catalogproductlinkmanagementv1getlinkeditemsbytypeget) | **GET** /V1/products/{sku}/links/{type} | 
*CatalogProductLinkTypeListV1Api* | [**catalogProductLinkTypeListV1GetItemAttributesGet**](docs/Api/CatalogProductLinkTypeListV1Api.md#catalogproductlinktypelistv1getitemattributesget) | **GET** /V1/products/links/{type}/attributes | 
*CatalogProductLinkTypeListV1Api* | [**catalogProductLinkTypeListV1GetItemsGet**](docs/Api/CatalogProductLinkTypeListV1Api.md#catalogproductlinktypelistv1getitemsget) | **GET** /V1/products/links/types | 
*CatalogProductMediaAttributeManagementV1Api* | [**catalogProductMediaAttributeManagementV1GetListGet**](docs/Api/CatalogProductMediaAttributeManagementV1Api.md#catalogproductmediaattributemanagementv1getlistget) | **GET** /V1/products/media/types/{attributeSetName} | 
*CatalogProductRepositoryV1Api* | [**catalogProductRepositoryV1GetGet**](docs/Api/CatalogProductRepositoryV1Api.md#catalogproductrepositoryv1getget) | **GET** /V1/products/{sku} | 
*CatalogProductRepositoryV1Api* | [**catalogProductRepositoryV1GetListGet**](docs/Api/CatalogProductRepositoryV1Api.md#catalogproductrepositoryv1getlistget) | **GET** /V1/products | 
*CatalogProductTierPriceManagementV1Api* | [**catalogProductTierPriceManagementV1GetListGet**](docs/Api/CatalogProductTierPriceManagementV1Api.md#catalogproducttierpricemanagementv1getlistget) | **GET** /V1/products/{sku}/group-prices/{customerGroupId}/tiers | 
*CatalogProductTypeListV1Api* | [**catalogProductTypeListV1GetProductTypesGet**](docs/Api/CatalogProductTypeListV1Api.md#catalogproducttypelistv1getproducttypesget) | **GET** /V1/products/types | 
*CheckoutGuestPaymentInformationManagementV1Api* | [**checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**](docs/Api/CheckoutGuestPaymentInformationManagementV1Api.md#checkoutguestpaymentinformationmanagementv1getpaymentinformationget) | **GET** /V1/guest-carts/{cartId}/payment-information | 
*CheckoutGuestPaymentInformationManagementV1Api* | [**checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](docs/Api/CheckoutGuestPaymentInformationManagementV1Api.md#checkoutguestpaymentinformationmanagementv1savepaymentinformationandplaceorderpost) | **POST** /V1/guest-carts/{cartId}/payment-information | 
*CheckoutGuestPaymentInformationManagementV1Api* | [**checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**](docs/Api/CheckoutGuestPaymentInformationManagementV1Api.md#checkoutguestpaymentinformationmanagementv1savepaymentinformationpost) | **POST** /V1/guest-carts/{cartId}/set-payment-information | 
*CheckoutGuestShippingInformationManagementV1Api* | [**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](docs/Api/CheckoutGuestShippingInformationManagementV1Api.md#checkoutguestshippinginformationmanagementv1saveaddressinformationpost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 
*CheckoutGuestTotalsInformationManagementV1Api* | [**checkoutGuestTotalsInformationManagementV1CalculatePost**](docs/Api/CheckoutGuestTotalsInformationManagementV1Api.md#checkoutguesttotalsinformationmanagementv1calculatepost) | **POST** /V1/guest-carts/{cartId}/totals-information | 
*CmsBlockRepositoryV1Api* | [**cmsBlockRepositoryV1GetByIdGet**](docs/Api/CmsBlockRepositoryV1Api.md#cmsblockrepositoryv1getbyidget) | **GET** /V1/cmsBlock/{blockId} | 
*CmsPageRepositoryV1Api* | [**cmsPageRepositoryV1GetByIdGet**](docs/Api/CmsPageRepositoryV1Api.md#cmspagerepositoryv1getbyidget) | **GET** /V1/cmsPage/{pageId} | 
*ConfigurableProductLinkManagementV1Api* | [**configurableProductLinkManagementV1GetChildrenGet**](docs/Api/ConfigurableProductLinkManagementV1Api.md#configurableproductlinkmanagementv1getchildrenget) | **GET** /V1/configurable-products/{sku}/children | 
*ConfigurableProductOptionRepositoryV1Api* | [**configurableProductOptionRepositoryV1GetGet**](docs/Api/ConfigurableProductOptionRepositoryV1Api.md#configurableproductoptionrepositoryv1getget) | **GET** /V1/configurable-products/{sku}/options/{id} | 
*ConfigurableProductOptionRepositoryV1Api* | [**configurableProductOptionRepositoryV1GetListGet**](docs/Api/ConfigurableProductOptionRepositoryV1Api.md#configurableproductoptionrepositoryv1getlistget) | **GET** /V1/configurable-products/{sku}/options/all | 
*CustomerAccountManagementV1Api* | [**customerAccountManagementV1CreateAccountPost**](docs/Api/CustomerAccountManagementV1Api.md#customeraccountmanagementv1createaccountpost) | **POST** /V1/customers | 
*CustomerAccountManagementV1Api* | [**customerAccountManagementV1InitiatePasswordResetPut**](docs/Api/CustomerAccountManagementV1Api.md#customeraccountmanagementv1initiatepasswordresetput) | **PUT** /V1/customers/password | 
*CustomerAccountManagementV1Api* | [**customerAccountManagementV1IsEmailAvailablePost**](docs/Api/CustomerAccountManagementV1Api.md#customeraccountmanagementv1isemailavailablepost) | **POST** /V1/customers/isEmailAvailable | 
*CustomerAccountManagementV1Api* | [**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](docs/Api/CustomerAccountManagementV1Api.md#customeraccountmanagementv1validateresetpasswordlinktokenget) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 
*DirectoryCountryInformationAcquirerV1Api* | [**directoryCountryInformationAcquirerV1GetCountriesInfoGet**](docs/Api/DirectoryCountryInformationAcquirerV1Api.md#directorycountryinformationacquirerv1getcountriesinfoget) | **GET** /V1/directory/countries | 
*DirectoryCountryInformationAcquirerV1Api* | [**directoryCountryInformationAcquirerV1GetCountryInfoGet**](docs/Api/DirectoryCountryInformationAcquirerV1Api.md#directorycountryinformationacquirerv1getcountryinfoget) | **GET** /V1/directory/countries/{countryId} | 
*DirectoryCurrencyInformationAcquirerV1Api* | [**directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**](docs/Api/DirectoryCurrencyInformationAcquirerV1Api.md#directorycurrencyinformationacquirerv1getcurrencyinfoget) | **GET** /V1/directory/currency | 
*GiftMessageGuestCartRepositoryV1Api* | [**giftMessageGuestCartRepositoryV1GetGet**](docs/Api/GiftMessageGuestCartRepositoryV1Api.md#giftmessageguestcartrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/gift-message | 
*GiftMessageGuestCartRepositoryV1Api* | [**giftMessageGuestCartRepositoryV1SavePost**](docs/Api/GiftMessageGuestCartRepositoryV1Api.md#giftmessageguestcartrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/gift-message | 
*GiftMessageGuestItemRepositoryV1Api* | [**giftMessageGuestItemRepositoryV1GetGet**](docs/Api/GiftMessageGuestItemRepositoryV1Api.md#giftmessageguestitemrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
*GiftMessageGuestItemRepositoryV1Api* | [**giftMessageGuestItemRepositoryV1SavePost**](docs/Api/GiftMessageGuestItemRepositoryV1Api.md#giftmessageguestitemrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
*IntegrationAdminTokenServiceV1Api* | [**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](docs/Api/IntegrationAdminTokenServiceV1Api.md#integrationadmintokenservicev1createadminaccesstokenpost) | **POST** /V1/integration/admin/token | 
*IntegrationCustomerTokenServiceV1Api* | [**integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**](docs/Api/IntegrationCustomerTokenServiceV1Api.md#integrationcustomertokenservicev1createcustomeraccesstokenpost) | **POST** /V1/integration/customer/token | 
*QuoteGuestBillingAddressManagementV1Api* | [**quoteGuestBillingAddressManagementV1AssignPost**](docs/Api/QuoteGuestBillingAddressManagementV1Api.md#quoteguestbillingaddressmanagementv1assignpost) | **POST** /V1/guest-carts/{cartId}/billing-address | 
*QuoteGuestBillingAddressManagementV1Api* | [**quoteGuestBillingAddressManagementV1GetGet**](docs/Api/QuoteGuestBillingAddressManagementV1Api.md#quoteguestbillingaddressmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/billing-address | 
*QuoteGuestCartItemRepositoryV1Api* | [**quoteGuestCartItemRepositoryV1DeleteByIdDelete**](docs/Api/QuoteGuestCartItemRepositoryV1Api.md#quoteguestcartitemrepositoryv1deletebyiddelete) | **DELETE** /V1/guest-carts/{cartId}/items/{itemId} | 
*QuoteGuestCartItemRepositoryV1Api* | [**quoteGuestCartItemRepositoryV1GetListGet**](docs/Api/QuoteGuestCartItemRepositoryV1Api.md#quoteguestcartitemrepositoryv1getlistget) | **GET** /V1/guest-carts/{cartId}/items | 
*QuoteGuestCartItemRepositoryV1Api* | [**quoteGuestCartItemRepositoryV1SavePost**](docs/Api/QuoteGuestCartItemRepositoryV1Api.md#quoteguestcartitemrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/items | 
*QuoteGuestCartItemRepositoryV1Api* | [**quoteGuestCartItemRepositoryV1SavePut**](docs/Api/QuoteGuestCartItemRepositoryV1Api.md#quoteguestcartitemrepositoryv1saveput) | **PUT** /V1/guest-carts/{cartId}/items/{itemId} | 
*QuoteGuestCartManagementV1Api* | [**quoteGuestCartManagementV1CreateEmptyCartPost**](docs/Api/QuoteGuestCartManagementV1Api.md#quoteguestcartmanagementv1createemptycartpost) | **POST** /V1/guest-carts | 
*QuoteGuestCartManagementV1Api* | [**quoteGuestCartManagementV1PlaceOrderPut**](docs/Api/QuoteGuestCartManagementV1Api.md#quoteguestcartmanagementv1placeorderput) | **PUT** /V1/guest-carts/{cartId}/order | 
*QuoteGuestCartRepositoryV1Api* | [**quoteGuestCartRepositoryV1GetGet**](docs/Api/QuoteGuestCartRepositoryV1Api.md#quoteguestcartrepositoryv1getget) | **GET** /V1/guest-carts/{cartId} | 
*QuoteGuestCartTotalManagementV1Api* | [**quoteGuestCartTotalManagementV1CollectTotalsPut**](docs/Api/QuoteGuestCartTotalManagementV1Api.md#quoteguestcarttotalmanagementv1collecttotalsput) | **PUT** /V1/guest-carts/{cartId}/collect-totals | 
*QuoteGuestCartTotalRepositoryV1Api* | [**quoteGuestCartTotalRepositoryV1GetGet**](docs/Api/QuoteGuestCartTotalRepositoryV1Api.md#quoteguestcarttotalrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/totals | 
*QuoteGuestCouponManagementV1Api* | [**quoteGuestCouponManagementV1GetGet**](docs/Api/QuoteGuestCouponManagementV1Api.md#quoteguestcouponmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/coupons | 
*QuoteGuestCouponManagementV1Api* | [**quoteGuestCouponManagementV1RemoveDelete**](docs/Api/QuoteGuestCouponManagementV1Api.md#quoteguestcouponmanagementv1removedelete) | **DELETE** /V1/guest-carts/{cartId}/coupons | 
*QuoteGuestCouponManagementV1Api* | [**quoteGuestCouponManagementV1SetPut**](docs/Api/QuoteGuestCouponManagementV1Api.md#quoteguestcouponmanagementv1setput) | **PUT** /V1/guest-carts/{cartId}/coupons/{couponCode} | 
*QuoteGuestPaymentMethodManagementV1Api* | [**quoteGuestPaymentMethodManagementV1GetGet**](docs/Api/QuoteGuestPaymentMethodManagementV1Api.md#quoteguestpaymentmethodmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
*QuoteGuestPaymentMethodManagementV1Api* | [**quoteGuestPaymentMethodManagementV1GetListGet**](docs/Api/QuoteGuestPaymentMethodManagementV1Api.md#quoteguestpaymentmethodmanagementv1getlistget) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
*QuoteGuestPaymentMethodManagementV1Api* | [**quoteGuestPaymentMethodManagementV1SetPut**](docs/Api/QuoteGuestPaymentMethodManagementV1Api.md#quoteguestpaymentmethodmanagementv1setput) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 
*QuoteGuestShipmentEstimationV1Api* | [**quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**](docs/Api/QuoteGuestShipmentEstimationV1Api.md#quoteguestshipmentestimationv1estimatebyextendedaddresspost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 
*QuoteGuestShippingMethodManagementV1Api* | [**quoteGuestShippingMethodManagementV1GetListGet**](docs/Api/QuoteGuestShippingMethodManagementV1Api.md#quoteguestshippingmethodmanagementv1getlistget) | **GET** /V1/guest-carts/{cartId}/shipping-methods | 
*SearchV1Api* | [**searchV1SearchGet**](docs/Api/SearchV1Api.md#searchv1searchget) | **GET** /V1/search | 
*StoreGroupRepositoryV1Api* | [**storeGroupRepositoryV1GetListGet**](docs/Api/StoreGroupRepositoryV1Api.md#storegrouprepositoryv1getlistget) | **GET** /V1/store/storeGroups | 
*StoreStoreConfigManagerV1Api* | [**storeStoreConfigManagerV1GetStoreConfigsGet**](docs/Api/StoreStoreConfigManagerV1Api.md#storestoreconfigmanagerv1getstoreconfigsget) | **GET** /V1/store/storeConfigs | 
*StoreStoreRepositoryV1Api* | [**storeStoreRepositoryV1GetListGet**](docs/Api/StoreStoreRepositoryV1Api.md#storestorerepositoryv1getlistget) | **GET** /V1/store/storeViews | 
*StoreWebsiteRepositoryV1Api* | [**storeWebsiteRepositoryV1GetListGet**](docs/Api/StoreWebsiteRepositoryV1Api.md#storewebsiterepositoryv1getlistget) | **GET** /V1/store/websites | 


## Documentation For Models

 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body11](docs/Model/Body11.md)
 - [Body12](docs/Model/Body12.md)
 - [Body13](docs/Model/Body13.md)
 - [Body14](docs/Model/Body14.md)
 - [Body15](docs/Model/Body15.md)
 - [Body16](docs/Model/Body16.md)
 - [Body17](docs/Model/Body17.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [BundleDataBundleOptionExtensionInterface](docs/Model/BundleDataBundleOptionExtensionInterface.md)
 - [BundleDataBundleOptionInterface](docs/Model/BundleDataBundleOptionInterface.md)
 - [BundleDataLinkExtensionInterface](docs/Model/BundleDataLinkExtensionInterface.md)
 - [BundleDataLinkInterface](docs/Model/BundleDataLinkInterface.md)
 - [BundleDataOptionExtensionInterface](docs/Model/BundleDataOptionExtensionInterface.md)
 - [BundleDataOptionInterface](docs/Model/BundleDataOptionInterface.md)
 - [CatalogDataCategoryExtensionInterface](docs/Model/CatalogDataCategoryExtensionInterface.md)
 - [CatalogDataCategoryInterface](docs/Model/CatalogDataCategoryInterface.md)
 - [CatalogDataCategoryProductLinkExtensionInterface](docs/Model/CatalogDataCategoryProductLinkExtensionInterface.md)
 - [CatalogDataCategoryProductLinkInterface](docs/Model/CatalogDataCategoryProductLinkInterface.md)
 - [CatalogDataCategoryTreeInterface](docs/Model/CatalogDataCategoryTreeInterface.md)
 - [CatalogDataCustomOptionExtensionInterface](docs/Model/CatalogDataCustomOptionExtensionInterface.md)
 - [CatalogDataCustomOptionInterface](docs/Model/CatalogDataCustomOptionInterface.md)
 - [CatalogDataEavAttributeExtensionInterface](docs/Model/CatalogDataEavAttributeExtensionInterface.md)
 - [CatalogDataProductAttributeInterface](docs/Model/CatalogDataProductAttributeInterface.md)
 - [CatalogDataProductAttributeMediaGalleryEntryExtensionInterface](docs/Model/CatalogDataProductAttributeMediaGalleryEntryExtensionInterface.md)
 - [CatalogDataProductAttributeMediaGalleryEntryInterface](docs/Model/CatalogDataProductAttributeMediaGalleryEntryInterface.md)
 - [CatalogDataProductCustomOptionExtensionInterface](docs/Model/CatalogDataProductCustomOptionExtensionInterface.md)
 - [CatalogDataProductCustomOptionInterface](docs/Model/CatalogDataProductCustomOptionInterface.md)
 - [CatalogDataProductCustomOptionValuesInterface](docs/Model/CatalogDataProductCustomOptionValuesInterface.md)
 - [CatalogDataProductExtensionInterface](docs/Model/CatalogDataProductExtensionInterface.md)
 - [CatalogDataProductInterface](docs/Model/CatalogDataProductInterface.md)
 - [CatalogDataProductLinkAttributeExtensionInterface](docs/Model/CatalogDataProductLinkAttributeExtensionInterface.md)
 - [CatalogDataProductLinkAttributeInterface](docs/Model/CatalogDataProductLinkAttributeInterface.md)
 - [CatalogDataProductLinkExtensionInterface](docs/Model/CatalogDataProductLinkExtensionInterface.md)
 - [CatalogDataProductLinkInterface](docs/Model/CatalogDataProductLinkInterface.md)
 - [CatalogDataProductLinkTypeExtensionInterface](docs/Model/CatalogDataProductLinkTypeExtensionInterface.md)
 - [CatalogDataProductLinkTypeInterface](docs/Model/CatalogDataProductLinkTypeInterface.md)
 - [CatalogDataProductSearchResultsInterface](docs/Model/CatalogDataProductSearchResultsInterface.md)
 - [CatalogDataProductTierPriceExtensionInterface](docs/Model/CatalogDataProductTierPriceExtensionInterface.md)
 - [CatalogDataProductTierPriceInterface](docs/Model/CatalogDataProductTierPriceInterface.md)
 - [CatalogDataProductTypeExtensionInterface](docs/Model/CatalogDataProductTypeExtensionInterface.md)
 - [CatalogDataProductTypeInterface](docs/Model/CatalogDataProductTypeInterface.md)
 - [CatalogInventoryDataStockItemExtensionInterface](docs/Model/CatalogInventoryDataStockItemExtensionInterface.md)
 - [CatalogInventoryDataStockItemInterface](docs/Model/CatalogInventoryDataStockItemInterface.md)
 - [CatalogInventoryDataStockStatusExtensionInterface](docs/Model/CatalogInventoryDataStockStatusExtensionInterface.md)
 - [CatalogInventoryDataStockStatusInterface](docs/Model/CatalogInventoryDataStockStatusInterface.md)
 - [CheckoutDataPaymentDetailsExtensionInterface](docs/Model/CheckoutDataPaymentDetailsExtensionInterface.md)
 - [CheckoutDataPaymentDetailsInterface](docs/Model/CheckoutDataPaymentDetailsInterface.md)
 - [CheckoutDataShippingInformationExtensionInterface](docs/Model/CheckoutDataShippingInformationExtensionInterface.md)
 - [CheckoutDataShippingInformationInterface](docs/Model/CheckoutDataShippingInformationInterface.md)
 - [CheckoutDataTotalsInformationExtensionInterface](docs/Model/CheckoutDataTotalsInformationExtensionInterface.md)
 - [CheckoutDataTotalsInformationInterface](docs/Model/CheckoutDataTotalsInformationInterface.md)
 - [CmsDataBlockInterface](docs/Model/CmsDataBlockInterface.md)
 - [CmsDataPageInterface](docs/Model/CmsDataPageInterface.md)
 - [ConfigurableProductDataConfigurableItemOptionValueExtensionInterface](docs/Model/ConfigurableProductDataConfigurableItemOptionValueExtensionInterface.md)
 - [ConfigurableProductDataConfigurableItemOptionValueInterface](docs/Model/ConfigurableProductDataConfigurableItemOptionValueInterface.md)
 - [ConfigurableProductDataOptionExtensionInterface](docs/Model/ConfigurableProductDataOptionExtensionInterface.md)
 - [ConfigurableProductDataOptionInterface](docs/Model/ConfigurableProductDataOptionInterface.md)
 - [ConfigurableProductDataOptionValueExtensionInterface](docs/Model/ConfigurableProductDataOptionValueExtensionInterface.md)
 - [ConfigurableProductDataOptionValueInterface](docs/Model/ConfigurableProductDataOptionValueInterface.md)
 - [CustomerDataAddressExtensionInterface](docs/Model/CustomerDataAddressExtensionInterface.md)
 - [CustomerDataAddressInterface](docs/Model/CustomerDataAddressInterface.md)
 - [CustomerDataCustomerExtensionInterface](docs/Model/CustomerDataCustomerExtensionInterface.md)
 - [CustomerDataCustomerInterface](docs/Model/CustomerDataCustomerInterface.md)
 - [CustomerDataRegionExtensionInterface](docs/Model/CustomerDataRegionExtensionInterface.md)
 - [CustomerDataRegionInterface](docs/Model/CustomerDataRegionInterface.md)
 - [DirectoryDataCountryInformationExtensionInterface](docs/Model/DirectoryDataCountryInformationExtensionInterface.md)
 - [DirectoryDataCountryInformationInterface](docs/Model/DirectoryDataCountryInformationInterface.md)
 - [DirectoryDataCurrencyInformationExtensionInterface](docs/Model/DirectoryDataCurrencyInformationExtensionInterface.md)
 - [DirectoryDataCurrencyInformationInterface](docs/Model/DirectoryDataCurrencyInformationInterface.md)
 - [DirectoryDataExchangeRateExtensionInterface](docs/Model/DirectoryDataExchangeRateExtensionInterface.md)
 - [DirectoryDataExchangeRateInterface](docs/Model/DirectoryDataExchangeRateInterface.md)
 - [DirectoryDataRegionInformationExtensionInterface](docs/Model/DirectoryDataRegionInformationExtensionInterface.md)
 - [DirectoryDataRegionInformationInterface](docs/Model/DirectoryDataRegionInformationInterface.md)
 - [DownloadableDataDownloadableOptionInterface](docs/Model/DownloadableDataDownloadableOptionInterface.md)
 - [DownloadableDataFileContentExtensionInterface](docs/Model/DownloadableDataFileContentExtensionInterface.md)
 - [DownloadableDataFileContentInterface](docs/Model/DownloadableDataFileContentInterface.md)
 - [DownloadableDataLinkExtensionInterface](docs/Model/DownloadableDataLinkExtensionInterface.md)
 - [DownloadableDataLinkInterface](docs/Model/DownloadableDataLinkInterface.md)
 - [DownloadableDataSampleExtensionInterface](docs/Model/DownloadableDataSampleExtensionInterface.md)
 - [DownloadableDataSampleInterface](docs/Model/DownloadableDataSampleInterface.md)
 - [EavDataAttributeFrontendLabelInterface](docs/Model/EavDataAttributeFrontendLabelInterface.md)
 - [EavDataAttributeGroupExtensionInterface](docs/Model/EavDataAttributeGroupExtensionInterface.md)
 - [EavDataAttributeGroupInterface](docs/Model/EavDataAttributeGroupInterface.md)
 - [EavDataAttributeGroupSearchResultsInterface](docs/Model/EavDataAttributeGroupSearchResultsInterface.md)
 - [EavDataAttributeOptionInterface](docs/Model/EavDataAttributeOptionInterface.md)
 - [EavDataAttributeOptionLabelInterface](docs/Model/EavDataAttributeOptionLabelInterface.md)
 - [EavDataAttributeSetExtensionInterface](docs/Model/EavDataAttributeSetExtensionInterface.md)
 - [EavDataAttributeSetInterface](docs/Model/EavDataAttributeSetInterface.md)
 - [EavDataAttributeSetSearchResultsInterface](docs/Model/EavDataAttributeSetSearchResultsInterface.md)
 - [EavDataAttributeValidationRuleInterface](docs/Model/EavDataAttributeValidationRuleInterface.md)
 - [ErrorErrors](docs/Model/ErrorErrors.md)
 - [ErrorErrorsItem](docs/Model/ErrorErrorsItem.md)
 - [ErrorParameters](docs/Model/ErrorParameters.md)
 - [ErrorParametersItem](docs/Model/ErrorParametersItem.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FrameworkAttributeInterface](docs/Model/FrameworkAttributeInterface.md)
 - [FrameworkDataImageContentInterface](docs/Model/FrameworkDataImageContentInterface.md)
 - [FrameworkDataVideoContentInterface](docs/Model/FrameworkDataVideoContentInterface.md)
 - [FrameworkFilter](docs/Model/FrameworkFilter.md)
 - [FrameworkSearchAggregationInterface](docs/Model/FrameworkSearchAggregationInterface.md)
 - [FrameworkSearchAggregationValueInterface](docs/Model/FrameworkSearchAggregationValueInterface.md)
 - [FrameworkSearchBucketInterface](docs/Model/FrameworkSearchBucketInterface.md)
 - [FrameworkSearchCriteriaInterface](docs/Model/FrameworkSearchCriteriaInterface.md)
 - [FrameworkSearchDocumentInterface](docs/Model/FrameworkSearchDocumentInterface.md)
 - [FrameworkSearchFilterGroup](docs/Model/FrameworkSearchFilterGroup.md)
 - [FrameworkSearchSearchCriteriaInterface](docs/Model/FrameworkSearchSearchCriteriaInterface.md)
 - [FrameworkSearchSearchResultInterface](docs/Model/FrameworkSearchSearchResultInterface.md)
 - [FrameworkSortOrder](docs/Model/FrameworkSortOrder.md)
 - [GiftMessageDataMessageExtensionInterface](docs/Model/GiftMessageDataMessageExtensionInterface.md)
 - [GiftMessageDataMessageInterface](docs/Model/GiftMessageDataMessageInterface.md)
 - [QuoteDataAddressExtensionInterface](docs/Model/QuoteDataAddressExtensionInterface.md)
 - [QuoteDataAddressInterface](docs/Model/QuoteDataAddressInterface.md)
 - [QuoteDataCartExtensionInterface](docs/Model/QuoteDataCartExtensionInterface.md)
 - [QuoteDataCartInterface](docs/Model/QuoteDataCartInterface.md)
 - [QuoteDataCartItemExtensionInterface](docs/Model/QuoteDataCartItemExtensionInterface.md)
 - [QuoteDataCartItemInterface](docs/Model/QuoteDataCartItemInterface.md)
 - [QuoteDataCurrencyExtensionInterface](docs/Model/QuoteDataCurrencyExtensionInterface.md)
 - [QuoteDataCurrencyInterface](docs/Model/QuoteDataCurrencyInterface.md)
 - [QuoteDataPaymentExtensionInterface](docs/Model/QuoteDataPaymentExtensionInterface.md)
 - [QuoteDataPaymentInterface](docs/Model/QuoteDataPaymentInterface.md)
 - [QuoteDataPaymentMethodInterface](docs/Model/QuoteDataPaymentMethodInterface.md)
 - [QuoteDataProductOptionExtensionInterface](docs/Model/QuoteDataProductOptionExtensionInterface.md)
 - [QuoteDataProductOptionInterface](docs/Model/QuoteDataProductOptionInterface.md)
 - [QuoteDataShippingAssignmentExtensionInterface](docs/Model/QuoteDataShippingAssignmentExtensionInterface.md)
 - [QuoteDataShippingAssignmentInterface](docs/Model/QuoteDataShippingAssignmentInterface.md)
 - [QuoteDataShippingExtensionInterface](docs/Model/QuoteDataShippingExtensionInterface.md)
 - [QuoteDataShippingInterface](docs/Model/QuoteDataShippingInterface.md)
 - [QuoteDataShippingMethodExtensionInterface](docs/Model/QuoteDataShippingMethodExtensionInterface.md)
 - [QuoteDataShippingMethodInterface](docs/Model/QuoteDataShippingMethodInterface.md)
 - [QuoteDataTotalSegmentExtensionInterface](docs/Model/QuoteDataTotalSegmentExtensionInterface.md)
 - [QuoteDataTotalSegmentInterface](docs/Model/QuoteDataTotalSegmentInterface.md)
 - [QuoteDataTotalsAdditionalDataExtensionInterface](docs/Model/QuoteDataTotalsAdditionalDataExtensionInterface.md)
 - [QuoteDataTotalsAdditionalDataInterface](docs/Model/QuoteDataTotalsAdditionalDataInterface.md)
 - [QuoteDataTotalsExtensionInterface](docs/Model/QuoteDataTotalsExtensionInterface.md)
 - [QuoteDataTotalsInterface](docs/Model/QuoteDataTotalsInterface.md)
 - [QuoteDataTotalsItemExtensionInterface](docs/Model/QuoteDataTotalsItemExtensionInterface.md)
 - [QuoteDataTotalsItemInterface](docs/Model/QuoteDataTotalsItemInterface.md)
 - [StoreDataGroupExtensionInterface](docs/Model/StoreDataGroupExtensionInterface.md)
 - [StoreDataGroupInterface](docs/Model/StoreDataGroupInterface.md)
 - [StoreDataStoreConfigExtensionInterface](docs/Model/StoreDataStoreConfigExtensionInterface.md)
 - [StoreDataStoreConfigInterface](docs/Model/StoreDataStoreConfigInterface.md)
 - [StoreDataStoreExtensionInterface](docs/Model/StoreDataStoreExtensionInterface.md)
 - [StoreDataStoreInterface](docs/Model/StoreDataStoreInterface.md)
 - [StoreDataWebsiteExtensionInterface](docs/Model/StoreDataWebsiteExtensionInterface.md)
 - [StoreDataWebsiteInterface](docs/Model/StoreDataWebsiteInterface.md)
 - [TaxDataGrandTotalDetailsInterface](docs/Model/TaxDataGrandTotalDetailsInterface.md)
 - [TaxDataGrandTotalRatesInterface](docs/Model/TaxDataGrandTotalRatesInterface.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




