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

    $query = "select * from pesanan";
    $hasil = mysqli_query($koneksi, $query);

?>
    
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: white;">
          <a href="http://sik.kd-serang.upi.edu/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="https://previews.123rf.com/images/nitarismayanti/nitarismayanti2006/nitarismayanti200600006/149945358-fish-logo-design-water-vector-logo.jpg" width="50"> <use xlink:href="http://sik.kd-serang.upi.edu/"/></svg>
            <span class="fs-4">SIK Fresh Market</span>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link">Menu</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Voucher
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Serba RP 10.000</a></li>
                <li><a class="dropdown-item" href="#">Diskon</a></li>
                <li><a class="dropdown-item" href="#">Cashback</a></li>
                <li><a class="dropdown-item" href="#">COD</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Beli Lagi</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Coin</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Keranjang</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Chat</a></li>
          </ul>
        </header></div>
    <!-- End Bagian Header -->  
    <div class="row">
      <div class="col-md-12">
        <h2 style="background-color: rgb(226, 219, 210);" align="center">Check Out</h2>
      </div>
    </div>
    
    <div class="container">
      <form action="insert.php" method="POST">
      <h4>Data Produk</h4>
      <label for="kode_pesanan" class="form-label">Kode Produk</label>
      <input class="form-control" type="text" name="kode_pesanan" value="">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input class="form-control" type="text" name="nama_produk" value=""><br>
        <div class="row g-3">
          <h4>Masukan Alamat Customer!</h4>
        <div class="col-md-6">
          <label for="penerima" class="form-label">Nama Penerima</label>
          <input type="text"  name="penerima" class="form-control" id="penerima" value="">
        </div>
        <div class="col-md-6">
          <label for="No_telp" class="form-label">No.Telephone</label>
          <input type="text" name="No_telp" class="form-control" id="No_telp" value="">
        </div>
        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="1234 Main St" value="">
        </div>
        <div class="col-12">
          <label for="detail_alamat" class="form-label">Detail Lainnya</label>
          <input type="text" name="detail_alamat" class="form-control" id="detail_alamat" placeholder="Apartment, studio, or floor" value="">
        </div>
        <div class="col-md-6">
          <label for="kota" class="form-label">Kota</label>
          <input type="text" name="kota" class="form-control" id="kota" value="">
        </div>
        <div class="col-md-4">
          <label for="provinsi" class="form-label">Provinsi</label>
          <select name="provinsi" id="provinsi" class="form-select" value="">
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
          <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="">
        </div>
        <h4>Opsi Pengiriman</h4>
        <div class="col-md-6">
          <label for="jasa_pengiriman" class="form-label">Jasa Pengiriman</label>
          <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-select" value="">
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
          <select name="waktu_pengiriman" id="waktu_pengiriman" class="form-select" value="">
            <option selected>Pilih...</option>
            <option value="Pengiriman Pada Jam Kantor">Pengiriman Pada Jam Kantor</option>
            <option value="Pengiriman Setiap Saat">Pengiriman Setiap Saat</option>
          </select>
      </div>
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary" value="simpan">Save</button>
        </div>
      </form>
    </div></div>
    <br>
    
    <h2> Daftar Pesanan </h2>

    <table border="1">
        <tr>
            <th >Kode Pesanan</th>
            <th>Produk</th>
            <th>Nama Penerima</th>
            <th>No.Telepon</th>
            <th>Alamat</th>
            <th>Detail Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Kode Pos</th>
            <th>Jasa Pengiriman</th>
            <th>Waktu Pengiriman</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['kode_pesanan']."</td>";
            echo "<td>".$row['nama_produk']."</td>";
            echo "<td>".$row['penerima']."</td>";
            echo "<td>".$row['No.telp']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['detail_alamat']."</td>";
            echo "<td>".$row['kota']."</td>";
            echo "<td>".$row['provinsi']."</td>";
            echo "<td>".$row['kode_pos']."</td>";
            echo "<td>".$row['jasa_pengiriman']."</td>";
            echo "<td>".$row['waktu_pengiriman']."</td>";
            echo "<td><a href='edit.php?kode_pesanan=".$row['kode_pesanan']."'>edit</a></td>";
            echo "<td><a href='delete.php?kode_pesanan=".$row['kode_pesanan']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
</html>
