<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneCommandeRepository::class)]
class LigneCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $quantite;

    #[ORM\Column(type: 'string', length: 255)]
    private $total;

    #[ORM\OneToMany(mappedBy: 'ligneCommande', targetEntity: Produit::class)]
    private $list;

    public function __construct()
    {
        $this->list = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getList(): Collection
    {
        return $this->list;
    }

    public function addList(Produit $list): self
    {
        if (!$this->list->contains($list)) {
            $this->list[] = $list;
            $list->setLigneCommande($this);
        }

        return $this;
    }

    public function removeList(Produit $list): self
    {
        if ($this->list->removeElement($list)) {
            // set the owning side to null (unless already changed)
            if ($list->getLigneCommande() === $this) {
                $list->setLigneCommande(null);
            }
        }

        return $this;
    }
}
