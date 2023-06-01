<?php
/**
 * CommonPermissions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * roomService/roomService.proto
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
 * CommonPermissions Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonPermissions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'commonPermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role' => '\Alfaview\Model\CommonRole',
        'admin' => 'bool',
        'voice' => 'bool',
        'video' => 'bool',
        'promote' => 'bool',
        'join' => 'bool',
        'screen' => 'bool',
        'vip' => 'bool',
        'chat' => 'bool',
        'chat_broadcast' => 'bool',
        'action' => 'bool',
        'remove' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'role' => null,
        'admin' => null,
        'voice' => null,
        'video' => null,
        'promote' => null,
        'join' => null,
        'screen' => null,
        'vip' => null,
        'chat' => null,
        'chat_broadcast' => null,
        'action' => null,
        'remove' => null
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
        'role' => 'role',
        'admin' => 'admin',
        'voice' => 'voice',
        'video' => 'video',
        'promote' => 'promote',
        'join' => 'join',
        'screen' => 'screen',
        'vip' => 'vip',
        'chat' => 'chat',
        'chat_broadcast' => 'chatBroadcast',
        'action' => 'action',
        'remove' => 'remove'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role' => 'setRole',
        'admin' => 'setAdmin',
        'voice' => 'setVoice',
        'video' => 'setVideo',
        'promote' => 'setPromote',
        'join' => 'setJoin',
        'screen' => 'setScreen',
        'vip' => 'setVip',
        'chat' => 'setChat',
        'chat_broadcast' => 'setChatBroadcast',
        'action' => 'setAction',
        'remove' => 'setRemove'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role' => 'getRole',
        'admin' => 'getAdmin',
        'voice' => 'getVoice',
        'video' => 'getVideo',
        'promote' => 'getPromote',
        'join' => 'getJoin',
        'screen' => 'getScreen',
        'vip' => 'getVip',
        'chat' => 'getChat',
        'chat_broadcast' => 'getChatBroadcast',
        'action' => 'getAction',
        'remove' => 'getRemove'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['voice'] = isset($data['voice']) ? $data['voice'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['promote'] = isset($data['promote']) ? $data['promote'] : null;
        $this->container['join'] = isset($data['join']) ? $data['join'] : null;
        $this->container['screen'] = isset($data['screen']) ? $data['screen'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['chat'] = isset($data['chat']) ? $data['chat'] : null;
        $this->container['chat_broadcast'] = isset($data['chat_broadcast']) ? $data['chat_broadcast'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['remove'] = isset($data['remove']) ? $data['remove'] : null;
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
     * Gets role
     *
     * @return \Alfaview\Model\CommonRole
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \Alfaview\Model\CommonRole $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin admin
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets voice
     *
     * @return bool
     */
    public function getVoice()
    {
        return $this->container['voice'];
    }

    /**
     * Sets voice
     *
     * @param bool $voice voice
     *
     * @return $this
     */
    public function setVoice($voice)
    {
        $this->container['voice'] = $voice;

        return $this;
    }

    /**
     * Gets video
     *
     * @return bool
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param bool $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets promote
     *
     * @return bool
     */
    public function getPromote()
    {
        return $this->container['promote'];
    }

    /**
     * Sets promote
     *
     * @param bool $promote promote
     *
     * @return $this
     */
    public function setPromote($promote)
    {
        $this->container['promote'] = $promote;

        return $this;
    }

    /**
     * Gets join
     *
     * @return bool
     */
    public function getJoin()
    {
        return $this->container['join'];
    }

    /**
     * Sets join
     *
     * @param bool $join join
     *
     * @return $this
     */
    public function setJoin($join)
    {
        $this->container['join'] = $join;

        return $this;
    }

    /**
     * Gets screen
     *
     * @return bool
     */
    public function getScreen()
    {
        return $this->container['screen'];
    }

    /**
     * Sets screen
     *
     * @param bool $screen screen
     *
     * @return $this
     */
    public function setScreen($screen)
    {
        $this->container['screen'] = $screen;

        return $this;
    }

    /**
     * Gets vip
     *
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     *
     * @param bool $vip vip
     *
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

        return $this;
    }

    /**
     * Gets chat
     *
     * @return bool
     */
    public function getChat()
    {
        return $this->container['chat'];
    }

    /**
     * Sets chat
     *
     * @param bool $chat chat
     *
     * @return $this
     */
    public function setChat($chat)
    {
        $this->container['chat'] = $chat;

        return $this;
    }

    /**
     * Gets chat_broadcast
     *
     * @return bool
     */
    public function getChatBroadcast()
    {
        return $this->container['chat_broadcast'];
    }

    /**
     * Sets chat_broadcast
     *
     * @param bool $chat_broadcast chat_broadcast
     *
     * @return $this
     */
    public function setChatBroadcast($chat_broadcast)
    {
        $this->container['chat_broadcast'] = $chat_broadcast;

        return $this;
    }

    /**
     * Gets action
     *
     * @return bool
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param bool $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets remove
     *
     * @return bool
     */
    public function getRemove()
    {
        return $this->container['remove'];
    }

    /**
     * Sets remove
     *
     * @param bool $remove remove
     *
     * @return $this
     */
    public function setRemove($remove)
    {
        $this->container['remove'] = $remove;

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


