<?php
    include "koneksi.php";

    //Membaca Data Dari tambah_from.html
    $nama             =$_POST['nama'];
    $email            =$_POST['email'];
    $subjek           =$_POST['subjek'];
    $pesan            =$_POST['pesan'];

    //Cetak Data ke database
    $sql ="INSERT INTO tbl_pesan (nama, email, subjek, pesan)
    VALUES ('$nama', '$email', '$subjek', '$pesan')";

    $query = mysqli_query($koneksi, $sql);
    
    //mengalihkan ke tampilan input data
    header("location:forms/oke.html");