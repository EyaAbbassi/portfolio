<?php namespace App\Controllers;

use App\Models\formationModel;
use CodeIgniter\Controller;

class Formation extends Controller {

            
    public function display(){
        if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        
      $formationModel = new formationModel();

      $data['formation']= $formationModel->findAll();

      echo view('templates/header');
     
      echo view('formation/formationView',$data);
      echo view('templates/footer');
  
   
}

 public function add()
    {      if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
         echo view('templates/header');
         echo view('formation/formationAdd');
         echo view('templates/footer');
    }

 public function save()
    {    if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new formationModel();

        $data = [

            
            'niveau'  => $this->request->getVar('niveau'),
            'ecole' => $this->request->getVar('ecole'),
            'date'  => $this->request->getVar('date'),
            'lieux'  => $this->request->getVar('lieux')
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('Formation/display') );
    }



    public function edit($id_formation = null)

    {  if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     
     $model = new formationModel();

     $data['formation'] = $model->where('id_formation', $id_formation)->first();

     echo view('templates/header');
     echo view('formation/formationEdit', $data);
     echo view('templates/footer');
    }



    public function update()
    {  

 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        helper(['form', 'url']);
        
        $model = new formationModel();

        $id = $this->request->getVar('id');

        $data = [

           
            'niveau'  => $this->request->getVar('niveau'),
            'ecole' => $this->request->getVar('ecole'),
            'date' => $this->request->getVar('date'),
            'lieux'  => $this->request->getVar('lieux')
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('Formation/display') );
    }



    public function delete($id_formation = null)
    {
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
    $model = new formationModel();
     
    $data['formation'] = $model->where('id_formation', $id_formation)->delete();
     
    return redirect()->to( base_url('Formation/display') );
    
 }
    


} ?>