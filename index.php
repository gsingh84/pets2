<?php
session_start();

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//colors
$f3->set('colors', array('pink','green', 'blue'));

//Set devug level
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    $view = new View;
    echo $view->render
    ('views/home.html');
});

$f3->route('GET /pets/show/@type',
    function($f3, $params) {
        switch ($params['type']) {
            case 'cat':
                echo "<img src='http://r.ddmcdn.com/s_f/o_1/cx_462/cy_245/cw_1349/ch_1349/w_720/APL/uploads/2015/06/caturday-shutterstock_149320799.jpg' alt='cat'>";
                break;
            case 'dog':
                echo "<img src='http://images.tritondigitalcms.com/6616/sites/115/2017/12/08073633/PB1201_STORY_CARO-Authority-HealthyOutside-DOG-20160818.jpeg' alt='dog'>";
                break;
            default:
                $f3->error(404);
        }
});

$f3->route('GET /pets/order',
    function() {
        $view = new View;
        echo $view->render
        ('views/form1.html');
});

$f3->route('POST /pets/order2',
    function($f3) {
        $_SESSION['type'] = $f3->get('POST.type');

        $view = new View;
        echo $view->render
        ('views/form2.html');
});

$f3->route('POST /pets/results',
    function($f3) {
    $_SESSION['color'] = $f3->get('POST.color');

    $f3->set('color', $_SESSION['color']);
    $f3->set('type', $_SESSION['type']);
    $template = new Template();
    echo $template->render('views/results.html');
});

$f3->route('GET|POST /new-pet', function($f3){
    $template = new Template();
    echo $template->render('views/order-pet.html');
});

//Run fat free
$f3->run();