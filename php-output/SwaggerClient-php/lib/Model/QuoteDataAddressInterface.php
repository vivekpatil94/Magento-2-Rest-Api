<?php
/**
 * QuoteDataAddressInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * QuoteDataAddressInterface Class Doc Comment
 *
 * @category    Class */
 // @description Interface AddressInterface
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataAddressInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-address-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'region' => 'string',
        'region_id' => 'int',
        'region_code' => 'string',
        'country_id' => 'string',
        'street' => 'string[]',
        'company' => 'string',
        'telephone' => 'string',
        'fax' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'middlename' => 'string',
        'prefix' => 'string',
        'suffix' => 'string',
        'vat_id' => 'string',
        'customer_id' => 'int',
        'email' => 'string',
        'same_as_billing' => 'int',
        'customer_address_id' => 'int',
        'save_in_address_book' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\QuoteDataAddressExtensionInterface',
        'custom_attributes' => '\Swagger\Client\Model\FrameworkAttributeInterface[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'region' => 'region',
        'region_id' => 'region_id',
        'region_code' => 'region_code',
        'country_id' => 'country_id',
        'street' => 'street',
        'company' => 'company',
        'telephone' => 'telephone',
        'fax' => 'fax',
        'postcode' => 'postcode',
        'city' => 'city',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'middlename' => 'middlename',
        'prefix' => 'prefix',
        'suffix' => 'suffix',
        'vat_id' => 'vat_id',
        'customer_id' => 'customer_id',
        'email' => 'email',
        'same_as_billing' => 'same_as_billing',
        'customer_address_id' => 'customer_address_id',
        'save_in_address_book' => 'save_in_address_book',
        'extension_attributes' => 'extension_attributes',
        'custom_attributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'region' => 'setRegion',
        'region_id' => 'setRegionId',
        'region_code' => 'setRegionCode',
        'country_id' => 'setCountryId',
        'street' => 'setStreet',
        'company' => 'setCompany',
        'telephone' => 'setTelephone',
        'fax' => 'setFax',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'middlename' => 'setMiddlename',
        'prefix' => 'setPrefix',
        'suffix' => 'setSuffix',
        'vat_id' => 'setVatId',
        'customer_id' => 'setCustomerId',
        'email' => 'setEmail',
        'same_as_billing' => 'setSameAsBilling',
        'customer_address_id' => 'setCustomerAddressId',
        'save_in_address_book' => 'setSaveInAddressBook',
        'extension_attributes' => 'setExtensionAttributes',
        'custom_attributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'region' => 'getRegion',
        'region_id' => 'getRegionId',
        'region_code' => 'getRegionCode',
        'country_id' => 'getCountryId',
        'street' => 'getStreet',
        'company' => 'getCompany',
        'telephone' => 'getTelephone',
        'fax' => 'getFax',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'middlename' => 'getMiddlename',
        'prefix' => 'getPrefix',
        'suffix' => 'getSuffix',
        'vat_id' => 'getVatId',
        'customer_id' => 'getCustomerId',
        'email' => 'getEmail',
        'same_as_billing' => 'getSameAsBilling',
        'customer_address_id' => 'getCustomerAddressId',
        'save_in_address_book' => 'getSaveInAddressBook',
        'extension_attributes' => 'getExtensionAttributes',
        'custom_attributes' => 'getCustomAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['region_code'] = isset($data['region_code']) ? $data['region_code'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['middlename'] = isset($data['middlename']) ? $data['middlename'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['same_as_billing'] = isset($data['same_as_billing']) ? $data['same_as_billing'] : null;
        $this->container['customer_address_id'] = isset($data['customer_address_id']) ? $data['customer_address_id'] : null;
        $this->container['save_in_address_book'] = isset($data['save_in_address_book']) ? $data['save_in_address_book'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['region'] === null) {
            $invalid_properties[] = "'region' can't be null";
        }
        if ($this->container['region_id'] === null) {
            $invalid_properties[] = "'region_id' can't be null";
        }
        if ($this->container['region_code'] === null) {
            $invalid_properties[] = "'region_code' can't be null";
        }
        if ($this->container['country_id'] === null) {
            $invalid_properties[] = "'country_id' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalid_properties[] = "'street' can't be null";
        }
        if ($this->container['telephone'] === null) {
            $invalid_properties[] = "'telephone' can't be null";
        }
        if ($this->container['postcode'] === null) {
            $invalid_properties[] = "'postcode' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['firstname'] === null) {
            $invalid_properties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalid_properties[] = "'lastname' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['region'] === null) {
            return false;
        }
        if ($this->container['region_id'] === null) {
            return false;
        }
        if ($this->container['region_code'] === null) {
            return false;
        }
        if ($this->container['country_id'] === null) {
            return false;
        }
        if ($this->container['street'] === null) {
            return false;
        }
        if ($this->container['telephone'] === null) {
            return false;
        }
        if ($this->container['postcode'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Region name
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_id
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     * @param int $region_id Region id
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets region_code
     * @return string
     */
    public function getRegionCode()
    {
        return $this->container['region_code'];
    }

    /**
     * Sets region_code
     * @param string $region_code Region code
     * @return $this
     */
    public function setRegionCode($region_code)
    {
        $this->container['region_code'] = $region_code;

        return $this;
    }

    /**
     * Gets country_id
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     * @param string $country_id Country id
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets street
     * @return string[]
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string[] $street Street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone Telephone number
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     * @param string $fax Fax number
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets postcode
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     * @param string $postcode Postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City name
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname First name
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname Last name
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets middlename
     * @return string
     */
    public function getMiddlename()
    {
        return $this->container['middlename'];
    }

    /**
     * Sets middlename
     * @param string $middlename Middle name
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->container['middlename'] = $middlename;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix Prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix Suffix
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets vat_id
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     * @param string $vat_id Vat id
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id Customer id
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Billing/shipping email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets same_as_billing
     * @return int
     */
    public function getSameAsBilling()
    {
        return $this->container['same_as_billing'];
    }

    /**
     * Sets same_as_billing
     * @param int $same_as_billing Same as billing flag
     * @return $this
     */
    public function setSameAsBilling($same_as_billing)
    {
        $this->container['same_as_billing'] = $same_as_billing;

        return $this;
    }

    /**
     * Gets customer_address_id
     * @return int
     */
    public function getCustomerAddressId()
    {
        return $this->container['customer_address_id'];
    }

    /**
     * Sets customer_address_id
     * @param int $customer_address_id Customer address id
     * @return $this
     */
    public function setCustomerAddressId($customer_address_id)
    {
        $this->container['customer_address_id'] = $customer_address_id;

        return $this;
    }

    /**
     * Gets save_in_address_book
     * @return int
     */
    public function getSaveInAddressBook()
    {
        return $this->container['save_in_address_book'];
    }

    /**
     * Sets save_in_address_book
     * @param int $save_in_address_book Save in address book flag
     * @return $this
     */
    public function setSaveInAddressBook($save_in_address_book)
    {
        $this->container['save_in_address_book'] = $save_in_address_book;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\QuoteDataAddressExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\QuoteDataAddressExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }

    /**
     * Gets custom_attributes
     * @return \Swagger\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     * @param \Swagger\Client\Model\FrameworkAttributeInterface[] $custom_attributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}