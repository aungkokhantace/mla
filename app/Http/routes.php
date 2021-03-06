<?php
Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => 'frontendorbackend'], function () {

        //Frontend
        Route::get('/', 'Frontend\HomeController@index');

        //Backend
        Route::group(['prefix' => 'backend'], function () {

            Route::get('/', 'Auth\AuthController@showLogin');
            Route::get('login', array('as'=>'backend/login','uses'=>'Auth\AuthController@showLogin'));
            Route::post('login', array('as'=>'backend/login','uses'=>'Auth\AuthController@doLogin'));
            Route::get('logout', array('as'=>'backend/logout','uses'=>'Auth\AuthController@doLogout'));
            Route::get('dashboard', array('as'=>'backend/dashboard','uses'=>'Core\DashboardController@dashboard'));
            Route::get('/errors/{errorId}', array('as'=>'backend//errors/{errorId}','uses'=>'Core\ErrorController@index'));
            Route::get('/error/{errorId}/{module}', array('as'=>'backend/error/{errorId}','uses'=>'Core\ErrorController@error'));
            Route::get('/unauthorize', array('as'=>'backend/unauthorize','uses'=>'Core\ErrorController@unauthorize'));

            // Password Reset Routes...
            Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
            Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
            Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);

            //Sample
            Route::get('sample/excel/index',['as' => 'sample/excel/index','uses' => 'Sample\ExcelExportController@index']);
            Route::get('sample/excelExport',['as' => 'sample/excelExport','uses' => 'Sample\ExcelExportController@excelExport']);
            Route::get('sample/pdf/index',['as' => 'sample/pdf/index','uses' => 'Sample\PDFExportController@index']);
            Route::get('sample/pdf/pdfExport',['as' => 'sample/pdf/pdfExport','uses' => 'Sample\PDFExportController@pdfExport']);
            Route::get('sample/chart',['as' => 'sample/chart','uses' => 'Sample\ChartController@index']);
            Route::get('sample/excel/import',['as'=>'sample/excel/import','uses'=>'Sample\ExcelExportController@import']);
            Route::post('sample/excelImport',['as'=>'sample/excelImport','uses'=>'Sample\ExcelExportController@excelImport']);

        });

    Route::group(['middleware' => 'right'], function () {

        //Backend
        Route::group(['prefix' => 'backend'], function () {
            // Site Configuration
            Route::get('config', array('as'=>'backend/config','uses'=>'Core\ConfigController@edit'));
            Route::post('config', array('as'=>'backend/config','uses'=>'Core\ConfigController@update'));

            //User
            Route::get('user', array('as'=>'backend/user','uses'=>'Core\UserController@index'));
            Route::get('user/create', array('as'=>'backend/user/create','uses'=>'Core\UserController@create'));
            Route::post('user/store', array('as'=>'backend/user/store','uses'=>'Core\UserController@store'));
            Route::get('user/edit/{id}',  array('as'=>'backend/user/edit','uses'=>'Core\UserController@edit'));
            Route::post('user/update', array('as'=>'backend/user/update','uses'=>'Core\UserController@update'));
            Route::post('user/destroy', array('as'=>'backend/user/destroy','uses'=>'Core\UserController@destroy'));
            Route::get('user/profile/{id}', array('as'=>'backend/user/profile','uses'=>'Core\UserController@profile'));
            Route::get('userAuth', array('as'=>'backend/userAuth','uses'=>'Core\UserController@getAuthUser'));

            //Role
            Route::get('role', array('as'=>'backend/role','uses'=>'Core\RoleController@index'));
            Route::get('role/create',  array('as'=>'backend/role/create','uses'=>'Core\RoleController@create'));
            Route::post('role/store',  array('as'=>'backend/role/store','uses'=>'Core\RoleController@store'));
            Route::get('role/edit/{id}',  array('as'=>'backend/role/edit','uses'=>'Core\RoleController@edit'));
            Route::post('role/update',  array('as'=>'backend/role/update','uses'=>'Core\RoleController@update'));
            Route::post('role/destroy',  array('as'=>'backend/role/destroy','uses'=>'Core\RoleController@destroy'));
            Route::get('rolePermission/{roleId}', array('as'=>'backend/rolePermission','uses'=>'Core\RoleController@rolePermission'));
            Route::post('rolePermissionAssign/{id}',   array('as'=>'backend/rolePermissionAssign','uses'=>'Core\RoleController@rolePermissionAssign'));

            //Permission
            Route::get('permission', array('as'=>'backend/permission','uses'=>'Core\PermissionController@index'));
            Route::get('permission/create', array('as'=>'backend/permission/create','uses'=>'Core\PermissionController@create'));
            Route::post('permission/store', array('as'=>'backend/permission/store','uses'=>'Core\PermissionController@store'));
            Route::get('permission/edit/{id}', array('as'=>'backend/permission/edit','uses'=>'Core\PermissionController@edit'));
            Route::post('permission/update', array('as'=>'backend/permission/update','uses'=>'Core\PermissionController@update'));
            Route::post('permission/destroy', array('as'=>'backend/permission/destroy','uses'=>'Core\PermissionController@destroy'));

            //Country
            Route::get('country', array('as'=>'backend/country','uses'=>'Backend\CountryController@index'));
            Route::get('country/create',array('as'=>'backend/country/create','uses'=>'Backend\CountryController@create'));
            Route::post('country/store', array('as'=>'backend/country/store','uses'=>'Backend\CountryController@store'));
            Route::get('country/edit/{id}', array('as'=>'backend/country/edit','uses'=>'Backend\CountryController@edit'));
            Route::post('country/update', array('as'=>'backend/country/update','uses'=>'Backend\CountryController@update'));
            Route::post('country/destroy', array('as'=>'backend/country/destroy','uses'=>'Backend\CountryController@destroy'));

            //City
            Route::get('city', array('as'=>'backend/city', 'uses'=>'Backend\CityController@index'));
            Route::get('city/create', array('as'=>'backend/city/create','uses'=>'Backend\CityController@create'));
            Route::post('city/store', array('as'=>'backend/city/store', 'uses'=>'Backend\CityController@store'));
            Route::get('city/edit/{id}', array('as'=>'backend/city/edit', 'uses'=>'Backend\CityController@edit'));
            Route::post('city/update', array('as'=>'backend/city/update', 'uses'=>'Backend\CityController@update'));
            Route::post('city/destroy', array('as'=>'backend/city/destroy', 'uses'=>'Backend\CityController@destroy'));

            //Township
            Route::get('township',array('as'=>'backend/township','uses'=>'Backend\TownshipController@index'));
            Route::get('township/create', array('as'=>'backend/township/create', 'uses'=>'Backend\TownshipController@create'));
            Route::post('township/store', array('as'=>'backend/township/store', 'uses'=>'Backend\TownshipController@store'));
            Route::get('township/edit/{id}', array('as'=>'backend/township/edit', 'uses'=>'Backend\TownshipController@edit'));
            Route::post('township/update', array('as'=>'backend/township/update', 'uses'=>'Backend\TownshipController@update'));
            Route::post('township/destroy', array('as'=>'backend/township/destroy', 'uses'=>'Backend\TownshipController@destroy'));

        });

    });

    });



});


 Route::group(['prefix' => 'api'], function () {
        
        Route::post('activate', array('as'=>'activate','uses'=>'ApiController@Activate'));
        Route::post('check', array('as'=>'check','uses'=>'ApiController@check'));
    });