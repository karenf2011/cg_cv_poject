<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <?= $vars['hobby']->name ?>
        </div>
        <div class="col-3">
            <?= $vars['hobby']->info ?>
        </div>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>