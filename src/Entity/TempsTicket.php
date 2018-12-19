<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TempsTicketsRepository")
 */
class TempsTicket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * ORM\Column(type="integer")
     */
    private $temps;

    /**
     * ORM\Column(type="Date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ticket", inversedBy="ticket")
     */
    private $idTicket;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemps()
    {
        return $this->temps;
    }

    public function setTemps(int $temps)
    {
        $this->temps = $temps;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(Date $date)
    {
        $this->date = $date;
        return $this;
    }

    public function getIDTicket()
    {
        return $this->idTicket;
    }

    public function setIdTicket(?Ticket $idTicket): self
    {
        $this->idTicket = $idTicket;

        return $this;
    }
}
