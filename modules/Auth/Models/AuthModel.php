<?php 
namespace Modules\Auth\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];


    // function addUser($input){
    //     $builder = $this->db->table('user') ;

    //     if (!empty($input['id'])) {
    //         $builder->where('id', $input['id']);
    //         $builder->update($input);
    //     } else {
    //         $input['password'] = password_hash($input['password'], PASSWORD_BCRYPT);
    //         $builder->insert($input);
    //     }
    // }

    function getUser($username){
        $builder = $this->db->table('user');

        $builder->select('*');
        $builder->where('username', $username);
        $data = $builder->get()->getRowArray();

        return $data;
    }
}