<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'welcome';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route["login"]["post"]         = "Login/auth";
$route["login"]["get"]          = "Login";
$route["logout"]["get"]         = "Login/logout";
$route["cek_penyakit"]["post"]  = "Welcome/cekPenyakit";

$route["admin/gejala"]["get"]                 = "Gejala";
$route["admin/gejala/tambah"]["get"]          = "Gejala/tambah";
$route["admin/gejala/simpan"]["post"]         = "Gejala/simpan";
$route["admin/gejala/edit/(:any)"]["get"]     = "Gejala/edit/$1";
$route["admin/gejala/edit/(:any)"]["post"]    = "Gejala/update/$1";
$route["admin/gejala/hapus/(:any)"]["get"]    = "Gejala/hapus/$1";
$route["admin/penyakit"]["get"]               = "Penyakit";
$route["admin/penyakit/tambah"]["get"]        = "Penyakit/tambah";
$route["admin/penyakit/simpan"]["post"]       = "Penyakit/simpan";
$route["admin/penyakit/edit/(:any)"]["get"]   = "Penyakit/edit/$1";
$route["admin/penyakit/edit/(:any)"]["post"]  = "Penyakit/update/$1";
$route["admin/penyakit/hapus/(:any)"]["get"]  = "Penyakit/hapus/$1";
$route["admin/relasi"]["get"]                 = "Relasi";
$route["admin/relasi/tambah"]["get"]          = "Relasi/tambah";
$route["admin/relasi/simpan"]["post"]         = "Relasi/simpan";
$route["admin/relasi/edit/(:any)"]["get"]     = "Relasi/edit/$1";
$route["admin/relasi/edit/(:any)"]["post"]    = "Relasi/update/$1";
$route["admin/relasi/hapus/(:any)"]["get"]    = "Relasi/hapus/$1";