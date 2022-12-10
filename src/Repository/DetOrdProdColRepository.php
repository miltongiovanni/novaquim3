<?php

namespace App\Repository;

use App\Entity\DetOrdProdCol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetOrdProdCol>
 *
 * @method DetOrdProdCol|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetOrdProdCol|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetOrdProdCol[]    findAll()
 * @method DetOrdProdCol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetOrdProdColRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetOrdProdCol::class);
    }

    public function save(DetOrdProdCol $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetOrdProdCol $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetOrdProdCol[] Returns an array of DetOrdProdCol objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DetOrdProdCol
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
