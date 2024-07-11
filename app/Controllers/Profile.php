<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function edit()
    {   echo view('common/header');
        $user = session()->get('user');
        return view('profile_edit', ['user' => $user]);
    }

    public function update()
    {
        $user = session()->get('user');
        $userModel = new UserModel();

        $rules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'profile_picture' => 'is_image[profile_picture]|max_size[profile_picture,1024]',
        ];

        if ($this->request->getPost('password') != '') {
            $rules['password'] = 'required|min_length[8]';
            $rules['password_confirm'] = 'matches[password]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $newData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        if ($this->request->getPost('password') != '') {
            $newData['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $profilePic = $this->request->getFile('profile_picture');
        if ($profilePic->isValid() && !$profilePic->hasMoved()) {
            $newName = $profilePic->getRandomName();
            $profilePic->move(FCPATH . 'uploads', $newName);
            $newData['profile_picture'] = $newName;
        }

        $userModel->update($user->id, $newData);
        $updatedUser = $userModel->find($user->id);
        session()->set('user', $updatedUser);

        return redirect()->to('/profile/edit')->with('success', 'Profile updated successfully');
    }
}