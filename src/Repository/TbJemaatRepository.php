<?php

namespace App\Repository;

use App\Entity\TbJemaat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbJemaat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbJemaat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbJemaat[]    findAll()
 * @method TbJemaat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbJemaatRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbJemaat::class);
        $this->mng = $mng;
    }
}
