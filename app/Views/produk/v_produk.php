<?= $this->extend('template/template') ?>
<?= $this->section('konten') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active">Barang</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"> Tambah Data</i></button>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if (session()->getFlashdata('pesan') !== NULL) {
                                echo session()->getFlashdata('pesan');
                            } ?>
                            <table class="table" border="2px solid " cellpadding="10px">
                                <thead>
                                    <tr class="text-center">
                                        <td> NO </td>
                                        <td> NAMA BARANG </td>
                                        <td> STOK BARANG </td>
                                        <td> HARGA </td>
                                        <td> DESKRIPSI </td>
                                        <td> AKSI </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nom = 1;
                                    foreach ($produks as $produk) { ?>
                                        <tr>
                                            <td><?= $nom++ ?> </td>
                                            
                                            <td><?= $produk['nama_barang']; ?> </td>
                                            <td><?= $produk['stok']; ?> </td>
                                            <td><?= $produk['harga']; ?> </td>
                                            <td><?= $produk['deskripsi']; ?> </td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-sm btn-warning edit-data" data-toggle="modal" data-target="#edit" data-id_produk="<?= $produk['id_produk'] ?>" data-nama_barang="<?= $produk['nama_barang'] ?>" data-stok="<?= $produk['stok'] ?>"
                                                data-harga="<?= $produk['harga'] ?>" data-deskripsi="<?= $produk['deskripsi'] ?>">
                                                    <i class="fa fa-edit"> Edit</i></button> |

                                                <button type="button" class="btn btn-sm btn-danger hapus-data" data-toggle="modal" data-target="#hapus" data-id_produk="<?= $produk['id_produk'] ?>"><i class="fa fa-trash"> Hapus</i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->

<!-- tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>produk/simpandata" method="post">
                    <div class="form-group">
                        <!-- <label for="id">Id Barang</label> -->
                        <input type="hidden" class="form-control" id="id" name="id">
                        <label for="Nama">Nama Barang</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Enter nama">
                        <label for="Stok">Stok Barang:</label>
                        <input type="number" class="form-control" id="Stok" name="Stok" placeholder="Enter stok">
                        <label for="Harga">Harga Barang</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" placeholder="Enter harga">
                        <label for="Deskripsi">Deskripsi Barang</label>
                        <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Enter deskripsi">
                     </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-transparent" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Simpan Data <i class="fas fa-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
<!-- akhir tambah -->


<!-- edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>produk/updatedata" method="post">
                    <div class="form-group">
                        <!-- <label for="id">Id Barang</label> -->
                        <input type="hidden" class="form-control" id="id" name="id">
                        <label for="Nama">Nama Barang</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Enter nama">
                        <label for="Stok">Stok Barang:</label>
                        <input type="number" class="form-control" id="Stok" name="Stok" placeholder="Enter stok">
                        <label for="Harga">Harga Barang</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" placeholder="Enter harga">
                        <label for="Deskripsi">Deskripsi Barang</label>
                        <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Enter deskripsi">
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-transparent" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Edit Data <i class="fas fa-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
<!-- akhir edit -->

<!-- awal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>produk/deletedata" method="post">
                <div class="modal-body">
                    <p id="pesan">Yakin Data Barang mau di hapus?</p>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="Id_barang" name="Id_barang">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-transparent" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Hapus Data <i class="fas fa-trash"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
    </button>
</div>

<!-- akhir hapus -->

<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script>
   $(document).ready(function() {
    $(document).on('click', '.edit-data', function() {
      var Id = $(this).data('id_produk');
      var nama = $(this).data('nama_barang');
      var Stok = $(this).data('stok');
      var Harga = $(this).data('harga');
      var Deskripsi = $(this).data('deskripsi');
      

      $('#edit .modal-body #id').val(Id);
      $('#edit .modal-body #Nama').val(nama);
      $('#edit .modal-body #Stok').val(Stok);
      $('#edit .modal-body #Harga').val(Harga);
      $('#edit .modal-body #Deskripsi').val(Deskripsi);

    });
  });

  $(document).on('click', '.hapus-data', function() {
    console.log("test");
    var Id = $(this).data('id_produk');
    $('#hapus .modal-body #Id_barang').val(Id);
    $('#pesan').html('Yakin ingin menghapus data mahasiswa ' + Id + ' ?');
  })


</script>
<?= $this->endSection() ?>