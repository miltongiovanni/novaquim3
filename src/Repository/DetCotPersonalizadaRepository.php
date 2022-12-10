<?php

namespace App\Repository;

use App\Entity\DetCotPersonalizada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetCotPersonalizada>
 *
 * @method DetCotPersonalizada|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetCotPersonalizada|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetCotPersonalizada[]    findAll()
 * @method DetCotPersonalizada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetCotPersonalizadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetCotPersonalizada::class);
    }

    public function save(DetCotPersonalizada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetCotPersonalizada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetCotPersonalizada[] Returns an array of DetCotPersonalizada objects
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

//    public function findOneBySomeField($value): ?DetCotPersonalizada
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
