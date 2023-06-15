<?php

namespace App\Repository;

use App\Entity\Bookszeussorroche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bookszeussorroche>
 *
 * @method Bookszeussorroche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bookszeussorroche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bookszeussorroche[]    findAll()
 * @method Bookszeussorroche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookszeussorrocheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bookszeussorroche::class);
    }

    public function save(Bookszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Bookszeussorroche $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Bookszeussorroche[] Returns an array of Bookszeussorroche objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bookszeussorroche
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
