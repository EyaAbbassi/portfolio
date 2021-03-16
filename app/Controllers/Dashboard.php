<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('dashboard');
		echo view('templates/footer');
	}

public function logout(){
		session()->destroy();
		return redirect()->to('/portfolio11/public/');
	}
	

}
?>
