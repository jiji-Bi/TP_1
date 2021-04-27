<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $tel_agence;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $adresseville;

    /**
     * @ORM\OneToMany(targetEntity=Voiture::class, mappedBy="idagence")
     */
    private $voitures;

    public function __construct()
    {
        $this->voitures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTelAgence(): ?string
    {
        return $this->tel_agence;
    }

    public function setTelAgence(?string $tel_agence): self
    {
        $this->tel_agence = $tel_agence;

        return $this;
    }

    public function getAdresseville(): ?string
    {
        return $this->adresseville;
    }

    public function setAdresseville(?string $adresseville): self
    {
        $this->adresseville = $adresseville;

        return $this;
    }

    /**
     * @return Collection|Voiture[]
     */
    public function getVoitures(): Collection
    {
        return $this->voitures;
    }

    public function addVoiture(Voiture $voiture): self
    {
        if (!$this->voitures->contains($voiture)) {
            $this->voitures[] = $voiture;
            $voiture->setIdagence($this);
        }

        return $this;
    }

    public function removeVoiture(Voiture $voiture): self
    {
        if ($this->voitures->removeElement($voiture)) {
            // set the owning side to null (unless already changed)
            if ($voiture->getIdagence() === $this) {
                $voiture->setIdagence(null);
            }
        }

        return $this;
    }
}
