<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->renderSection('content') ?>

<?php
    $user = session()->get('user');
    $profilePic = $user->profile_picture ?? 'default.jpg';
    ?>
<div class="h-50 d-flex align-items-center justify-content-center">
        <h1>Welcome <span class="username me-3"><?= esc($user->name) ?></span></h1>
    </div>
<style>
   .user-profile {
        display: flex;
        align-items: center;
    }
    .profile-pic {
        width: 40px;
        height: 40px;
        object-fit: cover;
        margin-right: 10px;
    }
    .username {
        font-weight: bold;
        font-size: 20px;
    }
</style>