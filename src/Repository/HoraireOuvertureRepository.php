<?php

namespace App\Repository;

use App\Entity\HoraireOuverture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HoraireOuverture>
 *
 * @method HoraireOuverture|null find($id, $lockMode = null, $lockVersion = null)
 * @method HoraireOuverture|null findOneBy(array $criteria, array $orderBy = null)
 * @method HoraireOuverture[]    findAll()
 * @method HoraireOuverture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoraireOuvertureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HoraireOuverture::class);
    }

//    /**
//     * @return HoraireOuverture[] Returns an array of HoraireOuverture objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HoraireOuverture
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
