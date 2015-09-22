<!-- This is the html for loading the top of the page, it is purely based on twitter bootstrap
If you don't know what that is I highly suggest googling "twitter bootstrap"-->

<nav class="navbar navbar-default navbar-fixed-top" id="header">
     <a href="/" id="logoLink" tabindex="-1">
          <img src="" alt="Logo">
     </a>
     <div class="container-fluid">
          <div class="navbar-header">

               <button type="button" class="navbar-toggle collapsed"
                       data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span>
               </button>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
               <ul id="navBarPageTop" class="nav navbar-nav nav-pills">
                    <li class="navBarStyling"><a href="/"> Home </a></li>

                    <li class="dropdown navBarStyling">
                         <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> More Pages <span class="caret"></span></a>
                         <ul class="dropdown-menu" role="menu">
                              <li><a href="/newDesigners"> Page 1 </a></li>
                              <li><a href="/newPlaytesters"> Page 2 </a></li>

                         </ul>
                    </li>

               </ul>
          </div>
          <!--/.navbar-collapse -->
     </div>
</nav>