<?php

//panggil file LuasLingkaran.php di folder yang sama
require_once('./LuasLingkaran.php');

//akses namespace
use App\Math\LuasLingkaran;

$Lingkaran = new LuasLingkaran(5);
// $Lingkaran->jari = 5; //isi property jari
$Lingkaran->tampil('ban'); //panggil method

LuasLingkaran::testing(); //panggil static method