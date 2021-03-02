<?php

namespace App\Controllers;

use App\Controllers\EmailController;
use App\Models\ContactModel;
use App\Models\AcademyStudentsModel;

class Home extends BaseController {	

	public function index() {
		return view('index');
	}
	
	public function view($page){
		return view('index', ['page' => $page]);
	}
	
	public function contact(){
		$contactModel = new ContactModel();
		$email = new EmailController();
		
		$data = [
			'name'        => $this->request->getPost('name'),
			'phonenumber' => $this->request->getPost('phone_no'),
			'email'       => $this->request->getPost('email'),
			'subject'     => $this->request->getPost('subject'),
			'message'     => $this->request->getPost('message'),
			'created_at'  => date("d-m-Y H:i:sa"),
		];

		if($contactModel->saveContact($data)/* && $email->sendContactEmail($data)*/){
			return view(
				'index',
				[
					'page'    => 'contact',
					'message' => 'Thank you for contacting us. Someone from our team will contact you shortly.'
				]
			);
		}
	}

	public function studentRegistration($coachingType){
		$academyStudentsModel = new AcademyStudentsModel();		

		$data = [
			'name'          => $this->request->getPost('name'),
			'phonenumber'   => $this->request->getPost('phone_no'),
			'email'         => $this->request->getPost('email'),
			'school'        => ($coachingType != "body_fitness") ? $this->request->getPost('school') : "",
			'age'           => $this->request->getPost('age'),
			'date_of_birth' => $this->request->getPost('dob'),
			'gender'        => $this->request->getPost('gender'),
			'height'        => $this->request->getPost('height'),
			'weight'        => $this->request->getPost('weight'),
			'blood_group'   => $this->request->getPost('blood_group'),
			'parents_name'  => ($coachingType != "body_fitness") ? $this->request->getPost('parents_name') : "",
			'referred_by'   => $this->request->getPost('referred_by'),
			'address'       => $this->request->getPost('address'),
			'coaching_type' => $coachingType,
			'created_at'    => date("d-m-Y H:i:sa"),
			'updated_at'    => date("d-m-Y H:i:sa"),
		];

		if($academyStudentsModel->saveStudent($data)){
			return redirect()->to(base_url('thankyou'));
		}
	}
}
