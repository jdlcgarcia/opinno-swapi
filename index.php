<?php
include_once 'vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

use Dotenv\Dotenv;
use OpinnoSwapi\Router;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

Router::route();