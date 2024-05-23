<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class ModelLaporan extends Model{
        protected $DBGroup          = 'default';
        protected $table          = 't_laporan';
        protected $primaryKey          = 'id_laporan';
        protected $useAutoIncrement = false;
        protected $insertID         = 0;
        protected $returnType       = 'array';
        protected $protectFields    = true;
        protected $allowedFields    = [
           "id_laporan", "date", "total_penjualan", "id_produk"];

            //dates
            protected $useTimestamps          = false;
            protected $dateFormat          = 'datetime';
            protected $createdField          = 'created_ad';
            protected $updateField          = 'tgl_update';
            protected $deletedField          = 'deleted_at';

            public function getpinjam() {
                return $this->db->table('t_laporan')
                    ->select('t_laporan.*, t_produk.nama_barang')
                    ->JOIN ('t_produk', ' t_produk.id_produk = t_laporan.id_produk')
                    ->get()->getResultArray();
    }

  
}
?>
