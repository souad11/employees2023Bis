<?php

namespace App\Repository;

use App\Entity\DeptEmp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeptEmp>
 *
 * @method DeptEmp|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeptEmp|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeptEmp[]    findAll()
 * @method DeptEmp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeptEmpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeptEmp::class);
    }

//    /**
//     * @return DeptEmp[] Returns an array of DeptEmp objects
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

//    public function findOneBySomeField($value): ?DeptEmp
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
