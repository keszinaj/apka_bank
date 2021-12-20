<?php

namespace App\Entity;

use App\Repository\PrzelewEncjaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=PrzelewEncjaRepository::class)
 */
class PrzelewEncja
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, )
     * @Assert\Regex(
     *     pattern="/[1-9]{2}\s1234 9876\s([1-9]{4}\s?){4}/",
     *     match=false,
     *     message="Zly numer konta."
     * )
     */
    private $konto;
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $imie;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nazwisko;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $ulica;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $miejscowosc;

    /**
     * @ORM\Column(type="string", length=30, )
     * @Assert\Regex(
     *     pattern="/[0-9]{2}-[0-9]{3}/",
     *     match=false,
     *     message="Zly kod pocztowy."
     * )
     */
    private $kodpocztowy;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $tytul;

    /**
     * @ORM\Column(type="date")
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getKonto(): ?string
    {
        return $this->koto;
    }

    public function setKonto(string $konto): self
    {
        $this->konto = $konto;

        return $this;
    }
    public function getImie(): ?string
    {
        return $this->imie;
    }

    public function setImie(string $imie): self
    {
        $this->imie = $imie;

        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->nazwisko;
    }

    public function setNazwisko(string $nazwisko): self
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    public function getUlica(): ?string
    {
        return $this->ulica;
    }

    public function setUlica(string $ulica): self
    {
        $this->ulica = $ulica;

        return $this;
    }

    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }

    public function setMiejscowosc(string $miejscowosc): self
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    public function getKodpocztowy(): ?string
    {
        return $this->kodpocztowy;
    }

    public function setKodpocztowy(string $kodpocztowy): self
    {
        $this->kodpocztowy = $kodpocztowy;

        return $this;
    }

    public function getTytul(): ?string
    {
        return $this->tytul;
    }

    public function setTytul(string $tytul): self
    {
        $this->tytul = $tytul;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }
}
