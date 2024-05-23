<?php

namespace App\Controllers;

use App\Models\ModelProduk;
use App\Models\ModelPemesanan;
use App\Models\ModelLaporan;
use App\Models\ModelUser;

class Pemesanan extends BaseController
{
    public function index()
    {
        $session = session();
        $pemesanan = new ModelPemesanan();
        $produkk = new ModelProduk();
        $laporan = new ModelLaporan();
        $Users = new ModelUser();
        if ($session->get('username') != NULL) {
            $data = [
                'pemesans' => $pemesanan->findAll(),
                'pemesans' => $pemesanan->getpesan(),
                'produks' => $produkk->findAll(),
                'laporans' => $laporan->findAll(),
                'users' => $Users->findAll(),
            ];
            return view('pemesan/v_pemesan', $data);
        } else {
            return redirect()->to(base_url('.'));
        }
    }


    public function indexpesan()
    {
        $pemesanan = new ModelPemesanan();
        $produk = new ModelProduk();
        $data = [
            'pemesans' => $pemesanan->findAll(),
            'pemesans' => $pemesanan->getpesan(),
            'produks' => $produk->findAll(),
        ];
        return view('pemesanan_user/v_pesan', $data);
    }


        public function simpandata_user() {
            $session = session();
            $Idd_l = $this->request->getVar('orderId');
            // $Id_p = $this->request->getVar('Id_produk');
            $Nama_b = $this->request->getVar('Id_produk');
            $Nama_p = $this->request->getVar('customerName');
            $Address = $this->request->getVar('address');
            $phone = $this->request->getVar('phoneNumber');
            $total = $this->request->getVar('totalhargaa');
            $Statuss = $this->request->getVar('Status');
            $create = $this->request->getVar('Created_at');
            $data = [
                'id_pemesanan' => $Idd_l,
                // 'id_produk' => $Id_p,
                'id_produk' => $Nama_b,
                'nama_pemesan' => $Nama_p,
                'alamat' => $Address, 
                'no_hp' => $phone,
                'total_harga' => $total,
                'status' => $Statuss,
                'create_at' => $create
            ];
        //    dd($data);
            $pemesans = new ModelPemesanan();
            $ada = $pemesans->where('id_pemesanan', $Idd_l)->first();
            if (!$ada) {
                $pemesans->insert($data);
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
                    <h10><i class="icon fas fa-xmark"></i>Gagal, Jurusan ini sudah ada!</h10>
                </div>'
                );
            }

            return redirect()->to('pemesan');
        }

    public function updatedata()
    {
        $session = session();
        $id = $this->request->getVar('IdPemesanan');
        $Nama_b = $this->request->getVar('Id_produk');
        $Nama_L = $this->request->getVar('Nama_pemesan');
        $alamatt = $this->request->getVar('Alamat');
        $No_hp = $this->request->getVar('NO_HP');
        $Totall = $this->request->getVar('Total');
        $Statuss = $this->request->getVar('Status');
        // $Usernamee = $this->request->getVar('Username');
        $data = [
            'id_produk' => $Nama_b,
            'nama_pemesan' => $Nama_L,
            'alamat' => $alamatt,
            'no_hp' => $No_hp,
            'total_harga' => $Totall,
            'status' => $Statuss,
        ];
dd($data);

        $where = [
            'id_pemesanan' => $id
        ];
        $pemesanan = new ModelLaporan();
        $pemesanan->update($where, $data); //update data
        $session->setFlashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Sukses
            Update Data Pemesan.</h5>
            </div>'
        );
        return redirect()->route('pemesanan');
    }

    public function deletedata()
    {
        $session = session();
        $pemesanan = new ModelPemesanan();
        $where = [
            'id_pemesanan' => $this->request->getVar('Id_pemesanan')
        ];

        $pemesanan->delete($where); //delete data
        $session->setFlashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Sukses,
        Hapus data Pemesan.</h5>
        </div>'
        );
        return redirect()->route('pemesanan');
    }
}
