<?php

namespace App\Models;

use CodeIgniter\Model;

class HomePageModel extends Model {
    protected $table = 'home_page';

    protected $allowedFields = [
        'content',
        'created_at',
        'updated_at'
    ];

    public function saveData($data){
        return $this->save($data);
    }

    public function getData(){
        $result = $this->findAll();
        $resultCount = count($result);
        return $result[$resultCount-1];
    }
}

?>