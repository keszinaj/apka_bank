<?php

namespace App\Repository;

use App\Entity\PrzelewEncja;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PrzelewEncja|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrzelewEncja|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrzelewEncja[]    findAll()
 * @method PrzelewEncja[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrzelewEncjaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PrzelewEncja::class);
    }

    // /**
    //  * @return PrzelewEncja[] Returns an array of PrzelewEncja objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PrzelewEncja
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
