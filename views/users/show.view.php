<?php require 'views/partials/header.view.php' ?>
<h1>User:
    <?= $vars['user']->first_name ?>
    <?= $vars['user']->last_name ?>
</h1>
<?php require 'views/partials/footer.view.php' ?>