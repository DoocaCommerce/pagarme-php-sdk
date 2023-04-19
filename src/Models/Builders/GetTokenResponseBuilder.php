<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetCardTokenResponse;
use PagarmeApiSDKLib\Models\GetTokenResponse;

/**
 * Builder for model GetTokenResponse
 *
 * @see GetTokenResponse
 */
class GetTokenResponseBuilder
{
    /**
     * @var GetTokenResponse
     */
    private $instance;

    private function __construct(GetTokenResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get token response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetTokenResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
        return $this;
    }

    /**
     * Sets card field.
     */
    public function card(?GetCardTokenResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Unsets card field.
     */
    public function unsetCard(): self
    {
        $this->instance->unsetCard();
        return $this;
    }

    /**
     * Initializes a new get token response object.
     */
    public function build(): GetTokenResponse
    {
        return CoreHelper::clone($this->instance);
    }
}