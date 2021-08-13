<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * At this point, variables in a route are not supported like in Laravel: user/{user_id}/edit
 *  I add this in a future version.
 * 
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
*/

use App\Middleware\WhenNotLoggedin;
use App\Middleware\Permissions;


$router->get('admin', 'App/Controllers/AdminController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('login', 'App/Controllers/LoginController.php@index');

$router->get('logout', 'App/Controllers/LoginController.php@logout');

$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('profile', 'App/Controllers/ProfileController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('', 'App/Controllers/HomeController.php@index');


// All the routes concerning users

$router->get('user', 'App/Controllers/UserController.php@index', [
    'read' => Permissions::class
]);

$router->get('user/create', 'App/Controllers/UserController.php@create');

$router->post('user/store', 'App/Controllers/UserController.php@store', [
    'store' => Permissions::class
]);

$router->get('user/edit', 'App/Controllers/UserController.php@edit', [
    'edit' => Permissions::class
]);

$router->post('user/update', 'App/Controllers/UserController.php@update', [
    'update' => Permissions::class
]);

$router->get('user/destroy', 'App/Controllers/UserController.php@destroy', [
    'delete' => Permissions::class
]);


// All the routes concerning educations

$router->get('educations', 'App/Controllers/EducationController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('educations/{id}', 'App/Controllers/EducationController.php@show');

$router->get('educations/create', 'App/Controllers/EducationController.php@create');

$router->post('educations/store', 'App/Controllers/EducationController.php@store');

$router->get('educations/{id}/edit', 'App/Controllers/EducationController.php@edit');

$router->post('educations/{id}/update', 'App/Controllers/EducationController.php@update');

$router->get('educations/{id}/destroy', 'App/Controllers/EducationController.php@destroy');


// All the routes concerning jobs

$router->get('jobs', 'App/Controllers/JobController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('jobs/{id}', 'App/Controllers/JobController.php@show');

$router->get('jobs/create', 'App/Controllers/JobController.php@create');

$router->post('jobs/store', 'App/Controllers/JobController.php@store');

$router->get('jobs/{id}/edit', 'App/Controllers/JobController.php@edit');

$router->post('jobs/{id}/update', 'App/Controllers/JobController.php@update');

$router->get('jobs/{id}/destroy', 'App/Controllers/JobController.php@destroy');


// All the routes concerning skills

$router->get('skills', 'App/Controllers/SkillController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('skills/{id}', 'App/Controllers/SkillController.php@show');

$router->get('skills/create', 'App/Controllers/SkillController.php@create');

$router->post('skills/store', 'App/Controllers/SkillController.php@store');

$router->get('skills/{id}/edit', 'App/Controllers/SkillController.php@edit');

$router->post('skills/{id}/update', 'App/Controllers/SkillController.php@update');

$router->get('skills/{id}/destroy', 'App/Controllers/SkillController.php@destroy');


// All the routes concerning hobbies

$router->get('hobbies', 'App/Controllers/HobbyController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);

$router->get('hobbies/{id}', 'App/Controllers/HobbyController.php@show');

$router->get('hobbies/create', 'App/Controllers/HobbyController.php@create');

$router->post('hobbies/store', 'App/Controllers/HobbyController.php@store');

$router->get('hobbies/{id}/edit', 'App/Controllers/HobbyController.php@edit');

$router->post('hobbies/{id}/update', 'App/Controllers/HobbyController.php@update');

$router->get('hobbies/{id}/destroy', 'App/Controllers/HobbyController.php@destroy');

$router->get('contact', 'App/Controllers/ContactController.php@index');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');