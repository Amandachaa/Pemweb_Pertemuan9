<?php

    include("mysql.php");

    $kode_pesanan = $_POST['kode_pesanan'];
    $nama_produk = $_POST['nama_produk'];
    $penerima = $_POST['penerima'];
    $No_telp = $_POST['No.telp'];
    $alamat = $_POST['alamat'];
    $detail_alamat = $_POST['detail_alamat'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $jasa_pengiriman = $_POST['jasa_pengiriman'];
    $waktu_pengiriman = $_POST['waktu_pengiriman'];

    $query = "update pesanan set nama_produk = '$nama_produk', penerima = '$penerima', No.telp = '$No_telp', alamat = '$alamat' detail_alamat = '$detail_alamat', kota = '$kota', provinsi = '$provinsi', kode_pos = '$kode_pos', jasa_pengiriman = '$jasa_pengiriman', waktu_pengiriman = '$waktu_pengiriman', where kode_pesanan = $kode_pesanan";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?kode_pesanan=$kode_pesanan");
    }

?>