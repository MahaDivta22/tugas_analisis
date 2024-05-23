<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class ModelUser extends Model{
        protected $DBGroup          = 'default';
        protected $table          = 't_user';
        protected $primaryKey          = 'username';
        protected $useAutoIncrement = false;
        protected $insertID         = 0;
        protected $returnType       = 'array';
        protected $protectFields    = true;
        protected $allowedFields    = [
           "username", "password", "level_id"];

            //dates
            protected $useTimestamps          = false;
            protected $dateFormat          = 'datetime';
            protected $createdField          = 'created_ad';
            protected $updateField          = 'tgl_update';
            protected $deletedField          = 'deleted_at';
    }
?>