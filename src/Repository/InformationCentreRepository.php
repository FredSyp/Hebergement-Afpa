<?php

namespace App\Repository;

use App\Entity\InformationCentre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformationCentre>
 *
 * @method InformationCentre|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationCentre|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationCentre[]    findAll()
 * @method InformationCentre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationCentreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationCentre::class);
    }

//    /**
//     * @return InformationCentre[] Returns an array of InformationCentre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InformationCentre
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
