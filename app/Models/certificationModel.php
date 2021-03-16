<?php  namespace App\Models;
use CodeIgniter\model;

class certificationModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'certification';
	protected $primaryKey='id_certification';
	protected $returnType = 'array' ;
	protected $allowedFields=['specialite','ecole','date','lieux'];
	
	}

 ?>