<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\EmployeeModel;
use Modules\Admin\Models\PortfolioModel;
use Modules\Admin\Models\NewsModel;
use Modules\Home\Models\HomeModel;
use Modules\Home\Models\ContactModel;
use Modules\Home\Models\PulsecheckModel;


class Home extends BaseController
{
    public function index()
    {
        $HomeModel = new HomeModel();

        $data['menu'] = $HomeModel->getNavbar('nav');
        $menu_bar = [
            'menubar' => $data['menu']
        ];
        session()->set($menu_bar);
        $data['logo'] = $HomeModel->getNavbar('logo');
        $logo = ['logo_image' => $data['logo'][0]['image_path']];
        session()->set($logo);
        $data['footer_copyright'] = $HomeModel->getFooter('footer', 'copyright');
        $data['footer_contact'] = $HomeModel->getFooter('footer', 'contact');
        $data['footer_credit'] = $HomeModel->getFooter('footer', 'credit');
        $footer = [
            'cpr_ft' => $data['footer_copyright'],
            'contact_ft' => $data['footer_contact'],
            'credit_ft' => $data['footer_credit']
        ];
        session()->set($footer);

        $data['content_blog1'] = $HomeModel->getContent('home', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('home', 'blog_2');
        $data['content_blog3'] = $HomeModel->getContent('home', 'blog_3');
        $data['content_blog4_1'] = $HomeModel->getContent('home', 'blog_4-1');
        $data['content_blog4_2'] = $HomeModel->getContent('home', 'blog_4-2');
        $data['content_blog4_3'] = $HomeModel->getContent('home', 'blog_4-3');
        $data['content_blog5'] = $HomeModel->getContent('home', 'blog_5');
        $data['content_blog6'] = $HomeModel->getContent('home', 'blog_6');
        $data['content_blog7_1'] = $HomeModel->getContent('home', 'blog_7-1');
        $data['content_blog7_2'] = $HomeModel->getContent('home', 'blog_7-2');
        $data['content_blog8'] = $HomeModel->getContent('home', 'blog_8');

        $NewsModel = new NewsModel();
        $data['news'] = $NewsModel->getNews('', '', 4, 'home');
        $PortfolioModel = new PortfolioModel;
        $data['portfolios'] = $PortfolioModel->getPortfolio();

        return view('Modules\Home\Views\index', $data);
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
        if (empty($searh['offset'])) {
            $searh['offset'] = 1;
        }
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('news', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('news', 'blog_2');
        $NewsModel = new NewsModel();

        $data['news'] = $NewsModel->getNews('', $searh, $searh['offset'], 'news');
        $data['categories'] = $NewsModel->getNewCategory();

        return view('Modules\Home\Views\new', $data);
    }
    public function newsdetel($id)
    {
        $NewsModel = new NewsModel;
        if ($id) {
            $data['data'] = $NewsModel->getNews($id);
        }
        return view('Modules\Home\Views\newsdetel', $data);
    }

    public function contact()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('contact', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('contact', 'blog_2');
        $data['content_blog3'] = $HomeModel->getContent('contact', 'blog_3');
        return view('Modules\Home\Views\contact', $data);
    }

    public function addContact()
    {
        $ContactModel = new ContactModel;
        $input = $this->request->getPost();
        $ContactModel->addContact($input);
        return redirect()->to(base_url('/'));
    }

    public function pulsecheck()
    {
        $HomeModel = new HomeModel();
        $data['content_blog1'] = $HomeModel->getContent('project', 'blog_1');
        $data['content_blog2'] = $HomeModel->getContent('project', 'blog_2');
        return view('Modules\Home\Views\pulsecheck', $data);
    }

    public function addPulsecheck(){
        $PulsecheckModel = new PulsecheckModel();
        $input = $this->request->getPost();
        $PulsecheckModel->addPulsecheck($input);
        return redirect()->to(base_url('/'));
    }
}
