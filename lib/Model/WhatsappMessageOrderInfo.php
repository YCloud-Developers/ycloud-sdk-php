<?php
/**
 * WhatsappMessageOrderInfo
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
 * WhatsappMessageOrderInfo Class Doc Comment
 *
 * @category Class
 * @description Order info.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappMessageOrderInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappMessageOrderInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\YCloud\Client\Model\WhatsappMessageOrderStatusEnum',
        'type' => 'string',
        'catalog_id' => 'string',
        'items' => '\YCloud\Client\Model\WhatsappMessageOrderItem[]',
        'subtotal' => '\YCloud\Client\Model\WhatsappMessageOrderAmount',
        'tax' => '\YCloud\Client\Model\WhatsappMessageOrderAmount',
        'shipping' => '\YCloud\Client\Model\WhatsappMessageOrderAmount',
        'discount' => '\YCloud\Client\Model\WhatsappMessageOrderAmount',
        'expiration' => '\YCloud\Client\Model\WhatsappMessageOrderExpiration',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null,
        'catalog_id' => null,
        'items' => null,
        'subtotal' => null,
        'tax' => null,
        'shipping' => null,
        'discount' => null,
        'expiration' => null,
        'description' => null
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
        'status' => 'status',
        'type' => 'type',
        'catalog_id' => 'catalog_id',
        'items' => 'items',
        'subtotal' => 'subtotal',
        'tax' => 'tax',
        'shipping' => 'shipping',
        'discount' => 'discount',
        'expiration' => 'expiration',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'type' => 'setType',
        'catalog_id' => 'setCatalogId',
        'items' => 'setItems',
        'subtotal' => 'setSubtotal',
        'tax' => 'setTax',
        'shipping' => 'setShipping',
        'discount' => 'setDiscount',
        'expiration' => 'setExpiration',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'type' => 'getType',
        'catalog_id' => 'getCatalogId',
        'items' => 'getItems',
        'subtotal' => 'getSubtotal',
        'tax' => 'getTax',
        'shipping' => 'getShipping',
        'discount' => 'getDiscount',
        'expiration' => 'getExpiration',
        'description' => 'getDescription'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['catalog_id'] = $data['catalog_id'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 120)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 120.";
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
     * Gets status
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderStatusEnum|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Only supported value is `quick_pay`. When this field is passed in we hide the \"Review and Pay\" button and only show the \"Pay Now\" button in the order details bubble.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets catalog_id
     *
     * @return string|null
     */
    public function getCatalogId()
    {
        return $this->container['catalog_id'];
    }

    /**
     * Sets catalog_id
     *
     * @param string|null $catalog_id Unique identifier of the Facebook catalog being used by the business. If you do not provide this field, you must provide the following fields inside the items object: `country_of_origin`, `importer_name`, and `importer_address`.
     *
     * @return self
     */
    public function setCatalogId($catalog_id)
    {
        $this->container['catalog_id'] = $catalog_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderItem[]|null $items Array of items in the order.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderAmount|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderAmount|null $subtotal subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderAmount|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderAmount|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderAmount|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderAmount|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderAmount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderAmount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \YCloud\Client\Model\WhatsappMessageOrderExpiration|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \YCloud\Client\Model\WhatsappMessageOrderExpiration|null $expiration expiration
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description **Optional.** Text for sharing status related information. Could be useful while sending cancellation. Max character limit is 120 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 120)) {
            throw new \InvalidArgumentException('invalid length for $description when calling WhatsappMessageOrderInfo., must be smaller than or equal to 120.');
        }

        $this->container['description'] = $description;

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


