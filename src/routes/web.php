<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 17/10/17
 * Time: 17:17
 */


Route::group(['namespace' =>'Quimgc\\Incidences\\Http\\Controllers'], function () {

    Route::get('/incidences','IncidenceController@index');

    Route::get('/incidences/{incidence}','IncidenceController@show');

    Route::get('/incidences_alt/{id}','IncidenceController@show2');

});

