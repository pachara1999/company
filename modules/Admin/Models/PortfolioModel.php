<?php 
namespace Modules\Admin\Models;

use CodeIgniter\Model;
class PortfolioModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    function getPortfolio($id = ''){
        $builder = $this->db->table('portfolio');

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

    function savePortfolio($input){
        $builder = $this->db->table('portfolio');

        $builder->set('name', $input['name']);
        $builder->set('link', $input['link']);

        if(!empty($input['image_path'])){
            $builder->set('image_path', $input['image_path']);
        }

        if(!empty($input['id'])){
            $builder->set('update_at', date('Y-m-d'));

            $builder->where('id', $input['id']);
            $builder->update();

            $result = [
                'status' => 'success',
                'text' => 'แก้ไขข้อมูลสำเร็จ'
            ] ;
        }else{
            $builder->set('create_at', date('Y-m-d'));
            $builder->set('update_at', date('Y-m-d'));
            $builder->insert();

            $result = [
                'status' => 'success',
                'text' => 'เพิ่มข้อมูลสำเร็จ'
            ] ;
        }

        return $result;
    }

    function deletePortfolio($id){
        $builder = $this->db->table('portfolio');

        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }
}