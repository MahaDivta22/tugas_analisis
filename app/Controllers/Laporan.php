<?php

namespace App\Controllers;
use App\Models\ModelLaporan;
use App\Models\ModelProduk;
// use App\Models\ModelPemesanan;

class Laporan extends BaseController
{
    public function index()
    {
        $session = session();
        $laporan = new ModelLaporan();
        $produkk = new ModelProduk();
        // $pemesanan = new ModelPemesanan();

        if ($session->get('username') != NULL) {
        $data = [
            'laporans'=> $laporan->findAll(),
            'laporans'=> $laporan->getpinjam(),
            'produks'=> $produkk->findAll(),

        ];
        return view('laporan/v_laporan', $data);
    } else {
        return redirect()->to(base_url('.'));
        }
    }

    // public function indexlaporan() {
    //     $laporan = new ModelLaporan();
    //     $pemesanan = new ModelPemesanan();

    //     // Query untuk mendapatkan total penjualan per barang
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('t_laporan');
    //     $builder->select('products.name, SUM(sales.quantity) as total_sold');
    //     $builder->join('products', 'sales.product_id = products.id');
    //     $builder->groupBy('products.name');
    //     $query = $builder->get();

    //     $data['sales'] = $query->getResult();

    //     return view('sales_view', $data);
    // }
    // }

    public function simpandata() {
        $session = session();
        $Idd_l = $this->request->getVar('Id_l');
        $Nama_b = $this->request->getVar('Id_produk');
        $Date = $this->request->getVar('Bulan');
        $Totall = $this->request->getVar('Total');
        $data = [
            'id_laporan' => $Idd_l,
            'id_produk' => $Nama_b,
            'date' => $Date,
            'total_penjualan' => $Totall 
        ];
    //    dd($data);
        $laporan = new ModelLaporan();
        $ada = $laporan->where('id_laporan',$Idd_l)->first();
        if (!$ada) {
            $laporan->insert($data);
            $session->setFlashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h10><i class="icon fas fa-check"></i>Sukses Simpan Data Laporan.</h10>
            </div>'
            );
        } else {
            $session->setFlashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h10><i class="icon fas fa-xmark"></i>Gagal, Laporan ini sudah ada!</h10>
            </div>'
            );
        }
        return redirect()->to('laporan');
    }

    public function updatedata() {
        $session = session();
        $Idd_l = $this->request->getVar('IdLaporan');
        // $Idd_p = $this->request->getVar('Id_p');
        $Nama_b = $this->request->getVar('Id_produk');
        $date = $this->request->getVar('Bulan');
        $total = $this->request->getVar('Total');
        $data = [
            // 'id_laporan' => $Idd_l,
            // 'id_pemesanan' => $Idd_p,
            'id_produk' => $Nama_b,
            'date' => $date,
            'total_penjualan' => $total 
        ];
        dd($data);
        $where = [
            'id_laporan' => $Idd_l
        ];
        $laporan = new ModelLaporan();
        $laporan->update($where, $data);//update data
        $session->setFlashdata(
            'pesan',
                '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Sukses
            Update Data Laporan.</h5>
            </div>'
        );
        return redirect()->route('laporan');
    }

    public function deletedata() {
        $session = session();
        $laporan = new ModelLaporan();
        $where = [
            'id_laporan' => $this->request->getVar('Id_l')
        ];
        
        $laporan->delete($where);//delete data
        $session->setFlashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Sukses,
        Hapus data Laporan.</h5>
        </div>' 
        );
        return redirect()->route('laporan');
    }
}
