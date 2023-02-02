<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Home\Models\HomeModel;
class Admin extends BaseController
{
    public function index()
    {
        $HomeModel = new HomeModel();
        $data['content'] = $HomeModel->getAllContent();
        return view('Modules\Admin\Views\index', $data);
    }

    public function saveContent(){
        $input = $this->request->getPost();
        $HomeModel = new HomeModel();
        $HomeModel = $HomeModel->saveContent($input);
        
        return redirect()->to('/admin');
    }

    // menu bar 
    public function menu_bar(){
        return view('Modules\Admin\Views\menubar\index');
    }
}
