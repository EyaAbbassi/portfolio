<?php namespace App\Controllers;
use App\Models\aboutModel;
use App\Models\certificationModel;
use App\Models\formationModel;
use App\Models\competenceModel;
use App\Models\projetModel;
use App\Models\interetModel;


use CodeIgniter\Controller;
class Home extends BaseController
{
	
		public function index()

	{
		$data = [];

		$model = new aboutModel();
		$data['about']= $model->findAll();

		$certificationModel = new certificationModel();
  		$data['certification']= $certificationModel->findAll();

  		$formationModel = new formationModel();
	   	$data['formation']= $formationModel->findAll();


        $competenceModel = new competenceModel();
		$data['competence']= $competenceModel->findAll();


        $interetModel = new interetModel();
		$data['interet']= $interetModel->findAll();

       	$Model = new projetModel();
		$data['projet']= $Model->findAll();



		echo view('templates/header', $data);
		echo view('homeView',$data);
		}

	//--------------------------------------------------------------------

} 
