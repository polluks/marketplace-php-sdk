<?php
/**
 * Shipment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Otto\Market\Shipments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shipments
 *
 * This interface describes all endpoints regarding the shipment domain.
 *
 * The version of the OpenAPI document: 1.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Otto\Market\Shipments\Model;

use \ArrayAccess;
use \Otto\Market\Shipments\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description A shipment with full details.
 * @package  Otto\Market\Shipments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentId' => 'string',
        'creationDate' => 'string',
        'trackingKey' => '\Otto\Market\Shipments\Model\TrackingKey',
        'shipDate' => 'string',
        'shipFromAddress' => '\Otto\Market\Shipments\Model\Address',
        'positionItems' => '\Otto\Market\Shipments\Model\PositionItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipmentId' => null,
        'creationDate' => null,
        'trackingKey' => null,
        'shipDate' => null,
        'shipFromAddress' => null,
        'positionItems' => null
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
        'shipmentId' => 'shipmentId',
        'creationDate' => 'creationDate',
        'trackingKey' => 'trackingKey',
        'shipDate' => 'shipDate',
        'shipFromAddress' => 'shipFromAddress',
        'positionItems' => 'positionItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentId' => 'setShipmentId',
        'creationDate' => 'setCreationDate',
        'trackingKey' => 'setTrackingKey',
        'shipDate' => 'setShipDate',
        'shipFromAddress' => 'setShipFromAddress',
        'positionItems' => 'setPositionItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentId' => 'getShipmentId',
        'creationDate' => 'getCreationDate',
        'trackingKey' => 'getTrackingKey',
        'shipDate' => 'getShipDate',
        'shipFromAddress' => 'getShipFromAddress',
        'positionItems' => 'getPositionItems'
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
        $this->container['shipmentId'] = $data['shipmentId'] ?? null;
        $this->container['creationDate'] = $data['creationDate'] ?? null;
        $this->container['trackingKey'] = $data['trackingKey'] ?? null;
        $this->container['shipDate'] = $data['shipDate'] ?? null;
        $this->container['shipFromAddress'] = $data['shipFromAddress'] ?? null;
        $this->container['positionItems'] = $data['positionItems'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['positionItems']) && (count($this->container['positionItems']) < 1)) {
            $invalidProperties[] = "invalid value for 'positionItems', number of items must be greater than or equal to 1.";
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
     * Gets shipmentId
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId Internal shipment identifier assigned by OTTO Market.
     *
     * @return self
     */
    public function setShipmentId($shipmentId)
    {
        $this->container['shipmentId'] = $shipmentId;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string|null $creationDate creationDate
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets trackingKey
     *
     * @return \Otto\Market\Shipments\Model\TrackingKey|null
     */
    public function getTrackingKey()
    {
        return $this->container['trackingKey'];
    }

    /**
     * Sets trackingKey
     *
     * @param \Otto\Market\Shipments\Model\TrackingKey|null $trackingKey trackingKey
     *
     * @return self
     */
    public function setTrackingKey($trackingKey)
    {
        $this->container['trackingKey'] = $trackingKey;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param string|null $shipDate shipDate
     *
     * @return self
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \Otto\Market\Shipments\Model\Address|null
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Otto\Market\Shipments\Model\Address|null $shipFromAddress shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets positionItems
     *
     * @return \Otto\Market\Shipments\Model\PositionItem[]|null
     */
    public function getPositionItems()
    {
        return $this->container['positionItems'];
    }

    /**
     * Sets positionItems
     *
     * @param \Otto\Market\Shipments\Model\PositionItem[]|null $positionItems The position items included in the shipment.
     *
     * @return self
     */
    public function setPositionItems($positionItems)
    {


        if (!is_null($positionItems) && (count($positionItems) < 1)) {
            throw new \InvalidArgumentException('invalid length for $positionItems when calling Shipment., number of items must be greater than or equal to 1.');
        }
        $this->container['positionItems'] = $positionItems;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


