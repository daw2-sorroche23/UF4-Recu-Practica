<?php

namespace App\Repository;

use App\Entity\Reviewszeussorroche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reviewszeussorroche>
 *
 * @method Reviewszeussorroche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reviewszeussorroche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reviewszeussorroche[]    findAll()
 * @method Reviewszeussorroche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewszeussorrocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reviewszeussorroche::class);
    }

    public function save(Reviewszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reviewszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Reviewszeussorroche[] Returns an array of Reviewszeussorroche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reviewszeussorroche
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
