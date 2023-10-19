<?php

namespace App\Repository;

use App\Entity\TypeIncident;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeIncident>
 *
 * @method TypeIncident|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeIncident|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeIncident[]    findAll()
 * @method TypeIncident[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeIncidentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeIncident::class);
    }

//    /**
//     * @return TypeIncident[] Returns an array of TypeIncident objects
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

//    public function findOneBySomeField($value): ?TypeIncident
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
