<?php

use LoginMeNow\App\Http\Controllers\BrowserTokenController;
use LoginMeNow\WpMVC\Routing\Route;

Route::post( 'generate', [BrowserTokenController::class, 'generate_token'], [] );
Route::post( 'validate', [BrowserTokenController::class, 'validate_token'], [] );
Route::post( 'generate-onetime-number', [BrowserTokenController::class, 'generate_link'], [] );

Route::group( 'browser-token', function () {
	Route::post( 'generate', [BrowserTokenController::class, 'admin_generate_token'], [] );
	Route::post( 'tokens', [BrowserTokenController::class, 'admin_tokens'], [] );
	Route::post( 'update-status', [BrowserTokenController::class, 'admin_update_token_status'], [] );
	Route::post( 'drop', [BrowserTokenController::class, 'admin_drop_token'], [] );
}, ['admin'] );

Route::post( 'browser-token/hide-popup', [BrowserTokenController::class, 'admin_hide_popup'], [] );