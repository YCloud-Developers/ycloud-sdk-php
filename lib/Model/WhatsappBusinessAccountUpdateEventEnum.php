<?php
/**
 * WhatsappBusinessAccountUpdateEventEnum
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
 * WhatsappBusinessAccountUpdateEventEnum Class Doc Comment
 *
 * @category Class
 * @description Indicates the update event type of the WABA when a notification is sent to you to report a [policy violation](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement), a WABA has been banned and more. - &#x60;DISABLED_UPDATE&#x60;: WhatsApp Business Account Banned. - &#x60;ACCOUNT_RESTRICTION&#x60;: WhatsApp Business Account Restricted Due To Policy Violations. - &#x60;ACCOUNT_VIOLATION&#x60;: WhatsApp Business Account Violates Policy. - &#x60;AUTH_INTL_PRICE_ELIGIBILITY_UPDATE&#x60;: WhatsApp Business Account is eligible for the [authentication-international rate](https://developers.facebook.com/docs/whatsapp/pricing/authentication-international-rates). - &#x60;BUSINESS_PRIMARY_LOCATION_COUNTRY_UPDATE&#x60;: Business&#39;s [primary business location](https://developers.facebook.com/docs/whatsapp/pricing/authentication-international-rates#primary-business-location) is set.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappBusinessAccountUpdateEventEnum
{
    /**
     * Possible values of this enum
     */
    public const DISABLED_UPDATE = 'DISABLED_UPDATE';

    public const ACCOUNT_RESTRICTION = 'ACCOUNT_RESTRICTION';

    public const ACCOUNT_VIOLATION = 'ACCOUNT_VIOLATION';

    public const AUTH_INTL_PRICE_ELIGIBILITY_UPDATE = 'AUTH_INTL_PRICE_ELIGIBILITY_UPDATE';

    public const BUSINESS_PRIMARY_LOCATION_COUNTRY_UPDATE = 'BUSINESS_PRIMARY_LOCATION_COUNTRY_UPDATE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISABLED_UPDATE,
            self::ACCOUNT_RESTRICTION,
            self::ACCOUNT_VIOLATION,
            self::AUTH_INTL_PRICE_ELIGIBILITY_UPDATE,
            self::BUSINESS_PRIMARY_LOCATION_COUNTRY_UPDATE
        ];
    }
}


