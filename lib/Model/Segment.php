<?php
/**
 * Segment
 *
 * PHP version 7
 *
 * @category Class
 * @package  EspadaV8\PHPFlagr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice
 *
 * OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EspadaV8\PHPFlagr\Model;

use \ArrayAccess;
use \EspadaV8\PHPFlagr\ObjectSerializer;

/**
 * Segment Class Doc Comment
 *
 * @category Class
 * @package  EspadaV8\PHPFlagr
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Segment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'segment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'constraints' => '\EspadaV8\PHPFlagr\Model\Constraint[]',
        'distributions' => '\EspadaV8\PHPFlagr\Model\Distribution[]',
        'rank' => 'int',
        'rolloutPercent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'description' => null,
        'constraints' => null,
        'distributions' => null,
        'rank' => 'int64',
        'rolloutPercent' => 'int64'
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
        'id' => 'id',
        'description' => 'description',
        'constraints' => 'constraints',
        'distributions' => 'distributions',
        'rank' => 'rank',
        'rolloutPercent' => 'rolloutPercent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'constraints' => 'setConstraints',
        'distributions' => 'setDistributions',
        'rank' => 'setRank',
        'rolloutPercent' => 'setRolloutPercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'constraints' => 'getConstraints',
        'distributions' => 'getDistributions',
        'rank' => 'getRank',
        'rolloutPercent' => 'getRolloutPercent'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['distributions'] = isset($data['distributions']) ? $data['distributions'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['rolloutPercent'] = isset($data['rolloutPercent']) ? $data['rolloutPercent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if (($this->container['rank'] < 0)) {
            $invalidProperties[] = "invalid value for 'rank', must be bigger than or equal to 0.";
        }

        if ($this->container['rolloutPercent'] === null) {
            $invalidProperties[] = "'rolloutPercent' can't be null";
        }
        if (($this->container['rolloutPercent'] > 100)) {
            $invalidProperties[] = "invalid value for 'rolloutPercent', must be smaller than or equal to 100.";
        }

        if (($this->container['rolloutPercent'] < 0)) {
            $invalidProperties[] = "invalid value for 'rolloutPercent', must be bigger than or equal to 0.";
        }

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling Segment., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {

        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Segment., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \EspadaV8\PHPFlagr\Model\Constraint[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \EspadaV8\PHPFlagr\Model\Constraint[] $constraints constraints
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets distributions
     *
     * @return \EspadaV8\PHPFlagr\Model\Distribution[]
     */
    public function getDistributions()
    {
        return $this->container['distributions'];
    }

    /**
     * Sets distributions
     *
     * @param \EspadaV8\PHPFlagr\Model\Distribution[] $distributions distributions
     *
     * @return $this
     */
    public function setDistributions($distributions)
    {
        $this->container['distributions'] = $distributions;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank rank
     *
     * @return $this
     */
    public function setRank($rank)
    {

        if (($rank < 0)) {
            throw new \InvalidArgumentException('invalid value for $rank when calling Segment., must be bigger than or equal to 0.');
        }

        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets rolloutPercent
     *
     * @return int
     */
    public function getRolloutPercent()
    {
        return $this->container['rolloutPercent'];
    }

    /**
     * Sets rolloutPercent
     *
     * @param int $rolloutPercent rolloutPercent
     *
     * @return $this
     */
    public function setRolloutPercent($rolloutPercent)
    {

        if (($rolloutPercent > 100)) {
            throw new \InvalidArgumentException('invalid value for $rolloutPercent when calling Segment., must be smaller than or equal to 100.');
        }
        if (($rolloutPercent < 0)) {
            throw new \InvalidArgumentException('invalid value for $rolloutPercent when calling Segment., must be bigger than or equal to 0.');
        }

        $this->container['rolloutPercent'] = $rolloutPercent;

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
