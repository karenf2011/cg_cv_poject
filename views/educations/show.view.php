<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-1">
            <?= $vars['education']->start_year ?>
        </div>
        <div class="col-1">
            <?= $vars['education']->end_year ?>
        </div>
        <div class="col-2">
            <?= $vars['education']->name ?>
        </div>
        <div class="col-3">
            <?= $vars['education']->info ?>
        </div>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>