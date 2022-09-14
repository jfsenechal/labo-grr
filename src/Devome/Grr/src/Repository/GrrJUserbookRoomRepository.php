<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJUserbookRoom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJUserbookRoom>
 *
 * @method GrrJUserbookRoom|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJUserbookRoom|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJUserbookRoom[]    findAll()
 * @method GrrJUserbookRoom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJUserbookRoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJUserbookRoom::class);
    }

    public function add(GrrJUserbookRoom $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJUserbookRoom $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJUserbookRoom[] Returns an array of GrrJUserbookRoom objects
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

//    public function findOneBySomeField($value): ?GrrJUserbookRoom
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
