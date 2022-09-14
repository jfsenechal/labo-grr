<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrAreaPeriodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrAreaPeriodes>
 *
 * @method GrrAreaPeriodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrAreaPeriodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrAreaPeriodes[]    findAll()
 * @method GrrAreaPeriodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrAreaPeriodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrAreaPeriodes::class);
    }

    public function add(GrrAreaPeriodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrAreaPeriodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrAreaPeriodes[] Returns an array of GrrAreaPeriodes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GrrAreaPeriodes
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
