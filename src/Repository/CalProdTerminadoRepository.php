<?php

namespace App\Repository;

use App\Entity\CalProdTerminado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CalProdTerminado>
 *
 * @method CalProdTerminado|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalProdTerminado|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalProdTerminado[]    findAll()
 * @method CalProdTerminado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalProdTerminadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalProdTerminado::class);
    }

    public function save(CalProdTerminado $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CalProdTerminado $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CalProdTerminado[] Returns an array of CalProdTerminado objects
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

//    public function findOneBySomeField($value): ?CalProdTerminado
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
