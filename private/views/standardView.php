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
          // adds the page specific meta data to the page
          if ($current_page->use_customHead)
          {
               if (file_exists($current_page->page_folderFullPath . $current_page->page_name . "_head.php"))
               {
                    include $current_page->page_folderFullPath . $current_page->page_name . "_head.php";
               }
               else
               {
                    echo "console.log('custom head doesn't exist for this page')";
                    include $current_page->common_folder . "php/undefined_head.php";
               }
          }
          else
          {
               include $current_page->common_folder . "php/undefined_head.php";
          }

          if ($current_page->use_commonHead)
          {
               include $current_page->common_folder . "php/common_head.php";
          }
          ?>
          <!-- Loading the BootStrap CSS files (do not change unless you know what you are doing) -->
          <link rel="stylesheet" href="/public/common/css/bootstrap/bootstrap.min.css">
          <link rel="stylesheet" href="/public/common/css/bootstrap/bootstrap-theme.min.css">
          <link rel="stylesheet" href="/public/common/pageTopBot/pageTopBot.css">
          <?php
          if ($current_page->use_commonCSS)
          {
               include $current_page->common_folder . "php/common_css.php";
          }

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

          // adds the pages meta data to the page head
          ?>
     </head>
     <body>
          <?php
          if($current_page->use_googleAnalytics){
               include $current_page->common_folder . "php/googleAnalytics.php";
          }
          ?>
          <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
          <?php
          include $current_page->common_folder . "pageTopBot/pageTop.php";
          ?>

          <div class="text-center container" id="mainContentSection">
               <?php
               include $current_page->page_folderFullPath . $current_page->page_name . ".php";
               ?>
               
          </div>

          <?php
              include $current_page->common_folder . "pageTopBot/pageBottom.php";
          ?>

          <!-- loading jquery, bootstrap and modernizr javascript files (do not change unless you know what you are doing) -->
          <script src="/public/common/js/vendor/jquery-1.11.2.min.js"></script>
          <script src="/public/common/js/vendor/bootstrap.min.js"></script>
          <script src="/public/common/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

          <script>
               window.jQuery || document.write('<script src="multiUseCode/js/vendor/jquery-1.11.2.min.js"><\/script>')
          </script>
          
          <?php
          if ($current_page->use_commonJs)
          {
               include $current_page->common_folder . "php/common_js.php";
          }
          ?>

          <!-- javascript applied to the page header and footer --> 
          <script src="/public/common/pageTopBot/pageTopBot.js"></script>

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