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
