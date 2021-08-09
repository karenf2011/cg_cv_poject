<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid main">
    <h1>Vaardigheden van 
        <?= $vars['user']->first_name ?>
    </h1>

    <?php foreach($vars['skills'] as $skill) :?>
        <div class="row">
            <div class="col-2">
                <p>
                    <?= $skill->name ?>  
                </p>
            </div>
            <div class="col-3">
                <p>
                    <?= $skill->info ?>  
                </p>
            </div>
        </div>
    <?php endforeach ?>
</div>


<?php require 'views/partials/footer.view.php' ?>