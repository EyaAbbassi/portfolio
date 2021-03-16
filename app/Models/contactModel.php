<?php  namespace App\Models;
use CodeIgniter\model;


class contactModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'contact';
	protected $primaryKey='id_contact';
	protected $returnType = 'array' ;

	protected $allowedFields=['name','email','phone','message'];
	}

 ?>