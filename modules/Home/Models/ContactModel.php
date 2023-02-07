<?php

namespace Modules\Home\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    function getContact($id = ''){
        $builder = $this->db->table('contact');
        $builder->select('*');
        if($id){
            $builder->where('id', $id);
            $data = $builder->get()->getRowArray();
        }else{
            $builder->where('is_active', 1);
            $data = $builder->get()->getResultArray();
        }
        return $data ;
    }

    function addContact($input){
        $builder = $this->db->table('contact');
        $builder->set('firstname', $input['firstname']);
        $builder->set('lastname', $input['lastname']);
        $builder->set('email', $input['email']);
        $builder->set('subject', $input['subject']);
        $builder->set('message', $input['message']);
        $builder->set('submit_at', date('Y-m-d'));
        $builder->insert();
    }

    function deleteContact($id){
        $builder = $this->db->table('contact');

        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }

}
