<?php

namespace App\Controller;

use App\Entity\TbGereja;
use App\Entity\TbInformasi;
use App\Entity\TbJadwalMinggu;
use App\Entity\TbJadwalRincian;
use App\Entity\TbPengurus;
use App\Service\MyfunctionHelper;
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
}
