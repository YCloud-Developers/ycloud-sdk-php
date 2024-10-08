<?php
/**
 * Contact
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
 * Contact Class Doc Comment
 *
 * @category Class
 * @description Represents a contact.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Contact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'nickname' => 'string',
        'country_code' => 'string',
        'country_name' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'last_seen' => '\DateTime',
        'last_message_to_phone_number' => 'string',
        'tags' => 'string[]',
        'create_time' => '\DateTime',
        'custom_attributes' => '\YCloud\Client\Model\ContactCustomAttribute[]',
        'owner_email' => 'string'
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
        'nickname' => null,
        'country_code' => null,
        'country_name' => null,
        'phone_number' => null,
        'email' => null,
        'last_seen' => 'date-time',
        'last_message_to_phone_number' => null,
        'tags' => null,
        'create_time' => 'date-time',
        'custom_attributes' => null,
        'owner_email' => null
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
        'nickname' => 'nickname',
        'country_code' => 'countryCode',
        'country_name' => 'countryName',
        'phone_number' => 'phoneNumber',
        'email' => 'email',
        'last_seen' => 'lastSeen',
        'last_message_to_phone_number' => 'lastMessageToPhoneNumber',
        'tags' => 'tags',
        'create_time' => 'createTime',
        'custom_attributes' => 'customAttributes',
        'owner_email' => 'ownerEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nickname' => 'setNickname',
        'country_code' => 'setCountryCode',
        'country_name' => 'setCountryName',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'last_seen' => 'setLastSeen',
        'last_message_to_phone_number' => 'setLastMessageToPhoneNumber',
        'tags' => 'setTags',
        'create_time' => 'setCreateTime',
        'custom_attributes' => 'setCustomAttributes',
        'owner_email' => 'setOwnerEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nickname' => 'getNickname',
        'country_code' => 'getCountryCode',
        'country_name' => 'getCountryName',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'last_seen' => 'getLastSeen',
        'last_message_to_phone_number' => 'getLastMessageToPhoneNumber',
        'tags' => 'getTags',
        'create_time' => 'getCreateTime',
        'custom_attributes' => 'getCustomAttributes',
        'owner_email' => 'getOwnerEmail'
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
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['country_name'] = $data['country_name'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['last_seen'] = $data['last_seen'] ?? null;
        $this->container['last_message_to_phone_number'] = $data['last_message_to_phone_number'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['custom_attributes'] = $data['custom_attributes'] ?? null;
        $this->container['owner_email'] = $data['owner_email'] ?? null;
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
        if ((mb_strlen($this->container['id']) > 255)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['tags']) && (count($this->container['tags']) > 50)) {
            $invalidProperties[] = "invalid value for 'tags', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['owner_email']) && (mb_strlen($this->container['owner_email']) > 250)) {
            $invalidProperties[] = "invalid value for 'owner_email', the character length must be smaller than or equal to 250.";
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
        if ((mb_strlen($id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Contact., must be smaller than or equal to 255.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname Contact's nickname.
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Two-letter country abbreviation. See [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name Full country name.
     *
     * @return self
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Unique Phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The contact's email address. If present, the email address must be unique.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets last_seen
     *
     * @return \DateTime|null
     */
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }

    /**
     * Sets last_seen
     *
     * @param \DateTime|null $last_seen The time at which the contact last sent a message to your business, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-06-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setLastSeen($last_seen)
    {
        $this->container['last_seen'] = $last_seen;

        return $this;
    }

    /**
     * Gets last_message_to_phone_number
     *
     * @return string|null
     */
    public function getLastMessageToPhoneNumber()
    {
        return $this->container['last_message_to_phone_number'];
    }

    /**
     * Sets last_message_to_phone_number
     *
     * @param string|null $last_message_to_phone_number The business phone number that the contact last sent a message to.
     *
     * @return self
     */
    public function setLastMessageToPhoneNumber($last_message_to_phone_number)
    {
        $this->container['last_message_to_phone_number'] = $last_message_to_phone_number;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Contact's tags.
     *
     * @return self
     */
    public function setTags($tags)
    {

        if (!is_null($tags) && (count($tags) > 50)) {
            throw new \InvalidArgumentException('invalid value for $tags when calling Contact., number of items must be less than or equal to 50.');
        }
        $this->container['tags'] = $tags;

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
     * @param \DateTime|null $create_time The time at which the contact was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-06-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \YCloud\Client\Model\ContactCustomAttribute[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \YCloud\Client\Model\ContactCustomAttribute[]|null $custom_attributes Contact's custom attributes.
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return string|null
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string|null $owner_email The email address of the contact's owner.
     *
     * @return self
     */
    public function setOwnerEmail($owner_email)
    {
        if (!is_null($owner_email) && (mb_strlen($owner_email) > 250)) {
            throw new \InvalidArgumentException('invalid length for $owner_email when calling Contact., must be smaller than or equal to 250.');
        }

        $this->container['owner_email'] = $owner_email;

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


