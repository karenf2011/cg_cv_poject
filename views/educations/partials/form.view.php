<div class="main container-fluid">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?> ">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="name" placeholder="Opleiding" value="<?= isset($vars['education']) ? $vars['education']->name : '' ?>">
                </div>
            </div>  
            <div class="row mb-3">
                <div class="col">
                    <input id="info" type="text" name="info" placeholder="Informatie" value="<?= isset($vars['education']) ? $vars['education']->info : '' ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label>Startjaar:</label>
                    <input type="number" name="start_year" min="1950" max="2030" value="<?= isset($vars['education']) ? $vars['education']->start_year : '' ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label>Eindjaar:</label>
                    <input type="number" name="end_year" min="1950" max="2030" value="<?= isset($vars['education']) ? $vars['education']->end_year : '' ?>">
                </div>
            </div>

            <input type="hidden" name="f_token" value="<?= createToken() ?>">

            <input type="submit" value="Opslaan">
    </form>
    <div class="row mt-4">
        <div class="col">
            <button><a href="/educations">Back to overview</a></button>
        </div>
    </div>
</div>