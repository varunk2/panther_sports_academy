<?php

namespace App\Controllers;

use CodeIgniter\Email\Email;

class EmailController extends BaseController {
    
    public function sendContactEmail($data){
        $email = new Email();

        echo "In Email class";
        echo "<pre>";
        print_r($data);
        echo "</pre>";//die;

        
        $email->setFrom($data['email'], $data['name']);
        $email->setTo('varunk22110@gmail.com');

        $email->setSubject($data['subject']);
        $email->setMessage($data['message']);

        $email->send(false);
        print_r($email->printDebugger());
        die;

    }
}

?>