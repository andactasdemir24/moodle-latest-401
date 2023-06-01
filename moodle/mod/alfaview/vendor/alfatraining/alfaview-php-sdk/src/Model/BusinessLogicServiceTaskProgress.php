<?php
/**
 * BusinessLogicServiceTaskProgress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * businessLogicService/businessLogicService.proto
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
 * BusinessLogicServiceTaskProgress Class Doc Comment
 *
 * @category Class
 * @description TaskProgress describes the state of the task with some extra info if applicable depending on the state.
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessLogicServiceTaskProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'businessLogicServiceTaskProgress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracking_info' => '\Alfaview\Model\BusinessLogicServiceTrackingInfo',
        'state' => '\Alfaview\Model\BusinessLogicServiceState',
        'execution' => 'int',
        'max_retries' => 'int',
        'next_run' => 'string',
        'metadata' => 'map[string,string]',
        'progress' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracking_info' => null,
        'state' => null,
        'execution' => 'int64',
        'max_retries' => 'int64',
        'next_run' => 'int64',
        'metadata' => null,
        'progress' => 'float'
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
        'tracking_info' => 'trackingInfo',
        'state' => 'state',
        'execution' => 'execution',
        'max_retries' => 'maxRetries',
        'next_run' => 'nextRun',
        'metadata' => 'metadata',
        'progress' => 'progress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_info' => 'setTrackingInfo',
        'state' => 'setState',
        'execution' => 'setExecution',
        'max_retries' => 'setMaxRetries',
        'next_run' => 'setNextRun',
        'metadata' => 'setMetadata',
        'progress' => 'setProgress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_info' => 'getTrackingInfo',
        'state' => 'getState',
        'execution' => 'getExecution',
        'max_retries' => 'getMaxRetries',
        'next_run' => 'getNextRun',
        'metadata' => 'getMetadata',
        'progress' => 'getProgress'
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
        $this->container['tracking_info'] = isset($data['tracking_info']) ? $data['tracking_info'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['execution'] = isset($data['execution']) ? $data['execution'] : null;
        $this->container['max_retries'] = isset($data['max_retries']) ? $data['max_retries'] : null;
        $this->container['next_run'] = isset($data['next_run']) ? $data['next_run'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
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
     * Gets tracking_info
     *
     * @return \Alfaview\Model\BusinessLogicServiceTrackingInfo
     */
    public function getTrackingInfo()
    {
        return $this->container['tracking_info'];
    }

    /**
     * Sets tracking_info
     *
     * @param \Alfaview\Model\BusinessLogicServiceTrackingInfo $tracking_info tracking_info
     *
     * @return $this
     */
    public function setTrackingInfo($tracking_info)
    {
        $this->container['tracking_info'] = $tracking_info;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Alfaview\Model\BusinessLogicServiceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Alfaview\Model\BusinessLogicServiceState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return int
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param int $execution execution
     *
     * @return $this
     */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;

        return $this;
    }

    /**
     * Gets max_retries
     *
     * @return int
     */
    public function getMaxRetries()
    {
        return $this->container['max_retries'];
    }

    /**
     * Sets max_retries
     *
     * @param int $max_retries max_retries
     *
     * @return $this
     */
    public function setMaxRetries($max_retries)
    {
        $this->container['max_retries'] = $max_retries;

        return $this;
    }

    /**
     * Gets next_run
     *
     * @return string
     */
    public function getNextRun()
    {
        return $this->container['next_run'];
    }

    /**
     * Sets next_run
     *
     * @param string $next_run next_run
     *
     * @return $this
     */
    public function setNextRun($next_run)
    {
        $this->container['next_run'] = $next_run;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return float
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param float $progress progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

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

