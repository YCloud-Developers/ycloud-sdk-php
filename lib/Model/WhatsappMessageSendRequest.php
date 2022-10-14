<?php
/**
 * WhatsappMessageSendRequest
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
 * WhatsappMessageSendRequest Class Doc Comment
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappMessageSendRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappMessageSendRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'type' => '\YCloud\Client\Model\WhatsappMessageType',
        'template' => '\YCloud\Client\Model\WhatsappMessageTemplate',
        'text' => '\YCloud\Client\Model\WhatsappMessageText',
        'image' => '\YCloud\Client\Model\WhatsappMessageMedia',
        'video' => '\YCloud\Client\Model\WhatsappMessageMedia',
        'audio' => '\YCloud\Client\Model\WhatsappMessageMedia',
        'document' => '\YCloud\Client\Model\WhatsappMessageMedia',
        'location' => '\YCloud\Client\Model\WhatsappMessageLocation',
        'interactive' => '\YCloud\Client\Model\WhatsappMessageInteractive',
        'contacts' => '\YCloud\Client\Model\WhatsappMessageContact[]',
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
        'from' => null,
        'to' => null,
        'type' => null,
        'template' => null,
        'text' => null,
        'image' => null,
        'video' => null,
        'audio' => null,
        'document' => null,
        'location' => null,
        'interactive' => null,
        'contacts' => null,
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
        'from' => 'from',
        'to' => 'to',
        'type' => 'type',
        'template' => 'template',
        'text' => 'text',
        'image' => 'image',
        'video' => 'video',
        'audio' => 'audio',
        'document' => 'document',
        'location' => 'location',
        'interactive' => 'interactive',
        'contacts' => 'contacts',
        'external_id' => 'externalId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'type' => 'setType',
        'template' => 'setTemplate',
        'text' => 'setText',
        'image' => 'setImage',
        'video' => 'setVideo',
        'audio' => 'setAudio',
        'document' => 'setDocument',
        'location' => 'setLocation',
        'interactive' => 'setInteractive',
        'contacts' => 'setContacts',
        'external_id' => 'setExternalId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'type' => 'getType',
        'template' => 'getTemplate',
        'text' => 'getText',
        'image' => 'getImage',
        'video' => 'getVideo',
        'audio' => 'getAudio',
        'document' => 'getDocument',
        'location' => 'getLocation',
        'interactive' => 'getInteractive',
        'contacts' => 'getContacts',
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['template'] = $data['template'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['video'] = $data['video'] ?? null;
        $this->container['audio'] = $data['audio'] ?? null;
        $this->container['document'] = $data['document'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['interactive'] = $data['interactive'] ?? null;
        $this->container['contacts'] = $data['contacts'] ?? null;
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

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from The sender's phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
     * Gets type
     *
     * @return \YCloud\Client\Model\WhatsappMessageType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \YCloud\Client\Model\WhatsappMessageType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \YCloud\Client\Model\WhatsappMessageTemplate|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \YCloud\Client\Model\WhatsappMessageTemplate|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets text
     *
     * @return \YCloud\Client\Model\WhatsappMessageText|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param \YCloud\Client\Model\WhatsappMessageText|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \YCloud\Client\Model\WhatsappMessageMedia|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \YCloud\Client\Model\WhatsappMessageMedia|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets video
     *
     * @return \YCloud\Client\Model\WhatsappMessageMedia|null
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param \YCloud\Client\Model\WhatsappMessageMedia|null $video video
     *
     * @return self
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets audio
     *
     * @return \YCloud\Client\Model\WhatsappMessageMedia|null
     */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
     * Sets audio
     *
     * @param \YCloud\Client\Model\WhatsappMessageMedia|null $audio audio
     *
     * @return self
     */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \YCloud\Client\Model\WhatsappMessageMedia|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \YCloud\Client\Model\WhatsappMessageMedia|null $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \YCloud\Client\Model\WhatsappMessageLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \YCloud\Client\Model\WhatsappMessageLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets interactive
     *
     * @return \YCloud\Client\Model\WhatsappMessageInteractive|null
     */
    public function getInteractive()
    {
        return $this->container['interactive'];
    }

    /**
     * Sets interactive
     *
     * @param \YCloud\Client\Model\WhatsappMessageInteractive|null $interactive interactive
     *
     * @return self
     */
    public function setInteractive($interactive)
    {
        $this->container['interactive'] = $interactive;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \YCloud\Client\Model\WhatsappMessageContact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \YCloud\Client\Model\WhatsappMessageContact[]|null $contacts Required when `type` is `contacts`.
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

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
     * @param string|null $external_id A unique string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems.
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

