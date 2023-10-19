<?php

namespace App\Repository;

use App\Entity\ImageIncident;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageIncident>
 *
 * @method ImageIncident|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageIncident|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageIncident[]    findAll()
 * @method ImageIncident[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageIncidentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageIncident::class);
    }

//    /**
//     * @return ImageIncident[] Returns an array of ImageIncident objects
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

//    public function findOneBySomeField($value): ?ImageIncident
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
