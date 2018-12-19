<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Ticket;
use App\Entity\Tracker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $project  = new Projet();
        $project->setTitre('Projet fixtures')
        ->setDescription('Ceci est le projet chargé à l\'aide des fixtures')
        ->setEnCours(true);
        $manager->persist($project);

        $trackerEnCours = new Tracker();
        $trackerEnCours->setLibelle('En cours');
        $manager->persist($trackerEnCours);

        $trackerNouveau = new Tracker();
        $trackerNouveau->setLibelle('Nouveau');
        $manager->persist($trackerNouveau);

        $trackerEnAttente = new Tracker();
        $trackerEnAttente->setLibelle('En attente');
        $manager->persist($trackerEnAttente);

        $trackerFerme = new Tracker();
        $trackerFerme->setLibelle('Fermé');
        $manager->persist($trackerFerme);

        $ticket = new Ticket();
        $ticket->setName('ticket fixtures')
        ->setDescription('Ticket lié au projet fixtures')
        ->setIdProjet($project->getId())
        ->setTracker($trackerNouveau->getId());
        $manager->persist($ticket);

        $manager->flush();
    }
}
