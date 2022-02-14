<?php

Route::group([
        'prefix'        => 'admin/helloworld',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'Sefasungur\HelloWorld\Http\Controllers\Admin\HelloWorldController@index')->defaults('_config', [
            'view' => 'helloworld::admin.index',
        ])->name('admin.helloworld.index');

});