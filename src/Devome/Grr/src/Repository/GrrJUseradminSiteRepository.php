<?php

namespace Devome\Grr\Repository;

use Devome\Grr\Entity\GrrJUseradminSite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrrJUseradminSite>
 *
 * @method GrrJUseradminSite|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrrJUseradminSite|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrrJUseradminSite[]    findAll()
 * @method GrrJUseradminSite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrrJUseradminSiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrrJUseradminSite::class);
    }

    public function add(GrrJUseradminSite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GrrJUseradminSite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return GrrJUseradminSite[] Returns an array of GrrJUseradminSite objects
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

//    public function findOneBySomeField($value): ?GrrJUseradminSite
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
