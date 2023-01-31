<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Models\EmployeeModel;

class Employee extends BaseController
{
    public function index()
    {
        $EmployeeModel = new EmployeeModel;
        $data['data'] = $EmployeeModel->getEmployee();
        return view('Modules\Admin\Views\Employee\index', $data);
    }

    public function manage($id = ''){
        $EmployeeModel = new EmployeeModel;
        $data['data'] = $EmployeeModel->getEmployee($id);
        return view('Modules\Admin\Views\Employee\manage', $data);
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
            $file->move('public/asset/img/employee', $randomName);

            $input['image_path'] = $randomName;
        }
        
        $EmployeeModel = new EmployeeModel;
        $EmployeeModel->saveEmployee($input);

        return redirect()->to(base_url('admin/employee/'));
    }

    public function deleteEmployee(){
        $input = $this->request->getPost();
        
        $EmployeeModel = new EmployeeModel;
        $result = $EmployeeModel->deleteEmployee($input['id']);

        return $this->response->setJSON($result);
    }
}
