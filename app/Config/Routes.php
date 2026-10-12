<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('kiosk', 'Kiosk::index');

// Admin
$routes->get('admin', 'Admin::index');
$routes->get('admin/instansi', 'Admin::instansi');
$routes->get('admin/petugas', 'Admin::petugas');
$routes->get('admin/laporan', 'Admin::laporan');
$routes->get('admin/pengaturan', 'Admin::pengaturan');

$routes->get('admin/laporan-proses-antrean', 'Admin::laporanProsesAntrean');
$routes->get('admin/laporan-ringkasan-antrean', 'Admin::laporanRingkasanAntrean');

$routes->get('admin/instansi', 'Admin::instansi');
$routes->get('admin/petugas', 'Admin::petugas');
$routes->get('admin/pengaturan-kelompok', 'Admin::pengaturanKelompok');
$routes->get('admin/pengaturan-layar', 'Admin::pengaturanLayar');
$routes->get('admin/pengaturan-hari-libur', 'Admin::pengaturanHariLibur');
$routes->get('admin/log-user-login', 'Admin::logUserLogin');
$routes->get('admin/absensi-petugas', 'Admin::absensiPetugas');

