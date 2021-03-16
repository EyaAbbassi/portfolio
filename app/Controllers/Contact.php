<?php namespace App\Controllers;

use App\Models\contactModel;
use CodeIgniter\Controller;

class Contact extends Controller {

            
    public function save(){
         
    

        helper(['form', 'url']);
        
        $model = new contactModel();

        $data = [

            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'message'  => $this->request->getVar('message'),
            ];

        $save = $model->insert($data);
        //
        return redirect()->to( base_url('#contact') );
    }
}
?>
