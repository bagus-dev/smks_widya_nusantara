<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Frontend::index');

$routes->group('profile', function($routes) {
    $routes->get('headmaster_welcome', 'Frontend::headmaster_welcome');
    $routes->get('school_history', 'Frontend::school_history');
    $routes->get('vision_mission_objective', 'Frontend::vision_mission_objective');
    $routes->get('teachers', 'Frontend::teachers');
    $routes->get('homeroom_teacher', 'Frontend::homeroom_teacher');
});

$routes->get('major/(:segment)', 'Frontend::major/$1');

$routes->group('registration', function($routes) {
    $routes->get('schedule', 'Frontend::schedule');
    $routes->get('schedule/load', 'Frontend::load_schedule');
    $routes->get('requirement', 'Frontend::requirement');
    $routes->get('procedure', 'Frontend::procedure');
});

$routes->get('student/(:segment)', 'Frontend::profile', ['filter' => 'role:user']);

$routes->get('contact_us', 'Frontend::contact_us');

$routes->group('registration', ['filter' => 'role:user'], function($routes) {
    $routes->get('basic', 'Frontend::regist_basic');
    $routes->post('basic', 'Frontend::save_basic');
    $routes->get('major', 'Frontend::regist_major');
    $routes->post('major', 'Frontend::save_major');
    $routes->get('file', 'Frontend::regist_file');
    $routes->post('file/certificate', 'Frontend::save_certificate');
    $routes->post('file/skhu', 'Frontend::save_skhu');
    $routes->post('file/family_card', 'Frontend::save_family_card');
    $routes->post('file/image', 'Frontend::save_image');
});

$routes->group('admin', ['filter' => 'role:admin'], function($routes) {
    $routes->group('dashboard', function($routes) {
        $routes->get('/', 'Backend::index');

        $routes->group('school_year', function($routes) {
            $routes->get('/', 'Backend::school_year');
            $routes->get('add', 'Backend::add_school_year');
            $routes->post('save', 'Backend::save_school_year');
            $routes->get('edit/(:segment)', 'Backend::edit_school_year/$1');
            $routes->put('update', 'Backend::update_school_year');
            $routes->delete('delete', 'Backend::delete_school_year');
        });

        $routes->group('headmaster_welcome', function($routes) {
            $routes->get('/', 'Backend::headmaster_welcome');
            $routes->put('/', 'Backend::update_headmaster_welcome');
        });

        $routes->group('summernote', function($routes) {
            $routes->post('upload', 'Backend::upload_summernote');
            $routes->post('delete', 'Backend::delete_summernote');
        });

        $routes->group('school_history', function($routes) {
            $routes->get('/', 'Backend::school_history');
            $routes->put('/', 'Backend::update_school_history');
        });

        $routes->group('vision_mission', function($routes) {
            $routes->get('/', 'Backend::vision_mission');
            $routes->put('/', 'Backend::update_vision_mission');
        });

        $routes->group('teacher_list', function($routes) {
            $routes->get('/', 'Backend::teacher_list');
            $routes->get('add', 'Backend::add_teacher_list');
            $routes->post('save', 'Backend::save_teacher_list');
            $routes->get('edit/(:segment)', 'Backend::edit_teacher_list/$1');
            $routes->put('update/basic', 'Backend::update_teacher_list_basic');
            $routes->put('update/image', 'Backend::update_teacher_list_image');
            $routes->delete('delete', 'Backend::delete_teacher_list');
        });

        $routes->group('major', function($routes) {
            $routes->get('/', 'Backend::major');
            $routes->get('add', 'Backend::add_major');
            $routes->post('save', 'Backend::save_major');
            $routes->get('edit/(:segment)', 'Backend::edit_major/$1');
            $routes->put('basic/update', 'Backend::update_major');
            $routes->put('image/update', 'Backend::update_image');
            $routes->delete('delete', 'Backend::delete_major');
        });

        $routes->group('about_site', function($routes) {
            $routes->get('/', 'Backend::about_site');
            $routes->put('/', 'Backend::update_about_site');
        });

        $routes->group('contact', function($routes) {
            $routes->get('/', 'Backend::contact');
            $routes->put('update', 'Backend::update_contact');
        });

        $routes->group('regist_schedule', function($routes) {
            $routes->get('/', 'Backend::regist_schedule');
            $routes->get('load', 'Backend::regist_schedule_load');
            $routes->post('save', 'Backend::regist_schedule_save');
            $routes->post('update', 'Backend::update_schedule');
            $routes->post('delete', 'Backend::delete_schedule');
        });

        $routes->group('regist_req', function($routes) {
            $routes->get('/', 'Backend::regist_req');
            $routes->get('add', 'Backend::add_regist_req');
            $routes->post('save', 'Backend::save_regist_req');
            $routes->get('edit/(:segment)', 'Backend::edit_regist_req/$1');
            $routes->put('update', 'Backend::update_regist_req');
        });

        $routes->group('regist_procedure', function($routes) {
            $routes->get('/', 'Backend::regist_procedure');
            $routes->get('add', 'Backend::add_regist_procedure');
            $routes->post('save', 'Backend::save_regist_procedure');
            $routes->get('edit/(:segment)', 'Backend::edit_regist_procedure/$1');
            $routes->put('update', 'Backend::update_regist_procedure');
        });

        $routes->group('accounts', function($routes) {
            $routes->get('/', 'Backend::accounts');
            $routes->get('print/(:segment)', 'Backend::print_student/$1');
            $routes->get('(:segment)/(:segment)', 'Backend::detail_accounts/$1/$2');
        });

        $routes->group('account', function($routes) {
            $routes->get('/', 'Backend::account');
            $routes->post('basic/save', 'Backend::basic_account');
            $routes->post('image/save', 'Backend::image_account');
        });
    });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
