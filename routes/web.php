<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('home');
});

Route::get('\run-migration', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migration completed successfully.: <pre>' . Artisan::output() . '</pre>';
});
