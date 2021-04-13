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
			'queries' => $contactModel->getContacts(),
		];
		
		return view('admin/index', $data);
	}
	
	public function contactQuery($id){
		$contactModel = new ContactModel();

		$data = [
			'page'  => 'contactquery',
			'query' => $contactModel->getContactByID($id),
		];
		
		return view('admin/index', $data);
	}

	public function deleteContactQuery($id){
		$contactModel = new ContactModel();

		if($contactModel->deleteContactByID($id)){
			$data = [
				'page'    => 'contactquerieslist',
				'queries' => $contactModel->getContacts(),
				'message' => "success",
			];
		} else {
			$data = [
				'page'    => 'contactquerieslist',
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
			'queries' => $academyStudentsModel->getCricketStudentsList(),
		];
		
		return view('admin/index', $data);
	}
	
	public function footballList(){
		$academyStudentsModel = new AcademyStudentsModel();

		$data = [
			'page'    => 'footballlist',
			'queries' => $academyStudentsModel->getFootballStudentsList(),
		];
		
		return view('admin/index', $data);
	}
	
	public function bodyFitnessList(){
		$academyStudentsModel = new AcademyStudentsModel();

		$data = [
			'page'    => 'bodyfitnesslist',
			'queries' => $academyStudentsModel->getFootballStudentsList(),
		];		
		
		return view('admin/index', $data);
	}

}
