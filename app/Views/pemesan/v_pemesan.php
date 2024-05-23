<?= $this->extend('template/template') ?>
<?= $this->section('konten') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pemesan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active">Pemesan</li>
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
                                        <td> Nama Produk </td>
                                        <td> Nama Pemesanan </td>
                                        <td> Alamat </td>
                                        <td> NO HP </td>
                                        <td> Total Harga </td>
                                        <td> Status </td>
                                        <td> AKSI </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nom = 1;
                                    foreach ($pemesans as $pemesan) { ?>
                                        <tr>
                                            <td><?= $nom++ ?> </td>
                                            <td><?= $pemesan['nama_barang']; ?> </td>
                                            <td><?= $pemesan['nama_pemesan']; ?> </td>
                                            <td><?= $pemesan['alamat']; ?> </td>
                                            <td><?= $pemesan['no_hp']; ?> </td>
                                            <td><?= $pemesan['total_harga']; ?> </td>
                                            <td><?= $pemesan['status']; ?> </td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-sm btn-warning edit-data" data-toggle="modal" data-target="#edit" data-id_pemesanan="<?= $pemesan['id_pemesanan'] ?>" data-nama_barang="<?= $pemesan['nama_barang'] ?>" data-nama_pemesan="<?= $pemesan['nama_pemesan'] ?>" data-alamat="<?= $pemesan['alamat'] ?>" data-no_hp="<?= $pemesan['no_hp'] ?>" data-total_harga="<?= $pemesan['total_harga'] ?>" data-status="<?= $pemesan['status'] ?>">
                                                    <i class="fa fa-edit"> Edit</i></button> |

                                                <button type="button" class="btn btn-sm btn-danger hapus-data" data-toggle="modal" data-target="#hapus" data-id_pemesanan="<?= $pemesan['id_pemesanan'] ?>"><i class="fa fa-trash"> Hapus</i></button>
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
                <form action="<?= base_url('pemesanan/updatedata'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="IdPemesanan" name="IdPemesanan" placeholder="Enter id">
                        <label for="productId">Nama Produk</label>
                        <select class="form-control" id="Id_produk" name="Id_produk">
                            <option value="#">Pilih</option>
                            <?php foreach ($produks as $produk) : ?>
                                <option value="<?= $produk['id_produk'] ?>">
                                    <?= $produk['nama_barang'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="Nama_pemesan">Nama Pemesanan</label>
                        <input type="text" class="form-control" id="Nama_pemesan" name="Nama_pemesan" placeholder="Enter nama">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Enter stok">
                        <label for="NO_HP">No HP</label>
                        <input type="number" class="form-control" id="NO_HP" name="NO_HP" placeholder="Enter harga">
                        <label for="Total">Total Harga</label>
                        <input type="text" class="form-control" id="Total" name="Total" placeholder="Enter deskripsi">
                        <label for="Status">Status</label>
                        <input type="text" class="form-control" id="Status" name="Status" placeholder="Enter deskripsi">
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
                <h5 class="modal-title" id="exampleModalLabel">Hapus Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>pemesanan/deletedata" method="post">
                <div class="modal-body">
                    <p id="pesan">Yakin Data Pemesanan mau di hapus?</p>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="Id_pemesanan" name="Id_pemesanan">
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
            var Id = $(this).data('id_pemesanan');
            var Nama_b = $(this).data('nama_barang');
            var Nama_p = $(this).data('nama_pemesan');
            var Alamatt = $(this).data('alamat');
            var No_HP = $(this).data('no_hp');
            var Total = $(this).data('total_harga');
            var Status = $(this).data('status');
            //   var Username = $(this).data('username');


            $('#edit .modal-body #IdPemesanan').val(Id);
            $('#edit .modal-body #Nama_barang').val(Nama_b);
            $('#edit .modal-body #Nama_pemesan').val(Nama_p);
            $('#edit .modal-body #Alamat').val(Alamatt);
            $('#edit .modal-body #NO_HP').val(No_HP);
            $('#edit .modal-body #Total').val(Total);
            $('#edit .modal-body #Status').val(Status);
            //   $('#edit .modal-body #Username').val(Username);

        });
    });

    $(document).on('click', '.hapus-data', function() {
        console.log("test");
        var Id = $(this).data('id_pemesanan');
        $('#hapus .modal-body #Id_pemesanan').val(Id);
        $('#pesan').html('Yakin ingin menghapus data mahasiswa ' + Id + ' ?');
    })
</script>
<?= $this->endSection() ?>