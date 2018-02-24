<?php

namespace App\Repository;

use App\Entity\ProjectImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProjectImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectImage[]    findAll()
 * @method ProjectImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectImageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProjectImage::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
