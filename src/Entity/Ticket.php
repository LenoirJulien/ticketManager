<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projet", inversedBy="ticket")
     */
    private $id_projet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tracker", inversedBy="ticket")
     */
    private $tracker;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TempsTicket", mappedBy="idTicket")
     */
    private $ticket;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(String $description)
    {
        $this->description = $description;
        return $this;
    }

    public function getIDProjet()
    {
        return $this->id_projet;
    }

    public function setIdProjet($idProjet)
    {
        $this->id_projet = $idProjet;
        return $this;
    }

    public function getTracker(){
        return $this->tracker;
    }

    public function setTracker($idTracker)
    {
        $this->tracker = $idTracker;
        return $this;
    }

    /**
     * @return Collection|TempsTickets[]
     */
    public function getTicket(): Collection
    {
        return $this->ticket;
    }

    public function addTicket(TempsTickets $ticket): self
    {
        if (!$this->ticket->contains($ticket)) {
            $this->ticket[] = $ticket;
            $ticket->setTempsTicket($this);
        }

        return $this;
    }

    public function removeTicket(TempsTickets $ticket): self
    {
        if ($this->ticket->contains($ticket)) {
            $this->ticket->removeElement($ticket);
            // set the owning side to null (unless already changed)
            if ($ticket->getTempsTicket() === $this) {
                $ticket->setTempsTicket(null);
            }
        }

        return $this;
    }
}
