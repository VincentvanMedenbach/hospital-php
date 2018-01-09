<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['create'] = 'clients/create';
$route['edit/(:any)'] = 'clients/edit/$1';
$route['delete/(:any)'] = 'clients/delete/$1';
$route['species/create'] = 'species/create';
$route['species/edit/(:any)'] = 'species/edit/$1';
$route['species/delete/(:any)'] = 'species/delete/$1';


$route['default_controller'] = 'clients';
//$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

