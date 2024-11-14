<?php
/**
 * Sms
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
 * Sms Class Doc Comment
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Sms implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Sms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'to' => 'string',
        'text' => 'string',
        'sender_id' => 'string',
        'region_code' => 'string',
        'total_segments' => 'int',
        'total_price' => 'double',
        'currency' => 'string',
        'status' => 'string',
        'error_code' => 'string',
        'create_time' => '\DateTime',
        'update_time' => '\DateTime',
        'external_id' => 'string',
        'callback_url' => 'string',
        'biz_type' => 'string',
        'verification_id' => 'string'
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
        'to' => null,
        'text' => null,
        'sender_id' => null,
        'region_code' => null,
        'total_segments' => 'int32',
        'total_price' => 'double',
        'currency' => null,
        'status' => null,
        'error_code' => null,
        'create_time' => 'date-time',
        'update_time' => 'date-time',
        'external_id' => null,
        'callback_url' => null,
        'biz_type' => null,
        'verification_id' => null
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
        'to' => 'to',
        'text' => 'text',
        'sender_id' => 'senderId',
        'region_code' => 'regionCode',
        'total_segments' => 'totalSegments',
        'total_price' => 'totalPrice',
        'currency' => 'currency',
        'status' => 'status',
        'error_code' => 'errorCode',
        'create_time' => 'createTime',
        'update_time' => 'updateTime',
        'external_id' => 'externalId',
        'callback_url' => 'callbackUrl',
        'biz_type' => 'bizType',
        'verification_id' => 'verificationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'to' => 'setTo',
        'text' => 'setText',
        'sender_id' => 'setSenderId',
        'region_code' => 'setRegionCode',
        'total_segments' => 'setTotalSegments',
        'total_price' => 'setTotalPrice',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'error_code' => 'setErrorCode',
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime',
        'external_id' => 'setExternalId',
        'callback_url' => 'setCallbackUrl',
        'biz_type' => 'setBizType',
        'verification_id' => 'setVerificationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'to' => 'getTo',
        'text' => 'getText',
        'sender_id' => 'getSenderId',
        'region_code' => 'getRegionCode',
        'total_segments' => 'getTotalSegments',
        'total_price' => 'getTotalPrice',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'error_code' => 'getErrorCode',
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime',
        'external_id' => 'getExternalId',
        'callback_url' => 'getCallbackUrl',
        'biz_type' => 'getBizType',
        'verification_id' => 'getVerificationId'
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

    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_FAILED = 'failed';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_UNDELIVERED = 'undelivered';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_FAILED,
            self::STATUS_SENT,
            self::STATUS_DELIVERED,
            self::STATUS_UNDELIVERED,
        ];
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
        $this->container['to'] = $data['to'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['sender_id'] = $data['sender_id'] ?? null;
        $this->container['region_code'] = $data['region_code'] ?? null;
        $this->container['total_segments'] = $data['total_segments'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['error_code'] = $data['error_code'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['external_id'] = $data['external_id'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['biz_type'] = $data['biz_type'] ?? null;
        $this->container['verification_id'] = $data['verification_id'] ?? null;
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
        if ((mb_strlen($this->container['id']) > 128)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['id']) < 6)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if (!is_null($this->container['total_segments']) && ($this->container['total_segments'] < 1)) {
            $invalidProperties[] = "invalid value for 'total_segments', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * @param string $id Unique ID for the object.
     *
     * @return self
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Sms., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($id) < 6)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Sms., must be bigger than or equal to 6.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to The recipient's phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The text of this message.
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets sender_id
     *
     * @return string|null
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param string|null $sender_id Sender ID to be used.
     *
     * @return self
     */
    public function setSenderId($sender_id)
    {
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets region_code
     *
     * @return string|null
     */
    public function getRegionCode()
    {
        return $this->container['region_code'];
    }

    /**
     * Sets region_code
     *
     * @param string|null $region_code [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)
     *
     * @return self
     */
    public function setRegionCode($region_code)
    {
        $this->container['region_code'] = $region_code;

        return $this;
    }

    /**
     * Gets total_segments
     *
     * @return int|null
     */
    public function getTotalSegments()
    {
        return $this->container['total_segments'];
    }

    /**
     * Sets total_segments
     *
     * @param int|null $total_segments Number of message segments. See [SMS character encoding](https://help.ycloud.com/en/articles/3083427-sms-character-encoding) for more info.
     *
     * @return self
     */
    public function setTotalSegments($total_segments)
    {

        if (!is_null($total_segments) && ($total_segments < 1)) {
            throw new \InvalidArgumentException('invalid value for $total_segments when calling Sms., must be bigger than or equal to 1.');
        }

        $this->container['total_segments'] = $total_segments;

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
     * @param double|null $total_price Total price of this message.
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Delivery status. One of `accepted`, `sent`, `delivered`, `undelivered`, or `failed`. - `accepted`: The messaging request is accepted by our system. - `failed`: The message failed to be sent from our system. - `sent`: The message has been sent from our system. - `delivered`: Our system has received a delivery receipt indicating that message is delivered. - `undelivered`: Our system has received a delivery receipt indicating that message is not delivered.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string|null $error_code Error code when the message is undeliverable.
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime|null $create_time The time at which this message was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-03-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime|null $update_time The time at which the delivery report for this message was updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-03-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

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
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url Delivery report URL. You can provide a URL, and we will push the updated status report to your server in time. e.g., https://httpbin.org/anything?tag=api. Note: We recommend configuring Webhook Endpoints instead.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets biz_type
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['biz_type'];
    }

    /**
     * Sets biz_type
     *
     * @param string|null $biz_type This can be either empty or one of `sms`, or `verify`. Defaults to `sms`. - `sms`: Indicates that the message is sent via the **SMS** product. - `verify`: Indicates that the message is sent via the **Verify** product.
     *
     * @return self
     */
    public function setBizType($biz_type)
    {
        $this->container['biz_type'] = $biz_type;

        return $this;
    }

    /**
     * Gets verification_id
     *
     * @return string|null
     */
    public function getVerificationId()
    {
        return $this->container['verification_id'];
    }

    /**
     * Sets verification_id
     *
     * @param string|null $verification_id The verification ID. Included only when `bizType` is `verify`.
     *
     * @return self
     */
    public function setVerificationId($verification_id)
    {
        $this->container['verification_id'] = $verification_id;

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


