<?php

use LoginMeNow\App\Http\Controllers\SettingsController;
use LoginMeNow\WpMVC\Routing\Route;

Route::get('admin/settings', [SettingsController::class, 'index'], ['admin']);
Route::post('admin/settings/fields', [SettingsController::class, 'get_fields'], ['admin']);
Route::post('admin/settings/save', [LoginMeNow\App\http\Controllers\Controller::class, 'save'], ['admin']);
