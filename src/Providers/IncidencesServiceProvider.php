<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 17/10/17
 * Time: 16:38
 */

namespace Quimgc\Incidences\Providers;

use Illuminate\Support\ServiceProvider;

use Route;
class IncidencesServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (!defined('INCIDENCES_PATH')) {
            define('INCIDENCES_PATH', realpath(__DIR__.'/../../'));
        }
    }

    public function boot()
    {
        //dump("booting incidences package");
        $this->defineRoutes();
        $this->loadViews();
        $this->loadMigrations();
    }

    private function defineRoutes()
    {
        
        require INCIDENCES_PATH . '/src/routes/web.php';

    }

    private function loadViews()
    {
        $this->loadViewsFrom(INCIDENCES_PATH.'/resources/views','incidences');
    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(INCIDENCES_PATH.'/database/migrations');
    }

}