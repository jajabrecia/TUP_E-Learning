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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'pages';
$route['student'] = 'student_dashboard';
$route['professor'] = 'prof_dashboard';
$route['my_students'] = 'my_students_controller';
$route['login'] = 'login_controller';
$route['loginprof'] = 'login_controller/professor';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin routes
$route['admin'] = 'admin_dashboard';
$route['admin/manage'] = 'Admin_dashboard/index/manageclasses';
$route['admin/manage/:num'] = 'Admin_dashboard/index/manageclasses';
$route['admin/manage/create'] = 'Admin_dashboard/index/createclass';
$route['admin/manage/search'] = 'Admin_dashboard/searchClasses';
//routes for viewing specific class
$route['admin/manage/:num/view/:num'] = 'Admin_dashboard/index/editclass';
$route['admin/manage/view/:num'] = 'Admin_dashboard/index/editclass';
$route['admin/manage/search/view/:num'] = 'Admin_dashboard/index/editclass';
//deleting studs
$route['admin/manage/view/:num/:any']='Admin_dashboard/index/deletestud';
$route['admin/manage/:num/view/:num/:any']='Admin_dashboard/index/deletestud';
//updating prof
$route['admin/manage/view/:num/assignprof/:any']='Admin_dashboard/index/newprof';
$route['admin/manage/:num/view/:num/assignprof/:any']='Admin_dashboard/index/newprof';