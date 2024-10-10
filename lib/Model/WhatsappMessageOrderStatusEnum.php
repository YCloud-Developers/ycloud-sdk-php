<?php
/**
 * WhatsappMessageOrderStatusEnum
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
use \YCloud\Client\ObjectSerializer;

/**
 * WhatsappMessageOrderStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Only supported value in the &#x60;order_details&#x60; message is &#x60;pending&#x60;. In an &#x60;order_status&#x60; message, &#x60;status&#x60; can be: &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;partially_shipped&#x60;, &#x60;shipped&#x60;, &#x60;completed&#x60;, or &#x60;canceled&#x60;.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappMessageOrderStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const PENDING = 'pending';

    public const PROCESSING = 'processing';

    public const PARTIALLY_SHIPPED = 'partially_shipped';

    public const SHIPPED = 'shipped';

    public const COMPLETED = 'completed';

    public const CANCELED = 'canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::PROCESSING,
            self::PARTIALLY_SHIPPED,
            self::SHIPPED,
            self::COMPLETED,
            self::CANCELED
        ];
    }
}

