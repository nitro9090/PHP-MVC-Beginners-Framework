<h1>Welcome to your very own PHP based MVC Website</h1>

<div class="row">
     <p class="col-md-10 col-md-offset-1">Now, lets look at how this bad boy works.  
     </p>
</div>
<div class="row">
     <p class="col-md-10 col-md-offset-1">
          The first thing to understand is that a basic PHP website with static pages is fairly linear in design.
          However, to keep things clean and easy to modify it is broken up into a lot of pieces, in this case following 
          an MVC (model view controller) pattern (the net standard or close enough).
          For instance, the programmatic flow of this site follows this pattern:
          <br>
          <br>
          .htaccess -> index.php -> routing -> controller -> view -> send the website to the user
          <br>
          <br>
          This is better explained below.
     </p>
</div>
<div class="row">
     <h3> The start: .htaccess </h3>
</div>
<div class="row">
     <p class="col-md-10 col-md-offset-1">The first place to look is at your .htaccess file.  When anyone tries to access
          a site on an Apache server (this is the A in your WAMP server), the apache server looks for the .htaccess file (should be in your root directory).
          This file tells the server how to access files on your site.  If this isn't setup properly, anyone will be able to 
          access any files on your website, which can be very bad.  For instance, they could get access to passwords or
          your database and just start deleting stuff, etc.   So take a look at the .htaccess file provided, it has inline comments
          that describe most of what is going on.  <br> <br>
          <i>Note, I am not a security expert, so if you have secure info on your site and want it kept safe, you will need to 
               understand your .htaccess file much more in depth than what I have shown.</i>
     </p>
</div>
<div class="row"> 
     <h3> index.php and routing pages </h3>
     <p class="col-md-10 col-md-offset-1">  If you read everything carefully, you would have noticed that if you try
          to access any part of the site you get redirected to the index.php file.
          The index.php file is in our private folder and it is a first round routing file.  
          Routing files tell the system where it should go next and where to get the resources for said page.
          In simpler terms, you can think of .htaccess as a fence around your site (stopping people from people sneaking in the wrong way),
          index.php is the bouncer at your front entrance (he does some basic invitation checking, tells people which door to go through 
          and doing additional blocking when needed) and your routing pages are your site's maitre des, they hold the guest list, take you to your
          seat and send you back to the bouncer, if you are going somewhere you shouldn't.  On a more complex site, the 
          maitre de (aka routing files) will direct the site to multiple areas before getting to the final page.  For instance, if 
          someone needs to authenticated before getting access to somewhere, the routing file may first point to a user controller 
          which has a function for authenticating a user and only if they pass does the web page get loaded.
     </p>
</div>
<div class="row">
     <h3> Controllers </h3>
     <p class="col-md-10 col-md-offset-1">
          The controllers are supposed to do all of the work on your site.  If you need to do a calculation, pull data from 
          your database, post something to a database, etc.  You are going to have the controllers do this.  To keep things 
          organized, you will generally organize controllers by function, for instance, a user controller may have methods for authenticating users, 
          updating user preferences and pulling user information.  A blog controller mayl have methods for posting blogs, editting blogs,
          and deleting blogs.  Note, that the blog controller could call the user controller's pull user information method to 
          add user info to the blog post (like the user's name).
     </p>
</div>

<div class="row">
     <h3> Views </h3>
     <p class="col-md-10 col-md-offset-1">
          
     </p>
</div>