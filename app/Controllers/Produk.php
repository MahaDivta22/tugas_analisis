<?php

namespace App\Controllers;
use App\Models\ModelProduk;

class Produk extends BaseController
{
    public function index()
    {
        $session = session();
        $produk = new ModelProduk();

        if ($session->get('username') != NULL) {
        $data = [
            'produks'=> $produk->findAll(),
        ];
        return view('produk/v_produk', $data);
    } else {
        return redirect()->to(base_url('.'));
        }
    }

    public function simpandata() {
        $session = session();
        $Id = $this->request->getVar('id');
        $nama = $this->request->getVar('Nama');
        $stok = $this->request->getVar('Stok');
        $harga = $this->request->getVar('Harga');
        $deskripsi = $this->request->getVar('Deskripsi');
        $data = [
            'id_produk' => $Id,
            'nama_barang' => $nama,
            'stok' => $stok,
            'harga' => $harga,  
            'deskripsi' => $deskripsi       
        ];
        $produk = new ModelProduk();
        $ada = $produk->where('id_produk',$Id)->first();
        if (!$ada) {
            $produk->insert($data);
            $session->setFlashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h10><i class="icon fas fa-check"></i>Sukses Simpan Data Jurusan.</h10>
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
        return redirect()->to('produk');
    }

    public function updatedata() {
        $session = session();
        $Id = $this->request->getVar('id');
        $nama = $this->request->getVar('Nama');
        $stok = $this->request->getVar('Stok');
        $harga = $this->request->getVar('Harga');
        $deskripsi = $this->request->getVar('Deskripsi');
        $data = [
            'id_produk' => $Id,
            'nama_barang' => $nama,
            'stok' => $stok,
            'harga' => $harga,
            'deskripsi' => $deskripsi
        ];
        $where = [
            'id_produk' => $Id
        ];
        $produk = new ModelProduk();
        $produk->update($where, $data);//update data
        $session->setFlashdata(
            'pesan',
                '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Sukses
            Update Data Jurusan.</h5>
            </div>'
        );
        return redirect()->route('produk');
    }

    public function deletedata() {
        $session = session();
        $produk = new ModelProduk();
        $where = [
            'id_produk' => $this->request->getVar('Id_barang')
        ];
        
        $produk->delete($where);//delete data
        $session->setFlashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Sukses,
        Hapus data Jurusan.</h5>
        </div>' 
        );
        return redirect()->route('produk');
    }
}
