<?php

class PageSetup {
     public $site_rootPath; // the Root Path for the site 
     public $common_folder; // the folder in which common files for the pages are
     
     public $page_name;  // the name of the page to be accessed
     public $page_folder;  //the folder structure withinin the public/pages folder to reach the page's folder 
     public $page_folderFullPath; // the full path to the web page's folder

     public $page_disabled = true; // if this is true, then the page cannot be accessed
     public $page_controller = "standardController";  //says which controller to use for setting up the page
     public $page_view = "standardView"; //says which view to user for this page
     
     public $requiresAuthentication = false; // does this page require user authentication
     public $use_googleAnalytics = false;  //should this page be tracked using google analytics
     
     public $use_commonHead = true;  //this adds in common meta and head data, like favicons, charset, viewport, etc.
     public $use_customHead = false; // says whether the page should include a custom head, if true page folder requires a  (pageName)_head.php file
     public $use_commonCSS = true; // says whether the page will use the common CSS styling of the site
     public $use_customCSS = false; // says whether the page uses custom CSS, if true page folder requires a  (pageName)_css.php file
     public $use_commonJs = true; // says whether the page uses the common js files
     public $use_customJs = false; // says whether the page will use a set of custom javascript files, if true page folder requires a  (pageName)_js.php file

     
     public function __construct($rootPath, $folder, $pageName, $common_folder)
     {
           $this->common_folder = $common_folder;
          
          $this->site_rootPath = $rootPath;
          $this->page_name = $pageName;
          $this->page_folder = $folder;
          $this->page_folderFullPath = $this->site_rootPath . "/public/pages" . "/" . $this->page_folder . $this->page_name . "/";
     }

     public function isPageSetupCorrectly()
     {

          // checks to see if the page is missing, if it is the page is routed to the 404error page
          if (!file_exists($this->page_folderFullPath . $this->page_name . ".php"))
          {
               $this->page_name = "404error";
               $this->page_folder = 'errors/';
               $this->page_folderFullPath = $this->site_rootPath . "/public/pages/" . $this->page_folder . $this->page_name . "/";
               return false;
          }
          // checks to see if the page is disabled, if it is the page is routed to the pageDisabled page
          else if ($this->page_disabled === true)
          {
               $this->page_name = "pageDisabled";
               $this->page_folder = 'errors/';
               $this->page_folderFullPath = $this->site_rootPath . "/public/pages/" . $this->page_folder . $this->page_name . "/";
               return false;
          }

          return true;
     }
}
