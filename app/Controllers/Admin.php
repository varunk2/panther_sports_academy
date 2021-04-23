<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\ContactPageModel;
use App\Models\HomePageModel;
use App\Models\ThankyoupageModel;
use App\Models\AcademyStudentsModel;
use CodeIgniter\HTTP\IncomingRequest;

class Admin extends BaseController {

	public function index() {
		$contactModel = new ContactModel();
		$academyStudentsModel = new AcademyStudentsModel();

		$data = [
			'title'                   => 'Dashboard',
			'contactQueries'          => $contactModel->getContactCount(),
			'cricketMembersCount'     => $academyStudentsModel->getRegistrationsCount('cricket'),
			'footballMembersCount'    => $academyStudentsModel->getRegistrationsCount('football'),
			'bodyFitnessMembersCount' => $academyStudentsModel->getRegistrationsCount('body_fitness'),
		];
		
		return view('admin/index', $data);
	}
	
	public function view($page){
		return view('admin/index', ['page' => $page]);
	}
	
	public function pages($page){
		
		$data = [
			'page' => "pages/" . $page,
		];

		switch($page){
			case "home":
				$homePageModel = new HomePageModel();
				$data['title'] = 'Home Page';
				$data['data'] = $homePageModel->getData();
				break;
			
			case "contact":
				$contactPageModel = new ContactPageModel();
				$data['title'] = 'Contact Page';
				$data['data'] = $contactPageModel->getData();
				break;
				
			case "thankyou":
				$thankYouPageModel = new ThankyoupageModel();
				$data['title'] = 'Thank You Page';
				$data['data'] = $thankYouPageModel->getData();
				break;
		}
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";die;
		return view('admin/index', $data);
	}
	
	public function savePageData($page){
		$request = service('request');
		$data = $request->getJSON(true);

		$data['created_at'] = date("d-m-Y H:i:sa");
		$data['updated_at'] = date("d-m-Y H:i:sa");
		
		unset($data['page']);		
		
		
		switch($page){
			case "home":
				$data['content'] = $data['editor_text'];
				unset($data['editor_text']);
				
				$homePageModel = new HomePageModel();
				$result = ($homePageModel->saveData($data)) ? "success" : "failed";
				
				break;
				
			case "contact":
				$contactPageModel = new ContactPageModel();
				$result = ($contactPageModel->saveData($data)) ? "success" : "failed";
				
				break;
					
			case "thankyou":
				$data['content'] = $data['editor_text'];
				unset($data['editor_text']);
				
				$thankYouPageModel = new ThankyoupageModel();
				$result = ($thankYouPageModel->saveData($data)) ? "success" : "failed";

				break;
		}

		return json_encode(
			array(
				"result" => $result
			)
		);
	}

	public function contactQueriesList(){
		$contactModel = new ContactModel();

		$data = [
			'page'    => 'contactquerieslist',
			'title'   => 'Contact Queries',
			'queries' => $contactModel->getContacts(),
		];

		return view('admin/index', $data);
	}
	
	public function contactQuery($id){
		$contactModel = new ContactModel();

		$data = [
			'page'  => 'contactquery',
			'title' => 'Contact Query',
			'query' => $contactModel->getContactByID($id),
		];
		
		return view('admin/index', $data);
	}

	public function deleteContactQuery($id){
		$contactModel = new ContactModel();

		$data = [
			'page'    => 'contactquerieslist',
			'title'   => 'Contact Query',
			'queries' => $contactModel->getContacts(),
			'message' => ($contactModel->deleteContactByID($id)) ? "success" : "failure",
		];
		
		return view('admin/index', $data);
	}

	public function registrations($coachingType){
		$academyStudentsModel = new AcademyStudentsModel();

		switch($coachingType){
			case "cricket":
				$data = [
					'page'    => 'cricketlist',
					'title'   => 'Cricket Queries',
				];
				break;
				
			case "football":
				$data = [
					'page'    => 'footballlist',
					'title'   => 'Football Queries',
				];
				break;
			
			case "body_fitness":
				$data = [
					'page'    => 'bodyfitnesslist',
					'title'   => 'Body Fitness Queries',
				];
				break;
		}

		$data['queries'] = $academyStudentsModel->getRegistrationsList($coachingType);

		return view('admin/index', $data);
	}

	public function registrationQuery($id){
		$academyStudentsModel = new AcademyStudentsModel();

		$data = [
			'page'  => 'registrationQuery',
			'title' => 'Registration Query',
			'query' => $academyStudentsModel->getStudentInfo($id),
		];		
		
		return view('admin/index', $data);
	}

}
