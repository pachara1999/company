<?php

namespace Modules\Home\Models;

use CodeIgniter\Model;

class PulsecheckModel extends Model
{
    protected $table      = "";
    protected $primaryKey = "";
    protected $allowedFields = [];

    function getPulsecheck($id = ''){
        $builder = $this->db->table('pulsecheck');
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

    function addPulsecheck($input){
        $builder = $this->db->table('pulsecheck');

        $builder->set('company_name', $input['company_name']);
        $builder->set('company_descripttion', $input['company_descripttion']);
        $builder->set('company_location', $input['company_location']);
        $builder->set('capital_raised', $input['capital_raised']);
        $builder->set('annual_revenue', $input['annual_revenue']);
        $builder->set('fname', $input['fname']);
        $builder->set('lname', $input['lname']);
        $builder->set('title', $input['title']);
        $builder->set('email', $input['email']);

        if(!empty($input['African'])){
            $builder->set('African', 1);
        }
        if(!empty($input['Female'])){
            $builder->set('Female', 1);
        }
        if(!empty($input['Non-Binary'])){
            $builder->set('Non-Binary', 1);
        }
        if(!empty($input['Hispanic/Latinx'])){
            $builder->set('Hispanic/Latinx', 1);
        }
        if(!empty($input['LGBTQ'])){
            $builder->set('LGBTQ', 1);
        }
        if(!empty($input['Living'])){
            $builder->set('Living', 1);
        }
        if(!empty($input['Native_American'])){
            $builder->set('Native_American', 1);
        }
        if(!empty($input['Other'])){
            $builder->set('Other', 1);
        }

        $builder->set('other_detail', $input['other_detail']);
        $builder->set('about_us', $input['about_us']);
        $builder->set('submit_date', date('Y-m-d'));
        $builder->insert();
    }

    function deletePulsecheck($id){
        $builder = $this->db->table('pulsecheck');
        $builder->set('is_active', 0);
        $builder->where('id', $id);
        $builder->update();
        $result = [
            'status' => 'success'
        ];
        return $result;
    }

}
