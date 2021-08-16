<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid main">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $vars['hobby']->name ?></h5>
            <p class="card-text"><?= $vars['hobby']->info ?></p>
            <button><a href="/hobby/<?= $vars['hobby']->id ?>/edit" class="card-link">Edit</a></button>
            <button><a href="/hobby/<?= $vars['hobby']->id ?>/destroy" class="card-link">Delete</a></button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <button><a href="/hobbys">Back to overview</a></button>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>