<!-- This is a view file or as I look to put a page template.  This page contains all of the logic for building out a page
I heavily use the config files for determining what goes on this page's

This view sets up a page with a header, main content section and footer., where the header and footer are the same 
for every page.
-->

<!doctype html>
<!--  For twitter bootstrap, determines which version of IE is used and in turn determines what functionality can be used -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
     <!--<![endif]-->
     <head>
          <?php
          // adds the page specific meta data to the page or an undefined head if none exists (you always want a custom head)
          if ($current_page->use_customHead)
          {
               if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_head.php"))
               {
                    include $current_page->page_folderFullPath . $current_page->page_name . "_head.php";
               }
               else
               {
                    include $commonFolder . "php/undefined_head.php";
               }
          }
          else
          {
               include $commonFolder . "php/undefined_head.php";
          }

          // uses common meta data if the page requires (usually you want to use this)
          if ($current_page->use_commonHead)
          {
               include $commonFolder . "php/common_head.php";
          }
          ?>
          <!-- Loading the BootStrap and header/footer CSS files, they are hardcoded to ensure that this view always
          has them-->
          <link rel="stylesheet" href="/public/common/css/bootstrap/bootstrap.min.css">
          <link rel="stylesheet" href="/public/common/css/bootstrap/bootstrap-theme.min.css">
          <link rel="stylesheet" href="/public/common/pageTopBot/pageTopBot.css">

          <?php
          //Loading common CSS 
          if ($current_page->use_commonCSS)
          {
               include $commonFolder . "php/common_css.php";
          }

          //Loading custom CSS
          if ($current_page->use_customCSS)
          {
               if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_css.php"))
               {
                    include $current_page->page_folderFullPath . $current_page->page_name . "_css.php";
               }
               else
               {
                    echo "console.log('custom css doesn't exist for this page')";
               }
          }
          ?>
     </head>
     <body>
          <!-- Gives a strongly worded warning to anyone using a outdated browser to upgrade, this site doesn't appreciate old technology-->
          <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
          <?php
          // includes the page header content to the page (note using "header" in a file name is dangerous, you have been warned)
          include $commonFolder . "pageTopBot/pageTop.php";
          ?>

          <!-- includes the main content section-->
          <div class="text-center container" id="mainContentSection">
               <?php
               include $current_page->page_folderFullPath . $current_page->page_name . ".php";
               ?>
          </div>

          <?php
          // includes the page footer (aka bottom) section (also using footer in a file name is bad :-( )
          include $commonFolder . "pageTopBot/pageBottom.php";
          ?>

          <!-- loading jquery, bootstrap javascript files, both of which are necessary for the page (note bootstrap needs jquery)-->
          <script src="/public/common/js/vendor/jquery-1.11.2.min.js"></script>
          <script src="/public/common/js/vendor/bootstrap.min.js"></script>

          <!-- loads any common javascript files -->
          <?php
          if ($current_page->use_commonJs)
          {
               include $commonFolder . "php/common_js.php";
          }
          ?>

          <!-- page header and footer specific javascript--> 
          <script src="/public/common/pageTopBot/pageTopBot.js"></script>

          <!-- loads customJs -->
          <?php
          if ($current_page->use_customJs)
          {
               if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_js.php"))
               {
                    include $current_page->page_folderFullPath . $current_page->page_name . "_js.php";
               }
               else
               {
                    echo "console.log('custom javascript doesn't exist for this page')";
               }
          }
          ?>
     </body>
</html>