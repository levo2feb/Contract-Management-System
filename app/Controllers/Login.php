<?php 

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel;
       
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        
       # $password = password_hash("password", PASSWORD_BCRYPT);
        $result = $userModel->where("email", $email)->first();
        
        if ($result !== null && isset($result['id']) && $result['id'] > 0 ) 
        {
           if ($result['password'] != $password)
           {
            echo "Invalid email or password";
           }
           else
           {
            $this->session->set("user", $result);
            return redirect()->to('http://localhost/ci4/public/contract');
           }
        }
        else 
        {
            echo "Invalid email or password";
        }
    }
}

