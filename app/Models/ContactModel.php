<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model {
    protected $table = 'contact_queries';

    protected $allowedFields = ['name', 'phonenumber', 'email', 'subject', 'message', 'created_at'];

    public function saveContact($data){        
        return $this->save($data);
    }

    public function getContacts(){
        $records = $this->findAll();
        $result = array();

        for($i = count($records)-1; $i >= 0; $i--)
            array_push($result, $records[$i]);

        return $result;
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