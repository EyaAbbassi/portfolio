<?php namespace App\Controllers;

use App\Models\aboutModel;
use CodeIgniter\Controller;

class About extends Controller {

public function display(){
    if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
  	$model = new aboutModel();
    $data['about']= $model->findAll();
	  echo view('templates/header');
	  echo view('about/aboutView',$data);
    echo view('templates/footer');}

  public function edit($id = null)
    {if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
     $model = new aboutModel();
     $data['about'] = $model->where('id', $id)->first();
      echo view('templates/header');
      echo view('about/edit', $data);
      echo view('templates/footer'); }

  public function update()
    {  if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

        helper(['form', 'url']);
        
        $model = new aboutModel();

        $id = $this->request->getVar('id');

        $file = $this->request->getFile('photo');

        if($file->getSize() > 0){
            echo'File Name: '.$file->getName();
            echo'File Size: '.$file->getSize();
            echo'File Extension: '.$file->getExtension();
              $photo=$file->getRandomName();
            $file->move('./upload',$photo);  }

        $data = [

            'prenom' => $this->request->getVar('prenom'),
            'nom'  => $this->request->getVar('nom'),
            'adresse' => $this->request->getVar('adresse'),
            'email'  => $this->request->getVar('email'),
            'linkedin'  => $this->request->getVar('linkedin'),
            'more'  => $this->request->getVar('more'),
            'photo'=> $photo    ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('About/display') );
    }

       
}
 
?>