<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="pesan_portopolio";
$koneksi = mysqli_connect($host,$user,$pass,$db);

if(!$koneksi) {
    die("koneksi dengann database gagal:".mysql_connect_error());
}