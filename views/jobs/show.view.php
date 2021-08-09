<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-1">
            <?= $vars['job']->start_year ?>
        </div>
        <div class="col-1">
            <?= $vars['job']->end_year ?>
        </div>
        <div class="col-2">
            <?= $vars['job']->name ?>
        </div>
        <div class="col-3">
            <?= $vars['job']->info ?>
        </div>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>