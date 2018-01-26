<?php
function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($petname)
{
    return ctype_alpha($petname) && !empty($petname);
}

$errors = array();

    if (!validColor($color))
    {
        $errors['color']= "Please enter a valid color.";
    }

    $success = sizeof($errors) == 0;
