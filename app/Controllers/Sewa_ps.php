<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_sewa;


class Sewa_ps extends BaseController
{
    protected $M_sewa;
 

    public function __construct()
    {
        return $this->M_sewa = new M_sewa();
       
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Sewa',
            'title2' => 'Data Sewa',
            'data_sewa' => $this->M_sewa->get_sewa(),
            'isi' => 'sewa/v_sewa',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Data Sewa',
            'title2' => 'Tambah Sewa',
          
            'isi' => 'sewa/v_add',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        if ($this->validate([
            'nama_sewa' => [
                'label' => 'Nama Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'nomor_ps' => [
                'label' => 'Nama Motif',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Dipilih !!!'
                ]
            ],
            'lama_sewa' => [
                'label' => 'Jenis Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Dipilih !!!'
                ]
            ],
            'makanan' => [
                'label' => 'Stok Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'minuman' => [
                'label' => 'Deskripsi Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
        ])) {
            
            //Jika valid
            $data = [
                'nama_sewa' => $this->request->getPost('nama_sewa'),
                'nomor_ps' => $this->request->getPost('nomor_ps'),
                'lama_sewa' => $this->request->getPost('lama_sewa'),
                'makanan' => $this->request->getPost('makanan'),
                'minuman' => $this->request->getPost('minuman'),
        
            ];
           
            $this->M_sewa->add($data);

            session()->setFlashdata('pesan', 'Data Sewa Berhasil Ditambahkan !!!');
            return redirect()->to(base_url('sewa_ps'));
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('sewa_ps/add'));
        }
    }

    public function edit($id_sewa)
    {
        $data = [
            'title' => 'Data Sewa',
            'title2' => 'Edit Sewa',
            'data_sewa' => $this->M_sewa->detailSewa($id_sewa),
        
            'isi' => 'sewa/v_edit',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_sewa)
    {
            if ($this->validate([
                'nama_sewa' => [
                    'label' => 'Nama Produk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!!'
                    ]
                ],
                'nomor_ps' => [
                    'label' => 'Nama Motif',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Dipilih !!!'
                    ]
                ],
                'lama_sewa' => [
                    'label' => 'Jenis Produk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Dipilih !!!'
                    ]
                ],
                'makanan' => [
                    'label' => 'Stok Produk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!!'
                    ]
                ],
                'minuman' => [
                    'label' => 'Deskripsi Produk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Wajib Diisi !!!'
                    ]
                ],
            ])) {
                 // Jika valid
                 $data = array(
                    'id_sewa' => $id_sewa,
                    'nama_sewa' => $this->request->getPost('nama_sewa'),
                    'nomor_ps' => $this->request->getPost('nomor_ps'),
                    'lama_sewa' => $this->request->getPost('lama_sewa'),
                    'makanan' => $this->request->getPost('makanan'),
                    'minuman' => $this->request->getPost('minuman'),
            
                );
                $this->M_sewa->edit($data);
    
                session()->setFlashdata('pesan', 'Data Jenis Produk Berhasil Di Ganti !!!');
                return redirect()->to(base_url('sewa_ps'));
            } else {
                // JIka tidak valid
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('sewa_ps/edit'));
            }
        }
          
              

    public function delete($id_sewa)
    {
        $data = [
            'id_sewa' => $id_sewa,
        ];
        $this->M_sewa->delete_data($data);
        session()->setFlashdata('pesan', 'Data Sewa Berhasil Di Hapus !!!');
        return redirect()->to(base_url('sewa_ps'));
     }
     
}
