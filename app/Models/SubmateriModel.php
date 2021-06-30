<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmateriModel extends Model
{
    protected $table      = 'submateri';
    protected $primaryKey = 'id_sm';

    protected $allowedFields = ['id_sm', 'judul_sm', 'isi_sm', 'gambar_sm'];


    public function getSubmateri($id_sm = false)
    {	      
        if ($id_sm == false) {
            return $this->findAll();
        }
        return $this->where(['id_sm' => $id_sm])->first();
    }

public function update_submateri($data, $id)
{
    return $this->db->table($this->table)->update($data, ['id_sm' => $id]);
} 
}