<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\NewsModel;

class News extends BaseController
{
    // News
    public function index()
    {
        $NewsModel = new NewsModel;
        $data['data'] = $NewsModel->getNews();
        return view('Modules\Admin\Views\News\index', $data);
    }

    public function manage($id = "")
    {
        $NewsModel = new NewsModel;
        if ($id) {
            $data['data'] = $NewsModel->getNews($id);
        }
        $data['categories'] = $NewsModel->getNewCategory();
        return view('Modules\Admin\Views\News\manage', $data);
    }

    public function save()
    {
        $input = $this->request->getPost();

        $file = $this->request->getFile('image_path');
        if ($file->isValid()) {
            $randomName = $file->getRandomName();
            $data['fileName'] = $file->getName();
            $data['randomName'] = $randomName;
            $data['fileType'] = $file->getClientMimeType();
            $data['fileSize'] = $file->getSize();
            $file->move('public/asset/img/news', $randomName);

            $input['image_path'] = $randomName;
        }
        $NewsModel = new NewsModel;
        $NewsModel->saveNews($input);

        return redirect()->to(base_url('admin/news/'));
    }

    public function delete_new()
    {
        $input = $this->request->getPost();

        $NewsModel = new NewsModel;
        $result = $NewsModel->deleteNews($input['id']);

        return $this->response->setJSON($result);
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
