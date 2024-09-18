<?php

require_once 'App/Admin/HomePage.php';
require_once 'App/Admin/ManajamenArtikel.php';

use App\Admin\HomePage;
use App\Admin\ManajamenArtikel;

$hp = new HomePage();
$hp->tampil();

$ma = new ManajamenArtikel();
$ma->tambah();
