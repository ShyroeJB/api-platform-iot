<?php

namespace App\Repository;

use App\Entity\Bowl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Bowl|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bowl|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bowl[]    findAll()
 * @method Bowl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BowlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bowl::class);
    }

    // /**
    //  * @return Bowl[] Returns an array of Bowl objects
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
    public function findOneBySomeField($value): ?Bowl
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
