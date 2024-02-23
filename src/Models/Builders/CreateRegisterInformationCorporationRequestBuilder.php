<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateRegisterInformationAddressRequest;
use PagarmeApiSDKLib\Models\CreateRegisterInformationCorporationRequest;

/**
 * Builder for model CreateRegisterInformationCorporationRequest
 *
 * @see CreateRegisterInformationCorporationRequest
 */
class CreateRegisterInformationCorporationRequestBuilder
{
    /**
     * @var CreateRegisterInformationCorporationRequest
     */
    private $instance;

    private function __construct(CreateRegisterInformationCorporationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create register information corporation request Builder object.
     */
    public static function init(
        string $email,
        string $document,
        string $type,
        array $phoneNumbers,
        string $companyName,
        string $tradingName,
        int $annualRevenue,
        array $managingPartners,
        CreateRegisterInformationAddressRequest $mainAddress
    ): self {
        return new self(new CreateRegisterInformationCorporationRequest(
            $email,
            $document,
            $type,
            $phoneNumbers,
            $companyName,
            $tradingName,
            $annualRevenue,
            $managingPartners,
            $mainAddress
        ));
    }

    /**
     * Sets site url field.
     */
    public function siteUrl(?string $value): self
    {
        $this->instance->setSiteUrl($value);
        return $this;
    }

    /**
     * Unsets site url field.
     */
    public function unsetSiteUrl(): self
    {
        $this->instance->unsetSiteUrl();
        return $this;
    }

    /**
     * Sets corporation type field.
     */
    public function corporationType(?string $value): self
    {
        $this->instance->setCorporationType($value);
        return $this;
    }

    /**
     * Unsets corporation type field.
     */
    public function unsetCorporationType(): self
    {
        $this->instance->unsetCorporationType();
        return $this;
    }

    /**
     * Sets founding date field.
     */
    public function foundingDate(?string $value): self
    {
        $this->instance->setFoundingDate($value);
        return $this;
    }

    /**
     * Unsets founding date field.
     */
    public function unsetFoundingDate(): self
    {
        $this->instance->unsetFoundingDate();
        return $this;
    }

    /**
     * Sets cnae field.
     */
    public function cnae(?string $value): self
    {
        $this->instance->setCnae($value);
        return $this;
    }

    /**
     * Unsets cnae field.
     */
    public function unsetCnae(): self
    {
        $this->instance->unsetCnae();
        return $this;
    }

    /**
     * Initializes a new create register information corporation request object.
     */
    public function build(): CreateRegisterInformationCorporationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}