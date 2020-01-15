<?php

require_once 'vendor/autoload.php';
    
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();


if(!empty($_POST)){
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Title:</label>
        <input name="title" type="text" /><br>
        <label for="">description:</label>
        <input name="description" type="text" /><br>
        <label for="">Months:</label>
        <input name="months" type="number" /><br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>

