<?php
/**
 * URL
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ory\Hydra\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Hydra\Client\Model;

use \ArrayAccess;
use \Ory\Hydra\Client\ObjectSerializer;

/**
 * URL Class Doc Comment
 *
 * @category Class
 * @description The general form represented is:  [scheme:][//[userinfo@]host][/]path[?query][#fragment]  URLs that do not start with a slash after the scheme are interpreted as:  scheme:opaque[?query][#fragment]  Note that the Path field is stored in decoded form: /%47%6f%2f becomes /Go/. A consequence is that it is impossible to tell which slashes in the Path were slashes in the raw URL and which were %2f. This distinction is rarely important, but when it is, the code should use RawPath, an optional field which only gets set if the default encoding is different from Path.  URL&#39;s String method uses the EscapedPath method to obtain the path. See the EscapedPath method for more details.
 * @package  Ory\Hydra\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class URL implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'URL';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'forceQuery' => 'bool',
        'fragment' => 'string',
        'host' => 'string',
        'opaque' => 'string',
        'path' => 'string',
        'rawPath' => 'string',
        'rawQuery' => 'string',
        'scheme' => 'string',
        'user' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'forceQuery' => null,
        'fragment' => null,
        'host' => null,
        'opaque' => null,
        'path' => null,
        'rawPath' => null,
        'rawQuery' => null,
        'scheme' => null,
        'user' => null
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
        'forceQuery' => 'ForceQuery',
        'fragment' => 'Fragment',
        'host' => 'Host',
        'opaque' => 'Opaque',
        'path' => 'Path',
        'rawPath' => 'RawPath',
        'rawQuery' => 'RawQuery',
        'scheme' => 'Scheme',
        'user' => 'User'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forceQuery' => 'setForceQuery',
        'fragment' => 'setFragment',
        'host' => 'setHost',
        'opaque' => 'setOpaque',
        'path' => 'setPath',
        'rawPath' => 'setRawPath',
        'rawQuery' => 'setRawQuery',
        'scheme' => 'setScheme',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forceQuery' => 'getForceQuery',
        'fragment' => 'getFragment',
        'host' => 'getHost',
        'opaque' => 'getOpaque',
        'path' => 'getPath',
        'rawPath' => 'getRawPath',
        'rawQuery' => 'getRawQuery',
        'scheme' => 'getScheme',
        'user' => 'getUser'
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
        $this->container['forceQuery'] = isset($data['forceQuery']) ? $data['forceQuery'] : null;
        $this->container['fragment'] = isset($data['fragment']) ? $data['fragment'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['opaque'] = isset($data['opaque']) ? $data['opaque'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['rawPath'] = isset($data['rawPath']) ? $data['rawPath'] : null;
        $this->container['rawQuery'] = isset($data['rawQuery']) ? $data['rawQuery'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets forceQuery
     *
     * @return bool|null
     */
    public function getForceQuery()
    {
        return $this->container['forceQuery'];
    }

    /**
     * Sets forceQuery
     *
     * @param bool|null $forceQuery force query
     *
     * @return $this
     */
    public function setForceQuery($forceQuery)
    {
        $this->container['forceQuery'] = $forceQuery;

        return $this;
    }

    /**
     * Gets fragment
     *
     * @return string|null
     */
    public function getFragment()
    {
        return $this->container['fragment'];
    }

    /**
     * Sets fragment
     *
     * @param string|null $fragment fragment
     *
     * @return $this
     */
    public function setFragment($fragment)
    {
        $this->container['fragment'] = $fragment;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets opaque
     *
     * @return string|null
     */
    public function getOpaque()
    {
        return $this->container['opaque'];
    }

    /**
     * Sets opaque
     *
     * @param string|null $opaque opaque
     *
     * @return $this
     */
    public function setOpaque($opaque)
    {
        $this->container['opaque'] = $opaque;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets rawPath
     *
     * @return string|null
     */
    public function getRawPath()
    {
        return $this->container['rawPath'];
    }

    /**
     * Sets rawPath
     *
     * @param string|null $rawPath raw path
     *
     * @return $this
     */
    public function setRawPath($rawPath)
    {
        $this->container['rawPath'] = $rawPath;

        return $this;
    }

    /**
     * Gets rawQuery
     *
     * @return string|null
     */
    public function getRawQuery()
    {
        return $this->container['rawQuery'];
    }

    /**
     * Sets rawQuery
     *
     * @param string|null $rawQuery raw query
     *
     * @return $this
     */
    public function setRawQuery($rawQuery)
    {
        $this->container['rawQuery'] = $rawQuery;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme scheme
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets user
     *
     * @return object|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param object|null $user Userinfo Userinfo Userinfo The Userinfo type is an immutable encapsulation of username and password details for a URL. An existing Userinfo value is guaranteed to have a username set (potentially empty, as allowed by RFC 2396), and optionally a password.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


