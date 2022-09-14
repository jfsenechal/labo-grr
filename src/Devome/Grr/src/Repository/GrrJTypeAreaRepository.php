<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJTypeArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJTypeArea>
 *
 * @method GrrJTypeArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJTypeArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJTypeArea[]    findAll()
 * @method GrrJTypeArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJTypeAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJTypeArea::class);
    }

    public function add(GrrJTypeArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJTypeArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJTypeArea[] Returns an array of GrrJTypeArea objects
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

//    public function findOneBySomeField($value): ?GrrJTypeArea
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
