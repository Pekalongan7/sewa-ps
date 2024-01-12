<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_home;

class Home extends BaseController
{
    protected $M_home;

    public function __construct()
    {
        return $this->M_home = new M_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Administrator',
            'title2' => 'Dashboard',
            'tot_ps' => $this->M_home->tot_ps(),
            'tot_pengguna' => $this->M_home->tot_pengguna(),
        'isi' => 'v_home',
        ];
    return view('layout/v_wrapper',$data);
    }

}
