<?php
$routes = [
    '' => 'AuthController@index',
    'login' => 'AuthController@login',
    'logout' => 'AuthController@logout',
    'dashboard' => 'DashboardController@index',
    'reports' => 'ReportController@index',
    'products' => 'ProductController@index',
    'regions' => 'RegionController@index',
    'channels' => 'ChannelController@index',
    'payments' => 'PaymentController@index',
    'master' => 'DashboardController@index', // Placeholder
    'settings' => 'DashboardController@index' // Placeholder
];