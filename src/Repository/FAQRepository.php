<?php

namespace App\Repository;

use App\Entity\FAQ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FAQ|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAQ|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAQ[]    findAll()
 * @method FAQ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAQRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FAQ::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.something = :value')->setParameter('value', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
