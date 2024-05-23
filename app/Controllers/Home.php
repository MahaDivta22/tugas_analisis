<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function indexuser()
    {
        return view('landingpage/home');
    }
    

    public function ceklogin() {

        $session = session();
        $user = new ModelUser();
        $uname = $this->request->getVar('username');
        $pasw = md5($this->request->getVar('password'));
        $ada = $user->where("username = '$uname' AND password = '$pasw'")->first();
        if ($ada) {

            $session->set('username', $ada['username']);
            $session->set('password', $ada['password']);
            $session->set('level_id', $ada['level_id']);

            return redirect()->to(base_url('./produk'));
        } else {
            $session->setFlashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h10><i class="icon fas fa-xmark"></i>Username/password salah</h10>
            </div>'
            );
        }
        return redirect()->to(base_url('.'));
    }

    public function menu()
    {
        $session = session();
        if($session->get('username') != NULL){
            return view('template/v_template');
        } else {
            return redirect()->to(base_url('.'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('.'));
    }

}
