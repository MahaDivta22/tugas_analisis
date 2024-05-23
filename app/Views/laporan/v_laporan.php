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
                                        <td> Nama Produk </td>
                                        <td> Bulan </td>
                                        <td> Total Penjualan </td>
                                        <td> AKSI </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nom = 1;
                                    foreach ($laporans as $laporan) { ?>
                                        <tr>
                                            <td><?= $nom++ ?> </td>
                                            <td><?= $laporan['nama_barang']; ?> </td>
                                            <td><?= $laporan['date']; ?> </td>
                                            <td><?= $laporan['total_penjualan']; ?> </td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-sm btn-warning edit-data" data-toggle="modal" data-target="#edit" data-id_laporan="<?= $laporan['id_laporan'] ?>" data-nama_barang="<?= $laporan['nama_barang'] ?>" data-date="<?= $laporan['date'] ?>" data-total_penjualan="<?= $laporan['total_penjualan'] ?>">
                                                    <i class="fa fa-edit"> Edit</i></button> |

                                                <button type="button" class="btn btn-sm btn-danger hapus-data" data-toggle="modal" data-target="#hapus" data-id_laporan="<?= $laporan['id_laporan'] ?>"><i class="fa fa-trash"> Hapus</i></button>
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

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/simpandata'); ?>" method="post">
                    <div class="form-group">
                        <!-- <label for="Id_l">Id Laporan</label> -->
                        <input type="hidden" class="form-control" id="Id_l" name="Id_l">
                        <label for="Nama_barang">Nama Barang</label>
                        <select class="form-control" id="Id_produk" name="Id_produk">
                            <option value="#">Pilih</option>
                            <?php foreach ($produks as $produk) : ?>
                                <option value="<?= $produk['id_produk'] ?>">
                                    <?= $produk['nama_barang'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="Bulan">Bulan</label>
                        <select id="Bulan" name="Bulan" class="form-control">
                            <option value="JANUARY">JANUARY</option>
                            <option value="FEBRUARARY">FEBRUARARY</option>
                            <option value="MARET">MARET</option>
                            <option value="APRIL">APRIL</option>
                            <option value="MAY">MAY</option>
                            <option value="JUNI">JUNI</option>
                            <option value="JULI">JULI</option>
                            <option value="AGUSTUS">AGUSTUS</option>
                            <option value="SEPTEMBER">SEPTEMBER</option>
                            <option value="OKTOBER">OKTOBER</option>
                            <option value="NOVEMBER">NOVEMBER</option>
                            <option value="DESEMBER">DESEMBER</option>  
                        </select>
                        <label for="Total">Total Penjualan</label>
                        <input type="text" class="form-control" id="Total" name="Total" placeholder="Enter stok">

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
                <h5 class="modal-title" id="exampleModalLabel">Update Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>laporan/updatedata" method="post">
                    <div class="form-group">
                        <!-- <label for="Id_l">Id Laporan</label> -->
                        <input type="hidden" class="form-control" id="IdLaporan" name="IdLaporan">
                        <!-- <label for="Id_p">Id Pemesanan</label> -->

                        <label for="Nama_barang">Nama Barang</label>
                        <select class="form-control" id="Id_produk" name="Id_produk">
                            <option value="#">Pilih</option>
                            <?php foreach ($produks as $produk) : ?>
                                <option value="<?= $produk['id_produk'] ?>">
                                    <?= $produk['nama_barang'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="Bulan">Bulan</label>
                        <select id="Bulan" name="Bulan" class="form-control">
                            <option value="JANUARY">JANUARY</option>
                            <option value="FEBRUARARY">FEBRUARARY</option>
                            <option value="MARET">MARET</option>
                            <option value="APRIL">APRIL</option>
                            <option value="MAY">MAY</option>
                            <option value="JUNI">JUNI</option>
                            <option value="JULI">JULI</option>
                            <option value="AGUSTUS">AGUSTUS</option>
                            <option value="SEPTEMBER">SEPTEMBER</option>
                            <option value="OKTOBER">OKTOBER</option>
                            <option value="NOVEMBER">NOVEMBER</option>
                            <option value="DESEMBER">DESEMBER</option>  
                        </select>
                        
                        <!-- <label for="Nama">Nama Barang</label> -->
                        
                        <label for="Total">Total Penjualan</label>
                        <input type="text" class="form-control" id="Total" name="Total" placeholder="Enter Total">
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
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>laporan/deletedata" method="post">
                <div class="modal-body">
                    <p id="pesan">Yakin Data Barang mau di hapus?</p>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="Id_l" name="Id_l">
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
            var Iddd_l = $(this).data('id_laporan');
            // var Iddd_p = $(this).data('id_pemesanan');
            var nama = $(this).data('nama_barang');
            var date = $(this).data('date');
            var total = $(this).data('total_penjualan');


            $('#edit .modal-body #IdLaporan').val(Iddd_l);
            // $('#edit .modal-body #Id_p').val(Iddd_p);
            $('#edit .modal-body #Id_produk').val(nama);
            $('#edit .modal-body #Date').val(date);
            $('#edit .modal-body #Total').val(total);

        });
    });

    $(document).on('click', '.hapus-data', function() {
        console.log("test");
        var Id = $(this).data('id_laporan');
        $('#hapus .modal-body #Id_l').val(Id);
        $('#pesan').html('Yakin ingin menghapus data mahasiswa ' + Id + ' ?');
    })
</script>
<?= $this->endSection() ?>