<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\EmployeeModel;
use Modules\Admin\Models\PortfolioModel;
use Modules\Admin\Models\NewsModel;
use Modules\Home\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        return view('Modules\Home\Views\index');
    }
    public function about()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('about', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('about', 'blog_2');
        $data['content_blog3'] = $HomeModel->getContent('about', 'blog_3');
        return view('Modules\Home\Views\about', $data);
    }
    public function team()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('team', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('team', 'blog_2');

        $EmployeeModel = new EmployeeModel;
        $data['employees'] = $EmployeeModel->getEmployee();
        return view('Modules\Home\Views\team', $data);
    }
    public function profireteam($id)
    {
        $EmployeeModel = new EmployeeModel;
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('team', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('team', 'blog_2');

        $data['employees'] = $EmployeeModel->getEmployee();
        $data['employee'] = $EmployeeModel->getEmployee($id);
        return view('Modules\Home\Views\profireteam', $data);
    }
    public function portfolio()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('portfolio', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('portfolio', 'blog_2');
        $PortfolioModel = new PortfolioModel;
        $data['portfolios'] = $PortfolioModel->getPortfolio();
        return view('Modules\Home\Views\portfolio', $data);
    }
    public function news()
    {
        $searh = $this->request->getGet();
        if(empty($searh['offset'])){
            $searh['offset'] = 1 ;
        }
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('news', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('news', 'blog_2');
        $NewsModel = new NewsModel();
        
        $data['news'] = $NewsModel->getNews('', $searh, $searh['offset']);
        $data['categories'] = $NewsModel->getNewCategory();

        return view('Modules\Home\Views\new', $data);
    }
    public function newsdetel()
    {
        return view('Modules\Home\Views\newsdetel');
    }
    public function contact()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('contact', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('contact', 'blog_2');
        return view('Modules\Home\Views\contact', $data);
    }
}
