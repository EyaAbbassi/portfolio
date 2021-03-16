<?php   namespace App\Models;
use CodeIgniter\model;


class projetModel extends Model {



	protected $dbgroup ='default';
	protected $table = 'projet';
	protected $primaryKey='id_projet';
	protected $returnType = 'array' ;
	protected $allowedFields=['titre','objectif','plus_info'];
	}

 ?>