<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model {
    protected $table = 'contact';

    protected $allowedFields = ['name', 'phonenumber', 'email', 'subject', 'message'];

    public function saveContact($data){
        return $this->save($data);
    }
}

?>