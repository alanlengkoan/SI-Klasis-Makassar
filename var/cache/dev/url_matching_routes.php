<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/akun' => [[['_route' => 'admin_akun', '_controller' => 'App\\Controller\\Admin\\AkunController::index'], null, null, null, false, false, null]],
        '/admin/akun/upd_foto' => [[['_route' => 'admin_upd_foto', '_controller' => 'App\\Controller\\Admin\\AkunController::upd_foto'], null, null, null, false, false, null]],
        '/admin/akun/upd_lokasi' => [[['_route' => 'admin_upd_lokasi', '_controller' => 'App\\Controller\\Admin\\AkunController::upd_lokasi'], null, null, null, false, false, null]],
        '/admin/akun/upd_akun' => [[['_route' => 'admin_upd_akun', '_controller' => 'App\\Controller\\Admin\\AkunController::upd_akun'], null, ['POST' => 0], null, false, false, null]],
        '/admin/akun/upd_keamanan' => [[['_route' => 'admin_upd_keamanan', '_controller' => 'App\\Controller\\Admin\\AkunController::upd_keamanan'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/informasi' => [[['_route' => 'admin_informasi', '_controller' => 'App\\Controller\\Admin\\InformasiController::index'], null, null, null, false, false, null]],
        '/admin/informasi/add' => [[['_route' => 'admin_informasi_add', '_controller' => 'App\\Controller\\Admin\\InformasiController::add'], null, null, null, false, false, null]],
        '/admin/informasi/get' => [[['_route' => 'admin_informasi_get', '_controller' => 'App\\Controller\\Admin\\InformasiController::get_data'], null, null, null, false, false, null]],
        '/admin/informasi/upd' => [[['_route' => 'admin_informasi_upd', '_controller' => 'App\\Controller\\Admin\\InformasiController::upd'], null, null, null, false, false, null]],
        '/admin/informasi/upd_status' => [[['_route' => 'admin_informasi_upd_status', '_controller' => 'App\\Controller\\Admin\\InformasiController::upd_status'], null, null, null, false, false, null]],
        '/admin/informasi/del' => [[['_route' => 'admin_informasi_del', '_controller' => 'App\\Controller\\Admin\\InformasiController::del'], null, null, null, false, false, null]],
        '/admin/jadwal' => [[['_route' => 'admin_jadwal', '_controller' => 'App\\Controller\\Admin\\JadwalController::index'], null, null, null, false, false, null]],
        '/admin/jadwal/add' => [[['_route' => 'admin_jadwal_add', '_controller' => 'App\\Controller\\Admin\\JadwalController::add'], null, null, null, false, false, null]],
        '/admin/jadwal/get' => [[['_route' => 'admin_jadwal_get', '_controller' => 'App\\Controller\\Admin\\JadwalController::get_data'], null, null, null, false, false, null]],
        '/admin/jadwal/upd' => [[['_route' => 'admin_jadwal_upd', '_controller' => 'App\\Controller\\Admin\\JadwalController::upd'], null, null, null, false, false, null]],
        '/admin/jadwal/del' => [[['_route' => 'admin_jadwal_del', '_controller' => 'App\\Controller\\Admin\\JadwalController::del'], null, null, null, false, false, null]],
        '/admin/jadwal_minggu' => [[['_route' => 'admin_jadwal_minggu', '_controller' => 'App\\Controller\\Admin\\JadwalMingguController::index'], null, null, null, false, false, null]],
        '/admin/jadwal_minggu/add' => [[['_route' => 'admin_jadwal_minggu_add', '_controller' => 'App\\Controller\\Admin\\JadwalMingguController::add'], null, null, null, false, false, null]],
        '/admin/jadwal_minggu/get' => [[['_route' => 'admin_jadwal_minggu_get', '_controller' => 'App\\Controller\\Admin\\JadwalMingguController::get_data'], null, null, null, false, false, null]],
        '/admin/jadwal_minggu/upd' => [[['_route' => 'admin_jadwal_minggu_upd', '_controller' => 'App\\Controller\\Admin\\JadwalMingguController::upd'], null, null, null, false, false, null]],
        '/admin/jadwal_minggu/del' => [[['_route' => 'admin_jadwal_minggu_del', '_controller' => 'App\\Controller\\Admin\\JadwalMingguController::del'], null, null, null, false, false, null]],
        '/admin/jemaat' => [[['_route' => 'admin_jemaat', '_controller' => 'App\\Controller\\Admin\\JemaatController::index'], null, null, null, false, false, null]],
        '/admin/jemaat/get' => [[['_route' => 'admin_jemaat_get', '_controller' => 'App\\Controller\\Admin\\JemaatController::get_data'], null, null, null, false, false, null]],
        '/admin/jemaat/acc' => [[['_route' => 'admin_jemaat_acc', '_controller' => 'App\\Controller\\Admin\\JemaatController::acc'], null, null, null, false, false, null]],
        '/admin/jemaat/upd' => [[['_route' => 'admin_jemaat_upd', '_controller' => 'App\\Controller\\Admin\\JemaatController::upd'], null, null, null, false, false, null]],
        '/admin/jemaat/del' => [[['_route' => 'admin_jemaat_del', '_controller' => 'App\\Controller\\Admin\\JemaatController::del'], null, null, null, false, false, null]],
        '/admin/keuangan' => [[['_route' => 'admin_keuangan', '_controller' => 'App\\Controller\\Admin\\KeuanganController::index'], null, null, null, false, false, null]],
        '/admin/laporan_keuangan' => [[['_route' => 'admin_laporan_keuangan', '_controller' => 'App\\Controller\\Admin\\KeuanganController::laporan_keuangan'], null, null, null, false, false, null]],
        '/admin/pemasukan' => [[['_route' => 'admin_pemasukan', '_controller' => 'App\\Controller\\Admin\\KeuanganController::pemasukan'], null, null, null, false, false, null]],
        '/admin/pemasukan/add' => [[['_route' => 'admin_pemasukan_add', '_controller' => 'App\\Controller\\Admin\\KeuanganController::add_pemasukan'], null, null, null, false, false, null]],
        '/admin/pemasukan/get' => [[['_route' => 'admin_pemasukan_get', '_controller' => 'App\\Controller\\Admin\\KeuanganController::get_pemasukan'], null, null, null, false, false, null]],
        '/admin/pemasukan/upd' => [[['_route' => 'admin_pemasukan_upd', '_controller' => 'App\\Controller\\Admin\\KeuanganController::upd_pemasukan'], null, null, null, false, false, null]],
        '/admin/pemasukan/del' => [[['_route' => 'admin_pemasukan_del', '_controller' => 'App\\Controller\\Admin\\KeuanganController::del_pemasukan'], null, null, null, false, false, null]],
        '/admin/pengeluaran' => [[['_route' => 'admin_pengeluaran', '_controller' => 'App\\Controller\\Admin\\KeuanganController::pengeluaran'], null, null, null, false, false, null]],
        '/admin/pengeluaran/add' => [[['_route' => 'admin_pengeluaran_add', '_controller' => 'App\\Controller\\Admin\\KeuanganController::add_pengeluaran'], null, null, null, false, false, null]],
        '/admin/pengeluaran/get' => [[['_route' => 'admin_pengeluaran_get', '_controller' => 'App\\Controller\\Admin\\KeuanganController::get_pengeluaran'], null, null, null, false, false, null]],
        '/admin/pengeluaran/upd' => [[['_route' => 'admin_pengeluaran_upd', '_controller' => 'App\\Controller\\Admin\\KeuanganController::upd_pengeluaran'], null, null, null, false, false, null]],
        '/admin/pengeluaran/del' => [[['_route' => 'admin_pengeluaran_del', '_controller' => 'App\\Controller\\Admin\\KeuanganController::del_pengeluaran'], null, null, null, false, false, null]],
        '/admin/pengurus' => [[['_route' => 'admin_pengurus', '_controller' => 'App\\Controller\\Admin\\PengurusController::index'], null, null, null, false, false, null]],
        '/admin/pengurus/get_data_pengurus' => [[['_route' => 'admin_get_data_pengurus', '_controller' => 'App\\Controller\\Admin\\PengurusController::get_data'], null, ['POST' => 0], null, false, false, null]],
        '/admin/pengurus/add_pengurus' => [[['_route' => 'admin_add_pengurus', '_controller' => 'App\\Controller\\Admin\\PengurusController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin/pengurus/upd_pengurus' => [[['_route' => 'admin_upd_pengurus', '_controller' => 'App\\Controller\\Admin\\PengurusController::upd'], null, ['POST' => 0], null, false, false, null]],
        '/admin/pengurus/del_pengurus' => [[['_route' => 'admin_del_pengurus', '_controller' => 'App\\Controller\\Admin\\PengurusController::del'], null, ['POST' => 0], null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_profil', '_controller' => 'App\\Controller\\Admin\\ProfilController::index'], null, null, null, false, false, null]],
        '/admin/profil/get' => [[['_route' => 'admin_profil_get', '_controller' => 'App\\Controller\\Admin\\ProfilController::get_data'], null, null, null, false, false, null]],
        '/admin/profil/add' => [[['_route' => 'admin_profil_add', '_controller' => 'App\\Controller\\Admin\\ProfilController::add'], null, null, null, false, false, null]],
        '/admin/profil/upd' => [[['_route' => 'admin_profil_upd', '_controller' => 'App\\Controller\\Admin\\ProfilController::upd'], null, null, null, false, false, null]],
        '/admin/profil/del' => [[['_route' => 'admin_profil_del', '_controller' => 'App\\Controller\\Admin\\ProfilController::del'], null, null, null, false, false, null]],
        '/berita' => [[['_route' => 'berita', '_controller' => 'App\\Controller\\BeritaController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/kontak' => [[['_route' => 'kontak', '_controller' => 'App\\Controller\\DefaultController::kontak'], null, null, null, false, false, null]],
        '/tentang' => [[['_route' => 'tentang', '_controller' => 'App\\Controller\\DefaultController::tentang'], null, null, null, false, false, null]],
        '/galeri' => [[['_route' => 'galeri', '_controller' => 'App\\Controller\\GaleriController::index'], null, null, null, false, false, null]],
        '/gereja' => [[['_route' => 'gereja', '_controller' => 'App\\Controller\\GerejaController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/register/add' => [[['_route' => 'app_register_add', '_controller' => 'App\\Controller\\SecurityController::add'], null, null, null, false, false, null]],
        '/register/check_nik' => [[['_route' => 'check_nik', '_controller' => 'App\\Controller\\SecurityController::check_nik'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/superadmin/akun' => [[['_route' => 'superadmin_akun', '_controller' => 'App\\Controller\\SuperAdmin\\AkunController::index'], null, null, null, false, false, null]],
        '/superadmin/akun/upd_foto' => [[['_route' => 'superadmin_upd_foto', '_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_foto'], null, null, null, false, false, null]],
        '/superadmin/akun/upd_akun' => [[['_route' => 'superadmin_upd_akun', '_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_akun'], null, ['POST' => 0], null, false, false, null]],
        '/superadmin/akun/upd_keamanan' => [[['_route' => 'superadmin_upd_keamanan', '_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_keamanan'], null, ['POST' => 0], null, false, false, null]],
        '/superadmin' => [[['_route' => 'superadmin', '_controller' => 'App\\Controller\\SuperAdmin\\DashboardController::index'], null, null, null, false, false, null]],
        '/superadmin/galeri' => [[['_route' => 'superadmin_galeri', '_controller' => 'App\\Controller\\SuperAdmin\\GaleriController::index'], null, null, null, false, false, null]],
        '/superadmin/galeri/upd_status' => [[['_route' => 'superadmin_informasi_upd_status', '_controller' => 'App\\Controller\\SuperAdmin\\GaleriController::upd_status'], null, null, null, false, false, null]],
        '/superadmin/gereja' => [[['_route' => 'superadmin_gereja', '_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::index'], null, null, null, false, false, null]],
        '/superadmin/gereja/add' => [[['_route' => 'superadmin_gereja_add', '_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::add'], null, null, null, false, false, null]],
        '/superadmin/gereja/del' => [[['_route' => 'superadmin_gereja_del', '_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::del'], null, null, null, false, false, null]],
        '/superadmin/gereja/res_pass' => [[['_route' => 'superadmin_gereja_res_pass', '_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::reset_password'], null, null, null, false, false, null]],
        '/superadmin/jadwal' => [[['_route' => 'superadmin_jadwal', '_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::index'], null, null, null, false, false, null]],
        '/superadmin/jadwal/add' => [[['_route' => 'superadmin_jadwal_add', '_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::add'], null, null, null, false, false, null]],
        '/superadmin/jadwal/get' => [[['_route' => 'superadmin_jadwal_get', '_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::get_data'], null, null, null, false, false, null]],
        '/superadmin/jadwal/upd' => [[['_route' => 'superadmin_jadwal_upd', '_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::upd'], null, null, null, false, false, null]],
        '/superadmin/jadwal/del' => [[['_route' => 'superadmin_jadwal_del', '_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::del'], null, null, null, false, false, null]],
        '/superadmin/kategori' => [[['_route' => 'superadmin_kategori', '_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::index'], null, null, null, false, false, null]],
        '/superadmin/kategori/add' => [[['_route' => 'superadmin_kategori_add', '_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::add'], null, null, null, false, false, null]],
        '/superadmin/kategori/get' => [[['_route' => 'superadmin_kategori_get', '_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::get_data'], null, null, null, false, false, null]],
        '/superadmin/kategori/upd' => [[['_route' => 'superadmin_kategori_upd', '_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::upd'], null, null, null, false, false, null]],
        '/superadmin/kategori/del' => [[['_route' => 'superadmin_kategori_del', '_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::del'], null, null, null, false, false, null]],
        '/superadmin/keuangan' => [[['_route' => 'superadmin_keuangan', '_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::index'], null, null, null, false, false, null]],
        '/superadmin/keuangan/add' => [[['_route' => 'superadmin_keuangan_add', '_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::add'], null, null, null, false, false, null]],
        '/superadmin/keuangan/get' => [[['_route' => 'superadmin_keuangan_get', '_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::get_data'], null, null, null, false, false, null]],
        '/superadmin/keuangan/upd' => [[['_route' => 'superadmin_keuangan_upd', '_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::upd'], null, null, null, false, false, null]],
        '/superadmin/keuangan/del' => [[['_route' => 'superadmin_keuangan_del', '_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::del'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/berita/([^/]++)(*:185)'
                .'|/gereja/(?'
                    .'|([^/]++)(*:212)'
                    .'|warta/([^/]++)(*:234)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'berita_detail', '_controller' => 'App\\Controller\\BeritaController::detail'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'gereja_detail', '_controller' => 'App\\Controller\\GerejaController::detail'], ['id'], null, null, false, true, null]],
        234 => [
            [['_route' => 'gereja_warta', '_controller' => 'App\\Controller\\GerejaController::warta'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
