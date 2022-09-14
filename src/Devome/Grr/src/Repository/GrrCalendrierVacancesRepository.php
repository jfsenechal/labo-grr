<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrCalendrierVacances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrCalendrierVacances>
 *
 * @method GrrCalendrierVacances|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrCalendrierVacances|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrCalendrierVacances[]    findAll()
 * @method GrrCalendrierVacances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrCalendrierVacancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrCalendrierVacances::class);
    }

    public function add(GrrCalendrierVacances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrCalendrierVacances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrCalendrierVacances[] Returns an array of GrrCalendrierVacances objects
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

//    public function findOneBySomeField($value): ?GrrCalendrierVacances
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
