<?php

namespace App\Repository;

use App\Entity\Bibliot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bibliot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bibliot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bibliot[]    findAll()
 * @method Bibliot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BibliotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bibliot::class);
    }

    // /**
    //  * @return Bibliot[] Returns an array of Bibliot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bibliot
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
