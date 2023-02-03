<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\PortfolioModel;

class Portfolio extends BaseController
{
    public function index()
    {
        $PortfolioModel = new PortfolioModel;
        $data['data'] = $PortfolioModel->getPortfolio();
        return view('Modules\Admin\Views\Portfolio\index', $data);
    }

    public function manage($id = ''){
        $PortfolioModel = new PortfolioModel;
        $data['data'] = $PortfolioModel->getPortfolio($id);
        return view('Modules\Admin\Views\Portfolio\manage',$data);
    }

    public function save(){
        $input = $this->request->getPost();

        $file = $this->request->getFile('image_path');
        if ($file->isValid()) {
            $randomName = $file->getRandomName();
            $data['fileName'] = $file->getName();
            $data['randomName'] = $randomName;
            $data['fileType'] = $file->getClientMimeType();
            $data['fileSize'] = $file->getSize();
            $file->move('public/asset/img/portfolio', $randomName);

            $input['image_path'] = $randomName;
        }
        
        $PortfolioModel = new PortfolioModel;
        $PortfolioModel->savePortfolio($input);

        return redirect()->to(base_url('admin/portfolio/'));
    }

    public function deletePortfolio(){
        $input = $this->request->getPost();
        
        $PortfolioModel = new PortfolioModel;
        $result = $PortfolioModel->deletePortfolio($input['id']);

        return $this->response->setJSON($result);
    }
}
