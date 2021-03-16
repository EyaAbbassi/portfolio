<?php  namespace App\Models;
use CodeIgniter\model;

class competenceModel extends Model {

	protected $dbgroup ='default';
	protected $table = 'competence';
	protected $primaryKey='id_langage';
	protected $returnType = 'array' ;
	protected $allowedFields=['nom','niveau'];
	
	}

 ?>