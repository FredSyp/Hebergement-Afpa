<?php

namespace App\Repository;

use App\Entity\TypeEtatLieux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeEtatLieux>
 *
 * @method TypeEtatLieux|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeEtatLieux|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeEtatLieux[]    findAll()
 * @method TypeEtatLieux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeEtatDesLieuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEtatLieux::class);
    }

//    /**
//     * @return TypeEtatLieux[] Returns an array of TypeEtatLieux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeEtatLieux
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
