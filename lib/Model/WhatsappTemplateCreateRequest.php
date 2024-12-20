<?php
/**
 * WhatsappTemplateCreateRequest
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
 * WhatsappTemplateCreateRequest Class Doc Comment
 *
 * @category Class
 * @description See [WhatsApp Templates](https://developers.facebook.com/docs/whatsapp/business-management-api/message-templates).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappTemplateCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappTemplateCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'waba_id' => 'string',
        'name' => 'string',
        'language' => 'string',
        'category' => '\YCloud\Client\Model\WhatsappTemplateCategory',
        'sub_category' => '\YCloud\Client\Model\WhatsappTemplateSubCategory',
        'message_send_ttl_seconds' => 'int',
        'components' => '\YCloud\Client\Model\WhatsappTemplateComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'waba_id' => null,
        'name' => null,
        'language' => null,
        'category' => null,
        'sub_category' => null,
        'message_send_ttl_seconds' => 'int32',
        'components' => null
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
        'waba_id' => 'wabaId',
        'name' => 'name',
        'language' => 'language',
        'category' => 'category',
        'sub_category' => 'subCategory',
        'message_send_ttl_seconds' => 'messageSendTtlSeconds',
        'components' => 'components'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'waba_id' => 'setWabaId',
        'name' => 'setName',
        'language' => 'setLanguage',
        'category' => 'setCategory',
        'sub_category' => 'setSubCategory',
        'message_send_ttl_seconds' => 'setMessageSendTtlSeconds',
        'components' => 'setComponents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'waba_id' => 'getWabaId',
        'name' => 'getName',
        'language' => 'getLanguage',
        'category' => 'getCategory',
        'sub_category' => 'getSubCategory',
        'message_send_ttl_seconds' => 'getMessageSendTtlSeconds',
        'components' => 'getComponents'
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
        $this->container['waba_id'] = $data['waba_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['sub_category'] = $data['sub_category'] ?? null;
        $this->container['message_send_ttl_seconds'] = $data['message_send_ttl_seconds'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['waba_id'] === null) {
            $invalidProperties[] = "'waba_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 512)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
        }

        if (!preg_match("/[a-z0-9]{1,512}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-z0-9]{1,512}/.";
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['components'] === null) {
            $invalidProperties[] = "'components' can't be null";
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
     * Gets waba_id
     *
     * @return string
     */
    public function getWabaId()
    {
        return $this->container['waba_id'];
    }

    /**
     * Sets waba_id
     *
     * @param string $waba_id WhatsApp Business Account ID.
     *
     * @return self
     */
    public function setWabaId($waba_id)
    {
        $this->container['waba_id'] = $waba_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the template.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WhatsappTemplateCreateRequest., must be smaller than or equal to 512.');
        }
        if ((!preg_match("/[a-z0-9]{1,512}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling WhatsappTemplateCreateRequest., must conform to the pattern /[a-z0-9]{1,512}/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages) for all codes.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \YCloud\Client\Model\WhatsappTemplateCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \YCloud\Client\Model\WhatsappTemplateCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets sub_category
     *
     * @return \YCloud\Client\Model\WhatsappTemplateSubCategory|null
     */
    public function getSubCategory()
    {
        return $this->container['sub_category'];
    }

    /**
     * Sets sub_category
     *
     * @param \YCloud\Client\Model\WhatsappTemplateSubCategory|null $sub_category sub_category
     *
     * @return self
     */
    public function setSubCategory($sub_category)
    {
        $this->container['sub_category'] = $sub_category;

        return $this;
    }

    /**
     * Gets message_send_ttl_seconds
     *
     * @return int|null
     */
    public function getMessageSendTtlSeconds()
    {
        return $this->container['message_send_ttl_seconds'];
    }

    /**
     * Sets message_send_ttl_seconds
     *
     * @param int|null $message_send_ttl_seconds If we are unable to deliver a message for an amount of time that exceeds its time-to-live, we will stop retrying and drop the message. By default, messages that use an authentication template have a default TTL of **10 minutes**, and messages that use a utility or marketing template have a default TTL of **30 days**. Set its value between `30` and `900` seconds (i.e., 30 seconds to 15 minutes) for authentication templates, or `30` and `43200` seconds (i.e., 30 seconds to 12 hours) for utility templates, or `43200` and `2592000` seconds (i.e., 12 hours to 30 days) for marketing templates. Alternatively, you can set this value to `-1`, which will set a custom TTL of 30 days for either type of template. We encourage you to set a time-to-live for all of your authentication templates, preferably equal to or less than your code expiration time, to ensure your customers only get a message when a code is still usable. Authentication templates created before October 23, 2024, have a default TTL of 30 days.
     *
     * @return self
     */
    public function setMessageSendTtlSeconds($message_send_ttl_seconds)
    {
        $this->container['message_send_ttl_seconds'] = $message_send_ttl_seconds;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \YCloud\Client\Model\WhatsappTemplateComponent[]
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \YCloud\Client\Model\WhatsappTemplateComponent[] $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

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


