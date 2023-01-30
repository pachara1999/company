<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;
use Modules\Auth\Models\AuthModel;

class Auth extends BaseController
{
    public function signin()
    {
        return view('Modules\Auth\Views\signin');
    }

    public function loginAuth()
    {
        $session = session();
        $authModel = new AuthModel;

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        $user = $authModel->getUser($username);

        if ($user) {
            $pass_hash = $user['password'];
            $authenPassword = password_verify($password, $pass_hash);

            if ($authenPassword) {

                $ses_data = [
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => TRUE,
                ];

                $session->set($ses_data);
                return redirect()->to(base_url('/'));
            } else {
                $session->setFlashdata('msg', 'คุณกรอกรหัสผ่านผิด');
                return redirect()->to('login');
            }
        }
        $session->setFlashdata('msg', 'ไม่พบชื่อผู้ใช้งานนี้');
        return redirect()->to('login');
    }

    public function logout()
    {
        $session = session();
        $session->set(array('name' => '', 'isLoggedIn' => FALSE));
        // $session->destroy();
        return redirect()->to(base_url('/'));
    }

    // public function add(){
    //     $input = array();
    //     $input = [
    //         'username' => 'admin@admin.com',
    //         'password' => '@dminXSW@',
    //         'create_at' => date('Y-m-d'),
    //         'is_active' => '1'
    //     ] ;

    //     $authModel = new AuthModel;

    //     $authModel->addUser($input);
    // }
}
