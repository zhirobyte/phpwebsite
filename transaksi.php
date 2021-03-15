<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Assesment perancangan web 15/03/2020</title>
  </head>
  <body>
  <div style="background-image: url('wall.jpg');">
  <header>
        <figure class="text-center">
        <blockquote class="blockquote">
        <p style="color:white">Selamat datang di form input data SUMBER BERKAH</p>
        <p style="color:white">-- Faiz Hanafi - 1910130008 --</p>
       
        </figure>
  </header>
        <main>

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">  
     <form  action="history.php" method="POST">
      
   <!--ini adalah bagian dari form kode transaksi -->
      <div class="form-group row">
      <label for="inputKode" class="col-sm-2 col-form-label"><p style="color:white">Kode Transaksi</p></label>
            <div class="col-sm-3">
            <input type="kode" name="kode1" class="form-control" id="inputKode" placeholder="Masukkan Kode Disini">
             </div>
        </div>
    <!--ini adalah bagian dari form masukkan tanggal -->
      <div class="formtanggal">
        <label for="tanggal" class="col-sm-2 col-form-label"><p style="color:white">Tanggal Transaksi</p></label>
            <input type="date" name="date" required>
       </div>
      </div> 

  <!--ini adalah bagian dari form masukkan nama customer -->
    <div class="formcustomer">
    <label for="inputCustomer" class="col-sm-2 col-form-label"><p style="color:white">Customer</p></label>
      <select class="custom-select mr-sm-2" name="custom" id="inlineFormCustomSelect">
        <option selected>Pilih Customer ...</option>
        <option value="1">Faiz</option>
        <option value="2">Hanafi</option>
        <option value="3">Pak Ihsan</option>
      </select>
    </div> 
    <!--ini adalah bagian dari form masukkan barang nomer 1 -->
    <div class="formbarang1">
    <label for="inputBarang1" class="col-sm-2 col-form-label"><p style="color:white">Barang 1</p></label>
      <select class="custom-select mr-sm-2" name="brg1" id="inlineFormCustomSelect">
        <option selected>Pilih barang ...</option>
        <option value="1">Laptop</option>
        <option value="2">Pc</option>
        <option value="3">Printer</option> 
        <option value="4">Usb cable</option>
        <option value="5">Monitor</option>
        <option value="6">Mouse</option> 
        <option value="7">Flashdisk</option>
        <option value="8">Scanner</option>
        <option value="9">Webcam</option>
        <input type="text" name="jum1" class="col-sm-1" id="inputJum1" placeholder="Jumlah Disini">
        </select>  
    </div>    <!--ini adalah bagian dari form masukkan barang nomer 2 -->
    <div class="formbarang2">
    <label for="inputBarang2" class="col-sm-2 col-form-label"><p style="color:white"><p style="color:white">Barang 2</p></label>
      <select class="custom-select mr-sm-2" name="brg2" id="inlineFormCustomSelect">
        <option selected>Pilih barang ...</option>
        <option value="1">Laptop</option>
        <option value="2">Pc</option>
        <option value="3">Printer</option> 
        <option value="4">Usb cable</option>
        <option value="5">Monitor</option>
        <option value="6">Mouse</option> 
        <option value="7">Flashdisk</option>
        <option value="8">Scanner</option>
        <option value="9">Webcam</option>
      <input type="text" name="jum2" class="col-sm-1" id="inputJum2" placeholder="Jumlah Disini">
    </select>  
    </div>  
      <!--ini adalah bagian dari form masukkan barang nomer 3 -->
    <div class="formbarang3">
    <label for="inputBarang1" class="col-sm-2 col-form-label"><p style="color:white">Barang 3</p></label>
      <select class="custom-select mr-sm-2" name="brg3" id="inlineFormCustomSelect">
        <option selected>Pilih barang ...</option>
        <option value="1">Laptop</option>
        <option value="2">Pc</option>
        <option value="3">Printer</option> 
        <option value="4">Usb cable</option>
        <option value="5">Monitor</option>
        <option value="6">Mouse</option> 
        <option value="7">Flashdisk</option>
        <option value="8">Scanner</option>
        <option value="9">Webcam</option>
        <input type="text" class="col-sm-1" id="inputJum3" placeholder="Jumlah Disini">
      </select>  
    </div>

      <!--ini adalah bagian dari form kartu member validasi-->
    <div class="formmember">
    <label for="member" class="col-sm-2 col-form-label"></label><p style="color:white">Punya Member?</p></label>
      <input type="radio"  name="rd" id="rd1"><label for="rd1"><p style="color:white">Yes</p></label>
        <input type="radio" name="rd" id="rd2"><label for="rd2"><p style="color:white">No</p></label></br>
    </div>

      <!--ini adalah bagian dari uang pembayaran -->
      <div class="form-group row">
      <label for="inputbayar" class="col-sm-2 col-form-label"><p style="color:white">Uang Pembayaran</p></label>
            <div class="col-sm-3">
            <input type="uang" name="uang" class="form-control" id="inputuang" placeholder="Masukkan Jumlah Bayar">
             </div>
        </div></br>
 
    <!--ini adalah bagian dari submit -->
    <div class="form-group row">
    <div class="col-sm-8">
    <label for="action" class="col-sm-3 col-form-label"></label>
       <button type="submit" class="btn btn-primary">Simpan</button> 
        <button type="batal" class="btn btn-primary">Batal</button>
     
        </div>
      </div>   
    </form>
    
    </div>
</div>

  </main>
  </body>
</html>