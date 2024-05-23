<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pemesanan</title>
  <link rel="stylesheet" href="/assets/dist/css/style.css" />
</head>

<body>
  <div class="form-container">
    <h2>Form Pemesanan</h2>
    <form action="<?= base_url('pemesanan/simpandata') ?>" method="post">
      <div class="form-group">
        <!-- <label for="orderId">ID Pemesanan</label> -->
        <input type="hidden" id="orderId" name="orderId"/>
      </div>
      <div class="form-group">
        <!-- <label for="orderId">ID Produk</label> -->
        <!-- <input type="hidden" id="Id_produk" name="Id_produk"/> -->
      </div>
      <div class="form-group">
        <label for="productId">Nama Produk</label>
        <select class="form-control" id="Id_produk" name="Id_produk">
          <option value="#">Pilih</option>
          <?php foreach ($produks as $produk) : ?>
            <option value="<?= $produk['id_produk']?>">
              <?= $produk['nama_barang'] ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="customerName">Nama Pemesan</label>
        <input type="text" id="customerName" name="customerName" required />
      </div>
      <div class="form-group">
        <label for="address">Alamat</label>
        <textarea id="address" name="address" required></textarea>
      </div>
      <div class="form-group">
        <label for="phoneNumber">No HP</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required />
      </div>
        <div class="form-group">
          <label for="totalPrice">Total Harga</label>
          <input type="number" id="totalhargaa" name="totalhargaa" required />
        </div>
      <div class="form-group">
        <label for="totalPrice">Status</label>
        <input type="text" id="Status" name="Status" required />
      </div>
      <!-- <div class="form-group">
        <label for="totalPrice">Username</label>
        <input type="text" id="totalPrice" name="totalPrice" required />
      </div> -->
      <button type="submit">Submit</button>
      <button id="cancel" class="cancel-button"><a href="<?php base_url('logout')?>" >Logout</a></button>
    </form>
  </div>
</body>

</html>