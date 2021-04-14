<?php
/**
 * ProgramPlatformLanguage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\WebSetupApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Web Setup Api
 *
 * API to setup a program on a website
 *
 * OpenAPI spec version: 1.0.0
 * Contact: development@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\WebSetupApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\WebSetupApiSdk\ObjectSerializer;

/**
 * ProgramPlatformLanguage Class Doc Comment
 *
 * @category Class
 * @package  Softonic\WebSetupApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatformLanguage implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatformLanguage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
'id_platform' => 'string',
'id_language' => 'string',
'dont_allow_download' => 'bool',
'force_external_download' => 'bool',
'is_sales_client' => 'bool',
'partner_download' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => 'uuid',
'id_platform' => null,
'id_language' => null,
'dont_allow_download' => null,
'force_external_download' => null,
'is_sales_client' => null,
'partner_download' => null,
        ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_program' => 'id_program',
'id_platform' => 'id_platform',
'id_language' => 'id_language',
'dont_allow_download' => 'dont_allow_download',
'force_external_download' => 'force_external_download',
'is_sales_client' => 'is_sales_client',
'partner_download' => 'partner_download',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
'id_platform' => 'setIdPlatform',
'id_language' => 'setIdLanguage',
'dont_allow_download' => 'setDontAllowDownload',
'force_external_download' => 'setForceExternalDownload',
'is_sales_client' => 'setIsSalesClient',
'partner_download' => 'setPartnerDownload',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
'id_platform' => 'getIdPlatform',
'id_language' => 'getIdLanguage',
'dont_allow_download' => 'getDontAllowDownload',
'force_external_download' => 'getForceExternalDownload',
'is_sales_client' => 'getIsSalesClient',
'partner_download' => 'getPartnerDownload',
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
        return self::$swaggerModelName;
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
    public function __construct(array $data = [])
    {
        array_key_exists('id_program', $data) && $this->container['id_program'] = $data['id_program'];
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('id_language', $data) && $this->container['id_language'] = $data['id_language'];
        array_key_exists('dont_allow_download', $data) && $this->container['dont_allow_download'] = $data['dont_allow_download'];
        array_key_exists('force_external_download', $data) && $this->container['force_external_download'] = $data['force_external_download'];
        array_key_exists('is_sales_client', $data) && $this->container['is_sales_client'] = $data['is_sales_client'];
        array_key_exists('partner_download', $data) && $this->container['partner_download'] = $data['partner_download'];
    }

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return bool
     */
    public function hasAllAttributesSet()
    {
        return count($this->container) === count(self::$attributeMap);
    }

    /**
     * Show all the invalid unrequired properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidUnrequiredProperties()
    {
        $invalidProperties = [];
        
        return $invalidProperties;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $invalidProperties = array_merge($invalidProperties, $this->listInvalidUnrequiredProperties());

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model ensuring the required ones are set
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties()
    {
        return count($this->listInvalidUnrequiredProperties()) === 0;
    }


    /**
     * Gets id_program
     *
     * @return string
     */
    public function getIdProgram()
    {
        return array_key_exists('id_program', $this->container) ? $this->container['id_program'] :
null;
    }

    /**
     * Sets id_program
     *
     * @param string $id_program Program identifier
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_platform
     *
     * @return string
     */
    public function getIdPlatform()
    {
        return array_key_exists('id_platform', $this->container) ? $this->container['id_platform'] :
null;
    }

    /**
     * Sets id_platform
     *
     * @param string $id_platform Platform identifier
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_language
     *
     * @return string
     */
    public function getIdLanguage()
    {
        return array_key_exists('id_language', $this->container) ? $this->container['id_language'] :
null;
    }

    /**
     * Sets id_language
     *
     * @param string $id_language Language identifier
     *
     * @return $this
     */
    public function setIdLanguage($id_language)
    {
        $this->container['id_language'] = $id_language;

        return $this;
    }

    /**
     * Gets dont_allow_download
     *
     * @return bool
     */
    public function getDontAllowDownload()
    {
        return array_key_exists('dont_allow_download', $this->container) ? $this->container['dont_allow_download'] :
false;
    }

    /**
     * Sets dont_allow_download
     *
     * @param bool $dont_allow_download If true no download button should be shown
     *
     * @return $this
     */
    public function setDontAllowDownload($dont_allow_download)
    {
        $this->container['dont_allow_download'] = $dont_allow_download;

        return $this;
    }

    /**
     * Gets force_external_download
     *
     * @return bool
     */
    public function getForceExternalDownload()
    {
        return array_key_exists('force_external_download', $this->container) ? $this->container['force_external_download'] :
false;
    }

    /**
     * Sets force_external_download
     *
     * @param bool $force_external_download If the download for the program is forced to external
     *
     * @return $this
     */
    public function setForceExternalDownload($force_external_download)
    {
        $this->container['force_external_download'] = $force_external_download;

        return $this;
    }

    /**
     * Gets is_sales_client
     *
     * @return bool
     */
    public function getIsSalesClient()
    {
        return array_key_exists('is_sales_client', $this->container) ? $this->container['is_sales_client'] :
false;
    }

    /**
     * Sets is_sales_client
     *
     * @param bool $is_sales_client This program pays in some way to the company, affects compliance rules
     *
     * @return $this
     */
    public function setIsSalesClient($is_sales_client)
    {
        $this->container['is_sales_client'] = $is_sales_client;

        return $this;
    }

    /**
     * Gets partner_download
     *
     * @return bool
     */
    public function getPartnerDownload()
    {
        return array_key_exists('partner_download', $this->container) ? $this->container['partner_download'] :
            false;
    }

    /**
     * Sets is_sales_client
     *
     * @param bool $partner_download This program download is provided by an external partner
     *
     * @return $this
     */
    public function setPartnerDownload($partner_download)
    {
        $this->container['partner_download'] = $partner_download;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->container);
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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }

     /**
     * Returns data as array.
     *
     * @param bool $getAllAttributes Should convert with all attributes or just the set ones?
     *
     * @return array
     */
    public function toArray($getAllAttributes = self::GET_SET_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        $data = [];
        $data['id_program'] = $this->getIdProgram();
        $data['id_platform'] = $this->getIdPlatform();
        $data['id_language'] = $this->getIdLanguage();
        $data['dont_allow_download'] = $this->getDontAllowDownload();
        $data['force_external_download'] = $this->getForceExternalDownload();
        $data['is_sales_client'] = $this->getIsSalesClient();
        $data['partner_download'] = $this->getPartnerDownload();

        return $data;
    }
}
