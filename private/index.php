<?php

/* this PHP file sets up a page object which is used to serve the page, then sends that object to the corrent route file
 * If it can't figure out the appropriate page to serve it serves up the corresponding error pages.
 * 
 * the page object says which route file to use, which controller to use and which view to use along with a number 
 * of configurations for those files (like which common files to use, which custom files to use, etc)  
 */

// requires the site wide config file (which sets certain global variables) and loads the page_model class
require_once $rootPath . "/private/config/siteConfig.php";
require_once $rootPath . "/private/models/page_model.php";

// based on what .htaccess sends this page, this determines the page name (page) and route to the page's folder (folder)
if (ISSET($_REQUEST['page']))
{
     $page = $_REQUEST['page'];
}
else
{
     $page = 'main';
}

if (ISSET($_REQUEST['folder']))
{
     $innerFolder = $_REQUEST['folder'];
}
else
{
     $innerFolder = '';
}

// creates a new page object with all of the folder paths (look up object oriented programming, OOP, if you don't know what this is)
$current_page = new PageSetup($rootPath, $innerFolder, $page);


// checks to see if the page has a config file (which deals with routing to the correct controller, the page format, etc).  
// If no config file is found, it uses the standard page determined by the PageSetup model.
if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_config.php"))
{
     include_once $current_page->page_folderFullPath . $current_page->page_name . "_config.php";
}

// checks to make sure the page exists, the pages aren't disabled, etc.  If they don't, it redirects the user to the corresponding error page
$pageSuccessfullySetup = $current_page->pageExistDisabled();

//Loads the appopriate route for the page 
require_once $rootPath . "/private/controllers/" . $current_page->page_route . ".php";
