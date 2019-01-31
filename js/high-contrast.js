function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function changeContrast() {
    if (contrastEnabled) {

        if ($("#pageStyles").attr("class") == "stylesUslugi") {
            $("#pageStyles").attr("href", "../css/styles.css");
            contrastEnabled = false;
            setCookie("contrastEnabled", "false", 365);
        } else {
            $("#pageStyles").attr("href", "css/styles.css");
            contrastEnabled = false;
            setCookie("contrastEnabled", "false", 365);
        }
    } else {

        if ($("#pageStyles").attr("class") == "stylesUslugi") {
            $("#pageStyles").attr("href", "../css/styles-eyes.css");
            contrastEnabled = true;
            setCookie("contrastEnabled", "true", 365);
        } else {
            $("#pageStyles").attr("href", "css/styles-eyes.css");
            contrastEnabled = true;
            setCookie("contrastEnabled", "true", 365);
        }
    }
}

var contrastEnabled = true;

$(document).ready(function () {
    if (getCookie("contrastEnabled") == "") {
        setCookie("contrastEnabled", "false", 365);
        contrastEnabled = false;
    } else if (getCookie("contrastEnabled") == "false") {
        contrastEnabled = false;
    } else {
        contrastEnabled = true;
    }

    if (contrastEnabled) {

        if ($("#pageStyles").attr("class") == "stylesUslugi") {
            $("#pageStyles").attr("href", "../css/styles-eyes.css");
            contrastEnabled = true;
            setCookie("contrastEnabled", "true", 365);
        } else {
            $("#pageStyles").attr("href", "css/styles-eyes.css");
            contrastEnabled = true;
            setCookie("contrastEnabled", "true", 365);
        }
    } else {

        if ($("#pageStyles").attr("class") == "stylesUslugi") {
            $("#pageStyles").attr("href", "../css/styles.css");
            contrastEnabled = false;
            setCookie("contrastEnabled", "false", 365);
        } else {
            $("#pageStyles").attr("href", "css/styles.css");
            contrastEnabled = false;
            setCookie("contrastEnabled", "false", 365);
        }
    }

});


$("#btnEyes").click(function () {
    changeContrast();
});