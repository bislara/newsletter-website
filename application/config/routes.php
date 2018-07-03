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
$route['api/post/get/(:any)'] = 'api/getPostByname/$1';
$route['api/post/get/comments/(:any)'] = 'api/getComments/$1';
$route['api/post/submit/comments'] = 'api/Comment_submit';
$route['api/signin'] = 'api/signin';
$route['api/featured']='api/featured_post';
$route['api/post/get/(:any)']='api/getPost_id/$1';



$route['admin/comments']='posts/comments';
$route['admin/login'] ='admin_user/login';
$route['admin/register'] ='admin_user/register';
$route['forum/create']='forum/create';
$route['forum/(:any)']='forum/view/$1';
$route['forum'] ='forum/add';
$route['posts/featured'] ='posts/featured';
$route['posts/index'] ='posts/index';
$route['posts/admin/browse']='posts/browse';
$route['posts/admin/add'] ='posts/right';
$route['posts/admin/update'] ='posts/update';
$route['posts/ask-a-question'] ='posts/ask_a_question';
$route['posts/search'] ='posts/search/$1';
$route['posts/(:any)']='posts/view/$1';
$route['posts'] ='posts/index';
$route['default_controller'] = 'pages/view';
$route['first'] = 'welcome/home/$1';
$route['(:any)/(:any)']='pages/view/$1/$2';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
