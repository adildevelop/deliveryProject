<?php

namespace App\Entity;

use App\Repository\DeliveryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeliveryRepository::class)]
class Delivery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $receiverAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $senderAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $deliveryType = null;

    #[ORM\Column(length: 255)]
    private ?string $receiverName = null;

    #[ORM\Column(length: 255)]
    private ?string $senderName = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReceiverAddress(): ?string
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress(string $receiverAddress): static
    {
        $this->receiverAddress = $receiverAddress;

        return $this;
    }

    public function getSenderAddress(): ?string
    {
        return $this->senderAddress;
    }

    public function setSenderAddress(string $senderAddress): static
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(string $deliveryType): static
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    public function setReceiverName(string $receiverName): static
    {
        $this->receiverName = $receiverName;

        return $this;
    }

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): static
    {
        $this->senderName = $senderName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }
}
