<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;

class EducationController extends Controller
{
    // Show a list of educations for the selected user

    public function index()
    {
        $userId = Helper::getUserIdFromSession('user');       
        
        View::render('educations/index.view', [
            'user'       => UserModel::load()->get($userId),
            'educations' => EducationModel::load()->userEducations($userId),
        ]);
    }

    // Show a form to add educations

    public function create()
    {
        View::render('educations/create.view', [
            'method'    => 'POST',
            'action'    => '/education/store',
        ]);
    }

    // Store an education record in the database

    public function store ()
    {
        // Saves post data in education var
        $education = $_POST;
        
        // Links with a user ID, set created by ID and set created date
        $education['user_id'] = Helper::getUserIdFromSession();
        $education['created_by'] = Helper::getUserIdFromSession();
        $education['created'] = date('Y-m-d H:i:s');
        
        // Save the record to the database
        EducationModel::load()->store($education);
        View::redirect('education');
    }

    // Show a form to edit an education record

    public function edit()
    {
        $educationId = Helper::getIdFromUrl('education');

        View::render('educations/edit.view', [
            'method'    => 'POST',
            'action'    => '/education/' . $educationId . '/update',
            'education' => EducationModel::load()->get($educationId),
        ]);
    }

    // Update an education record

    public function update()
    {
        $educationId = Helper::getIdFromUrl('education');

        // Saves post data in education var
        $education = $_POST;

        // Save record to database
        EducationModel::load()->update($education, $educationId);

        View::redirect('education/' . $educationId);
    }

    // Show education record

    public function show()
    {
        $educationId = Helper::getIdFromUrl('education');

        View::render('educations/show.view', [
            'education'     => EducationModel::load()->get($educationId),
        ]);
    }

    // Archive an education record into the database (soft delete)

    public function destroy()
    {
        $educationId = Helper::getIdFromUrl('education');
        
        EducationModel::load()->destroy($educationId);
        View::redirect('education');
    }
}