<?php require 'views/partials/header.view.php' ?>
<div class="container-fluid main">
    <h1>Werkervaring van 
        <?= $vars['user']->first_name ?>
    </h1>

    <?php foreach($vars['jobs'] as $job) :?>
        <div class="row">
            <div class="col-1">
                <p>
                    <?= $job->start_year ?> -
                    <?php if($job->end_year === NULL) : ?>
                        heden
                    <?php else : ?> 
                        <?= $job->end_year ?>
                    <?php endif ?> 
                </p>
            </div>
            <div class="col-2">
                <p>
                    <?= $job->name ?>  
                </p>
            </div>
            <div class="col-3">
                <p>
                    <?= $job->info ?>  
                </p>
            </div>
        </div>
    <?php endforeach ?>
</div>


<?php require 'views/partials/footer.view.php' ?>