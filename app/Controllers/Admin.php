<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\ContactPageModel;
use App\Models\AcademyStudentsModel;
use CodeIgniter\HTTP\IncomingRequest;

class Admin extends BaseController {

	public function index() {
		$contactModel = new ContactModel();
		$academyStudentsModel = new AcademyStudentsModel();

		$data = [
			'title'                   => 'Dashboard',
			'contactQueries'          => $contactModel->getContactCount(),
			'cricketMembersCount'     => $academyStudentsModel->getCricketCount(),
			'footballMembersCount'    => $academyStudentsModel->getFootballCount(),
			'bodyFitnessMembersCount' => $academyStudentsModel->getBodyFitnessCount(),
		];
		
		return view('admin/index', $data);
	}
	
	public function view($page){
		return view('admin/index', ['page' => $page]);
	}
	
	public function pages($page){
		
		$data = [
			'page'  => "pages/" . $page,
		];

		switch($page){
			case "home":
				$data['title'] = 'Home Page';
				break;
			
			case "contact":
				$contactPageModel = new ContactPageModel();
				$data['title'] = 'Contact Page';
				$data['data'] = $contactPageModel->getData();

				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";die;

				break;
		}
		
		return view('admin/index', $data);
	}
	
	public function savePageData($page){
		$request = service('request');
		$data = $request->getJSON(true);

		$pageUri = base_url('admin/' . $data['page']);
		
		unset($data['page']);
		$data['created_at'] = date("d-m-Y H:i:sa");
		$data['updated_at'] = date("d-m-Y H:i:sa");
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";die;
		
		// $result = "";

		switch($page){
			case "home":
				$data['title'] = 'Home Page';
				break;
				
			case "contact":
				$contactPageModel = new ContactPageModel();
				$result = ($contactPageModel->saveData($data)) ? "success" : "failed";				
				break;
		}

		return json_encode(
			array(
				"result" => $result
			)
		);

		// return redirect()->to($pageUri)->with('success', 'message');
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
	
	public function cricketList(){
		$academyStudentsModel = new AcademyStudentsModel();
		
		$data = [
			'page'    => 'cricketlist',
			'title'   => 'Cricket Queries',
			'queries' => $academyStudentsModel->getCricketStudentsList(),
		];
		
		return view('admin/index', $data);
	}
	
	public function footballList(){
		$academyStudentsModel = new AcademyStudentsModel();
		
		$data = [
			'page'    => 'footballlist',
			'title'   => 'Football Queries',
			'queries' => $academyStudentsModel->getFootballStudentsList(),
		];
		
		return view('admin/index', $data);
	}
	
	public function bodyFitnessList(){
		$academyStudentsModel = new AcademyStudentsModel();
		
		$data = [
			'page'    => 'bodyfitnesslist',
			'title'   => 'Body Fitness Queries',
			'queries' => $academyStudentsModel->getBodyFitnessStudentsList(),
		];		
		
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
