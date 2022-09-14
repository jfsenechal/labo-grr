<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJUserArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJUserArea>
 *
 * @method GrrJUserArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJUserArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJUserArea[]    findAll()
 * @method GrrJUserArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJUserAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJUserArea::class);
    }

    public function add(GrrJUserArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJUserArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJUserArea[] Returns an array of GrrJUserArea objects
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

//    public function findOneBySomeField($value): ?GrrJUserArea
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
