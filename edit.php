<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Amanda Form | PHP POST </title>
  </head>
<body>

    <?php
        include ("mysql.php");
        $kode_pesanan = $_GET['kode_pesanan'];

        $query = "select * from pesanan where kode_pesanan = $kode_pesanan";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>

    <div class="row">
      <div class="col-md-12">
        <h2 style="background-color: rgb(226, 219, 210);" align="center">Edit Pesanan</h2>
      </div>
    </div>
    
    <div class="container">
      <form action="proses_edit.php" method="POST">
        <input type="hidden" name = "kode_pesanan" value="<?php echo $row ['kode_pesanan'] ?>">
      <h4>Pesanan Customer</h4>
      <label for="kode_pesanan" class="form-label">Kode Pesanan</label>
      <input class="form-control" type="text" name="kode_pesanan" value="<?php echo $row ['kode_pesanan'] ?>">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input class="form-control" type="text" name="nama_produk" value="<?php echo $row ['nama_produk'] ?>"><br>
        <div class="row g-3">
          <h4>Alamat Customer!</h4>
        <div class="col-md-6">
          <label for="penerima" class="form-label">Nama Penerima</label>
          <input type="text"  name="penerima" class="form-control" id="penerima" value="<?php echo $row ['penerima'] ?>">
        </div>
        <div class="col-md-6">
          <label for="No_telp" class="form-label">No.Telephone</label>
          <input type="text" name="No_telp" class="form-control" id="No_telp" value="<?php echo $row ['No.telp'] ?>">
        </div>
        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $row ['alamat'] ?>">
        </div>
        <div class="col-12">
          <label for="detail_alamat" class="form-label">Detail Lainnya</label>
          <input type="text" name="detail_alamat" class="form-control" id="detail_alamat" value="<?php echo $row ['detail_alamat'] ?>">
        </div>
        <div class="col-md-6">
          <label for="kota" class="form-label">Kota</label>
          <input type="text" name="kota" class="form-control" id="kota" value="<?php echo $row ['kota'] ?>">
        </div>
        <div class="col-md-4">
          <label for="provinsi" class="form-label">Provinsi</label>
          <select name="provinsi" id="provinsi" class="form-select" value="<?php echo $row ['provinsi'] ?>">
            <option selected>Pilih...</option>
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
            <option value="Bali">Bali</option>
            <option value="Sumatera">Sumatera</option>
            <option value="Sulawesi">Sulawesi</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="kode_pos" class="form-label">Kode Pos</label>
          <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?php echo $row ['kode_pos'] ?>">
        </div>
        <h4>Opsi Pengiriman</h4>
        <div class="col-md-6">
          <label for="jasa_pengiriman" class="form-label">Jasa Pengiriman</label>
          <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-select" value="<?php echo $row ['jasa_pengiriman'] ?>">
            <option selected>Pilih...</option>
            <option value="Antaraja">Antaraja</option>
            <option value="J&T">J&T</option>
            <option value="JNE">JNE</option>
            <option value="SIK Reguler">SIK Reguler</option>
            <option value="Wahana">Wahana</option>
          </select>
        </div>
        <div class="col-md-6">
          <div>
            <label for="waktu_pengiriman" class="form-label">Waktu Pengiriman</label>
          <select name="waktu_pengiriman" id="waktu_pengiriman" class="form-select" value="<?php echo $row ['waktu_pengiriman'] ?>">
            <option selected>Pilih...</option>
            <option value="Pengiriman Pada Jam Kantor">Pengiriman Pada Jam Kantor</option>
            <option value="Pengiriman Setiap Saat">Pengiriman Setiap Saat</option>
          </select>
      </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" value="simpan">Save Changes</button>
        </div>
      </form>
    </div></div>
</body>
</html>