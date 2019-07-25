<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\WebSetupApiSdk\Client\Model
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

/**
 * Interface abstracting model access.
 *
 * @package Softonic\WebSetupApiSdk\Client\Model
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return bool
     */
    public function hasAllAttributesSet();

    /**
     * Show all the invalid unrequired properties with reasons.
     *
     * @return array
     */
    public function listInvalidUnrequiredProperties();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model ensuring the required ones are set
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties();

    /**
     * Returns data as array.
     *
     * @param bool $getAllAttributes Should convert with all attributes or just the set ones?
     *
     * @return array
     */
    public function toArray($getAllAttributes);
}
