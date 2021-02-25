<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Home extends BaseController {
	
	public function index($page = "") {
		return view('index', ['page' => $page]);
	}
	
	public function contact(){
		$contactModel = new ContactModel();
		
		$data = [
			'name' => $this->request->getPost('name'),
			'phonenumber' => $this->request->getPost('phone_no'),
			'email' => $this->request->getPost('email'),
			'subject' => $this->request->getPost('subject'),
			'message' => $this->request->getPost('message'),
		];

		if($contactModel->saveContact($data)){
			echo "Contact saved successfuly!!!";
		}
	}
}