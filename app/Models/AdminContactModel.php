<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminContactModel extends Model {
    protected $table = 'contact';

    public function saveContact($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        return $this->save($data);
    }
}

?>