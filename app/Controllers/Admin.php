<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\adminModel;


class Admin extends Controller
{
	public function index()
	{
		$data = [];
		helper(['form']);
		


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			 $rules = [
                'email' => 'required|max_length[50]|valid_email',
                'password' => 'required|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                  ]
                ];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;	}

			else {

				$model = new adminModel();

				$user = $model->where('email', $this->request->getVar('email'))->where('password', $this->request->getVar('password'))
							->first();
				 
							

   				
                if(!$user){
                    $data['error'] = 'Email or Password don\'t match';
                }
                
             	else
               {

                $this->setUserSession($user);

                return redirect()->to('dashboard');
            }

   			}
   			
}
		

		echo view('templates/header', $data);
		echo view('adminView');
		echo view('templates/footer');
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'pseudo' => $user['pseudo'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
}		
 
 ?>