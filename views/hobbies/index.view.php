<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid main">
    <h1>Hobbies van 
        <?= $_SESSION['user']['full_name'] ?>
    </h1>

    <?php foreach($vars['hobbies'] as $hobby) :?>
        <div class="row">
            <div class="col-2">
                <p>
                    <?= $hobby->name ?>  
                </p>
            </div>
            <div class="col-3">
                <p>
                    <?= $hobby->info ?>  
                </p>
            </div>
            <div class="col-1">
                <button><a href="/hobby/<?= $hobby->id ?>">Show</a></button>
            </div>
            <div class="col-1">
                <button><a href="/hobby/<?= $hobby->id ?>/edit">Edit</a></button>
            </div>
            <div class="col-1">
                <button><a href="/hobby/<?= $hobby->id ?>/destroy">Delete</a></button>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col">
            <button><a href="/hobby/create">Insert new hobby</a></button>
        </div>
    </div>
</div>


<?php require 'views/partials/footer.view.php' ?>