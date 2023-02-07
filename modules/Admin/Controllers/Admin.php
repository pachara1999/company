<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Home\Models\HomeModel;
use Modules\Home\Models\ContactModel;


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
        $HomeModel = new HomeModel();
        $data['menubars'] = $HomeModel->getNavbar('nav');
        return view('Modules\Admin\Views\menubar\index', $data);
    }

    public function saveMenubar()
    {
        $input = $this->request->getPost();

        $HomeModel = new HomeModel();
        $HomeModel = $HomeModel->saveMenu($input);

        return redirect()->to('/admin/menu-bar');
    }

    public function saveLogo()
    {
        $file = $this->request->getFile('image_path');
        if ($file->isValid()) {
            $randomName = $file->getRandomName();
            $data['fileName'] = $file->getName();
            $data['randomName'] = $randomName;
            $data['fileType'] = $file->getClientMimeType();
            $data['fileSize'] = $file->getSize();
            $file->move('public/asset/img/logo', $randomName);
            $env_path = 'public/asset/img/logo/'.$randomName;
            $input['image_path'] = $env_path;
        }

        $HomeModel = new HomeModel();
        $HomeModel = $HomeModel->saveLogo($input);
        return redirect()->to('/admin/menu-bar');
    }

    // Footer
    public function manage_footer(){
        $HomeModel = new HomeModel();
        $data['footer_copyright'] = $HomeModel->getFooter('footer', 'copyright');
        $data['footer_contact'] = $HomeModel->getFooter('footer', 'contact');
        $data['footer_credit'] = $HomeModel->getFooter('footer', 'credit');
        return view('Modules\Admin\Views\menubar\manage_footer', $data);
    }

    public function saveFooter(){
        $HomeModel = new HomeModel();
        $input = $this->request->getPost();
        
        for ($i = 0 ; $i <= count($input) ; $i++){
            $data = [
                'id' => $input['id'][$i],
                'name' => $input['name'][$i],
            ];
            // echo "<pre>" ;
            // print_r($data);
            $HomeModel->saveFooter($data);
        }
        // exit;
        return redirect()->to(base_url('/admin'));
    }

    // Contact
    public function contact_index(){
        $ContactModel = new ContactModel();
        $data['contacts'] = $ContactModel->getContact();
        return view('Modules\Admin\Views\contact', $data);
    }

    public function deleteContact(){
        $input = $this->request->getPost();
        
        $ContactModel = new ContactModel();
        $result = $ContactModel->deleteContact($input['id']);

        return $this->response->setJSON($result);
    }
}
