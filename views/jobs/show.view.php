<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid main">
   <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $vars['job']->name ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?= $vars['job']->start_year ?> -
                    <?php if($vars['job']->end_year === NULL) : ?>
                        heden
                    <?php else : ?> 
                        <?= $vars['job']->end_year ?>
                    <?php endif ?> 
            </h6>
            <p class="card-text"><?= $vars['job']->info ?></p>
            <button><a href="/jobs/<?= $vars['job']->id ?>/edit" class="card-link">Edit</a></button>
            <button><a href="/jobs/<?= $vars['job']->id ?>/destroy" class="card-link">Delete</a></button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <button><a href="/jobs">Back to overview</a></button>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>