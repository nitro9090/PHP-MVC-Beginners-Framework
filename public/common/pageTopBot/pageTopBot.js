//facebook button script
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/*var leavingSite = document.getElementsByClassName("leavingSiteCheck");

for (var i = 0; i < leavingSite.length; i++) {
    (function () {
        leavingSite[i].addEventListener("click", function () {
            var leavePage = confirm("You are about to leave BMG for " + leavingSite[i].getAttribute("data-link"));
            if (leavePage == true) {
                window.location.assign(leavingSite[i].getAttribute("data-link"));
            }
        });
    });
}*/