<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\SkillModel;

class SkillController extends Controller
{
    // Show a list of skills for the selected user
    public function index()
    {
        $userId = Helper::getUserIdFromSession('user');

        View::render('skills/index.view', [
            'skills'    => SkillModel::load()->userSkills($userId),
        ]);
    }

    // Show skill record
    public function show()
    {
        $skillId = Helper::getIdFromUrl('skills');

        View::render('skills/show.view', [
            'skill'     => SkillModel::load()->get($skillId),
        ]);
    }

    // Show a form to add skills
    public function create()
    {
        View::render('skills/create.view', [
            'method'    => 'POST',
            'action'    => '/skills/store',
        ]);
    }

    // Store a skill record in the database
    public function store ()
    {
        // Sets info to NULL if not set
        if($_POST['info'] === "") {
	        $_POST['info'] = NULL;
        }

        // Saves post data in skill var
        $skill = $_POST;
        
        // Links with a user ID, set created by ID and set created date
        $skill['user_id'] = Helper::getUserIdFromSession();
        $skill['created_by'] = Helper::getUserIdFromSession();
        $skill['created'] = date('Y-m-d H:i:s');
        
        // Save the record to the database
        SkillModel::load()->store($skill);
        View::redirect('skills');
    }

    // Show a form to edit an skill record
    public function edit()
    {
        $skillId = Helper::getIdFromUrl('skills');

        View::render('skills/edit.view', [
            'method'    => 'POST',
            'action'    => '/skills/' . $skillId . '/update',
            'skill'     => SkillModel::load()->get($skillId),
        ]);
    }

    // Update a skill record
    public function update()
    {
        $skillId = Helper::getIdFromUrl('skills');

        // Sets info to NULL if not set
        if($_POST['info'] === "") {
	        $_POST['info'] = NULL;
        }

        // Saves post data in skill var
        $skill = $_POST;
        
        // Saves record to database
        SkillModel::load()->update($skill, $skillId);

        View::redirect('skills');
    }

    // Archive a skill record into the database (soft delete)
    public function destroy()
    {
        $skillId = Helper::getIdFromUrl('skills');

        SkillModel::load()->destroy($skillId);
        View::redirect('skills');
    }
}