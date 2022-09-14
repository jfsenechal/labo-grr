<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJSiteArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJSiteArea>
 *
 * @method GrrJSiteArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJSiteArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJSiteArea[]    findAll()
 * @method GrrJSiteArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJSiteAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJSiteArea::class);
    }

    public function add(GrrJSiteArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJSiteArea $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJSiteArea[] Returns an array of GrrJSiteArea objects
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

//    public function findOneBySomeField($value): ?GrrJSiteArea
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
