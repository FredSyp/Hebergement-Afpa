<?php

namespace App\Repository;

use App\Entity\RolePersonne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RolePersonne>
 *
 * @method RolePersonne|null find($id, $lockMode = null, $lockVersion = null)
 * @method RolePersonne|null findOneBy(array $criteria, array $orderBy = null)
 * @method RolePersonne[]    findAll()
 * @method RolePersonne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RolePersonneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RolePersonne::class);
    }

//    /**
//     * @return RolePersonne[] Returns an array of RolePersonne objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RolePersonne
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
