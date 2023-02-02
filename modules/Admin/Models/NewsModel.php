<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    // News
    function getNews($id = "", $search = array(), $limit = '')
    {
        $builder = $this->db->table('news');

        if(!empty($search['title'])){
            $builder->where('title', $search['title']);
        }

        if(!empty($search['category_id'])){
            $builder->where('category_id', $search['category_id']);
        }

        if(!empty($search['year'])){
            $builder->where('year', $search['year']);
        }

        if($limit){
            $builder->limit(($limit*9));
        }

        if ($id) {
            $builder->select('*');
            $builder->where('id', $id);
            $data = $builder->get()->getRowArray();
        } else {
            $builder->select('news.*, std_news_category.name as cateName');
            $builder->join('std_news_category', 'std_news_category.id = news.category_id', 'left');
            $builder->where('news.is_active', 1);
            $builder->orderBy('news.create_at', 'desc');
            $data = $builder->get()->getResultArray();
        }

        return $data;
    }

    function saveNews($input)
    {
        $builder = $this->db->table('news');

        if (!empty($input['image_path'])) {
            $builder->set('image_path', $input['image_path']);
        }

        $builder->set('title', $input['title']);
        $builder->set('category_id', $input['category_id']);
        $builder->set('year', $input['year']);
        $builder->set('details', $input['details']);
        $builder->set('references', $input['references']);

        if (!empty($input['id'])) {
            $builder->set('update_at', date('Y-m-d'));

            $builder->where('id', $input['id']);
            $builder->update();

            $result = [
                'status' => 'success',
                'text' => 'แก้ไขข้อมูลสำเร็จ'
            ];
        } else {
            $builder->set('create_at', date('Y-m-d'));
            $builder->set('update_at', date('Y-m-d'));

            $builder->insert();

            $result = [
                'status' => 'success',
                'text' => 'เพิ่มข้อมูลสำเร็จ'
            ];
        }

        return $result;
    }

    function deleteNews($id)
    {
        $builder = $this->db->table('news');

        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }

    // News Category
    function getNewCategory($id = '')
    {
        $builder = $this->db->table('std_news_category');
        $builder->select('*');
        if ($id) {
            $builder->where('id', $id);
            $data = $builder->get()->getRowArray();
        } else {
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
        if (!empty($input['id'])) {
            $builder->where('id', $input['id']);
            $builder->update();
        } else {
            $builder->insert();
        }
    }

    function deleteCategory($id)
    {
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
