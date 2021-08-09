<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\HobbyModel;
use App\Models\UserModel;

class HobbyController extends Controller
{
    // Show a list of skills for the selected user
    public function index()
    {
        $userId = Helper::getUserIdFromSession('user');

        View::render('hobbies/index.view', [
            'user'      => UserModel::load()->get($userId),
            'hobbies'   => HobbyModel::load()->userHobbies($userId),
        ]);
    }

    // Show skill record
    public function show()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');
        
        View::render('hobbies/show.view', [
            'hobby'     => HobbyModel::load()->get($hobbyId),
        ]);
    }

    // Show a form to add skills
    public function create()
    {
        View::render('hobbies/create.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/store',
        ]);
    }

    // Store a skill record in the database
    public function store ()
    {
        // Saves post data in hobby var
        $hobby = $_POST;

        // Links with a user ID, set created by ID and set created date
        $hobby['user_id'] = Helper::getUserIdFromSession();
        $hobby['created_by'] = Helper::getUserIdFromSession();
        $hobby['created'] = date('Y-m-d H:i:s');

        // Sets info to NULL if not set
        if($hobby['info'] === ""){
            $hobby['info'] = NULL;
        }

        // Saves record to database
        HobbyModel::load()->store($hobby);
        View::redirect('hobbies');
    }

    // Show a form to edit an skill record
    public function edit()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        View::render('hobbies/edit.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/' . $hobbyId . '/update',
            'hobby'     => HobbyModel::load()->get($hobbyId),
        ]);
    }

    // Update a skill record
    public function update()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        // Saves post data in hobby var
        $hobby = $_POST;

        // Sets info to NULL if not set
        if($hobby['info'] === ""){
            $hobby['info'] = NULL;
        }

        // Saves record to database
        HobbyModel::load()->update($hobby, $hobbyId);

        View::redirect('hobbies');
    }

    // Archive an education record into the database (soft delete)
    public function destroy()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        HobbyModel::load()->destroy($hobbyId);
        View::redirect('hobbies');
    }
}