<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function signin()
    {
        return view('Modules\Auth\Views\signin');
    }

    // public function loginAuth()
    // {
    //     $session = session();
    //     $memberModel = new MemberModel;

    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');


    //     $member = $memberModel->getUser($username);

    //     if ($member) {
    //         $pass_hash = $member['password'];
    //         $authenPassword = password_verify($password, $pass_hash);

    //         if ($authenPassword) {

    //             // get permission by role
    //             $roleModel = new RoleModel();
    //             $role_permission = $roleModel->getRoles($member['role_id']);

    //             $ses_data = [
    //                 'user_id' => $member['id'],
    //                 'role_id' => $member['role_id'],
    //                 'academy_id' => $member['academy_id'],
    //                 'name' => $member['fname'] . " " . $member['lname'],
    //                 'role_permiss' => $role_permission,
    //                 'isLoggedIn' => TRUE,
    //             ];

    //             $session->set($ses_data);
    //             return redirect()->to(base_url('dashboard/'));
    //         } else {
    //             $session->setFlashdata('msg', 'คุณกรอกรหัสผ่านผิด');
    //             return redirect()->to('/');
    //         }
    //     } else {
    //         // player
    //         $playerModel = new PlayerModel();
    //         $player = $playerModel->getPlayerByUsername($username);

    //         if ($player) {
    //             $pass_hash = $player['password'];
    //             $authenPassword = password_verify($password, $pass_hash);

    //             if ($authenPassword) {
    //                 // get permission by role
    //                 $roleModel = new RoleModel();
    //                 $role_permission = $roleModel->getRoles($player['role_id']);

    //                 $ses_data = [
    //                     'user_id' => $player['id'],
    //                     'role_id' => $player['role_id'],
    //                     'academy_id' => $player['academy_id'],
    //                     'name' => $player['fname'] . " " . $player['lname'],
    //                     'role_permiss' => $role_permission,
    //                     'isLoggedIn' => TRUE,
    //                 ];

    //                 $session->set($ses_data);
    //                 return redirect()->to(base_url('dashboard/'));
    //             } else {
    //                 $session->setFlashdata('msg', 'คุณกรอกรหัสผ่านผิด');
    //                 return redirect()->to('/');
    //             }
    //         } else {
    //             $session->setFlashdata('msg', 'ไม่พบชื่อผู้ใช้งานนี้');
    //             return redirect()->to('/');
    //         }
    //     }
    // }

    public function logout()
    {
        $session = session();
        $session->set(array('name' => '', 'isLoggedIn' => FALSE));
        // $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
