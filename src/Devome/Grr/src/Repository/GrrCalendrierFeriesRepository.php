<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrCalendrierFeries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrCalendrierFeries>
 *
 * @method GrrCalendrierFeries|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrCalendrierFeries|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrCalendrierFeries[]    findAll()
 * @method GrrCalendrierFeries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrCalendrierFeriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrCalendrierFeries::class);
    }

    public function add(GrrCalendrierFeries $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrCalendrierFeries $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrCalendrierFeries[] Returns an array of GrrCalendrierFeries objects
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

//    public function findOneBySomeField($value): ?GrrCalendrierFeries
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
