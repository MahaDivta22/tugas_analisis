<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class ModelProduk extends Model{
        protected $DBGroup          = 'default';
        protected $table          = 't_produk';
        protected $primaryKey          = 'id_produk';
        protected $useAutoIncrement = false;
        protected $insertID         = 0;
        protected $returnType       = 'array';
        protected $protectFields    = true;
        protected $allowedFields    = [
           "id_produk", "nama_barang", "stok", "harga", "deskripsi"];

            //dates
            protected $useTimestamps          = false;
            protected $dateFormat          = 'datetime';
            protected $createdField          = 'created_ad';
            protected $updateField          = 'tgl_update';
            protected $deletedField          = 'deleted_at';

            
    }
?>