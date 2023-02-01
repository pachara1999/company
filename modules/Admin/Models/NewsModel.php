<?php 
namespace Modules\Admin\Models;

use CodeIgniter\Model;
class NewsModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    // News Category
    function getNewCategory($id='')
    {
        $builder = $this->db->table('std_news_category');
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

    function saveCategory($input)
    {
        $builder = $this->db->table('std_news_category');
        $builder->set('name', $input['name']);
        $builder->set('is_active', 1);
        if(!empty($input['id'])){
            $builder->where('id', $input['id']);
            $builder->update();
        }else{
            $builder->insert();
        }
    }

    function deleteCategory($id){
        $builder = $this->db->table('std_news_category');
        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }
}