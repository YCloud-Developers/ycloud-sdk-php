<?php
/**
 * Verification
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
 * Verification Class Doc Comment
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Verification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Verification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => '\YCloud\Client\Model\VerificationStatus',
        'to' => 'string',
        'channel' => '\YCloud\Client\Model\VerificationChannel',
        'send_time' => '\DateTime',
        'total_price' => 'double',
        'currency' => 'string',
        'sms_fallback_enabled' => 'bool',
        'sms_fallback' => '\YCloud\Client\Model\VerificationFallback',
        'external_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'to' => null,
        'channel' => null,
        'send_time' => 'date-time',
        'total_price' => 'double',
        'currency' => null,
        'sms_fallback_enabled' => null,
        'sms_fallback' => null,
        'external_id' => null
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
        'id' => 'id',
        'status' => 'status',
        'to' => 'to',
        'channel' => 'channel',
        'send_time' => 'sendTime',
        'total_price' => 'totalPrice',
        'currency' => 'currency',
        'sms_fallback_enabled' => 'smsFallbackEnabled',
        'sms_fallback' => 'smsFallback',
        'external_id' => 'externalId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'to' => 'setTo',
        'channel' => 'setChannel',
        'send_time' => 'setSendTime',
        'total_price' => 'setTotalPrice',
        'currency' => 'setCurrency',
        'sms_fallback_enabled' => 'setSmsFallbackEnabled',
        'sms_fallback' => 'setSmsFallback',
        'external_id' => 'setExternalId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'to' => 'getTo',
        'channel' => 'getChannel',
        'send_time' => 'getSendTime',
        'total_price' => 'getTotalPrice',
        'currency' => 'getCurrency',
        'sms_fallback_enabled' => 'getSmsFallbackEnabled',
        'sms_fallback' => 'getSmsFallback',
        'external_id' => 'getExternalId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['send_time'] = $data['send_time'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['sms_fallback_enabled'] = $data['sms_fallback_enabled'] ?? null;
        $this->container['sms_fallback'] = $data['sms_fallback'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the verification.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \YCloud\Client\Model\VerificationStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \YCloud\Client\Model\VerificationStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Recipient of the verification.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \YCloud\Client\Model\VerificationChannel|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \YCloud\Client\Model\VerificationChannel|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets send_time
     *
     * @return \DateTime|null
     */
    public function getSendTime()
    {
        return $this->container['send_time'];
    }

    /**
     * Sets send_time
     *
     * @param \DateTime|null $send_time The time at which this verification was sent, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-06-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setSendTime($send_time)
    {
        $this->container['send_time'] = $send_time;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return double|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param double|null $total_price Total price of this verification.
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Price currency. [ISO 4217 currency code](https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sms_fallback_enabled
     *
     * @return bool|null
     */
    public function getSmsFallbackEnabled()
    {
        return $this->container['sms_fallback_enabled'];
    }

    /**
     * Sets sms_fallback_enabled
     *
     * @param bool|null $sms_fallback_enabled Whether sms fallback is enabled or not. Applicable when `channel` is `whatsapp`. If enabled, we will try to send the verification code via sms when the WhatsApp message is failed.
     *
     * @return self
     */
    public function setSmsFallbackEnabled($sms_fallback_enabled)
    {
        $this->container['sms_fallback_enabled'] = $sms_fallback_enabled;

        return $this;
    }

    /**
     * Gets sms_fallback
     *
     * @return \YCloud\Client\Model\VerificationFallback|null
     */
    public function getSmsFallback()
    {
        return $this->container['sms_fallback'];
    }

    /**
     * Sets sms_fallback
     *
     * @param \YCloud\Client\Model\VerificationFallback|null $sms_fallback sms_fallback
     *
     * @return self
     */
    public function setSmsFallback($sms_fallback)
    {
        $this->container['sms_fallback'] = $sms_fallback;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id A unique (recommended) string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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


