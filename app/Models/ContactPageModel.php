<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactPageModel extends Model {
    protected $table = 'contact_page';

    protected $allowedFields = [
        'address',
        'phone_number',
        'email',
        'created_at',
        'updated_at'
    ];

    public function saveData($data){
        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";die;
        return $this->save($data);
    }

    public function getData(){
        $result = $this->findAll();
        $resultCount = count($result);
        return $result[$resultCount-1];
    }
}

?>