<?php

if($app->get('config.errors')) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
