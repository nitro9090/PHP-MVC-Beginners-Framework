<?php
     $current_page->page_disabled = false; // if true, this page will be inaccessible
     
     $current_page->page_controller = "standardController";  //says which controller to use for setting up the page
     $current_page->page_view = "standardView"; // says which view the page should use
     
     $current_page->requiresAuthentication = false;  //does this page require authentication for access
    
     $current_page->use_customHead = true; //says whether the page will use custom meta data, like title, description, author, and any other head info needed (you always should), if true, page folder requires a  (pageName)_meta.php file
     $current_page->use_commonHead = true;  // says whether the page should include the common meta and head data, like favicons, charset, viewport, etc (you will in most cases).
     
     $current_page->use_commonCSS = true; // says whether the page will use the common CSS styling of the site (you usually will use this)
     $current_page->use_customCSS = false; // says whether the page uses custom CSS.  If true, the page's folder requires a  (pageName)_css.php file
     
     $current_page->use_commonJs = true; // says whether the page uses the common js files (you usually want this)
     $current_page->use_customJs = false; // says whether the page will use a set of custom javascript files, if true page folder requires a  (pageName)_js.php file