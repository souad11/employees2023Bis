<?php

namespace App\Repository;

use App\Entity\DeptManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeptManager>
 *
 * @method DeptManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeptManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeptManager[]    findAll()
 * @method DeptManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeptManagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeptManager::class);
    }

//    /**
//     * @return DeptManager[] Returns an array of DeptManager objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DeptManager
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
