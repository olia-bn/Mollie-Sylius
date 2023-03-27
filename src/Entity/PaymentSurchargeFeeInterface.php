<?php


declare(strict_types=1);

namespace SyliusMolliePlugin\Entity;

interface PaymentSurchargeFeeInterface
{
    public function getId(): ?int;

    public function getType(): ?string;

    public function setType(?string $type): void;

    public function getFixedAmount(): ?float;

    public function setFixedAmount(?float $fixedAmount): void;

    public function getPercentage(): ?float;

    public function setPercentage(?float $percentage): void;

    public function getSurchargeLimit(): ?float;

    public function setSurchargeLimit(?float $surchargeLimit): void;

    public function getMollieGatewayConfig(): ?MollieGatewayConfigInterface;

    public function setMollieGatewayConfig(?MollieGatewayConfigInterface $mollieGatewayConfig): void;
}
