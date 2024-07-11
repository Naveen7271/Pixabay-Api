<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <form method="post" action="<?= base_url("login");?>">
                <h1 class="text-center mb-4">Login Here</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" id="password">
                </div>
                <div class="d-grid">
                    <input type="submit" value="Login" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>
</div>
