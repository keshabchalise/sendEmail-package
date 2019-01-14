<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/01/2019
 * Time: 12:45
 */
namespace Keshab\SendEmail;

use \Illuminate\Support\ServiceProvider;

class SendEmailServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','sendemail');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register(){

    }
}