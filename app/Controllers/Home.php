<?php

namespace App\Controllers;

use App\Controllers\EmailController;
use App\Models\ContactModel;
use App\Models\AcademyStudentsModel;
use App\Models\VisitorsCountModel;
use App\Models\ContactPageModel;
use App\Models\ThankyoupageModel;
use App\Models\HomePageModel;
use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController {	

	public function index() {
		$homePageModel = new HomePageModel();
		// $visitorsCountModel = new VisitorsCountModel();
		// $visitorsCountModel->saveIPAddress([
		// 	'ip_address' => getIPAddress(),
		// 	'visit_date' => date("d-m-Y H:i:sa"),
		// ]);

		$visitorsCount = 0;//$visitorsCountModel->getVisitorsCount()

		$data = [
			'content'       => $homePageModel->getData()['content'],
			'visitorsCount' => 0
		];		
		
		return view('index', $data);
	}
	
	public function view($page){
		$visitorsCountModel = new VisitorsCountModel();

		$data = [
			'page'          => $page,
			'visitorsCount' => $visitorsCountModel->getVisitorsCount(),
		];

		switch($page){
			case "contact":
				$contactPageModel = new ContactPageModel();
				$data['data'] = $contactPageModel->getData();

				break;

			case "thankyou":
				$thankYouPageModel = new ThankyoupageModel();
				$data['content'] = $thankYouPageModel->getData()['content'];

				break;
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";die;

		return view('index', $data);
	}
	
	public function contact(){
		$contactModel = new ContactModel();
		$email = new EmailController();		
		$request = service('request');		

		$jsonData = $request->getJSON(true);		

		$data = [
			'name'        => $jsonData['name'],
			'phonenumber' => $jsonData['phone_no'],
			'email'       => $jsonData['email'],
			'subject'     => $jsonData['subject'],
			'message'     => $jsonData['message'],
			'created_at'  => date("d-m-Y H:i:sa"),
		];

		if($contactModel->saveContact($data)/* && $email->sendContactEmail($data)*/){
			return json_encode([
				'status'  => 'success',
				'message' => 'Thank you for contacting us. Someone from our team will contact you shortly.'
			]);
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
