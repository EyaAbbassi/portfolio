<?php namespace App\Controllers;

use App\Models\certificationModel;
use CodeIgniter\Controller;

class Certification extends Controller {

		 	
    public function display(){
         if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

    $certificationModel = new certificationModel();

    $data['certification']= $certificationModel->findAll();

    echo view('templates/header');
    echo view('certification/certificationView',$data);
    echo view('templates/footer');
   // var_dump($data);
   
}

 public function add()
    {     if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
         echo view('templates/header');
         echo view('certification/certAdd');
         echo view('templates/footer');
    }

 public function save()
    {  
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        helper(['form', 'url']);
        
        $model = new certificationModel();

        $data = [

            'specialite' => $this->request->getVar('txtSpecialite'),
            'ecole'  => $this->request->getVar('txtEcole'),
            'date'  => $this->request->getVar('txtDate'),
            'lieux'  => $this->request->getVar('txtLieux'),
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('Certification/display') );
    }



    public function edit($id_certification = null)
    {
      if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     $model = new certificationModel();

     $data['certification'] = $model->where('id_certification', $id_certification)->first();

     echo view('templates/header');
     echo view('certification/certEdit', $data);
     echo view('templates/footer');
    }



    public function update()
    {  
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
        helper(['form', 'url']);
        
        $model = new certificationModel();

        $id = $this->request->getVar('id');

        $data = [

            'specialite' => $this->request->getVar('txtSpecialite'),
            'ecole'  => $this->request->getVar('txtEcole'),
            'date' => $this->request->getVar('txtDate'),
            'lieux'  => $this->request->getVar('txtLieux'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('Certification/display') );
    }



    public function delete($id_certification = null)
    {
 if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
    $model = new certificationModel();
     
    $data['certification'] = $model->where('id_certification', $id_certification)->delete();
     
    return redirect()->to( base_url('Certification/display') );
    
 }
    


}
 
?>
	
   