<?php

namespace App\Repository;

use App\Entity\Addresseszeussorroche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Addresseszeussorroche>
 *
 * @method Addresseszeussorroche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Addresseszeussorroche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Addresseszeussorroche[]    findAll()
 * @method Addresseszeussorroche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddresseszeussorrocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Addresseszeussorroche::class);
    }

    public function save(Addresseszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Addresseszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Addresseszeussorroche[] Returns an array of Addresseszeussorroche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Addresseszeussorroche
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
