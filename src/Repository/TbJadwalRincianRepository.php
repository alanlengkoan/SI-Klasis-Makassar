<?php

namespace App\Repository;

use App\Entity\TbJadwalRincian;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbJadwalRincian|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbJadwalRincian|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbJadwalRincian[]    findAll()
 * @method TbJadwalRincian[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbJadwalRincianRepository extends ServiceEntityRepository
{
    private $mng;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $mng)
    {
        parent::__construct($registry, TbJadwalRincian::class);
        $this->mng = $mng;
    }

    // untuk mengambil semua data
    public function getDetail($id)
    {
        $sql = "SELECT jr.id_jadwal_rincian, j.nama, jr.nama_keluarga, jr.nama_pelayan, jr.alamat, jr.tanggal_ibadah FROM App\Entity\TbJadwalRincian jr LEFT JOIN App\Entity\TbJadwal j WITH jr.id_jadwal = j.id_jadwal WHERE jr.id_gereja = '$id'";
        $qry = $this->mng->createQuery($sql)->getResult();
        return $qry;
    }
}
