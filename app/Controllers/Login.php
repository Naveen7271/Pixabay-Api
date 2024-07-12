<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Login extends BaseController
{
    public function index():string
    {
        echo view('common/header');
        return view('login');
    }


public function do_login()
{
    $userModel = new UserModel();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $result = $userModel->where('email', $email)->first();

    if ($result !== null && password_verify($password, $result->password)) {
        $this->session->set("user", $result);
        return redirect()->to('/dashboard');
    }
    
    session()->setFlashdata('error', 'Invalid email or password');
    return redirect()->to('/login');
}

public function logout()
{
    $session = session();
    $session->remove('user');
    $session->destroy();
    return redirect()->to('/login');
}

    

}
