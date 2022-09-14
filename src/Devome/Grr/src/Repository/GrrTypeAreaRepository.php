<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrTypeArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrTypeArea>
 *
 * @method GrrTypeArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrTypeArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrTypeArea[]    findAll()
 * @method GrrTypeArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrTypeAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrTypeArea::class);
    }

    public function add(GrrTypeArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrTypeArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrTypeArea[] Returns an array of GrrTypeArea objects
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

//    public function findOneBySomeField($value): ?GrrTypeArea
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
