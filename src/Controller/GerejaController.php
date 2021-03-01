<?php

namespace App\Controller;

use App\Entity\TbGereja;
use App\Entity\TbInformasi;
use App\Entity\TbJadwalMinggu;
use App\Entity\TbJadwalRincian;
use App\Entity\TbJemaat;
use App\Entity\TbKeuanganRincian;
use App\Entity\TbPengurus;
use App\Service\MyfunctionHelper;
use Dompdf\Dompdf;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GerejaController extends AbstractController
{
    private $mng;
    private $myfun;

    public function __construct(EntityManagerInterface $mng, MyfunctionHelper $myfun)
    {
        $this->mng   = $mng;
        $this->myfun = $myfun;
    }

    /**
     * @Route("/gereja", name="gereja")
     */
    public function index()
    {
        $data = [
            'halaman' => 'Gereja',
            'gereja'  => $this->mng->getRepository(TbGereja::class)->getAll(),
        ];

        return $this->render('gereja.html.twig', $data);
    }
    
    /**
     * @Route("/gereja/{id}", name="gereja_detail")
     */
    public function detail(int $id)
    {
        $data = [
            'halaman'       => 'Detail Gereja',
            'gereja'        => $this->mng->getRepository(TbGereja::class)->getAll(),
            'detail'        => $this->mng->getRepository(TbGereja::class)->getDetail($id),
            'jadwal_minggu' => $this->mng->getRepository(TbJadwalMinggu::class)->getDetail($id),
            'jadwal'        => $this->mng->getRepository(TbJadwalRincian::class)->getDetail($id),
            'pengurus'      => $this->mng->getRepository(TbPengurus::class)->getDetail($id),
            'galeri'        => $this->mng->getRepository(TbInformasi::class)->getGaleri()
        ];

        return $this->render('gereja_det.html.twig', $data);
    }

    /**
     * @Route("/gereja/warta/{id}", name="gereja_warta")
     */
    public function warta(int $id)
    {
        $tanggal_awal  = date('Y-m-d', strtotime('-7 days'));
        $tanggal_akhir = date('Y-m-d');

        $data = [
            'detail'               => $this->mng->getRepository(TbGereja::class)->getDetail($id),
            'jadwal_ibadah_harian' => $this->mng->getRepository(TbJadwalRincian::class)->getDetailDate($id, $tanggal_awal, $tanggal_akhir),
            'jadwal_ibadah_minggu' => $this->mng->getRepository(TbJadwalMinggu::class)->getDetailDate($id, $tanggal_akhir),
            'ulang_tahun'          => $this->mng->getRepository(TbJemaat::class)->getDetailDate($id, $tanggal_awal, $tanggal_akhir),
            'keuangan_pemasukan'   => $this->mng->getRepository(TbKeuanganRincian::class)->getDetailPemasukan($id, $tanggal_awal, $tanggal_akhir),
            'keuangan_pengeluaran' => $this->mng->getRepository(TbKeuanganRincian::class)->getDetailPengeluaran($id, $tanggal_awal, $tanggal_akhir),
        ];

        // untuk membuat pdf
        $dompdf = new Dompdf();
        $html = $this->render('warta.html.twig', $data)->getContent();
        // return $this->render('warta.html.twig', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'landscape');
        $dompdf->render();
        $dompdf->stream('laporan.pdf', ['Attachment' => false]);
        exit(0);
    }
}
