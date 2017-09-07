<?php
Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => 'frontendorbackend'], function () {

        //Frontend
        Route::get('/', 'Frontend\HomeController@index');
        Route::get('/home', 'Frontend\HomeController@index');

        Route::get('/latest_news_detail/{id}', 'Frontend\LatestNewsController@detail');
        Route::get('/latest_news_all', 'Frontend\LatestNewsController@allLatestNews');

        Route::get('/contact', 'Frontend\ContactController@index');

        Route::get('/exhibition', 'Frontend\ExhibitionController@index');
        Route::get('/exhibition_agreement', 'Frontend\ExhibitionController@exhibition_agreement');
        Route::get('/exhibition_booth', 'Frontend\ExhibitionController@exhibition_booth');
        Route::get('/exhibition_exhibitor', 'Frontend\ExhibitionController@exhibition_exhibitor');
        Route::post('/exhibition_exhibitor/store', 'Frontend\ExhibitionController@exhibition_exhibitor_store');
        Route::get('/exhibition_floor_plan', 'Frontend\ExhibitionController@exhibition_floor_plan');
        Route::get('/exhibition_sponsorship', 'Frontend\ExhibitionController@exhibition_sponsorship');

        Route::get('/gallery', 'Frontend\GalleryController@index');
        
        Route::get('/program', 'Frontend\ProgramController@index');
        Route::get('/program_call', 'Frontend\ProgramController@program_call');
        Route::post('/program_call/store', 'Frontend\ProgramController@program_call_store');
        Route::get('/program_conference', 'Frontend\ProgramController@program_conference');
        Route::get('/program_guideline', 'Frontend\ProgramController@program_guideline');
        Route::get('/program_library', 'Frontend\ProgramController@program_library');
        Route::get('/program_poster', 'Frontend\ProgramController@program_poster');
        Route::post('/program_poster/store', 'Frontend\ProgramController@program_poster_store');
        Route::get('/program_pre_conference', 'Frontend\ProgramController@program_pre_conference');

        Route::get('/registration', 'Frontend\RegistrationController@index');
        Route::post('/registration/store', 'Frontend\RegistrationController@store');
        Route::get('/registration_cancellation', 'Frontend\RegistrationController@registration_cancellation');
        Route::get('/registration_fee', 'Frontend\RegistrationController@registration_fee');
        Route::get('/registration_letter', 'Frontend\RegistrationController@registration_letter');
        Route::get('/registration_visa', 'Frontend\RegistrationController@registration_visa');

        Route::get('/travel', 'Frontend\TravelController@index');
        Route::get('/travel_accommodation', 'Frontend\TravelController@travel_accommodation');


        //Backend
        Route::group(['prefix' => 'backend'], function () {

            Route::get('/', 'Auth\AuthController@showLogin');
            Route::get('login', array('as' => 'backend/login', 'uses' => 'Auth\AuthController@showLogin'));
            Route::post('login', array('as' => 'backend/login', 'uses' => 'Auth\AuthController@doLogin'));
            Route::get('logout', array('as' => 'backend/logout', 'uses' => 'Auth\AuthController@doLogout'));
            Route::get('dashboard', array('as' => 'backend/dashboard', 'uses' => 'Core\DashboardController@dashboard'));
            Route::get('/errors/{errorId}', array('as' => 'backend//errors/{errorId}', 'uses' => 'Core\ErrorController@index'));
            Route::get('/error/{errorId}/{module}', array('as' => 'backend/error/{errorId}', 'uses' => 'Core\ErrorController@error'));
            Route::get('/unauthorize', array('as' => 'backend/unauthorize', 'uses' => 'Core\ErrorController@unauthorize'));

            // Password Reset Routes...
            Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
            Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
            Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);

            //Sample
            Route::get('sample/excel/index', ['as' => 'sample/excel/index', 'uses' => 'Sample\ExcelExportController@index']);
            Route::get('sample/excelExport', ['as' => 'sample/excelExport', 'uses' => 'Sample\ExcelExportController@excelExport']);
            Route::get('sample/pdf/index', ['as' => 'sample/pdf/index', 'uses' => 'Sample\PDFExportController@index']);
            Route::get('sample/pdf/pdfExport', ['as' => 'sample/pdf/pdfExport', 'uses' => 'Sample\PDFExportController@pdfExport']);
            Route::get('sample/chart', ['as' => 'sample/chart', 'uses' => 'Sample\ChartController@index']);
            Route::get('sample/excel/import', ['as' => 'sample/excel/import', 'uses' => 'Sample\ExcelExportController@import']);
            Route::post('sample/excelImport', ['as' => 'sample/excelImport', 'uses' => 'Sample\ExcelExportController@excelImport']);

        });

        Route::group(['middleware' => 'right'], function () {

            //Backend
            Route::group(['prefix' => 'backend'], function () {
                // Site Configuration
                Route::get('config', array('as' => 'backend/config', 'uses' => 'Core\ConfigController@edit'));
                Route::post('config', array('as' => 'backend/config', 'uses' => 'Core\ConfigController@update'));

                //User
                Route::get('user', array('as' => 'backend/user', 'uses' => 'Core\UserController@index'));
                Route::get('user/create', array('as' => 'backend/user/create', 'uses' => 'Core\UserController@create'));
                Route::post('user/store', array('as' => 'backend/user/store', 'uses' => 'Core\UserController@store'));
                Route::get('user/edit/{id}', array('as' => 'backend/user/edit', 'uses' => 'Core\UserController@edit'));
                Route::post('user/update', array('as' => 'backend/user/update', 'uses' => 'Core\UserController@update'));
                Route::post('user/destroy', array('as' => 'backend/user/destroy', 'uses' => 'Core\UserController@destroy'));
                Route::get('user/profile/{id}', array('as' => 'backend/user/profile', 'uses' => 'Core\UserController@profile'));
                Route::get('userAuth', array('as' => 'backend/userAuth', 'uses' => 'Core\UserController@getAuthUser'));

                //Role
                Route::get('role', array('as' => 'backend/role', 'uses' => 'Core\RoleController@index'));
                Route::get('role/create', array('as' => 'backend/role/create', 'uses' => 'Core\RoleController@create'));
                Route::post('role/store', array('as' => 'backend/role/store', 'uses' => 'Core\RoleController@store'));
                Route::get('role/edit/{id}', array('as' => 'backend/role/edit', 'uses' => 'Core\RoleController@edit'));
                Route::post('role/update', array('as' => 'backend/role/update', 'uses' => 'Core\RoleController@update'));
                Route::post('role/destroy', array('as' => 'backend/role/destroy', 'uses' => 'Core\RoleController@destroy'));
                Route::get('rolePermission/{roleId}', array('as' => 'backend/rolePermission', 'uses' => 'Core\RoleController@rolePermission'));
                Route::post('rolePermissionAssign/{id}', array('as' => 'backend/rolePermissionAssign', 'uses' => 'Core\RoleController@rolePermissionAssign'));

                //Permission
                Route::get('permission', array('as' => 'backend/permission', 'uses' => 'Core\PermissionController@index'));
                Route::get('permission/create', array('as' => 'backend/permission/create', 'uses' => 'Core\PermissionController@create'));
                Route::post('permission/store', array('as' => 'backend/permission/store', 'uses' => 'Core\PermissionController@store'));
                Route::get('permission/edit/{id}', array('as' => 'backend/permission/edit', 'uses' => 'Core\PermissionController@edit'));
                Route::post('permission/update', array('as' => 'backend/permission/update', 'uses' => 'Core\PermissionController@update'));
                Route::post('permission/destroy', array('as' => 'backend/permission/destroy', 'uses' => 'Core\PermissionController@destroy'));

                //Country
                Route::get('country', array('as' => 'backend/country', 'uses' => 'Backend\CountryController@index'));
                Route::get('country/create', array('as' => 'backend/country/create', 'uses' => 'Backend\CountryController@create'));
                Route::post('country/store', array('as' => 'backend/country/store', 'uses' => 'Backend\CountryController@store'));
                Route::get('country/edit/{id}', array('as' => 'backend/country/edit', 'uses' => 'Backend\CountryController@edit'));
                Route::post('country/update', array('as' => 'backend/country/update', 'uses' => 'Backend\CountryController@update'));
                Route::post('country/destroy', array('as' => 'backend/country/destroy', 'uses' => 'Backend\CountryController@destroy'));

                //City
                Route::get('city', array('as' => 'backend/city', 'uses' => 'Backend\CityController@index'));
                Route::get('city/create', array('as' => 'backend/city/create', 'uses' => 'Backend\CityController@create'));
                Route::post('city/store', array('as' => 'backend/city/store', 'uses' => 'Backend\CityController@store'));
                Route::get('city/edit/{id}', array('as' => 'backend/city/edit', 'uses' => 'Backend\CityController@edit'));
                Route::post('city/update', array('as' => 'backend/city/update', 'uses' => 'Backend\CityController@update'));
                Route::post('city/destroy', array('as' => 'backend/city/destroy', 'uses' => 'Backend\CityController@destroy'));

                //Township
                Route::get('township', array('as' => 'backend/township', 'uses' => 'Backend\TownshipController@index'));
                Route::get('township/create', array('as' => 'backend/township/create', 'uses' => 'Backend\TownshipController@create'));
                Route::post('township/store', array('as' => 'backend/township/store', 'uses' => 'Backend\TownshipController@store'));
                Route::get('township/edit/{id}', array('as' => 'backend/township/edit', 'uses' => 'Backend\TownshipController@edit'));
                Route::post('township/update', array('as' => 'backend/township/update', 'uses' => 'Backend\TownshipController@update'));
                Route::post('township/destroy', array('as' => 'backend/township/destroy', 'uses' => 'Backend\TownshipController@destroy'));

                Route::get('page', array('as' => 'backend/page', 'uses' => 'Backend\PageController@index'));
                Route::get('page/create', array('as' => 'backend/page/create', 'uses' => 'Backend\PageController@create'));
                Route::post('page/store', array('as' => 'backend/page/store', 'uses' => 'Backend\PageController@store'));
                Route::get('page/edit/{id}', array('as' => 'backend/page/edit', 'uses' => 'Backend\PageController@edit'));
                Route::post('page/update', array('as' => 'backend/page/update', 'uses' => 'Backend\PageController@update'));
                Route::post('page/destroy', array('as' => 'backend/page/destroy', 'uses' => 'Backend\PageController@destroy'));

                //Post
                Route::get('post', array('as' => 'backend/post', 'uses' => 'Backend\PostController@index'));
                Route::get('post/create', array('as' => 'backend/post/create', 'uses' => 'Backend\PostController@create'));
                Route::get('post/edit/{id}', array('as' => 'backend/post/edit', 'uses' => 'Backend\PostController@edit'));
                Route::post('post/store', array('as' => 'backend/post/store', 'uses' => 'Backend\PostController@store'));
                Route::post('post/update', array('as' => 'backend/post/update', 'uses' => 'Backend\PostController@update'));
                Route::post('post/destroy', array('as' => 'backend/post/destroy', 'uses' => 'Backend\PostController@destroy'));

                //ImageGallery
                Route::get('image_gallery', array('as' => 'backend/image_gallery', 'uses' => 'Backend\ImageGalleryController@index'));
                Route::get('image_gallery/create', array('as' => 'backend/image_gallery/create', 'uses' => 'Backend\ImageGalleryController@create'));
                Route::post('image_gallery/store', array('as' => 'backend/image_gallery/store', 'uses' => 'Backend\ImageGalleryController@store'));
                Route::get('image_gallery/edit/{id}', array('as' => 'backend/image_gallery/edit', 'uses' => 'Backend\ImageGalleryController@edit'));
                Route::post('image_gallery/update', array('as' => 'backend/image_gallery/update', 'uses' => 'Backend\ImageGalleryController@update'));
                Route::post('image_gallery/destroy', array('as' => 'backend/image_gallery/destroy', 'uses' => 'Backend\ImageGalleryController@destroy'));

                //Latest New
                Route::get('latest_new', array('as' => 'backend/latest_new', 'uses' => 'Backend\LatestNewController@index'));
                Route::get('latest_new/create', array('as' => 'backend/latest_new/create', 'uses' => 'Backend\LatestNewController@create'));
                Route::post('latest_new/store', array('as' => 'backend/latest_new/store', 'uses' => 'Backend\LatestNewController@store'));
                Route::get('latest_new/edit/{id}', array('as' => 'backend/latest_new/edit', 'uses' => 'Backend\LatestNewController@edit'));
                Route::post('latest_new/update', array('as' => 'backend/latest_new/update', 'uses' => 'Backend\LatestNewController@update'));
                Route::post('latest_new/destroy', array('as' => 'backend/latest_new/destroy', 'uses' => 'Backend\LatestNewController@destroy'));

                //Post Conference Travel
                Route::get('post_conference_travel', array('as' => 'backend/post_conference_travel', 'uses' => 'Backend\PostConferenceTravelController@index'));
                Route::get('post_conference_travel/create', array('as' => 'backend/post_conference_travel/create', 'uses' => 'Backend\PostConferenceTravelController@create'));
                Route::post('post_conference_travel/store', array('as' => 'backend/post_conference_travel/store', 'uses' => 'Backend\PostConferenceTravelController@store'));
                Route::get('post_conference_travel/edit/{id}', array('as' => 'backend/post_conference_travel/edit', 'uses' => 'Backend\PostConferenceTravelController@edit'));
                Route::post('post_conference_travel/update', array('as' => 'backend/post_conference_travel/update', 'uses' => 'Backend\PostConferenceTravelController@update'));
                Route::post('post_conference_travel/destroy', array('as' => 'backend/post_conference_travel/destroy', 'uses' => 'Backend\PostConferenceTravelController@destroy'));

                //Library Culture
                Route::get('library_culture', array('as' => 'backend/library_culture', 'uses' => 'Backend\LibraryCultureController@index'));
                Route::get('library_culture/create', array('as' => 'backend/library_culture/create', 'uses' => 'Backend\LibraryCultureController@create'));
                Route::post('library_culture/store', array('as' => 'backend/library_culture/store', 'uses' => 'Backend\LibraryCultureController@store'));
                Route::get('library_culture/edit/{id}', array('as' => 'backend/library_culture/edit', 'uses' => 'Backend\LibraryCultureController@edit'));
                Route::post('library_culture/update', array('as' => 'backend/library_culture/update', 'uses' => 'Backend\LibraryCultureController@update'));
                Route::post('library_culture/destroy', array('as' => 'backend/library_culture/destroy', 'uses' => 'Backend\LibraryCultureController@destroy'));

                //Accommodation
                Route::get('accommodation', array('as' => 'backend/accommodation', 'uses' => 'Backend\AccommodationController@index'));
                Route::get('accommodation/create', array('as' => 'backend/accommodation/create', 'uses' => 'Backend\AccommodationController@create'));
                Route::post('accommodation/store', array('as' => 'backend/accommodation/store', 'uses' => 'Backend\AccommodationController@store'));
                Route::get('accommodation/edit/{id}', array('as' => 'backend/accommodation/edit', 'uses' => 'Backend\AccommodationController@edit'));
                Route::post('accommodation/update', array('as' => 'backend/accommodation/update', 'uses' => 'Backend\AccommodationController@update'));
                Route::post('accommodation/destroy', array('as' => 'backend/accommodation/destroy', 'uses' => 'Backend\AccommodationController@destroy'));

                //Conference Registration
                Route::get('conference_registration', array('as' => 'backend/conference_registration', 'uses' => 'Frontend\RegistrationController@all_conference_reg'));
                Route::get('conference_registration/detail/{id}', array('as' => 'backend/conference_registration/detail', 'uses' => 'Frontend\RegistrationController@detail'));
                Route::get('conference_registration/{status}/{id}', array('as' => 'backend/conference_registration/status', 'uses' => 'Frontend\RegistrationController@status_change'));
                Route::post('conference_registration/destroy', array('as' => 'backend/conference_registration/destroy', 'uses' => 'Frontend\RegistrationController@destroy'));

                //Program Call Registration
                Route::get('program_call', array('as' => 'backend/program_call', 'uses' => 'Frontend\ProgramController@all_program_call'));
                Route::get('program_call/detail/{id}', array('as' => 'backend/program_call/detail', 'uses' => 'Frontend\ProgramController@program_call_detail'));
                Route::get('program_call/{status}/{id}', array('as' => 'backend/program_call/status', 'uses' => 'Frontend\ProgramController@program_call_status_change'));
                Route::post('program_call/destroy', array('as' => 'backend/program_call/destroy', 'uses' => 'Frontend\ProgramController@destroy'));

                //Program Poster Registration
                Route::get('program_poster', array('as' => 'backend/program_poster', 'uses' => 'Frontend\ProgramController@all_program_poster'));
                Route::get('program_poster/detail/{id}', array('as' => 'backend/program_poster/detail', 'uses' => 'Frontend\ProgramController@program_poster_detail'));
                Route::get('program_poster/{status}/{id}', array('as' => 'backend/program_poster/status', 'uses' => 'Frontend\ProgramController@program_poster_status_change'));
                Route::post('program_poster/destroy', array('as' => 'backend/program_poster/destroy', 'uses' => 'Frontend\ProgramController@program_poster_destroy'));

                //Exhibitor Registration
                Route::get('exhibitor', array('as' => 'backend/exhibitor', 'uses' => 'Frontend\ExhibitionController@all_exhibitor'));
                Route::get('exhibitor/detail/{id}', array('as' => 'backend/exhibitor/detail', 'uses' => 'Frontend\ExhibitionController@exhibitor_detail'));
                Route::get('exhibitor/{status}/{id}', array('as' => 'backend/exhibitor/status', 'uses' => 'Frontend\ExhibitionController@exhibitor_status_change'));
                Route::post('exhibitor/destroy', array('as' => 'backend/exhibitor/destroy', 'uses' => 'Frontend\ExhibitionController@exhibitor_destroy'));

                 //Sponsors
                 Route::get('sponsor', array('as' => 'backend/sponsor', 'uses' => 'Backend\SponsorController@index'));
                 Route::get('sponsor/create', array('as' => 'backend/sponsor/create', 'uses' => 'Backend\SponsorController@create'));
                 Route::post('sponsor/store', array('as' => 'backend/sponsor/store', 'uses' => 'Backend\SponsorController@store'));
                 Route::get('sponsor/edit/{id}', array('as' => 'backend/sponsor/edit', 'uses' => 'Backend\SponsorController@edit'));
                 Route::post('sponsor/update', array('as' => 'backend/sponsor/update', 'uses' => 'Backend\SponsorController@update'));
                 Route::post('sponsor/destroy', array('as' => 'backend/sponsor/destroy', 'uses' => 'Backend\SponsorController@destroy'));

                //Event Emails
                Route::get('eventemail', array('as'=>'backend/eventemail','uses'=>'Backend\EventEmailController@index'));
                Route::get('eventemail/create', array('as'=>'backend/eventemail/create','uses'=>'Backend\EventEmailController@create'));
                Route::get('eventemail/edit/{id}', array('as'=>'backend/eventemail/edit','uses'=>'Backend\EventEmailController@edit'));
                Route::post('eventemail/store', array('as'=>'backend/eventemail/store','uses'=>'Backend\EventEmailController@store'));
                Route::post('eventemail/update', array('as'=>'backend/eventemail/update','uses'=>'Backend\EventEmailController@update'));
                Route::post('eventemail/destroy', array('as'=>'backend/eventemail/destroy','uses'=>'Backend\EventEmailController@destroy'));

                //Conference Registration Report
                Route::get('report/conference_registration', array('as'=>'backend/report/conference_registration','uses'=>'Report\ConferenceRegistrationReportController@index'));
                Route::get('report/conference_registration/search/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/conference_registration/search/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ConferenceRegistrationReportController@search'));
                Route::get('report/conference_registration/exportexcel/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/conference_registration/exportexcel/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ConferenceRegistrationReportController@excel'));

                //Exhibitor Report
                Route::get('report/exhibitor', array('as'=>'backend/report/exhibitor','uses'=>'Report\ExhibitorReportController@index'));
                Route::get('report/exhibitor/search/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/exhibitor/search/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ExhibitorReportController@search'));
                Route::get('report/exhibitor/exportexcel/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/exhibitor/exportexcel/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ExhibitorReportController@excel'));

                //Program Call Report
                Route::get('report/program_call', array('as'=>'backend/report/program_call','uses'=>'Report\ProgramCallReportController@index'));
                Route::get('report/program_call/search/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/program_call/search/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ProgramCallReportController@search'));
                Route::get('report/program_call/exportexcel/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/program_call/exportexcel/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ProgramCallReportController@excel'));

                //Program Poster Report
                Route::get('report/program_poster', array('as'=>'backend/report/program_poster','uses'=>'Report\ProgramPosterReportController@index'));
                Route::get('report/program_poster/search/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/program_poster/search/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ProgramPosterReportController@search'));
                Route::get('report/program_poster/exportexcel/{type?}/{from_date?}/{to_date?}', array('as'=>'backend/report/program_poster/exportexcel/{type?}/{from_date?}/{to_date?}','uses'=>'Report\ProgramPosterReportController@excel'));

                //for system reference
                Route::get('system_reference', array('as'=>'backend/system_reference','uses'=>'Backend\SystemReferenceController@index'));
            });
        });

    });
});

 Route::group(['prefix' => 'api'], function () {
        
        Route::post('activate', array('as'=>'activate','uses'=>'ApiController@Activate'));
        Route::post('check', array('as'=>'check','uses'=>'ApiController@check'));
    });