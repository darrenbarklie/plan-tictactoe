<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// URL = view

$route['games/create'] = 'games/create';
$route['games'] = 'games/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
