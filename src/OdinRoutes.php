<?php

namespace ctf0\Odin;

use Illuminate\Support\Facades\Route;

class OdinRoutes
{
    public static function routes()
    {
        Route::group([
            'prefix' => 'odin',
            'as'     => 'odin.',
        ], function () {
            Route::post('revision/{id}/preview', '\ctf0\Odin\Controllers\OdinController@preview')->name('preview');
            Route::post('restore/{id}', '\ctf0\Odin\Controllers\OdinController@restore')->name('restore');
            Route::put('restore-soft/{id}', '\ctf0\Odin\Controllers\OdinController@restoreSoft')->name('restore.soft');
            Route::delete('remove/{id}', '\ctf0\Odin\Controllers\OdinController@remove')->name('remove');
        });
    }
}
