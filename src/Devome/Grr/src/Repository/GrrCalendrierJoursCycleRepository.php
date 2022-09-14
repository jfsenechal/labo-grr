<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrCalendrierJoursCycle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrCalendrierJoursCycle>
 *
 * @method GrrCalendrierJoursCycle|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrCalendrierJoursCycle|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrCalendrierJoursCycle[]    findAll()
 * @method GrrCalendrierJoursCycle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrCalendrierJoursCycleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrCalendrierJoursCycle::class);
    }

    public function add(GrrCalendrierJoursCycle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrCalendrierJoursCycle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrCalendrierJoursCycle[] Returns an array of GrrCalendrierJoursCycle objects
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

//    public function findOneBySomeField($value): ?GrrCalendrierJoursCycle
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
