<?php
/*
 * Routes are where you should put all of your routing logic, for instance if you need to interpret user input to
 * reach the appropriate page like user authentication.
 */

require_once $rootPath . "/private/models/standard_page_model.php";

$innerFolder= "";
$length_URL = count($page_URL);

if($page_URL[$length_URL -1] == NULL){
     $length_URL = $length_URL - 1;
}

if($length_URL < 1){
     $page = "main";
} else {
     $page = $page_URL[($length_URL -1)];
     for ($i = 0; $i < ($length_URL-1); $i++){
          $innerFolder = $innerFolder .  $page_URL[$i] . "/";
     }
}

echo $innerFolder;

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


require_once $rootPath . "/private/controllers/" . $current_page->page_controller . ".php";