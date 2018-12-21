<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateursRepository")
 */
class Utilisateurs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="integer")
     */
    private $mental;

    /**
     * @ORM\Column(type="integer")
     */
    private $savoir;

    /**
     * @ORM\Column(type="integer")
     */
    private $physique;

    /**
     * @ORM\Column(type="integer")
     */
    private $Sociabilite;

    /**
     * @ORM\Column(type="integer")
     */
    private $moyenne;

    /**
     * @ORM\Column(type="integer")
     */
    private $comportement;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getMental(): ?int
    {
        return $this->mental;
    }

    public function setMental(int $mental): self
    {
        $this->mental = $mental;

        return $this;
    }

    public function getSavoir(): ?int
    {
        return $this->savoir;
    }

    public function setSavoir(int $savoir): self
    {
        $this->savoir = $savoir;

        return $this;
    }

    public function getPhysique(): ?int
    {
        return $this->physique;
    }

    public function setPhysique(int $physique): self
    {
        $this->physique = $physique;

        return $this;
    }

    public function getSociabilite(): ?int
    {
        return $this->Sociabilite;
    }

    public function setSociabilite(int $Sociabilite): self
    {
        $this->Sociabilite = $Sociabilite;

        return $this;
    }

    public function getMoyenne(): ?int
    {
        return $this->moyenne;
    }

    public function setMoyenne(int $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function getComportement(): ?int
    {
        return $this->comportement;
    }

    public function setComportement(int $comportement): self
    {
        $this->comportement = $comportement;

        return $this;
    }
}
