<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_laporan_admin;

class Laporan_admin extends BaseController
{
    protected $M_laporan_admin;
  

    public function __construct()
    {
        return $this->M_laporan_admin = new M_laporan_admin();
      
    }
    public function index()
    {
        $data = [
            'title' => 'Laporan Produk',
            'title2' => 'Laporan Admin',
            'data_laporan_admin' => $this->M_laporan_admin->get_laporan_admin(),
            'isi' => 'laporan_admin/v_laporan_admin',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Data Laporan Admin',
            'title2' => 'Laporan Produk Admin',
           
            'isi' => 'laporan_admin/v_add',
        );
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        if ($this->validate([
            'id_distribusi' => [
                'label' => 'Jumlah Distribusi Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_distribusi' => [
                'label' => 'Tanggal Distribusi Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_produk' => [
                'label' => 'Nama Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_cabang' => [
                'label' => 'Nama Cabang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],

        ])) {
            //Jika valid
            $data = [
                'id_distribusi' => $this->request->getPost('id_distribusi'),
                'id_distribusi' => $this->request->getPost('id_distribusi'),
                'id_produk' => $this->request->getPost('id_produk'),
                'id_cabang' => $this->request->getPost('id_cabang'),
            ];
            $this->M_laporan_admin->add($data);
            session()->setFlashdata('pesan', 'Data Laporan Produk Berhasil Ditambahkan !!!');
            return redirect()->to(base_url('laporan_admin'));
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('laporan_admin/add'));
        }
    }

    public function delete($id_laporan)
    {
        $data = [
            'id_laporan' => $id_laporan,
        ];
        $this->M_laporan_admin->delete_data($data);
        session()->setFlashdata('pesan', 'Data Laporan Produk Berhasil Di Hapus !!!');
        return redirect()->to(base_url('laporan_admin'));
    }

    public function cetak_laporan()
    {
        $data = [
            'title' => 'Cetak Laporan',
            'data_laporan_admin' => $this->M_laporan_admin->get_laporan_admin(),
         
        ];
        return view('laporan_admin/v_cetak_laporan_admin', $data);
    }
}
