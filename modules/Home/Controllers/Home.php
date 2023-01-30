<?php

namespace Modules\Home\Controllers;

use App\Controllers\BaseController;

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
        return view('Modules\Home\Views\team');
    }
}
