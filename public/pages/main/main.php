     <h1>Welcome to your very own PHP based MVC Website</h1>

     <p class="col-md-10 col-md-offset-1">Now, lets look at how this bad boy works.  
          </p>
          <p>
               The first thing to understand is that a basic PHP website with mainly static pages is fairly linear in design.
               However, to keep things easy to access and find it is broken up into a lot of pieces, in this case following 
               an MVC (model view controller) pattern.
               For instance, the programmatic flow of this site follows this pattern:
               <br>
               <br>
               .htaccess -> routing pages -> controller -> view -> send the website to the user
               <br>
               <br>
               This is better explained below.
          </p>
          
          <h3> The start: .htaccess </h3>
          <p class="col-md-10 col-md-offset-1">The first place to look is at your .htaccess file.  When anyone tries to access
               a site on an Apache server (this is the A in your WAMP server), the apache server looks for the .htaccess file (should be in your root directory).
               This file tells the server how to access files on your site.  If this isn't setup properly, anyone will be able to 
               access any files on your website, which can be very bad.  For instance, they could get access to passwords or
               your database and just start deleting stuff, etc.   So take a look at the .htaccess file provided, it has inline comments
               that describe most of what is going on.  <br> <br>
               <i>Note, I am not a security expert, so if you have secure info on your site and want it kept safe, you will need to 
                    understand your .htaccess file much more in depth than what I have shown.</i>
          </p>
          
          <p class="col-md-10 col-md-offset-1">  If you read everything carefully, you would have noticed that if you try
               to access any part of the site you get redirected to the index.php file.
               The index.php file is in our private/routes folder, which is used to store routing files (hint hint index.php for this page is a routing file).  
               Routing files tell the system where to go next to load the page.
               In simpler terms, you can think of .htaccess as the bouncer for your website 
               (throwing out people who try to access your website in a bad way) and index.php is your maitre de who then takes 
               you to the files needed to show the web page.  
          </p>
          <p>
               Routing files generally try to figure out which page you are trying to access and then directs you to the appropriate
               controller for that page.  If it can't figure it out, then it should send an error.  
          </p>