<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Admin extends BaseController {

	public function index() {
		return view('admin/index');
	}
	
	public function view($page){
		return view('admin/index', ['page' => $page]);
	}

	public function contactQueriesList(){
		$contactModel = new ContactModel();

		$data = [
			'page' => 'contactquerieslist',
			'queries' => $contactModel->getContacts(),
		];
		
		return view('admin/index', $data);
	}
	
	public function contactQuery($id){
		$contactModel = new ContactModel();

		$data = [
			'page' => 'contactquery',
			'query' => $contactModel->getContactByID($id),
		];
		
		return view('admin/index', $data);
	}

	public function deleteContactQuery($id){
		$contactModel = new ContactModel();

		if($contactModel->deleteContactByID($id)){
			$data = [
				'page' => 'contactquerieslist',
				'queries' => $contactModel->getContacts(),
				'message' => "success",
			];
		} else {
			$data = [
				'page' => 'contactquerieslist',
				'queries' => $contactModel->getContacts(),
				'message' => "failure",
			];
		}

		return view('admin/index', $data);
	}
}
