<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome To App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('/'); ?>">Home</a>
        </li> -->
        <?php if (!session()->get('user')): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url("login"); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url("register"); ?>">Register</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
          <?php
            $user = session()->get('user');
            $profilePic = $user->profile_picture ?? 'default.jpg';
            ?>
            <a href="<?= site_url('profile/edit') ?>">
                <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="Profile Picture" class="rounded-circle profile-pic">
            </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('search') ?>">Search</a>
                </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url("login/logout"); ?>">Logout</a>
          </li>
         
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

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