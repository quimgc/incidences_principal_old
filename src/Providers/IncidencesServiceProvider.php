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
        if (!defined('EVENTS_PATH')) {
            define('EVENTS_PATH', realpath(__DIR__.'/../../'));
        }
    }

    public function boot()
    {
        //dump("booting incidences package");
        $this->defineRoutes();
    }

    private function defineRoutes()
    {
        
        require EVENTS_PATH . '/src/routes/web.php';

    }

}