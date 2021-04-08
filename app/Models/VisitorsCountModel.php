<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorsCountModel extends Model {
    protected $table = 'visitors_count';

    protected $allowedFields = ['ip_address', 'visit_date'];

    public function saveIPAddress($data){
        // print_r($data);die;
        return $this->save($data);
    }
    
    public function getVisitorsCount(){
        return count($this->findAll());        
    }
}

?>