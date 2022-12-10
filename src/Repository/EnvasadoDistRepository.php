<?php

namespace App\Repository;

use App\Entity\EnvasadoDist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EnvasadoDist>
 *
 * @method EnvasadoDist|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnvasadoDist|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnvasadoDist[]    findAll()
 * @method EnvasadoDist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnvasadoDistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnvasadoDist::class);
    }

    public function save(EnvasadoDist $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EnvasadoDist $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EnvasadoDist[] Returns an array of EnvasadoDist objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EnvasadoDist
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
