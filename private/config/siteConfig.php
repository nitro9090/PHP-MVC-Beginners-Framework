<?php
//The site's configuration file.  It holds any site wide variables and common use variables (aka global static variables). 
//Like the site's name and a variable for the root path

$site_name = "Site Name";

// sets a variable name to the site's root path and locaion of the common folder (used for common PHP, css, javascript files when serving a page)
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$commonFolder = $rootPath . "/public/common/";