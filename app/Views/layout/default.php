<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title><?= $this->renderSection('title') ?></title>
    <?= $this->renderSection('content') ?>
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
  