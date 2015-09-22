<?php

// sets a variable name to the document root path (This is used to direct PHP to your site's root folder)
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$pageSuccessfullySetup = false;
$count = 0;

// requires that the site's config file (which sets certain global variables) and loads the pageSetup class
require_once $rootPath . "/private/config/siteConfig.php";
require_once $rootPath . "/private/models/pageSetup.php";

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

//sets the common folder variable for the current page (the common folder is a set of files that are used across multiple site pages)
$common_folder = $rootPath . "/public/common/";

// creates a new page object with all of the folder paths (look up object oriented programming, OOP, if you don't know what this is)
$current_page = new PageSetup($rootPath, $innerFolder, $page, $common_folder);


while ($pageSuccessfullySetup === FALSE)
{
     //checks to see if the page has a config file (which deals with routing to the correct controller, the page format, etc).  If no config file is found, it uses a standard page determined by the PageSetup model.
     if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_config.php"))
     {
          include_once $current_page->page_folderFullPath . $current_page->page_name . "_config.php";
     }

     // checks to make sure the paths work, the pages aren't disabled, etc.
     $pageSuccessfullySetup = $current_page->isPageSetupCorrectly();
     
     // if this loop occurs more than 5 times it automatically loads the main page (this means there was an error)
     $count += 1;
     if($count > 4){
          $current_page = new PageSetup($rootPath, '', 'main', $common_folder);
          include_once $current_page->page_folderFullPath . $current_page->page_name . "_config.php";
          $pageSuccessfullySetup = true;
     }
}

//Loads the appopriate controller for the page 
require_once $rootPath . "/private/controllers/" . $current_page->page_controller . ".php";