<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\JobModel;
use App\Models\UserModel;

class JobController extends Controller 
{
    // Shows a list of jobs for the selected user

    public function index()
    {
        $userId = Helper::getUserIdFromSession('user');

        View::render('jobs/index.view', [
            'user'      => UserModel::load()->get($userId),
            'jobs'      => JobModel::load()->userJobs($userId),
        ]);
    }

    // Shows job record

    public function show()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        View::render('jobs/show.view', [
            'job'      => JobModel::load()->get($jobId), 
        ]);
    }

    // Show a form to add jobs

    public function create()
    {
        View::render('jobs/create.view', [
            'method'    => 'POST',
            'action'    => '/jobs/store',
        ]); 
    }

    // Store a job record in the database

    public function store()
    {
        // Saves post data in job var
        $job = $_POST;
        
        // Links with a user ID, set created by ID and set created date
        $job['user_id'] = Helper::getUserIdFromSession();
        $job['created_by'] = Helper::getUserIdFromSession();
        $job['created'] = date('Y-m-d H:i:s');
        
        // Sets end year to NULL if not set
        if($job['end_year'] === ""){
            $job['end_year'] = NULL;
        }
        
        // Save record to database
        JobModel::load()->store($job);
        View::redirect('jobs');
    }

    // Show a form to edit a job record

    public function edit()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        View::render('jobs/edit.view', [
            'method'    => 'POST',
            'action'    => '/jobs/' . $jobId . '/update',
            'job'       => JobModel::load()->get(($jobId)),
        ]);
    }

    // Update a job record

    public function update()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        // Saves post data in job var
        $job = $_POST;

        // Sets end year to NULL if not set
        if($job['end_year'] === ""){
            $job['end_year'] = NULL;
        }
        
        // Save record to database
        JobModel::load()->update($job, $jobId);

        View::redirect('jobs/' . $jobId);
    }

    // Archive a job record into the database (soft delete)

    public function destroy()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        JobModel::load()->destroy($jobId);
        View::redirect('jobs');
    }

}