<?php
/**
 * InvoiceRequestV2Model
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
 * InvoiceRequestV2Model Class Doc Comment
 *
 * @category Class
 * @package  PayIn3\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceRequestV2Model implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceRequestV2Model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transaction_number' => 'string',
        'invoice_number' => 'string',
        'invoice_date' => '\DateTime',
        'invoice_amount' => 'int',
        'invoice_description' => 'string',
        'invoice_pdf_submit_type' => 'int',
        'invoice_pdf_url' => 'string',
        'invoice_pdf_email_sent_date' => '\DateTime',
        'invoice_pdf_from_email' => 'string',
        'invoice_pdf_email_subject' => 'string',
        'extra_info' => 'string',
        'culture_code' => 'string',
        'invoice_pdf_data' => '\PayIn3\Client\Model\InvoicePdfDataModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transaction_number' => null,
        'invoice_number' => null,
        'invoice_date' => 'date-time',
        'invoice_amount' => 'int32',
        'invoice_description' => null,
        'invoice_pdf_submit_type' => 'int32',
        'invoice_pdf_url' => null,
        'invoice_pdf_email_sent_date' => 'date-time',
        'invoice_pdf_from_email' => null,
        'invoice_pdf_email_subject' => null,
        'extra_info' => null,
        'culture_code' => null,
        'invoice_pdf_data' => null
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
        'transaction_number' => 'TransactionNumber',
        'invoice_number' => 'InvoiceNumber',
        'invoice_date' => 'InvoiceDate',
        'invoice_amount' => 'InvoiceAmount',
        'invoice_description' => 'InvoiceDescription',
        'invoice_pdf_submit_type' => 'InvoicePdfSubmitType',
        'invoice_pdf_url' => 'InvoicePdfUrl',
        'invoice_pdf_email_sent_date' => 'InvoicePdfEmailSentDate',
        'invoice_pdf_from_email' => 'InvoicePdfFromEmail',
        'invoice_pdf_email_subject' => 'InvoicePdfEmailSubject',
        'extra_info' => 'ExtraInfo',
        'culture_code' => 'CultureCode',
        'invoice_pdf_data' => 'InvoicePdfData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_number' => 'setTransactionNumber',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'invoice_amount' => 'setInvoiceAmount',
        'invoice_description' => 'setInvoiceDescription',
        'invoice_pdf_submit_type' => 'setInvoicePdfSubmitType',
        'invoice_pdf_url' => 'setInvoicePdfUrl',
        'invoice_pdf_email_sent_date' => 'setInvoicePdfEmailSentDate',
        'invoice_pdf_from_email' => 'setInvoicePdfFromEmail',
        'invoice_pdf_email_subject' => 'setInvoicePdfEmailSubject',
        'extra_info' => 'setExtraInfo',
        'culture_code' => 'setCultureCode',
        'invoice_pdf_data' => 'setInvoicePdfData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_number' => 'getTransactionNumber',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'invoice_amount' => 'getInvoiceAmount',
        'invoice_description' => 'getInvoiceDescription',
        'invoice_pdf_submit_type' => 'getInvoicePdfSubmitType',
        'invoice_pdf_url' => 'getInvoicePdfUrl',
        'invoice_pdf_email_sent_date' => 'getInvoicePdfEmailSentDate',
        'invoice_pdf_from_email' => 'getInvoicePdfFromEmail',
        'invoice_pdf_email_subject' => 'getInvoicePdfEmailSubject',
        'extra_info' => 'getExtraInfo',
        'culture_code' => 'getCultureCode',
        'invoice_pdf_data' => 'getInvoicePdfData'
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

    const INVOICE_PDF_SUBMIT_TYPE_0 = 0;
    const INVOICE_PDF_SUBMIT_TYPE_1 = 1;
    const INVOICE_PDF_SUBMIT_TYPE_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoicePdfSubmitTypeAllowableValues()
    {
        return [
            self::INVOICE_PDF_SUBMIT_TYPE_0,
            self::INVOICE_PDF_SUBMIT_TYPE_1,
            self::INVOICE_PDF_SUBMIT_TYPE_2,
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
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['invoice_amount'] = isset($data['invoice_amount']) ? $data['invoice_amount'] : null;
        $this->container['invoice_description'] = isset($data['invoice_description']) ? $data['invoice_description'] : null;
        $this->container['invoice_pdf_submit_type'] = isset($data['invoice_pdf_submit_type']) ? $data['invoice_pdf_submit_type'] : null;
        $this->container['invoice_pdf_url'] = isset($data['invoice_pdf_url']) ? $data['invoice_pdf_url'] : null;
        $this->container['invoice_pdf_email_sent_date'] = isset($data['invoice_pdf_email_sent_date']) ? $data['invoice_pdf_email_sent_date'] : null;
        $this->container['invoice_pdf_from_email'] = isset($data['invoice_pdf_from_email']) ? $data['invoice_pdf_from_email'] : null;
        $this->container['invoice_pdf_email_subject'] = isset($data['invoice_pdf_email_subject']) ? $data['invoice_pdf_email_subject'] : null;
        $this->container['extra_info'] = isset($data['extra_info']) ? $data['extra_info'] : null;
        $this->container['culture_code'] = isset($data['culture_code']) ? $data['culture_code'] : null;
        $this->container['invoice_pdf_data'] = isset($data['invoice_pdf_data']) ? $data['invoice_pdf_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transaction_number'] === null) {
            $invalidProperties[] = "'transaction_number' can't be null";
        }
        if ((mb_strlen($this->container['transaction_number']) > 32)) {
            $invalidProperties[] = "invalid value for 'transaction_number', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['transaction_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'transaction_number', the character length must be bigger than or equal to 0.";
        }

        if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['transaction_number'])) {
            $invalidProperties[] = "invalid value for 'transaction_number', must be conform to the pattern /[a-fA-F0-9]{32}/.";
        }

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ((mb_strlen($this->container['invoice_number']) > 150)) {
            $invalidProperties[] = "invalid value for 'invoice_number', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['invoice_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['invoice_date'] === null) {
            $invalidProperties[] = "'invoice_date' can't be null";
        }
        if ($this->container['invoice_amount'] === null) {
            $invalidProperties[] = "'invoice_amount' can't be null";
        }
        if ($this->container['invoice_description'] === null) {
            $invalidProperties[] = "'invoice_description' can't be null";
        }
        if ((mb_strlen($this->container['invoice_description']) > 255)) {
            $invalidProperties[] = "invalid value for 'invoice_description', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['invoice_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_description', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['invoice_pdf_submit_type'] === null) {
            $invalidProperties[] = "'invoice_pdf_submit_type' can't be null";
        }
        $allowedValues = $this->getInvoicePdfSubmitTypeAllowableValues();
        if (!is_null($this->container['invoice_pdf_submit_type']) && !in_array($this->container['invoice_pdf_submit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_pdf_submit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['invoice_pdf_url']) && (mb_strlen($this->container['invoice_pdf_url']) > 511)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_url', the character length must be smaller than or equal to 511.";
        }

        if (!is_null($this->container['invoice_pdf_url']) && (mb_strlen($this->container['invoice_pdf_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_url', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['invoice_pdf_from_email']) && (mb_strlen($this->container['invoice_pdf_from_email']) > 127)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_from_email', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['invoice_pdf_from_email']) && (mb_strlen($this->container['invoice_pdf_from_email']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_from_email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['invoice_pdf_email_subject']) && (mb_strlen($this->container['invoice_pdf_email_subject']) > 127)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_email_subject', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['invoice_pdf_email_subject']) && (mb_strlen($this->container['invoice_pdf_email_subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_pdf_email_subject', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['extra_info']) && (mb_strlen($this->container['extra_info']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'extra_info', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['extra_info']) && (mb_strlen($this->container['extra_info']) < 0)) {
            $invalidProperties[] = "invalid value for 'extra_info', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['culture_code'] === null) {
            $invalidProperties[] = "'culture_code' can't be null";
        }
        if ((mb_strlen($this->container['culture_code']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture_code', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['culture_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture_code', the character length must be bigger than or equal to 0.";
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
     * @param string $transaction_number Guid, no hyphens
     *
     * @return $this
     */
    public function setTransactionNumber($transaction_number)
    {
        if ((mb_strlen($transaction_number) > 32)) {
            throw new \InvalidArgumentException('invalid length for $transaction_number when calling InvoiceRequestV2Model., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($transaction_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $transaction_number when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/[a-fA-F0-9]{32}/", $transaction_number))) {
            throw new \InvalidArgumentException("invalid value for $transaction_number when calling InvoiceRequestV2Model., must conform to the pattern /[a-fA-F0-9]{32}/.");
        }

        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number The shop’s invoice reference
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        if ((mb_strlen($invoice_number) > 150)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number when calling InvoiceRequestV2Model., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($invoice_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_number when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date ISO8601: yyyy-MM-dd
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets invoice_amount
     *
     * @return int
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoice_amount'];
    }

    /**
     * Sets invoice_amount
     *
     * @param int $invoice_amount in cents
     *
     * @return $this
     */
    public function setInvoiceAmount($invoice_amount)
    {
        $this->container['invoice_amount'] = $invoice_amount;

        return $this;
    }

    /**
     * Gets invoice_description
     *
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->container['invoice_description'];
    }

    /**
     * Sets invoice_description
     *
     * @param string $invoice_description invoice_description
     *
     * @return $this
     */
    public function setInvoiceDescription($invoice_description)
    {
        if ((mb_strlen($invoice_description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $invoice_description when calling InvoiceRequestV2Model., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($invoice_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_description when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['invoice_description'] = $invoice_description;

        return $this;
    }

    /**
     * Gets invoice_pdf_submit_type
     *
     * @return int
     */
    public function getInvoicePdfSubmitType()
    {
        return $this->container['invoice_pdf_submit_type'];
    }

    /**
     * Sets invoice_pdf_submit_type
     *
     * @param int $invoice_pdf_submit_type 0 = Url, 1 = BccEmail, 2 = IncludedData
     *
     * @return $this
     */
    public function setInvoicePdfSubmitType($invoice_pdf_submit_type)
    {
        $allowedValues = $this->getInvoicePdfSubmitTypeAllowableValues();
        if (!in_array($invoice_pdf_submit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_pdf_submit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_pdf_submit_type'] = $invoice_pdf_submit_type;

        return $this;
    }

    /**
     * Gets invoice_pdf_url
     *
     * @return string
     */
    public function getInvoicePdfUrl()
    {
        return $this->container['invoice_pdf_url'];
    }

    /**
     * Sets invoice_pdf_url
     *
     * @param string $invoice_pdf_url Url to the shop’s invoice as PDF. Required if submit type=URL
     *
     * @return $this
     */
    public function setInvoicePdfUrl($invoice_pdf_url)
    {
        if (!is_null($invoice_pdf_url) && (mb_strlen($invoice_pdf_url) > 511)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_url when calling InvoiceRequestV2Model., must be smaller than or equal to 511.');
        }
        if (!is_null($invoice_pdf_url) && (mb_strlen($invoice_pdf_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_url when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['invoice_pdf_url'] = $invoice_pdf_url;

        return $this;
    }

    /**
     * Gets invoice_pdf_email_sent_date
     *
     * @return \DateTime
     */
    public function getInvoicePdfEmailSentDate()
    {
        return $this->container['invoice_pdf_email_sent_date'];
    }

    /**
     * Sets invoice_pdf_email_sent_date
     *
     * @param \DateTime $invoice_pdf_email_sent_date Required if submit type=BCC_EMAIL
     *
     * @return $this
     */
    public function setInvoicePdfEmailSentDate($invoice_pdf_email_sent_date)
    {
        $this->container['invoice_pdf_email_sent_date'] = $invoice_pdf_email_sent_date;

        return $this;
    }

    /**
     * Gets invoice_pdf_from_email
     *
     * @return string
     */
    public function getInvoicePdfFromEmail()
    {
        return $this->container['invoice_pdf_from_email'];
    }

    /**
     * Sets invoice_pdf_from_email
     *
     * @param string $invoice_pdf_from_email Required if submit type=BCC_EMAIL
     *
     * @return $this
     */
    public function setInvoicePdfFromEmail($invoice_pdf_from_email)
    {
        if (!is_null($invoice_pdf_from_email) && (mb_strlen($invoice_pdf_from_email) > 127)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_from_email when calling InvoiceRequestV2Model., must be smaller than or equal to 127.');
        }
        if (!is_null($invoice_pdf_from_email) && (mb_strlen($invoice_pdf_from_email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_from_email when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['invoice_pdf_from_email'] = $invoice_pdf_from_email;

        return $this;
    }

    /**
     * Gets invoice_pdf_email_subject
     *
     * @return string
     */
    public function getInvoicePdfEmailSubject()
    {
        return $this->container['invoice_pdf_email_subject'];
    }

    /**
     * Sets invoice_pdf_email_subject
     *
     * @param string $invoice_pdf_email_subject Part of subject to identity the email. Required if submit type=BCC_EMAIL
     *
     * @return $this
     */
    public function setInvoicePdfEmailSubject($invoice_pdf_email_subject)
    {
        if (!is_null($invoice_pdf_email_subject) && (mb_strlen($invoice_pdf_email_subject) > 127)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_email_subject when calling InvoiceRequestV2Model., must be smaller than or equal to 127.');
        }
        if (!is_null($invoice_pdf_email_subject) && (mb_strlen($invoice_pdf_email_subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_pdf_email_subject when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['invoice_pdf_email_subject'] = $invoice_pdf_email_subject;

        return $this;
    }

    /**
     * Gets extra_info
     *
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->container['extra_info'];
    }

    /**
     * Sets extra_info
     *
     * @param string $extra_info Extra info Capayable can view in their admin. Only fill with data if agreed with Capayable.
     *
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        if (!is_null($extra_info) && (mb_strlen($extra_info) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $extra_info when calling InvoiceRequestV2Model., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($extra_info) && (mb_strlen($extra_info) < 0)) {
            throw new \InvalidArgumentException('invalid length for $extra_info when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['extra_info'] = $extra_info;

        return $this;
    }

    /**
     * Gets culture_code
     *
     * @return string
     */
    public function getCultureCode()
    {
        return $this->container['culture_code'];
    }

    /**
     * Sets culture_code
     *
     * @param string $culture_code Language Culture Code to use for communication with customer:  Two letter lowercase language code followed by dash and then by the uppercase two letter country code,   e.g. nl-NL, nl-BE, en-US  Full list: https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx
     *
     * @return $this
     */
    public function setCultureCode($culture_code)
    {
        if ((mb_strlen($culture_code) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture_code when calling InvoiceRequestV2Model., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture_code when calling InvoiceRequestV2Model., must be bigger than or equal to 0.');
        }

        $this->container['culture_code'] = $culture_code;

        return $this;
    }

    /**
     * Gets invoice_pdf_data
     *
     * @return \PayIn3\Client\Model\InvoicePdfDataModel
     */
    public function getInvoicePdfData()
    {
        return $this->container['invoice_pdf_data'];
    }

    /**
     * Sets invoice_pdf_data
     *
     * @param \PayIn3\Client\Model\InvoicePdfDataModel $invoice_pdf_data Required if submit type=INCLUDED_DATA
     *
     * @return $this
     */
    public function setInvoicePdfData($invoice_pdf_data)
    {
        $this->container['invoice_pdf_data'] = $invoice_pdf_data;

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


