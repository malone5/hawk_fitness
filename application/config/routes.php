<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Template ---->    $route['URL_STRING'] = 'CLASS/FUNCTION/ID';

//Other routes


// Manager (logout, profile, other possible additions)
$route['manage/logout'] = 'ManageCtrl/logout';
$route['manage/account'] = 'ManageCtrl/account';
$route['manage/username'] = 'ManageCtrl/username';
$route['manage/password'] = 'ManageCtrl/password';

// Class Type CRUD
$route['manage/classtypes'] = 'ClassTypeCtrl/index';
$route['manage/new_classtype'] = 'ClassTypeCtrl/createClassType';
$route['manage/classtypes/edit/(:num)'] = 'ClassTypeCtrl/editClassType/$1';
$route['manage/classtypes/delete/(:num)'] = 'ClassTypeCtrl/deleteClassType/$1';

// Fitness Class CRUD
$route['manage/fitnessclasses'] = 'FitClassCtrl/index';
$route['manage/multipleDelete'] = 'FitClassCtrl/multipleDelete';
$route['manage/new_fitnessclass'] = 'FitClassCtrl/createFitClass';
$route['manage/fitnessclasses/edit/(:num)'] = 'FitClassCtrl/editFitClass/$1';
$route['manage/fitnessclasses/delete/(:num)'] = 'FitClassCtrl/deleteFitClass/$1';
$route['manage/reports'] = 'ReportCtrl/index';
$route['manage'] = 'ManageCtrl/index';
$route['manage/fitnessclasses/update/(:num)']='FitClassCtrl/editClass';

// Email get
$route['manage/email_list']='ManageCtrl/emailList';

//Public routes
$route['login'] = 'LoginCtrl/index';
$route['forgotPassword'] = 'LoginCtrl/forgotPassword';
$route['class_types'] = 'HomeCtrl/classTypes';
$route['/'] = 'HomeCtrl/index';
$route['default_controller'] = 'HomeCtrl/index'; //

// Check in
$route['checkin/(:num)'] = 'ManageCtrl/checkin/$1';
$route['manage/checkin'] = 'ManageCtrl/manage_checkin';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
