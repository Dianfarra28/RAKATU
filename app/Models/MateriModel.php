<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'materi';
    protected $primaryKey = 'id_m';

    protected $allowedFields = ['id_m', 'judul_m', 'isi_m', 'gambar_m'];


    public function getMateri($id_m = false)
    {	      
        if ($id_m == false) {
            return $this->findAll();
        }
        return $this->where(['id_m' => $id_m])->first();
    }

    public function update_materi($data, $id)
{
    return $this->db->table($this->table)->update($data, ['id_m' => $id]);
}

}