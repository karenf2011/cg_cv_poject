<?php require 'views/partials/header.view.php' ?>
<h1>Users:</h1>
<ul>
    <?php foreach($vars['users'] as $user) : ?>
    <li>
        <?= $user->first_name ?> <?= $user->last_name ?>
    </li>
    <?php endforeach ?>
</ul>
<?php require 'views/partials/footer.view.php' ?>