<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        return view('Modules\Admin\Views\News\index');
    }

    // Category
    public function category_index()
    {
        $NewsModel = new NewsModel;
        $data['data'] = $NewsModel->getNewCategory();
        return view('Modules\Admin\Views\News\category_index', $data);
    }

    public function category_add()
    {
        $input = $this->request->getPost();
        $NewsModel = new NewsModel;
        $NewsModel->saveCategory($input);

        return redirect()->to(base_url('admin/news/manage-category'));
    }

    function category_delete()
    {
        $input = $this->request->getPost();

        $NewsModel = new NewsModel;
        $result = $NewsModel->deleteCategory($input['id']);

        return $this->response->setJSON($result);
    }
}
