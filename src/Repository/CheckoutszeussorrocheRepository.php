<?php

namespace App\Repository;

use App\Entity\Checkoutszeussorroche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Checkoutszeussorroche>
 *
 * @method Checkoutszeussorroche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Checkoutszeussorroche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Checkoutszeussorroche[]    findAll()
 * @method Checkoutszeussorroche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CheckoutszeussorrocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Checkoutszeussorroche::class);
    }

    public function save(Checkoutszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Checkoutszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Checkoutszeussorroche[] Returns an array of Checkoutszeussorroche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Checkoutszeussorroche
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
