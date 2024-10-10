<?php
/**
 * WhatsappMessageOrderPaymentSettingPaymentGatewayPayu
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * YCloud API
 *
 * The [YCloud](https://ycloud.com) API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API is designed to have predictable, resource-oriented URLs, return [JSON](https://www.json.org) responses, and use standard HTTP response codes and verbs.
 *
 * The version of the OpenAPI document: v2
 * Contact: service@ycloud.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YCloud\Client\Model;

use \ArrayAccess;
use \YCloud\Client\ObjectSerializer;

/**
 * WhatsappMessageOrderPaymentSettingPaymentGatewayPayu Class Doc Comment
 *
 * @category Class
 * @description Additional info for PayU. User-defined fields (udf) are used to store any information corresponding to a particular order. Each UDF field has a maximum character limit of 255.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappMessageOrderPaymentSettingPaymentGatewayPayu implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappMessageOrderPaymentSettingPaymentGatewayPayu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'udf1' => 'string',
        'udf2' => 'string',
        'udf3' => 'string',
        'udf4' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'udf1' => null,
        'udf2' => null,
        'udf3' => null,
        'udf4' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'udf1' => 'udf1',
        'udf2' => 'udf2',
        'udf3' => 'udf3',
        'udf4' => 'udf4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'udf1' => 'setUdf1',
        'udf2' => 'setUdf2',
        'udf3' => 'setUdf3',
        'udf4' => 'setUdf4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'udf1' => 'getUdf1',
        'udf2' => 'getUdf2',
        'udf3' => 'getUdf3',
        'udf4' => 'getUdf4'
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
        return self::$openAPIModelName;
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
        $this->container['udf1'] = $data['udf1'] ?? null;
        $this->container['udf2'] = $data['udf2'] ?? null;
        $this->container['udf3'] = $data['udf3'] ?? null;
        $this->container['udf4'] = $data['udf4'] ?? null;
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
     * Gets udf1
     *
     * @return string|null
     */
    public function getUdf1()
    {
        return $this->container['udf1'];
    }

    /**
     * Sets udf1
     *
     * @param string|null $udf1 udf1
     *
     * @return self
     */
    public function setUdf1($udf1)
    {
        $this->container['udf1'] = $udf1;

        return $this;
    }

    /**
     * Gets udf2
     *
     * @return string|null
     */
    public function getUdf2()
    {
        return $this->container['udf2'];
    }

    /**
     * Sets udf2
     *
     * @param string|null $udf2 udf2
     *
     * @return self
     */
    public function setUdf2($udf2)
    {
        $this->container['udf2'] = $udf2;

        return $this;
    }

    /**
     * Gets udf3
     *
     * @return string|null
     */
    public function getUdf3()
    {
        return $this->container['udf3'];
    }

    /**
     * Sets udf3
     *
     * @param string|null $udf3 udf3
     *
     * @return self
     */
    public function setUdf3($udf3)
    {
        $this->container['udf3'] = $udf3;

        return $this;
    }

    /**
     * Gets udf4
     *
     * @return string|null
     */
    public function getUdf4()
    {
        return $this->container['udf4'];
    }

    /**
     * Sets udf4
     *
     * @param string|null $udf4 udf4
     *
     * @return self
     */
    public function setUdf4($udf4)
    {
        $this->container['udf4'] = $udf4;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

