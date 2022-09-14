<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJUseradminArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJUseradminArea>
 *
 * @method GrrJUseradminArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJUseradminArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJUseradminArea[]    findAll()
 * @method GrrJUseradminArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJUseradminAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJUseradminArea::class);
    }

    public function add(GrrJUseradminArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJUseradminArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJUseradminArea[] Returns an array of GrrJUseradminArea objects
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

//    public function findOneBySomeField($value): ?GrrJUseradminArea
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
