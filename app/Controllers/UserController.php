<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Models\RoleModel;

class UserController extends Controller
{

    /**
     * Show's a list of users
     */
    public function index()
    {
        View::render('users/index.view', [
            'users' => UserModel::load()->all(),
        ]);
    }

    /**
     * Show a form to create a new user
     */
    public function create()
    {
        View::render('users/create.view', [
            'method'    => 'POST',
            'action'    => '/user/store',
            'roles'     => RoleModel::load()->all(),
        ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        // Save post data in $user var
        $user = $_POST;
        
        // Create a password, set created_by ID and set the date of creation
        $user['password'] = password_hash('Gorilla1!', PASSWORD_DEFAULT);
        $user['created_by'] = Helper::getUserIdFromSession();
        $user['created'] = date('Y-m-d H:i:s');

        // Save the record to the database
        UserModel::load()->store($user);
    }

    /**
     * Show a form to edit a user record
     */
    public function edit()
    {
        $userId = Helper::getIdFromUrl('user');

        View::render('users/edit.view', [
            'method'    => 'POST',
            'action'    => '/user/' . $userId . '/update',
            'user'      => UserModel::load()->get($userId),
            'roles'     => RoleModel::load()->all(),
        ]);
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $userId = Helper::getIdFromUrl('user');

        // Save post data in $user
        $user = $_POST;

        // Set updated_by and updated fields
        $user['updated_by'] = Helper::getUserIdFromSession();
        $user['updated'] = date('Y-m-d H:i:s');
        // dd($user);
        // Save record to database
        UserModel::load()->update($user, $userId);
    }

    /**
     * Show user record
     */
    public function show()
    {
        $userId = Helper::getIdFromUrl('user');
        
        $user = UserModel::load()->get($userId);
    }

    /**
     * Archive a user record into the database (soft delete)
     */
    public function destroy()
    {

    }

}

