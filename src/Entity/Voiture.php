<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Matricule;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Marque;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Couleur;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Carburant;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrPlace;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $Disponibilité;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $datemiseencirculation;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idagence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->Couleur;
    }

    public function setCouleur(?string $Couleur): self
    {
        $this->Couleur = $Couleur;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->Carburant;
    }

    public function setCarburant(?string $Carburant): self
    {
        $this->Carburant = $Carburant;

        return $this;
    }

    public function getNbrPlace(): ?int
    {
        return $this->NbrPlace;
    }

    public function setNbrPlace(int $NbrPlace): self
    {
        $this->NbrPlace = $NbrPlace;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDisponibilité(): ?string
    {
        return $this->Disponibilité;
    }

    public function setDisponibilité(string $Disponibilité): self
    {
        $this->Disponibilité = $Disponibilité;

        return $this;
    }

    public function getDatemiseencirculation(): ?string
    {
        return $this->datemiseencirculation;
    }

    public function setDatemiseencirculation(string $datemiseencirculation): self
    {
        $this->datemiseencirculation = $datemiseencirculation;

        return $this;
    }

    public function getIdagence(): ?Agence
    {
        return $this->idagence;
    }

    public function setIdagence(?Agence $idagence): self
    {
        $this->idagence = $idagence;

        return $this;
    }
}
