<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('Modules\Admin\Views\index');
    }

    // menu bar 
    public function menu_bar(){
        return view('Modules\Admin\Views\menubar\index');
    }
}
