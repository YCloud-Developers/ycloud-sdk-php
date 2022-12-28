<?php
/**
 * WhatsappInboundMessageContext
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
 * WhatsappInboundMessageContext Class Doc Comment
 *
 * @category Class
 * @description Message context.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappInboundMessageContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappInboundMessageContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'forwarded' => 'bool',
        'frequently_forwarded' => 'bool',
        'from' => 'string',
        'id' => 'string',
        'referred_product' => '\YCloud\Client\Model\WhatsappInboundMessageReferredProduct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'forwarded' => null,
        'frequently_forwarded' => null,
        'from' => null,
        'id' => null,
        'referred_product' => null
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
        'forwarded' => 'forwarded',
        'frequently_forwarded' => 'frequently_forwarded',
        'from' => 'from',
        'id' => 'id',
        'referred_product' => 'referred_product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forwarded' => 'setForwarded',
        'frequently_forwarded' => 'setFrequentlyForwarded',
        'from' => 'setFrom',
        'id' => 'setId',
        'referred_product' => 'setReferredProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forwarded' => 'getForwarded',
        'frequently_forwarded' => 'getFrequentlyForwarded',
        'from' => 'getFrom',
        'id' => 'getId',
        'referred_product' => 'getReferredProduct'
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
        $this->container['forwarded'] = $data['forwarded'] ?? null;
        $this->container['frequently_forwarded'] = $data['frequently_forwarded'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['referred_product'] = $data['referred_product'] ?? null;
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
     * Gets forwarded
     *
     * @return bool|null
     */
    public function getForwarded()
    {
        return $this->container['forwarded'];
    }

    /**
     * Sets forwarded
     *
     * @param bool|null $forwarded **Added to Webhooks if message was forwarded.**  Set to `true` if the received message has been forwarded.
     *
     * @return self
     */
    public function setForwarded($forwarded)
    {
        $this->container['forwarded'] = $forwarded;

        return $this;
    }

    /**
     * Gets frequently_forwarded
     *
     * @return bool|null
     */
    public function getFrequentlyForwarded()
    {
        return $this->container['frequently_forwarded'];
    }

    /**
     * Sets frequently_forwarded
     *
     * @param bool|null $frequently_forwarded **Added to Webhooks if message has been frequently forwarded.**  Set to `true` if the received message has been forwarded more than five times.
     *
     * @return self
     */
    public function setFrequentlyForwarded($frequently_forwarded)
    {
        $this->container['frequently_forwarded'] = $frequently_forwarded;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from **Added to Webhooks if message is an inbound reply to a sent message.**  The WhatsApp ID (a phone number without the '+' prefix) of the sender of the sent message.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id **Optional.**  The `wamid` for the sent message for an inbound reply.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets referred_product
     *
     * @return \YCloud\Client\Model\WhatsappInboundMessageReferredProduct|null
     */
    public function getReferredProduct()
    {
        return $this->container['referred_product'];
    }

    /**
     * Sets referred_product
     *
     * @param \YCloud\Client\Model\WhatsappInboundMessageReferredProduct|null $referred_product referred_product
     *
     * @return self
     */
    public function setReferredProduct($referred_product)
    {
        $this->container['referred_product'] = $referred_product;

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

