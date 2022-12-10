<?php

namespace App\Repository;

use App\Entity\FacturaRemisiones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FacturaRemisiones>
 *
 * @method FacturaRemisiones|null find($id, $lockMode = null, $lockVersion = null)
 * @method FacturaRemisiones|null findOneBy(array $criteria, array $orderBy = null)
 * @method FacturaRemisiones[]    findAll()
 * @method FacturaRemisiones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacturaRemisionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FacturaRemisiones::class);
    }

    public function save(FacturaRemisiones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FacturaRemisiones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FacturaRemisiones[] Returns an array of FacturaRemisiones objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FacturaRemisiones
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
