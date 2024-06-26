<?php
/**
 * WhatsappConversationType
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
 * WhatsappConversationType Class Doc Comment
 *
 * @category Class
 * @description Conversation type. There is a charge when the first business message of this conversation is delivered, initiating the 24-hour conversation session. As such, the conversation type can be &#x60;null&#x60; before the first message is delivered. - &#x60;FREE_ENTRY&#x60;: Conversations originating from a [free entry point](https://developers.facebook.com/docs/whatsapp/pricing#free-entry-point-conversations). - &#x60;FREE_TIER&#x60;: Conversations within the monthly [free tier](https://developers.facebook.com/docs/whatsapp/pricing#free-tier-conversations). - &#x60;REGULAR&#x60;: Any conversations that did not originate from a [free entry point](https://developers.facebook.com/docs/whatsapp/pricing#free-entry-point-conversations) or are above the monthly [free tier](https://developers.facebook.com/docs/whatsapp/pricing#free-tier-conversations) allotment.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappConversationType
{
    /**
     * Possible values of this enum
     */
    public const FREE_ENTRY = 'FREE_ENTRY';

    public const FREE_TIER = 'FREE_TIER';

    public const REGULAR = 'REGULAR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FREE_ENTRY,
            self::FREE_TIER,
            self::REGULAR
        ];
    }
}


