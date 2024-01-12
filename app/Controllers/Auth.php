<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_auth;

class Auth extends BaseController
{
    protected $M_auth;

    public function __construct()
    {
        return $this->M_auth = new M_auth();
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
            'title2' => 'Register',
        ];
        return view('auth/v_register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'fullname' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                    'matches' => '{field} Tidak Sama !!!'
                ]
            ],
        ])) {
            // Jika valid
            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'fullname' => $this->request->getPost('fullname'),
                'level' => $this->request->getPost('level'),
            );
            $this->M_auth->save_register($data);

            session()->setFlashdata('pesan', 'Data User Berhasil Ditambahkan !!!');
            return redirect()->to(base_url('auth/register'));
        } else {
            // JIka tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register'));
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'title2' => 'Login User',
        ];
        return view('auth/v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
        ])) {
            //Jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->M_auth->login($username, $password);
            if ($cek) {
                //Jika datanya cocok
                session()->set('log', true);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('fullname', $cek['fullname']);
                session()->set('level', $cek['level']);
                session()->set('foto_user', $cek['foto_user']);
                session()->setFlashdata('pesan', 'Login Berhasil !!!');
                return redirect()->to(base_url('home'));
            } else {
                // JIka data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal, Username Atau Password Salah !!!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // JIka data tidak cocok
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('password');
        session()->remove('fullname');
   
        session()->remove('level');
        session()->remove('foto_user');
        session()->setFlashdata('pesan', 'Logout Sukses');
        return redirect()->to(base_url('auth/login'));
    }
}
