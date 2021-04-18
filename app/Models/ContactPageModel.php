<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactPageModel extends Model {
    protected $table = 'contact_page';

    protected $allowedFields = [
        'address',
        'phonenumber',
        'email',
    ];

    public function saveData($data){
        // echo "<pre>";
		// print_r($data);
		// echo $page;
		// echo "</pre>";die;
        return $this->save($data);
    }

    public function getData(){
        return $this->findAll();
    }
}

?>