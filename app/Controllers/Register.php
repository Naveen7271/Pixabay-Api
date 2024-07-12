<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Register extends BaseController
{
    public function index():string
    {
        echo view('common/header');
        return view('register');
    }


    public function do_register()
    {
        $userModel = new UserModel();
    
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $profilePic = $this->request->getFile('profile_picture');
        $profilePicName = null;

        if ($profilePic !== null && $profilePic->isValid() && !$profilePic->hasMoved()) {
            $newName = $profilePic->getRandomName();
            $profilePic->move(FCPATH . 'uploads', $newName);
            $profilePicName = $newName;
        }
    
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'profile_picture' => $profilePicName
        ];
        
        try {
            $r = $userModel->insert($data);
            if ($r) {
                return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
            } else {
                return redirect()->to('/register')->with('error', 'Registration failed. Please try again.');
            }
        } catch (\Exception $e) {
            echo "Exception occurred: " . $e->getMessage();
        }
    }

}
