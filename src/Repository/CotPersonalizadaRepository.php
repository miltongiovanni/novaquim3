<?php

namespace App\Repository;

use App\Entity\CotPersonalizada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CotPersonalizada>
 *
 * @method CotPersonalizada|null find($id, $lockMode = null, $lockVersion = null)
 * @method CotPersonalizada|null findOneBy(array $criteria, array $orderBy = null)
 * @method CotPersonalizada[]    findAll()
 * @method CotPersonalizada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CotPersonalizadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CotPersonalizada::class);
    }

    public function save(CotPersonalizada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CotPersonalizada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CotPersonalizada[] Returns an array of CotPersonalizada objects
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

//    public function findOneBySomeField($value): ?CotPersonalizada
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
