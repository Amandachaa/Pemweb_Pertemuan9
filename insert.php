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

    $query = "insert into pesanan values ('', '$nama_produk' '$penerima', '$No_telp', '$alamat' '$detail_alamat' '$kota' '$provinsi' '$kode_pos' '$jasa_pengiriman' '$waktu_pengiriman')";

if(mysqli_query($koneksi, $query)){
    header("Location: index.php");
}else{
    header("Location: edit.php?kode_pesanan=$kode_pesanan");
}

?>