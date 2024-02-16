<?php
/* The `spl_autoload_register` function is registering a function that will be called whenever a class
is being used but has not been defined yet. */
spl_autoload_register(function ($class_name) {
	$class_name = str_replace("_", "/", $class_name);
    include_once $class_name . '.php';
});