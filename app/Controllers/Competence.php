<?php namespace App\Controllers;

use App\Models\competenceModel;
use CodeIgniter\Controller;

class Competence extends Controller {

            
    public function display(){

       if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        echo view('templates/header');

          $competenceModel = new competenceModel();

      $data['competence']= $competenceModel->findAll();
    
      echo view('competence/competenceView',$data);
        echo view('templates/footer');
  
   
}

 public function add()
    {     if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
         echo view('templates/header');
         echo view('competence/competenceAdd');
         echo view('templates/footer');
    }

 public function save()
    {   if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new competenceModel();

        $data = [

            'nom' => $this->request->getVar('nom'),
            'niveau'  => $this->request->getVar('niveau')
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('Competence/display') );
    }



    public function edit($id_langage = null)
    { if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     
     $model = new competenceModel();

     $data['competence'] = $model->where('id_langage', $id_langage)->first();

     echo view('templates/header');
     echo view('competence/competenceEdit', $data);
     echo view('templates/footer');
    }



    public function update()
    {   if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new competenceModel();

        $id = $this->request->getVar('id_langage');

        $data = [

            'nom' => $this->request->getVar('nom'),
            'niveau'  => $this->request->getVar('niveau')
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('Competence/display') );
    }



    public function delete($id_langage = null)
    { if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

    $model = new competenceModel();
     
    $data['competence'] = $model->where('id_langage', $id_langage)->delete();
     
    return redirect()->to( base_url('Competence/display') );
    
 }
    


}
 
?>

	
   