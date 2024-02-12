<?php

$koneksi = mysqli_connect('localhost','root','','db_pembayaranspp');

if(!$koneksi){
	echo"Koneksi Anda Gagal";
}