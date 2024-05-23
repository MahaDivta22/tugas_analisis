<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class ModelPemesanan extends Model{
        protected $DBGroup          = 'default';
        protected $table          = 't_pemesanan';
        protected $primaryKey          = 'id_pemesanan';
        protected $useAutoIncrement = false;
        protected $insertID         = 0;
        protected $returnType       = 'array';
        protected $protectFields    = true;
        protected $allowedFields    = [
           "id_pemesanan", "id_produk" ,"nama_pemesan", "alamat", "no_hp", "total_harga", "status", "created_at"];

            //dates
            protected $useTimestamps          = false;
            protected $dateFormat          = 'datetime';
            protected $createdField          = 'created_ad';
            protected $updateField          = 'tgl_update';
            protected $deletedField          = 'deleted_at';

            public function getpesan() {
                return $this->db->table('t_pemesanan')
                    ->select('t_pemesanan.*, t_produk.nama_barang')
                    ->JOIN ('t_produk', 't_pemesanan.id_produk = t_produk.id_produk')
                    ->get()->getResultArray();
    }
    }
?>
