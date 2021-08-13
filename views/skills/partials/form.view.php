<div class="main">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?> ">
        <div class="container-fluid mt-5">
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="name" placeholder="Vaardigheid" value="<?= isset($vars['skill']) ? $vars['skill']->name : '' ?>">
                </div>
            </div>  
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="info" placeholder="Informatie" value="<?= isset($vars['skill']) ? $vars['skill']->info : '' ?>">
                </div>
            </div>

            <input type="hidden" name="f_token" value="<?= createToken() ?>">

            <input type="submit" value="Opslaan">
        </div>
    </form>
    <div class="row mt-4 ml-1">
            <div class="col">
                <button><a href="/skills">Back to overview</a></button>
            </div>
        </div>
</div>