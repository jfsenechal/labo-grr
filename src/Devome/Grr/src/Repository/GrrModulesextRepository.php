<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrModulesext;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrModulesext>
 *
 * @method GrrModulesext|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrModulesext|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrModulesext[]    findAll()
 * @method GrrModulesext[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrModulesextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrModulesext::class);
    }

    public function add(GrrModulesext $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrModulesext $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrModulesext[] Returns an array of GrrModulesext objects
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

//    public function findOneBySomeField($value): ?GrrModulesext
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
