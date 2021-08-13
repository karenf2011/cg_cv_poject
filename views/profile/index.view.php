<?php require 'views/partials/header.view.php' ?>

<div class="main container-fluid">
    <h1>CV van 
        <?= $vars['user']->first_name ?>
        <?= $vars['user']->last_name ?>
    </h1>
    <h2>Personal information</h2>
    <p>Email:     
        <?= $vars['user']->email ?>
    </p>
    <p>City: 
        <?= $vars['user']->city ?>
    </p>
    <p>Date of birth: 
        <?= $vars['user']->birthday ?>
    </p>
  
    <h2>Educations</h2>
    <?php foreach($vars['educations'] as $education) :?>
        <div class="row">
            <div class="col-1">
                <p>
                    <?= $education->start_year ?> -
                    <?php if($education->end_year === NULL) : ?>
                        heden
                    <?php else : ?> 
                        <?= $education->end_year ?>
                    <?php endif ?> 
                </p>
            </div>
            <div class="col-2">
                <p>
                    <?= $education->name ?>  
                </p>
            </div>
            <div class="col-3">
                <p>
                    <?= $education->info ?>  
                </p>
            </div>
            <div class="col-1">
                <button><a href="/educations/<?= $education->id ?>">Show</a></button>
            </div>
            <div class="col-1">
                <button><a href="/educations/<?= $education->id ?>/edit">Edit</a></button>
            </div>
            <div class="col-1">
                <button><a href="/educations/<?= $education->id ?>/destroy">Delete</a></button>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col">
            <button><a href="/educations/create">Insert new education</a></button>
        </div>
    </div>
    <br>
    <h2>Jobs</h2>
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
            <div class="col-1">
                <button><a href="/jobs/<?= $job->id ?>">Show</a></button>
            </div>
            <div class="col-1">
                <button><a href="/jobs/<?= $job->id ?>/edit">Edit</a></button>
            </div>
            <div class="col-1">
                <button><a href="/jobs/<?= $job->id ?>/destroy">Delete</a></button>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col">
            <button><a href="/jobs/create">Insert new job</a></button>
        </div>
    </div>
    <br>
    <h2>Skills</h2>
    <?php foreach($vars['skills'] as $skill) :?>
        <div class="row">
            <div class="col-2">
                <p>
                    <?= $skill->name ?>  
                </p>
            </div>
            <div class="col-4">
                <p>
                    <?= $skill->info ?>  
                </p>
            </div>
            <div class="col-1">
                <button><a href="/skills/<?= $skill->id ?>">Show</a></button>
            </div>
            <div class="col-1">
                <button><a href="/skills/<?= $skill->id ?>/edit">Edit</a></button>
            </div>
            <div class="col-1">
                <button><a href="/skills/<?= $skill->id ?>/destroy">Delete</a></button>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col">
            <button><a href="/skills/create">Insert new skill</a></button>
        </div>
    </div>
    <br>
    <h2>Hobbies</h2>
    <?php foreach($vars['hobbies'] as $hobby) :?>
        <div class="row">
            <div class="col-2">
                <p>
                    <?= $hobby->name ?>  
                </p>
            </div>
            <div class="col-4">
                <p>
                    <?= $hobby->info ?>  
                </p>
            </div>
            <div class="col-1">
                <button><a href="/hobbies/<?= $hobby->id ?>">Show</a></button>
            </div>
            <div class="col-1">
                <button><a href="/hobbies/<?= $hobby->id ?>/edit">Edit</a></button>
            </div>
            <div class="col-1">
                <button><a href="/hobbies/<?= $hobby->id ?>/destroy">Delete</a></button>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col">
            <button><a href="/hobbies/create">Insert new hobby</a></button>
        </div>
    </div>
</div>


<?php require 'views/partials/footer.view.php' ?>