<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrEntryModerate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrEntryModerate>
 *
 * @method GrrEntryModerate|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrEntryModerate|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrEntryModerate[]    findAll()
 * @method GrrEntryModerate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrEntryModerateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrEntryModerate::class);
    }

    public function add(GrrEntryModerate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrEntryModerate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrEntryModerate[] Returns an array of GrrEntryModerate objects
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

//    public function findOneBySomeField($value): ?GrrEntryModerate
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
