<?php

namespace App\Entity;

use App\Repository\BibliotRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BibliotRepository::class)
 */
class Bibliot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivres(): ?string
    {
        return $this->livres;
    }

    public function setLivres(string $livres): self
    {
        $this->livres = $livres;

        return $this;
    }

    public function getAuteurs(): ?string
    {
        return $this->auteurs;
    }

    public function setAuteurs(string $auteurs): self
    {
        $this->auteurs = $auteurs;

        return $this;
    }
}
