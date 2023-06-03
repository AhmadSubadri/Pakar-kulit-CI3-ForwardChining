<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator/login'] = 'admin/auth';
$route['administrator/login/process'] = 'admin/auth/process_login';
$route['administrator/logout'] = 'admin/auth/logout';

$route['dashboard'] = 'admin/dashboard';

$route['data-penyakit'] = 'admin/data_penyakit';
$route['data-penyakit/insert'] = 'admin/data_penyakit/insert';
$route['data-penyakit/edit/(:any)'] = 'admin/data_penyakit/edit/$1';
$route['data-penyakit/delete/(:any)'] = 'admin/data_penyakit/delete/$1';


$route['data-gejala'] = 'admin/data_gejala';
$route['data-gejala/insert'] = 'admin/data_gejala/insert';
$route['data-gejala/edit/(:any)'] = 'admin/data_gejala/edit/$1';
$route['data-gejala/delete/(:any)'] = 'admin/data_gejala/delete/$1';

$route['data-rule'] = 'admin/data_rule';
$route['data-rule/insert'] = 'admin/data_rule/insert';
$route['data-rule/edit/(:any)'] = 'admin/data_rule/edit/$1';
$route['data-rule/delete/(:any)'] = 'admin/data_rule/delete/$1';

$route['data-riwayat'] = 'admin/data_riwayat';
$route['data-pasien'] = 'admin/data_pasien';

$route['data-admin'] = 'admin/data_admin';
$route['data-admin/insert'] = 'admin/data_admin/insert';
$route['data-admin/edit/(:any)'] = 'admin/data_admin/edit/$1';
$route['data-admin/delete/(:any)'] = 'admin/data_admin/delete/$1';


$route['berita'] = 'Berita';
$route['contact'] = 'Contact';
$route['periksa'] = 'Periksa';

$route['periksa/delete'] = 'Periksa/delete';
$route['periksa/step1'] = 'Periksa/insert_one';
$route['periksa/step2'] = 'Periksa/insert_two';
