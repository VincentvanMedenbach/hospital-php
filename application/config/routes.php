<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['clients/create'] = 'clients/create';
$route['clients/(:any)'] = 'clients/edit/$1';
$route['default_controller'] = 'clients';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

