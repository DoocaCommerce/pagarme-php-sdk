<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetBillingAddressResponse;

/**
 * Builder for model GetBillingAddressResponse
 *
 * @see GetBillingAddressResponse
 */
class GetBillingAddressResponseBuilder
{
    /**
     * @var GetBillingAddressResponse
     */
    private $instance;

    private function __construct(GetBillingAddressResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get billing address response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetBillingAddressResponse());
    }

    /**
     * Sets street field.
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Unsets street field.
     */
    public function unsetStreet(): self
    {
        $this->instance->unsetStreet();
        return $this;
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Unsets number field.
     */
    public function unsetNumber(): self
    {
        $this->instance->unsetNumber();
        return $this;
    }

    /**
     * Sets zip code field.
     */
    public function zipCode(?string $value): self
    {
        $this->instance->setZipCode($value);
        return $this;
    }

    /**
     * Unsets zip code field.
     */
    public function unsetZipCode(): self
    {
        $this->instance->unsetZipCode();
        return $this;
    }

    /**
     * Sets neighborhood field.
     */
    public function neighborhood(?string $value): self
    {
        $this->instance->setNeighborhood($value);
        return $this;
    }

    /**
     * Unsets neighborhood field.
     */
    public function unsetNeighborhood(): self
    {
        $this->instance->unsetNeighborhood();
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Unsets state field.
     */
    public function unsetState(): self
    {
        $this->instance->unsetState();
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Unsets country field.
     */
    public function unsetCountry(): self
    {
        $this->instance->unsetCountry();
        return $this;
    }

    /**
     * Sets complement field.
     */
    public function complement(?string $value): self
    {
        $this->instance->setComplement($value);
        return $this;
    }

    /**
     * Unsets complement field.
     */
    public function unsetComplement(): self
    {
        $this->instance->unsetComplement();
        return $this;
    }

    /**
     * Sets line 1 field.
     */
    public function line1(?string $value): self
    {
        $this->instance->setLine1($value);
        return $this;
    }

    /**
     * Unsets line 1 field.
     */
    public function unsetLine1(): self
    {
        $this->instance->unsetLine1();
        return $this;
    }

    /**
     * Sets line 2 field.
     */
    public function line2(?string $value): self
    {
        $this->instance->setLine2($value);
        return $this;
    }

    /**
     * Unsets line 2 field.
     */
    public function unsetLine2(): self
    {
        $this->instance->unsetLine2();
        return $this;
    }

    /**
     * Initializes a new get billing address response object.
     */
    public function build(): GetBillingAddressResponse
    {
        return CoreHelper::clone($this->instance);
    }
}