<?php

use Illuminate\Routing\Route;

Route::group(['middleware' => ['role:super-admin']], function () {
    //
});
