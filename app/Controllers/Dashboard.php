<?php

namespace App\Controllers;

class Dashboard  extends BaseController
{
    public function index(): string
    {

        if(session('user')->id<1){
            return redirect()->to('/login');
        }
        echo view('common/header');
        return view('dashboard');
    }
}
