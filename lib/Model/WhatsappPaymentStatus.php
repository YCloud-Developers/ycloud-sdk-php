<?php
/**
 * WhatsappPaymentStatus
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
 * WhatsappPaymentStatus Class Doc Comment
 *
 * @category Class
 * @description Status of this payment. - &#x60;captured&#x60;: Indicates the payment is successfully completed. - &#x60;pending&#x60;: Indicates the user attempted but yet to receive success transactions signal.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappPaymentStatus
{
    /**
     * Possible values of this enum
     */
    public const CAPTURED = 'captured';

    public const PENDING = 'pending';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAPTURED,
            self::PENDING
        ];
    }
}


