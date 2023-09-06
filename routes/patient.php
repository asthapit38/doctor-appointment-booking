<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:super-admin']], function () {
    //
});
