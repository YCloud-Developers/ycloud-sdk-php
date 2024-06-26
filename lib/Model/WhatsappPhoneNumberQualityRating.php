<?php
/**
 * WhatsappPhoneNumberQualityRating
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
 * WhatsappPhoneNumberQualityRating Class Doc Comment
 *
 * @category Class
 * @description Quality rating. One of &#x60;GREEN&#x60;, &#x60;YELLOW&#x60;, &#x60;RED&#x60;, or &#x60;UNKNOWN&#x60;. See also [Phone Number Quality Rating](https://www.facebook.com/business/help/896873687365001). - &#x60;GREEN&#x60;: High quality. - &#x60;YELLOW&#x60;: Medium quality. - &#x60;RED&#x60;: Low quality. - &#x60;UNKNOWN&#x60;: Unknown quality.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappPhoneNumberQualityRating
{
    /**
     * Possible values of this enum
     */
    public const GREEN = 'GREEN';

    public const YELLOW = 'YELLOW';

    public const RED = 'RED';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GREEN,
            self::YELLOW,
            self::RED,
            self::UNKNOWN
        ];
    }
}


