<?php
/**
 * CommonAccessToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * authService/authenticationService.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfaview\Model;

use \ArrayAccess;
use \Alfaview\ObjectSerializer;

/**
 * CommonAccessToken Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonAccessToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'commonAccessToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'company_id' => 'string',
        'expires_at' => 'string',
        'permissions' => 'map[string,bool]',
        'is_guest' => 'bool',
        'display_name' => 'string',
        'base_permissions_id' => 'string',
        'extension_disallowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => null,
        'company_id' => null,
        'expires_at' => 'int64',
        'permissions' => null,
        'is_guest' => null,
        'display_name' => null,
        'base_permissions_id' => null,
        'extension_disallowed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'userId',
        'company_id' => 'companyId',
        'expires_at' => 'expiresAt',
        'permissions' => 'permissions',
        'is_guest' => 'isGuest',
        'display_name' => 'displayName',
        'base_permissions_id' => 'basePermissionsId',
        'extension_disallowed' => 'extensionDisallowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'company_id' => 'setCompanyId',
        'expires_at' => 'setExpiresAt',
        'permissions' => 'setPermissions',
        'is_guest' => 'setIsGuest',
        'display_name' => 'setDisplayName',
        'base_permissions_id' => 'setBasePermissionsId',
        'extension_disallowed' => 'setExtensionDisallowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'company_id' => 'getCompanyId',
        'expires_at' => 'getExpiresAt',
        'permissions' => 'getPermissions',
        'is_guest' => 'getIsGuest',
        'display_name' => 'getDisplayName',
        'base_permissions_id' => 'getBasePermissionsId',
        'extension_disallowed' => 'getExtensionDisallowed'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['is_guest'] = isset($data['is_guest']) ? $data['is_guest'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['base_permissions_id'] = isset($data['base_permissions_id']) ? $data['base_permissions_id'] : null;
        $this->container['extension_disallowed'] = isset($data['extension_disallowed']) ? $data['extension_disallowed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return map[string,bool]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param map[string,bool] $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets is_guest
     *
     * @return bool
     */
    public function getIsGuest()
    {
        return $this->container['is_guest'];
    }

    /**
     * Sets is_guest
     *
     * @param bool $is_guest is_guest
     *
     * @return $this
     */
    public function setIsGuest($is_guest)
    {
        $this->container['is_guest'] = $is_guest;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets base_permissions_id
     *
     * @return string
     */
    public function getBasePermissionsId()
    {
        return $this->container['base_permissions_id'];
    }

    /**
     * Sets base_permissions_id
     *
     * @param string $base_permissions_id base_permissions_id
     *
     * @return $this
     */
    public function setBasePermissionsId($base_permissions_id)
    {
        $this->container['base_permissions_id'] = $base_permissions_id;

        return $this;
    }

    /**
     * Gets extension_disallowed
     *
     * @return bool
     */
    public function getExtensionDisallowed()
    {
        return $this->container['extension_disallowed'];
    }

    /**
     * Sets extension_disallowed
     *
     * @param bool $extension_disallowed extension_disallowed
     *
     * @return $this
     */
    public function setExtensionDisallowed($extension_disallowed)
    {
        $this->container['extension_disallowed'] = $extension_disallowed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

