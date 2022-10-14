<?php
/**
 * WhatsappMessageInteractiveAction
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
 * WhatsappMessageInteractiveAction Class Doc Comment
 *
 * @category Class
 * @description [WhatsApp Interactive Action Object](https://developers.facebook.com/docs/whatsapp/cloud-api/reference/messages#action-object).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappMessageInteractiveAction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappMessageInteractive_action';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buttons' => '\YCloud\Client\Model\WhatsappMessageInteractiveActionButtonsInner[]',
        'button' => 'string',
        'sections' => '\YCloud\Client\Model\WhatsappMessageInteractiveActionSectionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buttons' => null,
        'button' => null,
        'sections' => null
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
        'buttons' => 'buttons',
        'button' => 'button',
        'sections' => 'sections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buttons' => 'setButtons',
        'button' => 'setButton',
        'sections' => 'setSections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buttons' => 'getButtons',
        'button' => 'getButton',
        'sections' => 'getSections'
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
        $this->container['buttons'] = $data['buttons'] ?? null;
        $this->container['button'] = $data['button'] ?? null;
        $this->container['sections'] = $data['sections'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['buttons']) && (count($this->container['buttons']) > 3)) {
            $invalidProperties[] = "invalid value for 'buttons', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['button']) && (mb_strlen($this->container['button']) > 20)) {
            $invalidProperties[] = "invalid value for 'button', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['sections']) && (count($this->container['sections']) > 10)) {
            $invalidProperties[] = "invalid value for 'sections', number of items must be less than or equal to 10.";
        }

        if (!is_null($this->container['sections']) && (count($this->container['sections']) < 1)) {
            $invalidProperties[] = "invalid value for 'sections', number of items must be greater than or equal to 1.";
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
     * Gets buttons
     *
     * @return \YCloud\Client\Model\WhatsappMessageInteractiveActionButtonsInner[]|null
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \YCloud\Client\Model\WhatsappMessageInteractiveActionButtonsInner[]|null $buttons Required for Reply Buttons.
     *
     * @return self
     */
    public function setButtons($buttons)
    {

        if (!is_null($buttons) && (count($buttons) > 3)) {
            throw new \InvalidArgumentException('invalid value for $buttons when calling WhatsappMessageInteractiveAction., number of items must be less than or equal to 3.');
        }
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets button
     *
     * @return string|null
     */
    public function getButton()
    {
        return $this->container['button'];
    }

    /**
     * Sets button
     *
     * @param string|null $button Required for List Messages. Button content. It cannot be an empty string and must be unique within the message. Emojis are supported, markdown is not.
     *
     * @return self
     */
    public function setButton($button)
    {
        if (!is_null($button) && (mb_strlen($button) > 20)) {
            throw new \InvalidArgumentException('invalid length for $button when calling WhatsappMessageInteractiveAction., must be smaller than or equal to 20.');
        }

        $this->container['button'] = $button;

        return $this;
    }

    /**
     * Gets sections
     *
     * @return \YCloud\Client\Model\WhatsappMessageInteractiveActionSectionsInner[]|null
     */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
     * Sets sections
     *
     * @param \YCloud\Client\Model\WhatsappMessageInteractiveActionSectionsInner[]|null $sections Required for List Messages.
     *
     * @return self
     */
    public function setSections($sections)
    {

        if (!is_null($sections) && (count($sections) > 10)) {
            throw new \InvalidArgumentException('invalid value for $sections when calling WhatsappMessageInteractiveAction., number of items must be less than or equal to 10.');
        }
        if (!is_null($sections) && (count($sections) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sections when calling WhatsappMessageInteractiveAction., number of items must be greater than or equal to 1.');
        }
        $this->container['sections'] = $sections;

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

