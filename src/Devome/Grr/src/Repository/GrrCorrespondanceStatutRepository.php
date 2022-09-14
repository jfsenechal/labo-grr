<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrCorrespondanceStatut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrCorrespondanceStatut>
 *
 * @method GrrCorrespondanceStatut|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrCorrespondanceStatut|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrCorrespondanceStatut[]    findAll()
 * @method GrrCorrespondanceStatut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrCorrespondanceStatutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrCorrespondanceStatut::class);
    }

    public function add(GrrCorrespondanceStatut $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrCorrespondanceStatut $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrCorrespondanceStatut[] Returns an array of GrrCorrespondanceStatut objects
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

//    public function findOneBySomeField($value): ?GrrCorrespondanceStatut
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
