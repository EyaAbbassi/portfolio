<?php namespace App\Controllers;

use App\Models\interetModel;
use CodeIgniter\Controller;

class Interet extends Controller {

            
    public function display(){
       if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        echo view('templates/header');

          $interetModel = new interetModel();

      $data['interet']= $interetModel->findAll();
    
      echo view('interet/interetView',$data);
        echo view('templates/footer');
  
   
}

 public function add()
    {     if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
         echo view('templates/header');
         echo view('interet/interetAdd');
         echo view('templates/footer');
    }

 public function save()
    {  
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        helper(['form', 'url']);
        
        $model = new interetModel();

        $data = [

            'nom' => $this->request->getVar('nom'),
            'about'  => $this->request->getVar('about')
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('Interet/display') );
    }



    public function edit($id_interet = null)
    { if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     
     $model = new interetModel();

     $data['interet'] = $model->where('id_interet', $id_interet)->first();

     echo view('templates/header');
     echo view('interet/interetEdit', $data);
     echo view('templates/footer');
    }



    public function update()
    {   if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new interetModel();

        $id = $this->request->getVar('id_interet');

        $data = [

            'nom' => $this->request->getVar('nom'),
            'about'  => $this->request->getVar('about')
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('Interet/display') );
    }



    public function delete($id_interet = null)
    {
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
    $model = new interetModel();
     
    $data['interet'] = $model->where('id_interet', $id_interet)->delete();
     
    return redirect()->to( base_url('Interet/display') );
    
 }
    


}
 
?>