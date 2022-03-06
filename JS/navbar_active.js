window.addEventListener("load", function() {
    var path = window.location.pathname;
    var page = path.split("/").pop();

    var navElements = document.getElementsByClassName("nav-item");

    for (let i = 0; i < navElements.length; i++) {
        var aNavElement = navElements[i];
        var activeP = aNavElement.getElementsByTagName("a")[0]
        var active = activeP.getAttribute("href");

        if (active == page) {
            activeP.classList.add("active")
        }
    }
})