<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetRetryTransactionInformationResponse;

/**
 * Builder for model GetRetryTransactionInformationResponse
 *
 * @see GetRetryTransactionInformationResponse
 */
class GetRetryTransactionInformationResponseBuilder
{
    /**
     * @var GetRetryTransactionInformationResponse
     */
    private $instance;

    private function __construct(GetRetryTransactionInformationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get retry transaction information response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetRetryTransactionInformationResponse());
    }

    /**
     * Sets brand failure return code field.
     */
    public function brandFailureReturnCode(?string $value): self
    {
        $this->instance->setBrandFailureReturnCode($value);
        return $this;
    }

    /**
     * Sets transaction limit field.
     */
    public function transactionLimit(?int $value): self
    {
        $this->instance->setTransactionLimit($value);
        return $this;
    }

    /**
     * Sets transaction date limit field.
     */
    public function transactionDateLimit(?\DateTime $value): self
    {
        $this->instance->setTransactionDateLimit($value);
        return $this;
    }

    /**
     * Initializes a new get retry transaction information response object.
     */
    public function build(): GetRetryTransactionInformationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}