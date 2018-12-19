<?php

namespace App\Repository;

use App\Entity\TempsTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TempsTicket|null find($id, $lockMode = null, $lockVersion = null)
 * @method TempsTicket|null findOneBy(array $criteria, array $orderBy = null)
 * @method TempsTicket[]    findAll()
 * @method TempsTicket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempsTicketRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TempsTicket::class);
    }

    // /**
    //  * @return TempsTicket[] Returns an array of TempsTicket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TempsTicket
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
