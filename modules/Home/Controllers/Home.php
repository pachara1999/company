<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\EmployeeModel;
use Modules\Admin\Models\PortfolioModel;

class Home extends BaseController
{
    public function index()
    {
        return view('Modules\Home\Views\index');
    }
    public function about()
    {
        return view('Modules\Home\Views\about');
    }
    public function team()
    {
        $EmployeeModel = new EmployeeModel;
        $data['employees'] = $EmployeeModel->getEmployee();
        return view('Modules\Home\Views\team', $data);
    }
    public function profireteam($id)
    {
        $EmployeeModel = new EmployeeModel;
        $data['employees'] = $EmployeeModel->getEmployee();
        $data['employee'] = $EmployeeModel->getEmployee($id);
        return view('Modules\Home\Views\profireteam', $data);
    }
    public function portfolio()
    {
        $PortfolioModel = new PortfolioModel;
        $data['portfolios'] = $PortfolioModel->getPortfolio();
        return view('Modules\Home\Views\portfolio', $data);
    }
    public function news()
    {
        return view('Modules\Home\Views\new');
    }
    public function contact()
    {
        return view('Modules\Home\Views\contact');
    }
}
