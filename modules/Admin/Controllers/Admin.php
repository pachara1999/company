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

    public function saveContent()
    {
        $input = $this->request->getPost();

        $file = $this->request->getFile('image_path');
        if ($file->isValid()) {
            $randomName = $file->getRandomName();
            $data['fileName'] = $file->getName();
            $data['randomName'] = $randomName;
            $data['fileType'] = $file->getClientMimeType();
            $data['fileSize'] = $file->getSize();
            $file->move('public/asset/img/content', $randomName);

            $input['image_path'] = $randomName;
        }

        $HomeModel = new HomeModel();
        $HomeModel = $HomeModel->saveContent($input);

        return redirect()->to('/admin');
    }

    // menu bar 
    public function menu_bar()
    {
        return view('Modules\Admin\Views\menubar\index');
    }
}
