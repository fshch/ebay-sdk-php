<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property boolean $Archived
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property \DTS\eBaySDK\Trading\Types\TimeRangeType $SaleDateRange
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerSearchType $Search
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType $Sort
 * @property \DTS\eBaySDK\Trading\Enums\SortOrderCodeType $SortOrder
 * @property integer $StoreCategoryID
 */
class GetSellingManagerSoldListingsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Archived' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Archived'
        ],
        'Filter' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Filter'
        ],
        'Pagination' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'SaleDateRange' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TimeRangeType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleDateRange'
        ],
        'Search' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerSearchType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ],
        'Sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ]
    ];
    
    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }
        
        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellingManagerSoldListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}