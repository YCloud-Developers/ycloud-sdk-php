<?php
/**
 * WhatsappPricingCategory
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
 * WhatsappPricingCategory Class Doc Comment
 *
 * @category Class
 * @description WhatsApp pricing category. - &#x60;referral_conversion&#x60;: Indicates a [free entry point conversation](https://developers.facebook.com/docs/whatsapp/pricing#free-entry-point-conversations). - &#x60;authentication&#x60;: Indicates the conversation was billed at authentication rate. - &#x60;authentication_international&#x60;: Indicates the conversation was conversation was billed at the [authentication-international rate](https://developers.facebook.com/docs/whatsapp/pricing/authentication-international-rates). - &#x60;marketing&#x60;: Indicates the conversation was billed at authentication rate. - &#x60;utility&#x60;: Indicates the conversation was billed at utility rate. - &#x60;service&#x60;: Indicates the conversation was billed at service rate.  See also [Conversation-Based Pricing](https://developers.facebook.com/docs/whatsapp/pricing).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappPricingCategory
{
    /**
     * Possible values of this enum
     */
    public const REFERRAL_CONVERSION = 'referral_conversion';

    public const AUTHENTICATION = 'authentication';

    public const AUTHENTICATION_INTERNATIONAL = 'authentication_international';

    public const MARKETING = 'marketing';

    public const UTILITY = 'utility';

    public const SERVICE = 'service';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REFERRAL_CONVERSION,
            self::AUTHENTICATION,
            self::AUTHENTICATION_INTERNATIONAL,
            self::MARKETING,
            self::UTILITY,
            self::SERVICE
        ];
    }
}


