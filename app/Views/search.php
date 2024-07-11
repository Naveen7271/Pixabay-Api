<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>Search<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5 d-flex flex-column align-items-center">
    <h2 class="mb-4">Search Images and Videos</h2>
    <form action="<?= site_url('search') ?>" method="get" class="d-flex flex-column align-items-center" style="width: 100%; max-width: 400px;">
        <div class="mb-3 w-100">
            <input type="text" class="form-control" name="query" placeholder="Enter search query" value="<?= $query ?? '' ?>" required>
        </div>
        <div class="mb-3 w-100">
            <select class="form-select" name="type">
                <option value="image" <?= ($type ?? '') == 'image' ? 'selected' : '' ?>>Images</option>
                <option value="video" <?= ($type ?? '') == 'video' ? 'selected' : '' ?>>Videos</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<div class="container mt-5">
    <?php if (isset($results)): ?>
        <h2 class="mt-5 mb-4">Search Results</h2>
        
        <?php if (empty($results->hits)): ?>
            <div class="alert alert-info">No results found. Please try a different search term.</div>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php if ($type == 'image'): ?>
                    <?php foreach ($results->hits as $image): ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?= $image->webformatURL ?>" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="<?= $image->tags ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">By: <?= $image->user ?></h5>
                                    <p class="card-text flex-grow-1">Tags: <?= $image->tags ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Likes: <?= $image->likes ?> | Downloads: <?= $image->downloads ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php foreach ($results->hits as $video): ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-3" style="height: 200px;">
                                        <video controls class="w-100 h-100" style="object-fit: cover;">
                                            <source src="<?= $video->videos->medium->url ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <h5 class="card-title">By: <?= $video->user ?></h5>
                                    <p class="card-text flex-grow-1">Tags: <?= $video->tags ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Likes: <?= $video->likes ?> | Downloads: <?= $video->downloads ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>