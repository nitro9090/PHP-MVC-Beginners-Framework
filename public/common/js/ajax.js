/*This method sets up an ajax object, which opens a connection 
 * to your database and sets up the ajax header for communication.
 * meth is whether the code needs to Get (only pull info from the database)
 * or Post (both push and pull data from the database)
 */

function ajaxObj(meth, url) {
     var x = new XMLHttpRequest();
     x.open(meth, url, true);
     x.setRequestHeader("Content-type", "application/x-www-form-urlencoded", true);
     return x;
}

/* this function determines whether or not the ajax connection was successful
 * (true if properly connected, false if not)
 */
function ajaxReturn(x) {
     // denotes that the data has been received and sent, essentially true if the action is done
     if (x.readyState == 4 && x.status == 200) {
          return true;
     }
}