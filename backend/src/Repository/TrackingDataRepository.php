<?php

namespace App\Repository;

use App\Entity\TrackingData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TrackingData|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrackingData|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrackingData[]    findAll()
 * @method TrackingData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrackingDataRepository extends ServiceEntityRepository
{
    /**
     * TrackingDataRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrackingData::class);
    }
}
