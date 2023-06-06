<?php require 'partials/header.php' ?>
<div class="container">
    <?php foreach ($posts as $post) : ?>
        <div class="card mt-3">
            <header class="card-header">
                <p class="card-header-title">
                    <?= $post->title ?>
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <?= $post->snippet() ?>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>

<?php require 'partials/footer.php' ?>