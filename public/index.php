<?php

if(!session_id()) session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//teknik bootstraping (memanggil satu file mvc pada aplikasi )
require_once'../app/init.php';

//menginstasiasi memanggil folder app yg tlah dibuat atau menjalankam class App
//ini langkah terakhir bootstraping
$app = new App
?>