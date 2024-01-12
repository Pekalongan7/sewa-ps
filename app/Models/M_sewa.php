<?php

namespace App\Models;

use CodeIgniter\Model;

class M_sewa extends Model
{
    public function get_sewa()
    {
        return $this->db->table('data_penyewaan_ps')
            ->get()->getResultArray();
    }

    public function detailSewa($id_sewa)
    {
        return $this->db->table('	data_penyewaan_ps	')
            ->where('id_sewa', $id_sewa)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('	data_penyewaan_ps	')

            ->insert($data);
    }

    public function edit($data)
    {
        return $this->db->table('	data_penyewaan_ps	')

            ->where('id_sewa', $data['id_sewa'])
            ->update($data);
    }

    public function delete_data($data)
    {
        return $this->db->table('	data_penyewaan_ps	')

            ->where('id_sewa', $data['id_sewa'])
            ->delete($data);
    }
}
