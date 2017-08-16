<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Core\Role\RoleRepositoryInterface','App\Core\Role\RoleRepository');
        $this->app->bind('App\Core\Permission\PermissionRepositoryInterface','App\Core\Permission\PermissionRepository');
        $this->app->bind('App\Core\Config\ConfigRepositoryInterface','App\Core\Config\ConfigRepository');
        $this->app->bind('App\Core\User\UserRepositoryInterface','App\Core\User\UserRepository');
        $this->app->bind('App\Setup\Customer\CustomerRepositoryInterface','App\Setup\Customer\CustomerRepository');
        $this->app->bind('App\Setup\Backend\BackendRepositoryInterface','App\Setup\Backend\BackendRepository');
        $this->app->bind('App\Setup\FrontEnd\FrontEndRepositoryInterface','App\Setup\FrontEnd\FrontEndRepository');
        $this->app->bind('App\Setup\BackendClient\BackendClientRepositoryInterface','App\Setup\BackendClient\BackendClientRepository');
        $this->app->bind('App\Sample\Test\TestRepositoryInterface','App\Sample\Test\TestRepository');
        $this->app->bind('App\Backend\Country\CountryRepositoryInterface','App\Backend\Country\CountryRepository');
        $this->app->bind('App\Backend\City\CityRepositoryInterface','App\Backend\City\CityRepository');
        $this->app->bind('App\Backend\Township\TownshipRepositoryInterface','App\Backend\Township\TownshipRepository');

        $this->app->bind('App\Backend\Page\PageRepositoryInterface','App\Backend\Page\PageRepository');
        $this->app->bind('App\Backend\Post\PostRepositoryInterface','App\Backend\Post\PostRepository');
        $this->app->bind('App\Backend\Event\EventRepositoryInterface','App\Backend\Event\EventRepository');
        $this->app->bind('App\Backend\Template\TemplateRepositoryInterface','App\Backend\Template\TemplateRepository');
        $this->app->bind('App\Backend\GalleryImage\ImageGalleryRepositoryInterface','App\Backend\GalleryImage\ImageGalleryRepository');
        $this->app->bind('App\Backend\LatestNew\LatestNewRepositoryInterface','App\Backend\LatestNew\LatestNewRepository');
        $this->app->bind('App\Backend\PostConferenceTravel\PostConferenceTravelRepositoryInterface','App\Backend\PostConferenceTravel\PostConferenceTravelRepository');
        $this->app->bind('App\Backend\LibraryCulture\LibraryCultureRepositoryInterface','App\Backend\LibraryCulture\LibraryCultureRepository');
        $this->app->bind('App\Backend\Accommodation\AccommodationRepositoryInterface','App\Backend\Accommodation\AccommodationRepository');

    }
}
