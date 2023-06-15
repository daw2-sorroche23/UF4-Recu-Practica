<?php

namespace App\Repository;

use App\Entity\Userszeussorroche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Userszeussorroche>
 *
 * @method Userszeussorroche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userszeussorroche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userszeussorroche[]    findAll()
 * @method Userszeussorroche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserszeussorrocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userszeussorroche::class);
    }

    public function save(Userszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Userszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Userszeussorroche[] Returns an array of Userszeussorroche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Userszeussorroche
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
