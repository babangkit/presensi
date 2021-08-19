<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['matkul/BksCEAF2V2tTJRSQAsJBR1YTgxIHb87VXFaFS33rdVE6tsa(:any)'] = 'matkul/presensi/$1';
$route['matkul/2V2tTJwEZCQFdTlB8bZyBxRsJBR1YTgxIVXFaVQFSVE8HyA(:any)'] = 'matkul/presensi/$1';
$route['matkul/Ziaj897gJSDskiHjbc68bZyBxRsJBR1IN97dnYTgxF8djYak(:any)'] = 'matkul/presensi/$1';
$route['matkul/8aHB5b8DSFNdsf7sJBR1YTg78hbHBdsf6VGUSVE8Hyaj7hkQ(:any)'] = 'matkul/presensi/$1';

$route['matkul/edit_action=Ahyd87jHnkd98AS5fsd6bN75Kc5SADG007JSDA7dklcbrci(:any)'] = 'matkul/edit/$1';
$route['matkul/edit_action=mjP935vagd7HD9sdf6gdsnK7D5SG8AKHGBOldu5fsp026gd(:any)'] = 'matkul/edit/$1';
$route['matkul/edit_action=BTrsad6imFydsFD89fsDfog98fnG6kb53GBj7gde4df8ilc(:any)'] = 'matkul/edit/$1';
$route['matkul/edit_action=RzJ864H8sd0MJF6dKj8rDbJ8Mks9JGD6hsdj0O96vd5kdyU(:any)'] = 'matkul/edit/$1';

$route['matkul/(:any)'] = 'matkul/kosong';

