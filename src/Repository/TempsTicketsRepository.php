<?php

namespace App\Repository;

use App\Entity\TempsTickets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TempsTickets|null find($id, $lockMode = null, $lockVersion = null)
 * @method TempsTickets|null findOneBy(array $criteria, array $orderBy = null)
 * @method TempsTickets[]    findAll()
 * @method TempsTickets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempsTicketsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TempsTickets::class);
    }

    // /**
    //  * @return TempsTickets[] Returns an array of TempsTickets objects
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
    public function findOneBySomeField($value): ?TempsTickets
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
