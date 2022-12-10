<?php

namespace App\Repository;

use App\Entity\DetFormulaCol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetFormulaCol>
 *
 * @method DetFormulaCol|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetFormulaCol|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetFormulaCol[]    findAll()
 * @method DetFormulaCol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetFormulaColRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetFormulaCol::class);
    }

    public function save(DetFormulaCol $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetFormulaCol $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetFormulaCol[] Returns an array of DetFormulaCol objects
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

//    public function findOneBySomeField($value): ?DetFormulaCol
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
