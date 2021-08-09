<form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?> ">
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Soort werk" value="<?= isset($vars['job']) ? $vars['job']->name : '' ?>">
            </div>
        </div>  
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="info" placeholder="Informatie" value="<?= isset($vars['job']) ? $vars['job']->info : '' ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label>Startjaar:</label>
                <input type="number" name="start_year" min="1950" max="2021" value="<?= isset($vars['job']) ? $vars['job']->start_year : '' ?>">
            </div>
            <div class="col-md-2">
                <label>Eindjaar:</label>
                <input type="number" name="end_year" min="1950" max="2021" value="<?= isset($vars['job']) ? $vars['job']->end_year : '' ?>">
            </div>
        </div>

        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" value="Opslaan">
    </div>
</form>