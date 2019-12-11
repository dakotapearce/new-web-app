
// A bit of script to get the updated current day year and month then add to footer

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); 
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

document.getElementById("todaysDate").innerHTML = today

// Current page indicator function 


    //this gets the full url
    var url = document.location.href;
    //this removes the anchor at the end, if there is one
    url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
    //this removes the query after the file name, if there is one
    url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
    //this removes everything before the last slash in the path
    url = url.substring(url.lastIndexOf("/") + 1, url.length);
    //return

    if (url == "index.php" || " ") {
        document.getElementById('homeLink').setAttribute("class", "current")
    }

    if (url == "learn-more.php") {
        document.getElementById('learn-moreLink').setAttribute("class", "current")
        document.getElementById('homeLink').removeAttribute("class")
    }

    if (url == "demo.php") {
        document.getElementById('demoLink').setAttribute("class", "current")
        document.getElementById('homeLink').removeAttribute("class")
    }

    if (url == "contact.php") {
        document.getElementById('contactLink').setAttribute("class", "current")
        document.getElementById('homeLink').removeAttribute("class")
    }



// anime.js javascript changes *****************************************


// Anime function for page title 

anime({
    targets: "div.header-H1",
    translateX: ((window.innerWidth > 0) ? window.innerWidth : screen.width) / 2 - 100,
    duration: 1000,
    easing: 'linear',
    opacity: [0, 1]
})

// Anime function for the banner 

anime({
    targets: '#banner header',
    width: [0, '100%'],
    easing: 'linear',
    duration: 1000,
    opacity: [0, 1]
})

//Anime function for the nav bar 

anime({
    targets: '#nav',
    translateX: [1882, 0],
    width: '100%',
    easing: 'linear',
    duration: 1000,

})

