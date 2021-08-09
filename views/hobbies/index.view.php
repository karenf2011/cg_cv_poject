<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid main">
    <h1>Hobbies van 
        <?= $vars['user']->first_name ?>
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
        </div>
    <?php endforeach ?>
</div>


<?php require 'views/partials/footer.view.php' ?>