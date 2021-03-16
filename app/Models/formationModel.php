<?php  namespace App\Models;
use CodeIgniter\model;

class formationModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'formation';
	protected $primaryKey='id_formation';
	protected $returnType = 'array' ;
	protected $allowedFields=['niveau','ecole','date','lieux'];
	}

 ?>