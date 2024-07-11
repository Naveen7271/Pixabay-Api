<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
<div class="card" style="width: 100%; max-width: 400px;">

    <div class="card-body">
<form method="post" action="<?= site_url("register");?>"enctype="multipart/form-data">
<h1>Register Here</h1>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" required placeholder="Enter Name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" required placeholder="Enter Email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" required placeholder="Enter Password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" name="profile_picture" id="profile_picture" accept="image/*">
            </div>
  <div class="mb-3"><input type="submit" value= "Register" class="btn btn-primary"/> </div>
</form>
</div>
</div>
</div>