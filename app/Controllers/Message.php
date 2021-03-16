<?php namespace App\Controllers;

use App\Models\contactModel;
use CodeIgniter\Controller;

class Message extends Controller {

            
    public function display(){
      
      if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }
    
      $Model = new contactModel();

      $data['contact']= $Model->findAll();

    	echo view('templates/header');
     	echo view('messageView',$data);
        echo view('templates/footer');
  
   
}
 public function delete($id_contact = null)
    {
       if (is_null(session()->get('isLoggedIn'))){  return redirect()->to( base_url('Admin') ); }

    $model = new contactModel();
     
    $data['contact'] = $model->where('id_contact', $id_contact)->delete();
     
    return redirect()->to( base_url('Message/display') );
    
 }
    


}

?>