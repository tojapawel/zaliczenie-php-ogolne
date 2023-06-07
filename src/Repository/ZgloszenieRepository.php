<?php

namespace App\Repository;

use App\Entity\Zgloszenie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Zgloszenie>
 *
 * @method Zgloszenie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zgloszenie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zgloszenie[]    findAll()
 * @method Zgloszenie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZgloszenieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zgloszenie::class);
    }

    public function save(Zgloszenie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Zgloszenie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Zgloszenie[] Returns an array of Zgloszenie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('z.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Zgloszenie
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
