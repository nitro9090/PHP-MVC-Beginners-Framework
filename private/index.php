<?php

/* this PHP file sets up a page object which is used to serve the page, then sends that object to the corrent route file
 * If it can't figure out the appropriate page to serve it serves up the corresponding error pages.
 * 
 * the page object says which route file to use, which controller to use and which view to use along with a number 
 * of configurations for those files (like which common files to use, which custom files to use, etc)  
 */

//Required for initializing routing
$rootPath = $_SERVER['DOCUMENT_ROOT'];

// requires the site wide config file (which sets certain global variables)
require_once $rootPath . "/private/config/siteConfig.php";

$page_URL = explode("/", $_REQUEST['page']);

if($page_URL[0] == NULL){
     $route = 'standard_server_route';
} else if ($page_URL == 'API'){
     $route = 'API';
} else {
     $route = 'standard_server_route';
}

//Loads the appopriate route for the page 
require_once $rootPath . "/private/routes/" . $route . ".php";
