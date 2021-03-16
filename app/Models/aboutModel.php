<?php namespace app\Models;

use CodeIgniter\model;

class aboutModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'about';
	protected $primaryKey='id';
	protected $returnType = 'array' ;
	
	protected $allowedFields=['photo','prenom','nom','adresse','email','linkedin','more'];


	}

 ?>