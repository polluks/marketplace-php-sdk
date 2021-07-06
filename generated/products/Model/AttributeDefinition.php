<?php
/**
 * AttributeDefinition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Otto\Market\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * The version of the OpenAPI document: V2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Otto\Market\Products\Model;

use \ArrayAccess;
use \Otto\Market\Products\ObjectSerializer;

/**
 * AttributeDefinition Class Doc Comment
 *
 * @category Class
 * @package  Otto\Market\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttributeDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AttributeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'attributeGroup' => 'string',
        'type' => 'string',
        'multiValue' => 'bool',
        'unit' => 'string',
        'unitDisplayName' => 'string',
        'allowedValues' => 'string[]',
        'featureRelevance' => 'string[]',
        'relatedMediaAssets' => 'string[]',
        'relevance' => 'string',
        'description' => 'string',
        'exampleValues' => 'string[]',
        'recommendedValues' => 'string[]',
        'reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'attributeGroup' => null,
        'type' => null,
        'multiValue' => null,
        'unit' => null,
        'unitDisplayName' => null,
        'allowedValues' => null,
        'featureRelevance' => null,
        'relatedMediaAssets' => null,
        'relevance' => null,
        'description' => null,
        'exampleValues' => null,
        'recommendedValues' => null,
        'reference' => null
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
        'name' => 'name',
        'attributeGroup' => 'attributeGroup',
        'type' => 'type',
        'multiValue' => 'multiValue',
        'unit' => 'unit',
        'unitDisplayName' => 'unitDisplayName',
        'allowedValues' => 'allowedValues',
        'featureRelevance' => 'featureRelevance',
        'relatedMediaAssets' => 'relatedMediaAssets',
        'relevance' => 'relevance',
        'description' => 'description',
        'exampleValues' => 'exampleValues',
        'recommendedValues' => 'recommendedValues',
        'reference' => 'reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'attributeGroup' => 'setAttributeGroup',
        'type' => 'setType',
        'multiValue' => 'setMultiValue',
        'unit' => 'setUnit',
        'unitDisplayName' => 'setUnitDisplayName',
        'allowedValues' => 'setAllowedValues',
        'featureRelevance' => 'setFeatureRelevance',
        'relatedMediaAssets' => 'setRelatedMediaAssets',
        'relevance' => 'setRelevance',
        'description' => 'setDescription',
        'exampleValues' => 'setExampleValues',
        'recommendedValues' => 'setRecommendedValues',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'attributeGroup' => 'getAttributeGroup',
        'type' => 'getType',
        'multiValue' => 'getMultiValue',
        'unit' => 'getUnit',
        'unitDisplayName' => 'getUnitDisplayName',
        'allowedValues' => 'getAllowedValues',
        'featureRelevance' => 'getFeatureRelevance',
        'relatedMediaAssets' => 'getRelatedMediaAssets',
        'relevance' => 'getRelevance',
        'description' => 'getDescription',
        'exampleValues' => 'getExampleValues',
        'recommendedValues' => 'getRecommendedValues',
        'reference' => 'getReference'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['attributeGroup'] = $data['attributeGroup'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['multiValue'] = $data['multiValue'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['unitDisplayName'] = $data['unitDisplayName'] ?? null;
        $this->container['allowedValues'] = $data['allowedValues'] ?? null;
        $this->container['featureRelevance'] = $data['featureRelevance'] ?? null;
        $this->container['relatedMediaAssets'] = $data['relatedMediaAssets'] ?? null;
        $this->container['relevance'] = $data['relevance'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['exampleValues'] = $data['exampleValues'] ?? null;
        $this->container['recommendedValues'] = $data['recommendedValues'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name the name of the attribute. This attribute name has to be used within the product description.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attributeGroup
     *
     * @return string|null
     */
    public function getAttributeGroup()
    {
        return $this->container['attributeGroup'];
    }

    /**
     * Sets attributeGroup
     *
     * @param string|null $attributeGroup title of the attributes displayed in the product details in the shop.
     *
     * @return self
     */
    public function setAttributeGroup($attributeGroup)
    {
        $this->container['attributeGroup'] = $attributeGroup;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type defines the format of the attribute value, such as string, integer, etc.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets multiValue
     *
     * @return bool|null
     */
    public function getMultiValue()
    {
        return $this->container['multiValue'];
    }

    /**
     * Sets multiValue
     *
     * @param bool|null $multiValue if the value is true, several values can be transferred to this attribute (polyvalence attribute); otherwise, only a single value may be transferred to this attribute.
     *
     * @return self
     */
    public function setMultiValue($multiValue)
    {
        $this->container['multiValue'] = $multiValue;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit the values must be transferred in the specified unit.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unitDisplayName
     *
     * @return string|null
     */
    public function getUnitDisplayName()
    {
        return $this->container['unitDisplayName'];
    }

    /**
     * Sets unitDisplayName
     *
     * @param string|null $unitDisplayName the value gets displayed with this unit in the shop.
     *
     * @return self
     */
    public function setUnitDisplayName($unitDisplayName)
    {
        $this->container['unitDisplayName'] = $unitDisplayName;

        return $this;
    }

    /**
     * Gets allowedValues
     *
     * @return string[]|null
     */
    public function getAllowedValues()
    {
        return $this->container['allowedValues'];
    }

    /**
     * Sets allowedValues
     *
     * @param string[]|null $allowedValues only the listed values are permitted for the attribute.
     *
     * @return self
     */
    public function setAllowedValues($allowedValues)
    {
        $this->container['allowedValues'] = $allowedValues;

        return $this;
    }

    /**
     * Gets featureRelevance
     *
     * @return string[]|null
     */
    public function getFeatureRelevance()
    {
        return $this->container['featureRelevance'];
    }

    /**
     * Sets featureRelevance
     *
     * @param string[]|null $featureRelevance describes what the attribute can be used for and where it gets displayed in the shop.
     *
     * @return self
     */
    public function setFeatureRelevance($featureRelevance)
    {
        $this->container['featureRelevance'] = $featureRelevance;

        return $this;
    }

    /**
     * Gets relatedMediaAssets
     *
     * @return string[]|null
     */
    public function getRelatedMediaAssets()
    {
        return $this->container['relatedMediaAssets'];
    }

    /**
     * Sets relatedMediaAssets
     *
     * @param string[]|null $relatedMediaAssets mandatory media assets for the category
     *
     * @return self
     */
    public function setRelatedMediaAssets($relatedMediaAssets)
    {
        $this->container['relatedMediaAssets'] = $relatedMediaAssets;

        return $this;
    }

    /**
     * Gets relevance
     *
     * @return string|null
     */
    public function getRelevance()
    {
        return $this->container['relevance'];
    }

    /**
     * Sets relevance
     *
     * @param string|null $relevance the relevance of the attribute.
     *
     * @return self
     */
    public function setRelevance($relevance)
    {
        $this->container['relevance'] = $relevance;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description additional information for the attribute.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exampleValues
     *
     * @return string[]|null
     */
    public function getExampleValues()
    {
        return $this->container['exampleValues'];
    }

    /**
     * Sets exampleValues
     *
     * @param string[]|null $exampleValues example values for the attribute.
     *
     * @return self
     */
    public function setExampleValues($exampleValues)
    {
        $this->container['exampleValues'] = $exampleValues;

        return $this;
    }

    /**
     * Gets recommendedValues
     *
     * @return string[]|null
     */
    public function getRecommendedValues()
    {
        return $this->container['recommendedValues'];
    }

    /**
     * Sets recommendedValues
     *
     * @param string[]|null $recommendedValues use the listed values to get full navigation and filter features on otto.de. If no suitable value exists, then enter your own value.
     *
     * @return self
     */
    public function setRecommendedValues($recommendedValues)
    {
        $this->container['recommendedValues'] = $recommendedValues;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference to further documentation.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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


