<?php   namespace App\Models;
use CodeIgniter\model;

class interetModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'interet';
	protected $primaryKey='id_interet';
	protected $returnType = 'array' ;
	protected $allowedFields=['nom','about'];
	}

 ?>