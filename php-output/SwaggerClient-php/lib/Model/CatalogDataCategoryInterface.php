<?php
/**
 * CatalogDataCategoryInterface
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
 * CatalogDataCategoryInterface Class Doc Comment
 *
 * @category    Class */
 // @description 
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataCategoryInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-category-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parent_id' => 'int',
        'name' => 'string',
        'is_active' => 'bool',
        'position' => 'int',
        'level' => 'int',
        'children' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'path' => 'string',
        'available_sort_by' => 'string[]',
        'include_in_menu' => 'bool',
        'extension_attributes' => '\Swagger\Client\Model\CatalogDataCategoryExtensionInterface',
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
        'parent_id' => 'parent_id',
        'name' => 'name',
        'is_active' => 'is_active',
        'position' => 'position',
        'level' => 'level',
        'children' => 'children',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'path' => 'path',
        'available_sort_by' => 'available_sort_by',
        'include_in_menu' => 'include_in_menu',
        'extension_attributes' => 'extension_attributes',
        'custom_attributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'name' => 'setName',
        'is_active' => 'setIsActive',
        'position' => 'setPosition',
        'level' => 'setLevel',
        'children' => 'setChildren',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'path' => 'setPath',
        'available_sort_by' => 'setAvailableSortBy',
        'include_in_menu' => 'setIncludeInMenu',
        'extension_attributes' => 'setExtensionAttributes',
        'custom_attributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'name' => 'getName',
        'is_active' => 'getIsActive',
        'position' => 'getPosition',
        'level' => 'getLevel',
        'children' => 'getChildren',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'path' => 'getPath',
        'available_sort_by' => 'getAvailableSortBy',
        'include_in_menu' => 'getIncludeInMenu',
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['available_sort_by'] = isset($data['available_sort_by']) ? $data['available_sort_by'] : null;
        $this->container['include_in_menu'] = isset($data['include_in_menu']) ? $data['include_in_menu'] : null;
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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
        if ($this->container['name'] === null) {
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id Parent category ID
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Category name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active Whether category is active
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position Category position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level Category level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets children
     * @return string
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param string $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets available_sort_by
     * @return string[]
     */
    public function getAvailableSortBy()
    {
        return $this->container['available_sort_by'];
    }

    /**
     * Sets available_sort_by
     * @param string[] $available_sort_by
     * @return $this
     */
    public function setAvailableSortBy($available_sort_by)
    {
        $this->container['available_sort_by'] = $available_sort_by;

        return $this;
    }

    /**
     * Gets include_in_menu
     * @return bool
     */
    public function getIncludeInMenu()
    {
        return $this->container['include_in_menu'];
    }

    /**
     * Sets include_in_menu
     * @param bool $include_in_menu
     * @return $this
     */
    public function setIncludeInMenu($include_in_menu)
    {
        $this->container['include_in_menu'] = $include_in_menu;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\CatalogDataCategoryExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\CatalogDataCategoryExtensionInterface $extension_attributes
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
