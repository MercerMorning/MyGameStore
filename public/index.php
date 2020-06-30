<?php

use App\Http\Controllers\ParsingController;

require __DIR__ . '/functions.php';

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

/**
 * Планировщик задач
 */
//$startTime = new \DateTime('2020-06-29 20:38:54');
//$rule = new \Scheduler\Job\RRule('FREQ=DAILY;COUNT=1500', $startTime); //run monthly, at 20:00:00 starting from the 12th of December 2017, 5 times
//$job = new \Scheduler\Job\Job($rule, function () {
//    ParsingController::updatePrice();
//});
//
//$scheduler = new \Scheduler\Scheduler();
//$scheduler->addJob($job);
//
//$jobRunner = new \Scheduler\JobRunner\JobRunner();
//$from      = new \DateTime('2020-06-29 20:38:54');
//$to        = new \DateTime('2020-06-29 20:38:54');
//$reports   = $jobRunner->run($scheduler, $from, $to, true);


