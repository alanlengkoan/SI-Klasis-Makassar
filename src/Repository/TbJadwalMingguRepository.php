<?php

namespace App\Repository;

use App\Entity\TbJadwalMinggu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbJadwalMinggu|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbJadwalMinggu|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbJadwalMinggu[]    findAll()
 * @method TbJadwalMinggu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbJadwalMingguRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbJadwalMinggu::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data
    public function getDetail($id)
    {
        $sql = "SELECT jr.id_jadwal_minggu, jr.id_gereja, jr.nama_pelayan, jr.tanggal_ibadah FROM App\Entity\TbJadwalMinggu jr WHERE jr.id_gereja = '$id'";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
