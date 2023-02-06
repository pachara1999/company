<?php

namespace Modules\Home\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    // Navbar
    function getNavbar($group)
    {
        $builder = $this->db->table('usrm_menubar');
        $data = $builder->select('*')->where('group', $group)->get()->getResultArray();
        return $data;
    }

    function saveMenu($input)
    {
        $builder = $this->db->table('usrm_menubar');
        $builder->set('name', $input['name']);
        $builder->where('id', $input['id']);
        $builder->update();
        $result = [
            'status' => 'success',
            'text' => 'แก้ไขสำเร็จ'
        ];
        return $result;
    }

    function saveLogo($input)
    {
        $builder = $this->db->table('usrm_menubar');
        $builder->set('image_path', $input['image_path']);
        $builder->where('group', 'logo');
        $builder->update();
        $result = [
            'status' => 'success',
            'text' => 'แก้ไขสำเร็จ'
        ];
        return $result;
    }

    // Content

    function getAllContent()
    {
        $builder = $this->db->table('usrm_page')->orderBy('page, name', 'asc');
        $data = $builder->select('*')->get()->getResultArray();
        return $data;
    }

    function getContent($page, $name)
    {
        $builder = $this->db->table('usrm_page');
        $data = $builder->select('*')->where('page', $page)->where('name', $name)->get()->getRowArray();
        return $data;
    }

    function saveContent($input)
    {
        $builder = $this->db->table('usrm_page');
        $builder->set('title', $input['title']);
        $builder->set('description', $input['description']);
        if (!empty($input['image_path'])) {
            $builder->set('image_path', $input['image_path']);
        }
        $builder->where('id', $input['id']);
        $builder->update();
        $result = [
            'status' => 'success',
            'text' => 'แก้ไขสำเร็จ'
        ];
        return $result;
    }

    // footer
    function getFooter($group, $parent = ''){
        $builder = $this->db->table('usrm_menubar');
        $builder->select('*');
        $builder->where('group', $group);
        if($parent){
            $builder->where('parent', $parent);
            $data = $builder->get()->getRowArray();
        }else{
            $data = $builder->get()->getResultArray();
        }

        return $data;
    }

    function saveFooter($input){
        $builder = $this->db->table('usrm_menubar');
        $builder->set('name', $input['name']);
        $builder->where('id', $input['id']);
        $builder->update();
    }
}
