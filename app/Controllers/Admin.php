<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\AcademyStudentsModel;

class Admin extends BaseController {

	public function index() {
		$contactModel = new ContactModel();
		$academyStudentsModel = new AcademyStudentsModel();
		
		return view(
			'admin/index',
			[
				'title'                   => 'Dashboard',
				'contactQueries'          => $contactModel->getContactCount(),
				'cricketMembersCount'     => $academyStudentsModel->getCricketCount(),
				'footballMembersCount'    => $academyStudentsModel->getFootballCount(),
				'bodyFitnessMembersCount' => $academyStudentsModel->getBodyFitnessCount(),
			]
		);
	}
	
	public function view($page){
		return view('admin/index', ['page' => $page]);
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

		if($contactModel->deleteContactByID($id)){
			$data = [
				'page'    => 'contactquerieslist',
				'title'   => 'Contact Query',
				'queries' => $contactModel->getContacts(),
				'message' => "success",
			];
		} else {
			$data = [
				'page'    => 'contactquerieslist',
				'title'   => 'Contact Query',
				'queries' => $contactModel->getContacts(),
				'message' => "failure",
			];
		}
		
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

		// echo "<pre>";
		// print_r($data);
		// // echo $url;
		// echo "</pre>";die;
		
		return view('admin/index', $data);
	}

}
