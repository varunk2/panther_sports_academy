<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model {
    protected $table = 'contact';

    protected $allowedFields = ['name', 'phonenumber', 'email', 'subject', 'message'];

    public function saveContact($data){        
        return $this->save($data);
    }

    public function getContacts(){
        return $this->findAll();
    }
    
    public function getContactCount(){
        return count($this->findAll());
        
    }
    
    public function getContactByID($id){
        return $this->find($id);
    }
    
    public function deleteContactByID($id){
        return $this->delete($id);
    }
}

?>