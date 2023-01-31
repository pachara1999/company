<?php 
namespace Modules\Admin\Models;

use CodeIgniter\Model;
use PDO;

class EmployeeModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    function getEmployee($id = ''){
        $builder = $this->db->table('employee');

        $builder->select('*');
        if($id){
            $builder->where('id', $id);
            $data = $builder->get()->getRowArray();
        }else{
            $builder->where('is_active', 1);
            $data = $builder->get()->getResultArray();
        }

        return $data;
    }

    function saveEmployee($input){
        $builder = $this->db->table('employee');

        $builder->set('name', $input['name']);
        $builder->set('position', $input['position']);
        $builder->set('remark', $input['remark']);

        if(!empty($input['image_path'])){
            $builder->set('image_path', $input['image_path']);
        }

        if(!empty($input['id'])){
            $builder->set('create_at', date('Y-m-d'));
            $builder->set('update_at', date('Y-m-d'));

            $builder->where('id', $input['id']);
            $builder->update();

            $result = [
                'status' => 'success',
                'text' => 'แก้ไขข้อมูลสำเร็จ'
            ] ;
        }else{

            $builder->set('update_at', date('Y-m-d'));
            $builder->insert();

            $result = [
                'status' => 'success',
                'text' => 'เพิ่มข้อมูลสำเร็จ'
            ] ;
        }

        return $result;
    }

    function deleteEmployee($id){
        $builder = $this->db->table('employee');

        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }
}