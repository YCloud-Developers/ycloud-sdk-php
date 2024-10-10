<?php
/**
 * WhatsappMessageTemplateComponent
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
 * WhatsappMessageTemplateComponent Class Doc Comment
 *
 * @category Class
 * @description Component object containing the parameters of the message.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappMessageTemplateComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappMessageTemplateComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'sub_type' => 'string',
        'index' => 'int',
        'parameters' => '\YCloud\Client\Model\WhatsappMessageTemplateComponentParameter[]',
        'cards' => '\YCloud\Client\Model\WhatsappMessageTemplateComponentCard[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'sub_type' => null,
        'index' => 'int32',
        'parameters' => null,
        'cards' => null
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
        'type' => 'type',
        'sub_type' => 'sub_type',
        'index' => 'index',
        'parameters' => 'parameters',
        'cards' => 'cards'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'sub_type' => 'setSubType',
        'index' => 'setIndex',
        'parameters' => 'setParameters',
        'cards' => 'setCards'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'sub_type' => 'getSubType',
        'index' => 'getIndex',
        'parameters' => 'getParameters',
        'cards' => 'getCards'
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

    public const TYPE_HEADER = 'header';
    public const TYPE_BODY = 'body';
    public const TYPE_BUTTON = 'button';
    public const TYPE_LIMITED_TIME_OFFER = 'limited_time_offer';
    public const TYPE_CAROUSEL = 'carousel';
    public const TYPE_ORDER_STATUS = 'order_status';
    public const SUB_TYPE_QUICK_REPLY = 'quick_reply';
    public const SUB_TYPE_URL = 'url';
    public const SUB_TYPE_COPY_CODE = 'copy_code';
    public const SUB_TYPE_CATALOG = 'catalog';
    public const SUB_TYPE_MPM = 'mpm';
    public const SUB_TYPE_FLOW = 'flow';
    public const SUB_TYPE_ORDER_DETAILS = 'order_details';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HEADER,
            self::TYPE_BODY,
            self::TYPE_BUTTON,
            self::TYPE_LIMITED_TIME_OFFER,
            self::TYPE_CAROUSEL,
            self::TYPE_ORDER_STATUS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubTypeAllowableValues()
    {
        return [
            self::SUB_TYPE_QUICK_REPLY,
            self::SUB_TYPE_URL,
            self::SUB_TYPE_COPY_CODE,
            self::SUB_TYPE_CATALOG,
            self::SUB_TYPE_MPM,
            self::SUB_TYPE_FLOW,
            self::SUB_TYPE_ORDER_DETAILS,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['sub_type'] = $data['sub_type'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['cards'] = $data['cards'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubTypeAllowableValues();
        if (!is_null($this->container['sub_type']) && !in_array($this->container['sub_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sub_type', must be one of '%s'",
                $this->container['sub_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['index']) && ($this->container['index'] > 9)) {
            $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['index']) && ($this->container['index'] < 0)) {
            $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Component type.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sub_type
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param string|null $sub_type **Required when type is `button`.** Type of button. - `quick_reply`: Refers to a previously created quick reply button that allows for the customer to return a predefined message. - `url`: Refers to a previously created url button that allows the customer to visit the URL generated by appending the text parameter to the predefined prefix URL in the template. - `copy_code`: Refers to a previously created copy code button that allows the customer to copy a text string (defined when the template is sent in a template message) to the device's clipboard when tapped by the app user. - `catalog`: Refers to a previously created catalog button that allows the customer to view your product catalog. - `mpm`: Refers to a previously created MPM (multi-product message) button that allows the customer to browser products and sections. - `flow`: Refers to a previously created flow button that allows the customer to interact with a [flow](https://developers.facebook.com/docs/whatsapp/flows). - `order_details`: Refers to a previously created order details button that allows the customer to view the details of an order.
     *
     * @return self
     */
    public function setSubType($sub_type)
    {
        $allowedValues = $this->getSubTypeAllowableValues();
        if (!is_null($sub_type) && !in_array($sub_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sub_type', must be one of '%s'",
                    $sub_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index **Required when `type` = `button`. Not used for the other types.** Indicates order in which button should appear, if the template uses multiple buttons. Buttons are zero-indexed, so setting value to 0 will cause the button to appear first, and another button with an index of 1 will appear next, etc.
     *
     * @return self
     */
    public function setIndex($index)
    {

        if (!is_null($index) && ($index > 9)) {
            throw new \InvalidArgumentException('invalid value for $index when calling WhatsappMessageTemplateComponent., must be smaller than or equal to 9.');
        }
        if (!is_null($index) && ($index < 0)) {
            throw new \InvalidArgumentException('invalid value for $index when calling WhatsappMessageTemplateComponent., must be bigger than or equal to 0.');
        }

        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \YCloud\Client\Model\WhatsappMessageTemplateComponentParameter[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \YCloud\Client\Model\WhatsappMessageTemplateComponentParameter[]|null $parameters **Required when `type` = `button`, or there are variables in the corresponding template component, or the template `HEADER` format is media (`IMAGE`, `VIDEO`, or `DOCUMENT`).** Array of parameter objects with the content of the message.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets cards
     *
     * @return \YCloud\Client\Model\WhatsappMessageTemplateComponentCard[]|null
     */
    public function getCards()
    {
        return $this->container['cards'];
    }

    /**
     * Sets cards
     *
     * @param \YCloud\Client\Model\WhatsappMessageTemplateComponentCard[]|null $cards Use for `carousel` components. Provides card components containing the parameters of the message.
     *
     * @return self
     */
    public function setCards($cards)
    {
        $this->container['cards'] = $cards;

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


