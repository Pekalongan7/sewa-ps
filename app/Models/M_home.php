<?php

namespace App\Models;

use CodeIgniter\Model;

class M_home extends Model
{
   
    public function tot_ps()
    {
        return $this->db->table('data_penyewaan_ps')->countAll();
    }

    public function tot_pengguna()
    {
        return $this->db->table('tbl_data_user')->countAll();
    }

}
