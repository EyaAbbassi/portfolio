<?php namespace App\Controllers;

use App\Models\projetModel;
use CodeIgniter\Controller;

class Projet extends Controller {

  
            
    public function display(){
       if (is_null(session()->get('isLoggedIn')))  { 

    return redirect()->to( base_url('Admin') ); }

        
      $Model = new projetModel();

      $data['projet']= $Model->findAll();

      echo view('templates/header');
     
      echo view('projet/projetView',$data);
      echo view('templates/footer');
  
   
}

 public function add()
    {     if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
         echo view('templates/header');
         echo view('projet/projetAdd');
         echo view('templates/footer');
    }

 public function save()
    {   if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new projetModel();

        $data = [

            
            'titre'  => $this->request->getVar('titre'),
            'objectif' => $this->request->getVar('objectif'),
            'plus_info'  => $this->request->getVar('plus_info')
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('Projet/display') );
    }



    public function edit($id_projet = null)
    { if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     
     $model = new projetModel();

     $data['projet'] = $model->where('id_projet', $id_projet)->first();

     echo view('templates/header');
     echo view('projet/projetEdit', $data);
     echo view('templates/footer');
    }



    public function update()
    {   if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new projetModel();

        $id = $this->request->getVar('id_projet');

        $data = [

           
            'titre'  => $this->request->getVar('titre'),
            'objectif' => $this->request->getVar('objectif'),
            'plus_info' => $this->request->getVar('plus_info')
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('Projet/display') );
    }



    public function delete($id_projet = null)
    {
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
    $model = new projetModel();
     
    $data['projet'] = $model->where('id_projet', $id_projet)->delete();
     
    return redirect()->to( base_url('Projet/display') );
    
 }
    


} ?>