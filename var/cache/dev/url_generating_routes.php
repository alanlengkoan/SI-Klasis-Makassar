<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_akun' => [[], ['_controller' => 'App\\Controller\\Admin\\AkunController::index'], [], [['text', '/admin/akun']], [], []],
    'admin_upd_foto' => [[], ['_controller' => 'App\\Controller\\Admin\\AkunController::upd_foto'], [], [['text', '/admin/akun/upd_foto']], [], []],
    'admin_upd_lokasi' => [[], ['_controller' => 'App\\Controller\\Admin\\AkunController::upd_lokasi'], [], [['text', '/admin/akun/upd_lokasi']], [], []],
    'admin_upd_akun' => [[], ['_controller' => 'App\\Controller\\Admin\\AkunController::upd_akun'], [], [['text', '/admin/akun/upd_akun']], [], []],
    'admin_upd_keamanan' => [[], ['_controller' => 'App\\Controller\\Admin\\AkunController::upd_keamanan'], [], [['text', '/admin/akun/upd_keamanan']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'admin_informasi' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::index'], [], [['text', '/admin/informasi']], [], []],
    'admin_informasi_add' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::add'], [], [['text', '/admin/informasi/add']], [], []],
    'admin_informasi_get' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::get_data'], [], [['text', '/admin/informasi/get']], [], []],
    'admin_informasi_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::upd'], [], [['text', '/admin/informasi/upd']], [], []],
    'admin_informasi_upd_status' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::upd_status'], [], [['text', '/admin/informasi/upd_status']], [], []],
    'admin_informasi_del' => [[], ['_controller' => 'App\\Controller\\Admin\\InformasiController::del'], [], [['text', '/admin/informasi/del']], [], []],
    'admin_jadwal' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalController::index'], [], [['text', '/admin/jadwal']], [], []],
    'admin_jadwal_add' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalController::add'], [], [['text', '/admin/jadwal/add']], [], []],
    'admin_jadwal_get' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalController::get_data'], [], [['text', '/admin/jadwal/get']], [], []],
    'admin_jadwal_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalController::upd'], [], [['text', '/admin/jadwal/upd']], [], []],
    'admin_jadwal_del' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalController::del'], [], [['text', '/admin/jadwal/del']], [], []],
    'admin_jadwal_minggu' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalMingguController::index'], [], [['text', '/admin/jadwal_minggu']], [], []],
    'admin_jadwal_minggu_add' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalMingguController::add'], [], [['text', '/admin/jadwal_minggu/add']], [], []],
    'admin_jadwal_minggu_get' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalMingguController::get_data'], [], [['text', '/admin/jadwal_minggu/get']], [], []],
    'admin_jadwal_minggu_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalMingguController::upd'], [], [['text', '/admin/jadwal_minggu/upd']], [], []],
    'admin_jadwal_minggu_del' => [[], ['_controller' => 'App\\Controller\\Admin\\JadwalMingguController::del'], [], [['text', '/admin/jadwal_minggu/del']], [], []],
    'admin_jemaat' => [[], ['_controller' => 'App\\Controller\\Admin\\JemaatController::index'], [], [['text', '/admin/jemaat']], [], []],
    'admin_jemaat_get' => [[], ['_controller' => 'App\\Controller\\Admin\\JemaatController::get_data'], [], [['text', '/admin/jemaat/get']], [], []],
    'admin_jemaat_acc' => [[], ['_controller' => 'App\\Controller\\Admin\\JemaatController::acc'], [], [['text', '/admin/jemaat/acc']], [], []],
    'admin_jemaat_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\JemaatController::upd'], [], [['text', '/admin/jemaat/upd']], [], []],
    'admin_jemaat_del' => [[], ['_controller' => 'App\\Controller\\Admin\\JemaatController::del'], [], [['text', '/admin/jemaat/del']], [], []],
    'admin_keuangan' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::index'], [], [['text', '/admin/keuangan']], [], []],
    'admin_laporan_keuangan' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::laporan_keuangan'], [], [['text', '/admin/laporan_keuangan']], [], []],
    'admin_pemasukan' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::pemasukan'], [], [['text', '/admin/pemasukan']], [], []],
    'admin_pemasukan_add' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::add_pemasukan'], [], [['text', '/admin/pemasukan/add']], [], []],
    'admin_pemasukan_get' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::get_pemasukan'], [], [['text', '/admin/pemasukan/get']], [], []],
    'admin_pemasukan_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::upd_pemasukan'], [], [['text', '/admin/pemasukan/upd']], [], []],
    'admin_pemasukan_del' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::del_pemasukan'], [], [['text', '/admin/pemasukan/del']], [], []],
    'admin_pengeluaran' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::pengeluaran'], [], [['text', '/admin/pengeluaran']], [], []],
    'admin_pengeluaran_add' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::add_pengeluaran'], [], [['text', '/admin/pengeluaran/add']], [], []],
    'admin_pengeluaran_get' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::get_pengeluaran'], [], [['text', '/admin/pengeluaran/get']], [], []],
    'admin_pengeluaran_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::upd_pengeluaran'], [], [['text', '/admin/pengeluaran/upd']], [], []],
    'admin_pengeluaran_del' => [[], ['_controller' => 'App\\Controller\\Admin\\KeuanganController::del_pengeluaran'], [], [['text', '/admin/pengeluaran/del']], [], []],
    'admin_pengurus' => [[], ['_controller' => 'App\\Controller\\Admin\\PengurusController::index'], [], [['text', '/admin/pengurus']], [], []],
    'admin_get_data_pengurus' => [[], ['_controller' => 'App\\Controller\\Admin\\PengurusController::get_data'], [], [['text', '/admin/pengurus/get_data_pengurus']], [], []],
    'admin_add_pengurus' => [[], ['_controller' => 'App\\Controller\\Admin\\PengurusController::add'], [], [['text', '/admin/pengurus/add_pengurus']], [], []],
    'admin_upd_pengurus' => [[], ['_controller' => 'App\\Controller\\Admin\\PengurusController::upd'], [], [['text', '/admin/pengurus/upd_pengurus']], [], []],
    'admin_del_pengurus' => [[], ['_controller' => 'App\\Controller\\Admin\\PengurusController::del'], [], [['text', '/admin/pengurus/del_pengurus']], [], []],
    'admin_profil' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfilController::index'], [], [['text', '/admin/profil']], [], []],
    'admin_profil_get' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfilController::get_data'], [], [['text', '/admin/profil/get']], [], []],
    'admin_profil_add' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfilController::add'], [], [['text', '/admin/profil/add']], [], []],
    'admin_profil_upd' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfilController::upd'], [], [['text', '/admin/profil/upd']], [], []],
    'admin_profil_del' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfilController::del'], [], [['text', '/admin/profil/del']], [], []],
    'berita' => [[], ['_controller' => 'App\\Controller\\BeritaController::index'], [], [['text', '/berita']], [], []],
    'berita_detail' => [['id'], ['_controller' => 'App\\Controller\\BeritaController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/berita']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/home']], [], []],
    'kontak' => [[], ['_controller' => 'App\\Controller\\DefaultController::kontak'], [], [['text', '/kontak']], [], []],
    'tentang' => [[], ['_controller' => 'App\\Controller\\DefaultController::tentang'], [], [['text', '/tentang']], [], []],
    'galeri' => [[], ['_controller' => 'App\\Controller\\GaleriController::index'], [], [['text', '/galeri']], [], []],
    'gereja' => [[], ['_controller' => 'App\\Controller\\GerejaController::index'], [], [['text', '/gereja']], [], []],
    'gereja_detail' => [['id'], ['_controller' => 'App\\Controller\\GerejaController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gereja']], [], []],
    'gereja_warta' => [['id'], ['_controller' => 'App\\Controller\\GerejaController::warta'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gereja/warta']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], []],
    'app_register_add' => [[], ['_controller' => 'App\\Controller\\SecurityController::add'], [], [['text', '/register/add']], [], []],
    'check_nik' => [[], ['_controller' => 'App\\Controller\\SecurityController::check_nik'], [], [['text', '/register/check_nik']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'superadmin_akun' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\AkunController::index'], [], [['text', '/superadmin/akun']], [], []],
    'superadmin_upd_foto' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_foto'], [], [['text', '/superadmin/akun/upd_foto']], [], []],
    'superadmin_upd_akun' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_akun'], [], [['text', '/superadmin/akun/upd_akun']], [], []],
    'superadmin_upd_keamanan' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\AkunController::upd_keamanan'], [], [['text', '/superadmin/akun/upd_keamanan']], [], []],
    'superadmin' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\DashboardController::index'], [], [['text', '/superadmin']], [], []],
    'superadmin_galeri' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GaleriController::index'], [], [['text', '/superadmin/galeri']], [], []],
    'superadmin_informasi_upd_status' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GaleriController::upd_status'], [], [['text', '/superadmin/galeri/upd_status']], [], []],
    'superadmin_gereja' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::index'], [], [['text', '/superadmin/gereja']], [], []],
    'superadmin_gereja_add' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::add'], [], [['text', '/superadmin/gereja/add']], [], []],
    'superadmin_gereja_del' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::del'], [], [['text', '/superadmin/gereja/del']], [], []],
    'superadmin_gereja_res_pass' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\GerejaController::reset_password'], [], [['text', '/superadmin/gereja/res_pass']], [], []],
    'superadmin_jadwal' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::index'], [], [['text', '/superadmin/jadwal']], [], []],
    'superadmin_jadwal_add' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::add'], [], [['text', '/superadmin/jadwal/add']], [], []],
    'superadmin_jadwal_get' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::get_data'], [], [['text', '/superadmin/jadwal/get']], [], []],
    'superadmin_jadwal_upd' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::upd'], [], [['text', '/superadmin/jadwal/upd']], [], []],
    'superadmin_jadwal_del' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\JadwalController::del'], [], [['text', '/superadmin/jadwal/del']], [], []],
    'superadmin_kategori' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::index'], [], [['text', '/superadmin/kategori']], [], []],
    'superadmin_kategori_add' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::add'], [], [['text', '/superadmin/kategori/add']], [], []],
    'superadmin_kategori_get' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::get_data'], [], [['text', '/superadmin/kategori/get']], [], []],
    'superadmin_kategori_upd' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::upd'], [], [['text', '/superadmin/kategori/upd']], [], []],
    'superadmin_kategori_del' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KategoriController::del'], [], [['text', '/superadmin/kategori/del']], [], []],
    'superadmin_keuangan' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::index'], [], [['text', '/superadmin/keuangan']], [], []],
    'superadmin_keuangan_add' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::add'], [], [['text', '/superadmin/keuangan/add']], [], []],
    'superadmin_keuangan_get' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::get_data'], [], [['text', '/superadmin/keuangan/get']], [], []],
    'superadmin_keuangan_upd' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::upd'], [], [['text', '/superadmin/keuangan/upd']], [], []],
    'superadmin_keuangan_del' => [[], ['_controller' => 'App\\Controller\\SuperAdmin\\KeuanganController::del'], [], [['text', '/superadmin/keuangan/del']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
];
