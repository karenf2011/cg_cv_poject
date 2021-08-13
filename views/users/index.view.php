<?php require 'views/partials/header.view.php' ?>

<div class="main container-fluid">
<h1>Personal info</h1>
    <p>First name: 
        <?= $vars['user']->first_name ?>
    </p>
    <p>Last name:
        <?= $vars['user']->last_name ?>
    </p>
    <p>Email:     
        <?= $vars['user']->email ?>
    </p>
    <p>City: 
        <?= $vars['user']->city ?>
    </p>
    <p>Date of birth: 
        <?= $vars['user']->birthday ?>
    </p>

    <button><a href="/user/<?= $vars['user']->id ?>/edit">Edit</a></button>
    <button><a href="/user/<?= $vars['user']->id ?>/destroy">Delete</a></button>
    <br>
    <button><a href="/user/create">Create new User</a></button>
</div>

<?php require 'views/partials/footer.view.php' ?>