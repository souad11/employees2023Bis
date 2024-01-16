<?php

namespace App\Entity;

use App\Repository\EmpTitleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table('emp_title')]
#[ORM\Entity(repositoryClass: EmpTitleRepository::class)]
class EmpTitle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'empTitles')]
    #[ORM\JoinColumn(name: 'emp_no', referencedColumnName: 'emp_no', nullable: false)]
    private ?Employee $employee = null;

    #[ORM\ManyToOne(inversedBy: 'empTitles')]
    #[ORM\JoinColumn(name: 'title_id', referencedColumnName: 'id', nullable: false)]
    private ?Title $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fromDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $toDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): static
    {
        $this->employee = $employee;

        return $this;
    }

    public function getTitle(): ?Title
    {
        return $this->title;
    }

    public function setTitle(?Title $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getFromDate(): ?\DateTimeInterface
    {
        return $this->fromDate;
    }

    public function setFromDate(\DateTimeInterface $fromDate): static
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    public function getToDate(): ?\DateTimeInterface
    {
        return $this->toDate;
    }

    public function setToDate(\DateTimeInterface $toDate): static
    {
        $this->toDate = $toDate;

        return $this;
    }
}
