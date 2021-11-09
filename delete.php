<?php    
   include("mysql.php");

   $kode_pesanan = $_GET['kode_pesanan'];

   $query = "delete from pesanan where kode_pesanan = $kode_pesanan";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?kode_pesanan=$kode_pesanan");
   }

?>