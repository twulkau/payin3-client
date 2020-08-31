<?php
/**
 * CreditCheckResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  PayIn3\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Capayable API V2
 *
 * API for Pay after delivery and Pay in 3 installments
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PayIn3\Client\Model;

use \ArrayAccess;
use \PayIn3\Client\ObjectSerializer;

/**
 * CreditCheckResult Class Doc Comment
 *
 * @category Class
 * @package  PayIn3\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditCheckResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_accepted' => 'bool',
        'transaction_number' => 'string',
        'refuse_reason' => 'int',
        'refuse_reason_translation' => 'string',
        'refuse_contact_name' => 'string',
        'refuse_contact_phone_number' => 'string',
        'first_installment_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_accepted' => null,
        'transaction_number' => null,
        'refuse_reason' => 'int32',
        'refuse_reason_translation' => null,
        'refuse_contact_name' => null,
        'refuse_contact_phone_number' => null,
        'first_installment_amount' => 'int32'
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
        'is_accepted' => 'IsAccepted',
        'transaction_number' => 'TransactionNumber',
        'refuse_reason' => 'RefuseReason',
        'refuse_reason_translation' => 'RefuseReasonTranslation',
        'refuse_contact_name' => 'RefuseContactName',
        'refuse_contact_phone_number' => 'RefuseContactPhoneNumber',
        'first_installment_amount' => 'FirstInstallmentAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_accepted' => 'setIsAccepted',
        'transaction_number' => 'setTransactionNumber',
        'refuse_reason' => 'setRefuseReason',
        'refuse_reason_translation' => 'setRefuseReasonTranslation',
        'refuse_contact_name' => 'setRefuseContactName',
        'refuse_contact_phone_number' => 'setRefuseContactPhoneNumber',
        'first_installment_amount' => 'setFirstInstallmentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_accepted' => 'getIsAccepted',
        'transaction_number' => 'getTransactionNumber',
        'refuse_reason' => 'getRefuseReason',
        'refuse_reason_translation' => 'getRefuseReasonTranslation',
        'refuse_contact_name' => 'getRefuseContactName',
        'refuse_contact_phone_number' => 'getRefuseContactPhoneNumber',
        'first_installment_amount' => 'getFirstInstallmentAmount'
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

    const REFUSE_REASON_1 = 1;
    const REFUSE_REASON_2 = 2;
    const REFUSE_REASON_3 = 3;
    const REFUSE_REASON_4 = 4;
    const REFUSE_REASON_5 = 5;
    const REFUSE_REASON_6 = 6;
    const REFUSE_REASON_7 = 7;
    const REFUSE_REASON_8 = 8;
    const REFUSE_REASON_9 = 9;
    const REFUSE_REASON_10 = 10;
    const REFUSE_REASON_11 = 11;
    const REFUSE_REASON_12 = 12;
    const REFUSE_REASON_13 = 13;
    const REFUSE_REASON_14 = 14;
    const REFUSE_REASON_15 = 15;
    const REFUSE_REASON_16 = 16;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefuseReasonAllowableValues()
    {
        return [
            self::REFUSE_REASON_1,
            self::REFUSE_REASON_2,
            self::REFUSE_REASON_3,
            self::REFUSE_REASON_4,
            self::REFUSE_REASON_5,
            self::REFUSE_REASON_6,
            self::REFUSE_REASON_7,
            self::REFUSE_REASON_8,
            self::REFUSE_REASON_9,
            self::REFUSE_REASON_10,
            self::REFUSE_REASON_11,
            self::REFUSE_REASON_12,
            self::REFUSE_REASON_13,
            self::REFUSE_REASON_14,
            self::REFUSE_REASON_15,
            self::REFUSE_REASON_16,
        ];
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
        $this->container['is_accepted'] = isset($data['is_accepted']) ? $data['is_accepted'] : null;
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['refuse_reason'] = isset($data['refuse_reason']) ? $data['refuse_reason'] : null;
        $this->container['refuse_reason_translation'] = isset($data['refuse_reason_translation']) ? $data['refuse_reason_translation'] : null;
        $this->container['refuse_contact_name'] = isset($data['refuse_contact_name']) ? $data['refuse_contact_name'] : null;
        $this->container['refuse_contact_phone_number'] = isset($data['refuse_contact_phone_number']) ? $data['refuse_contact_phone_number'] : null;
        $this->container['first_installment_amount'] = isset($data['first_installment_amount']) ? $data['first_installment_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRefuseReasonAllowableValues();
        if (!is_null($this->container['refuse_reason']) && !in_array($this->container['refuse_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'refuse_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets is_accepted
     *
     * @return bool
     */
    public function getIsAccepted()
    {
        return $this->container['is_accepted'];
    }

    /**
     * Sets is_accepted
     *
     * @param bool $is_accepted is_accepted
     *
     * @return $this
     */
    public function setIsAccepted($is_accepted)
    {
        $this->container['is_accepted'] = $is_accepted;

        return $this;
    }

    /**
     * Gets transaction_number
     *
     * @return string
     */
    public function getTransactionNumber()
    {
        return $this->container['transaction_number'];
    }

    /**
     * Sets transaction_number
     *
     * @param string $transaction_number transaction_number
     *
     * @return $this
     */
    public function setTransactionNumber($transaction_number)
    {
        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets refuse_reason
     *
     * @return int
     */
    public function getRefuseReason()
    {
        return $this->container['refuse_reason'];
    }

    /**
     * Sets refuse_reason
     *
     * @param int $refuse_reason 1 = AmountExceedsLimit, 2 = BalanceExceedsLimit, 3 = NotCreditworthy, 4 = CreditcheckUnavailable, 5 = NotFound, 6 = AddressBlocked, 7 = TooYoung, 8 = DifferentShippingAddress, 9 = ShippingAddressBlocked, 10 = IPAddressBlocked, 11 = CountryBlocked, 12 = ShippingCountryBlocked, 13 = AmountTooLow, 14 = TooManyOpenInvoices, 15 = IPAddressBlockedMultipleOrdersWithin24Hrs, 16 = CountryUnknown
     *
     * @return $this
     */
    public function setRefuseReason($refuse_reason)
    {
        $allowedValues = $this->getRefuseReasonAllowableValues();
        if (!is_null($refuse_reason) && !in_array($refuse_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'refuse_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refuse_reason'] = $refuse_reason;

        return $this;
    }

    /**
     * Gets refuse_reason_translation
     *
     * @return string
     */
    public function getRefuseReasonTranslation()
    {
        return $this->container['refuse_reason_translation'];
    }

    /**
     * Sets refuse_reason_translation
     *
     * @param string $refuse_reason_translation refuse_reason_translation
     *
     * @return $this
     */
    public function setRefuseReasonTranslation($refuse_reason_translation)
    {
        $this->container['refuse_reason_translation'] = $refuse_reason_translation;

        return $this;
    }

    /**
     * Gets refuse_contact_name
     *
     * @return string
     */
    public function getRefuseContactName()
    {
        return $this->container['refuse_contact_name'];
    }

    /**
     * Sets refuse_contact_name
     *
     * @param string $refuse_contact_name refuse_contact_name
     *
     * @return $this
     */
    public function setRefuseContactName($refuse_contact_name)
    {
        $this->container['refuse_contact_name'] = $refuse_contact_name;

        return $this;
    }

    /**
     * Gets refuse_contact_phone_number
     *
     * @return string
     */
    public function getRefuseContactPhoneNumber()
    {
        return $this->container['refuse_contact_phone_number'];
    }

    /**
     * Sets refuse_contact_phone_number
     *
     * @param string $refuse_contact_phone_number refuse_contact_phone_number
     *
     * @return $this
     */
    public function setRefuseContactPhoneNumber($refuse_contact_phone_number)
    {
        $this->container['refuse_contact_phone_number'] = $refuse_contact_phone_number;

        return $this;
    }

    /**
     * Gets first_installment_amount
     *
     * @return int
     */
    public function getFirstInstallmentAmount()
    {
        return $this->container['first_installment_amount'];
    }

    /**
     * Sets first_installment_amount
     *
     * @param int $first_installment_amount first_installment_amount
     *
     * @return $this
     */
    public function setFirstInstallmentAmount($first_installment_amount)
    {
        $this->container['first_installment_amount'] = $first_installment_amount;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


