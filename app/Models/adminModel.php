<?php namespace app\Models;

use CodeIgniter\model;

class adminModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'admin';
	protected $primaryKey='id_admin';
	protected $returnType = 'array' ;
	protected $useTimestamps =true;
	protected $allowedFields=['pseudo','email','password'];


	}

 ?>