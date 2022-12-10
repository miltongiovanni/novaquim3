<?php

namespace App\Repository;

use App\Entity\TasaRetefuente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TasaRetefuente>
 *
 * @method TasaRetefuente|null find($id, $lockMode = null, $lockVersion = null)
 * @method TasaRetefuente|null findOneBy(array $criteria, array $orderBy = null)
 * @method TasaRetefuente[]    findAll()
 * @method TasaRetefuente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TasaRetefuenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TasaRetefuente::class);
    }

    public function save(TasaRetefuente $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TasaRetefuente $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TasaRetefuente[] Returns an array of TasaRetefuente objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TasaRetefuente
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
