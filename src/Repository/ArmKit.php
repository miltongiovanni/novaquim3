<?php

namespace App\Repository;

use App\Entity\DetOrdProdMp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetOrdProdMp>
 *
 * @method DetOrdProdMp|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetOrdProdMp|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetOrdProdMp[]    findAll()
 * @method DetOrdProdMp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmKit extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetOrdProdMp::class);
    }

    public function save(DetOrdProdMp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetOrdProdMp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetOrdProdMp[] Returns an array of DetOrdProdMp objects
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

//    public function findOneBySomeField($value): ?DetOrdProdMp
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
