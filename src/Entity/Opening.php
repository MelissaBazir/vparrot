<?php

namespace App\Entity;

use App\Repository\OpeningRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: OpeningRepository::class)]
class Opening
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $day = null;

    #[ORM\Column]
    #[Assert\GreaterThan(0)]
    private ?int $dayOrder = null;

    #[ORM\Column(length: 10)]
    private ?string $am_opening = null;

    #[ORM\Column(length: 10)]
    private ?string $am_closing = null;

    #[ORM\Column(length: 10)]
    private ?string $pm_opening = null;

    #[ORM\Column(length: 10)]
    private ?string $pm_closing = null;

    #[ORM\ManyToOne(inversedBy: 'openings')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getDayOrder(): ?int
    {
        return $this->dayOrder;
    }

    public function setDayOrder(int $dayOrder): static
    {
        $this->dayOrder = $dayOrder;

        return $this;
    }

    public function getAmOpening(): ?string
    {
        return $this->am_opening;
    }

    public function setAmOpening(string $am_opening): static
    {
        $this->am_opening = $am_opening;

        return $this;
    }

    public function getAmClosing(): ?string
    {
        return $this->am_closing;
    }

    public function setAmClosing(string $am_closing): static
    {
        $this->am_closing = $am_closing;

        return $this;
    }

    public function getPmOpening(): ?string
    {
        return $this->pm_opening;
    }

    public function setPmOpening(string $pm_opening): static
    {
        $this->pm_opening = $pm_opening;

        return $this;
    }

    public function getPmClosing(): ?string
    {
        return $this->pm_closing;
    }

    public function setPmClosing(string $pm_closing): static
    {
        $this->pm_closing = $pm_closing;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): static
    {
        $this->company = $company;

        return $this;
    }
}